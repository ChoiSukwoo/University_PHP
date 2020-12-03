<!--해당 페이지에서는 뷰타입을 받은후 뷰타입에 맞는 데이트를 api에서 추출해 뷰에게 전달 이후에 뷰에서 출력-->
    
<?php 
    function Viewadater($Viewtype,$OriCode=""){

        $key = "54ade426ec7e8f22e2a3c7a41c4d2316";
        $curl = curl_init();

        switch($Viewtype){
            case "main_daily":
                $data = array("key"=>$key,"targetDt"=>date("Ymd")-1,"itemPerPage"=>"5");
                $url = "http://www.kobis.or.kr/kobisopenapi/webservice/rest/boxoffice/searchDailyBoxOfficeList.xml";
                $url = sprintf("%s?%s", $url, http_build_query($data));
                setView($Viewtype,$curl,$url);
            break;
            case "main_weekly":
                $data = array("key"=>$key,"targetDt"=>date("Ymd")-7,"itemPerPage"=>"5","weekGb"=>0);
                $url = "http://www.kobis.or.kr/kobisopenapi/webservice/rest/boxoffice/searchWeeklyBoxOfficeList.xml";
                $url = sprintf("%s?%s", $url, http_build_query($data));
                setView($Viewtype,$curl,$url);
            break;
            case "daily":
                $data = array("key"=>$key,"targetDt"=>date("Ymd")-1);
                $url = "http://www.kobis.or.kr/kobisopenapi/webservice/rest/boxoffice/searchDailyBoxOfficeList.xml";
                $url = sprintf("%s?%s", $url, http_build_query($data));
                setView($Viewtype,$curl,$url);
            break;
            case "weekly":
                $data = array("key"=>$key,"targetDt"=>date("Ymd")-7,"weekGb"=>0);
                $url = "http://www.kobis.or.kr/kobisopenapi/webservice/rest/boxoffice/searchWeeklyBoxOfficeList.xml";
                $url = sprintf("%s?%s", $url, http_build_query($data));
                setView($Viewtype,$curl,$url);
            break;

            case "movie":
                $data = array("key"=>$key,"movieCd"=> $OriCode);
                $url = "http://www.kobis.or.kr/kobisopenapi/webservice/rest/movie/searchMovieInfo.xml";
                $url = sprintf("%s?%s", $url, http_build_query($data));
                setView($Viewtype,$curl,$url);
            break;


            default:
            break;
        }
     };

     function setView($Viewtype,$curl,$url)
     {
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        $object = simplexml_load_string($result);
        include_once 'View.php'; 
        makeView($Viewtype,$object) ; 
     }

?>