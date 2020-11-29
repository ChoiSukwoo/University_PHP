<!-- 해당페이지에서는 뷰모양을 제공 인수들을 받아서 뷰에 바인딩시킨후 출력까지 담당 -->

<?php
    function makeView($Viewtype,$object){
        switch($Viewtype){
            case "main_daily":
                foreach ($object->xpath('//dailyBoxOffice') as $dailyBoxOffice) {
                    $movieNm    = $dailyBoxOffice->movieNm;
                    $movienew    = $dailyBoxOffice->rankOldAndNew;
                    //랭크 변화율
                    $rnum       = $dailyBoxOffice->rnum;
                    $rankInten    = $dailyBoxOffice->rankInten;
                    
                    //누적관객수 변화율
                    $audiCnt    = $dailyBoxOffice->audiCnt;
                    $audiInten    = $dailyBoxOffice->audiInten;

                    echo (" <div class='main'>
                                <div class='randomImg main_img' ></div>
                                <div class='main_box1'>
                                    <div class='main_title'>$movieNm</div>
                                    <div class='main_rank'>No. $rnum</div>
                    ");

                    if($rankInten =="0" ){
                        echo("<div class='main_rankSame'> - 0</div>");
                    }else if((int)$rankInten > 0 ){
                        echo("<div class='main_rankUp'> ▲ $rankInten</div>");
                    }else if((int)$rankInten < 0 ){
                        echo("<div class='main_rankdown'> ▼ ".($rankInten*-1)."</div>");
                    }

                    if($movienew == "NEW"){
                        echo("<div class='main_new'> $movienew</div>");
                    };
                    
                    echo("
                                    <div class='main_audiCnt'> 당일 관객수 : $audiCnt</div>
                                    <div class='main_audiChange'> ▲ $audiInten</div>
                                </div>
                            </div>
                    ");
                }      
            break;
            case "main_weekly":
                foreach ($object->xpath('//weeklyBoxOffice') as $weeklyBoxOffice) {
                    $movieNm    = $weeklyBoxOffice->movieNm;
                    $movienew    = $weeklyBoxOffice->rankOldAndNew;
                    //랭크 변화율
                    $rnum       = $weeklyBoxOffice->rnum;
                    $rankInten    = $weeklyBoxOffice->rankInten;
                    
                    //누적관객수 변화율
                    $audiAcc    = $weeklyBoxOffice->audiAcc;
                    $audiInten    = $weeklyBoxOffice->audiInten;

                    echo (" <div class='main'>
                                <div class='randomImg main_img' ></div>
                                <div class='main_box1'>
                                    <div class='main_title'>$movieNm</div>
                                    <div class='main_rank'>No. $rnum</div>
                    ");

                    if($rankInten =="0" ){
                        echo("<div class='main_rankSame'> - 0</div>");
                    }else if((int)$rankInten > 0 ){
                        echo("<div class='main_rankUp'> ▲ $rankInten</div>");
                    }else if((int)$rankInten < 0 ){
                        echo("<div class='main_rankdown'> ▼ ".($rankInten*-1)."</div>");
                    }

                    if($movienew == "NEW"){
                        echo("<div class='main_new'> $movienew</div>");
                    };
                    
                    echo("
                                    <div class='main_audiCnt'> 누적 관객수 : $audiAcc</div>
                                </div>
                            </div>
                    ");
                }
            break;
            case "daily":

                foreach ($object->xpath('//dailyBoxOffice') as $weeklyBoxOffice) {
                    $movieNm    = $weeklyBoxOffice->movieNm;
                    $movienew    = $weeklyBoxOffice->rankOldAndNew;
                    //랭크 변화율
                    $rnum       = $weeklyBoxOffice->rnum;
                    $rankInten    = $weeklyBoxOffice->rankInten;
                    
                    //누적관객수 변화율
                    $audiAcc    = $weeklyBoxOffice->audiAcc;
                    $audiInten    = $weeklyBoxOffice->audiInten;
                    $audiCnt    = $weeklyBoxOffice->audiCnt;

                    //개봉일
                    $openDt    = $weeklyBoxOffice->openDt;

                    //상영횟수
                    $showCnt    = $weeklyBoxOffice->showCnt;


                    echo (" <div class='movielist'>
                                <div class='movielist_title'>$movieNm</div>
                                <div class='randomImg movielist_img' ></div>
                                <div class='movielist_rank'>No. $rnum</div>
                    ");
                    if($rankInten =="0" ){
                        echo("<div class='main_rankSame'> - 0</div>");
                    }else if((int)$rankInten > 0 ){
                        echo("<div class='main_rankUp'> ▲ $rankInten</div>");
                    }else if((int)$rankInten < 0 ){
                        echo("<div class='main_rankdown'> ▼ ".($rankInten*-1)."</div>");
                    }
                    if($movienew == "NEW"){
                        echo("<div class='main_new'> $movienew</div>");
                    };
                    
                    echo("    
                                    <div class='movielist_audiCnt'> 영화 개봉일: $openDt</div>
                                    <div class='movielist_audiCnt'> 누적 관객수: $audiAcc</div>
                                    <div class='movielist_audiCnt'> 당일 관객수: $audiCnt</div>
                                    <div class='movielist_audiChange'> ▲ $audiInten</div>
                                    <div class='movielist_audiCnt'> 오늘의 상영횟수: $showCnt</div>

                            </div>
                    ");
                }
            break;

            case "weekly":

                foreach ($object->xpath('//weeklyBoxOffice') as $weeklyBoxOffice) {
                    $movieNm    = $weeklyBoxOffice->movieNm;
                    $movienew    = $weeklyBoxOffice->rankOldAndNew;
                    //랭크 변화율
                    $rnum       = $weeklyBoxOffice->rnum;
                    $rankInten    = $weeklyBoxOffice->rankInten;
                    
                    //누적관객수 변화율
                    $audiAcc    = $weeklyBoxOffice->audiAcc;
                    $audiInten    = $weeklyBoxOffice->audiInten;
                    $audiCnt    = $weeklyBoxOffice->audiCnt;

                    //개봉일
                    $openDt    = $weeklyBoxOffice->openDt;

                    //상영횟수
                    $showCnt    = $weeklyBoxOffice->showCnt;


                    echo (" <div class='movielist'>
                                <div class='movielist_title'>$movieNm</div>
                                <div class='randomImg movielist_img' ></div>
                                <div class='movielist_rank'>No. $rnum</div>
                    ");
                    if($rankInten =="0" ){
                        echo("<div class='main_rankSame'> - 0</div>");
                    }else if((int)$rankInten > 0 ){
                        echo("<div class='main_rankUp'> ▲ $rankInten</div>");
                    }else if((int)$rankInten < 0 ){
                        echo("<div class='main_rankdown'> ▼ ".($rankInten*-1)."</div>");
                    }
                    if($movienew == "NEW"){
                        echo("<div class='main_new'> $movienew</div>");
                    };
                    
                    echo("    
                                    <div class='movielist_audiCnt'> 영화 개봉일: $openDt</div>
                                    <div class='movielist_audiCnt'> 누적 관객수: $audiAcc</div>
                                    <div class='movielist_audiCnt'> 지난주 관객수: $audiCnt</div>
                                    <div class='movielist_audiChange'> ▲ $audiInten</div>
                                    <div class='movielist_audiCnt'> 오늘의 상영횟수: $showCnt</div>

                            </div>
                    ");
                }
            break;
            default:
                break;
        }
    }
    
?>



