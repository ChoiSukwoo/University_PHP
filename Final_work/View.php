<!-- 해당페이지에서는 뷰모양을 제공 인수들을 받아서 뷰에 바인딩시킨후 출력까지 담당 -->

<?php
    function makeView($Viewtype,$object){
        switch($Viewtype){
            case "daily":
                foreach ($object->xpath('//dailyBoxOffice') as $dailyBoxOffice) {
                    $rnum       = $dailyBoxOffice->rnum;
                    $movieNm    = $dailyBoxOffice->movieNm;
                    echo ("<div class='daily'> 이름 : $movieNm      등수 : $rnum</div>");
                }      
            break;
            case "weekly":
                
            break;
            default:
                break;
        }
    }
    
?>
