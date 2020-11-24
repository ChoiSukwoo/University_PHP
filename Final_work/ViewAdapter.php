<!--해당 페이지에서는 뷰타입을 받은후 뷰타입에 맞는 데이트를 api에서 추출해 뷰에게 전달 이후에 뷰에서 출력-->
    
<?php 
    function Viewadater($Viewtype){

        $key = "54ade426ec7e8f22e2a3c7a41c4d2316";
        $curl = curl_init();

        switch($Viewtype){
            case "daily":
                $data = array("key"=>$key,"targetDt"=>date("Ymd")-3);
                $url = "http://www.kobis.or.kr/kobisopenapi/webservice/rest/boxoffice/searchDailyBoxOfficeList.xml";
                $url = sprintf("%s?%s", $url, http_build_query($data));
            break;
            case "weekly":
            
            break;
            default:
            break;
        }

        
    
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        $object = simplexml_load_string($result);
        
         include 'View.php'; 
         makeView("daily",$object) ; 
     };


?>