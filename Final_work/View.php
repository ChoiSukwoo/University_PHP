<!-- 해당페이지에서는 뷰모양을 제공 인수들을 받아서 뷰에 바인딩시킨후 출력까지 담당 -->
<script>
    function movie_page(code) {location.href="movie.php?code="+code ; }
</script>

<?php
    function makeView($Viewtype,$object,$value=""){
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

                    $movieCd = $dailyBoxOffice->movieCd;

                    echo (" <div class='main'   onClick='movie_page($movieCd)'>
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

                    $movieCd = $weeklyBoxOffice->movieCd;


                    echo (" <div class='main'  onClick='movie_page($movieCd)'>
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

                    $movieCd = $weeklyBoxOffice->movieCd;


                    echo (" <div class='movielist' onClick='movie_page($movieCd)'>
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

                    $movieCd = $weeklyBoxOffice->movieCd;


                    echo (" <div class='movielist' onClick='movie_page($movieCd)'>
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

            case "movie" : 
                $movieNm = $object->movieInfo->movieNm;
                
                $movieNmEn = $object->movieInfo->movieNmEn;
                //상영시간
                $showTm = $object->movieInfo->showTm;
                //개봉 시기
                $openDt = $object->movieInfo->openDt;
                //제작 국가
                $nationNm = $object->movieInfo->nations->nation->nationNm;

                //관람등급
                $watchGradeNm = $object->movieInfo->audits->audit->watchGradeNm;

                //장르
                $genre = array();
                foreach($object->movieInfo->genres->genre as $item){
                    array_push($genre ,$item->genreNm);
                };

                //감독명
                $director = array();
                foreach($object->movieInfo->directors->director as $item){
                    array_push($director ,$item->peopleNm);
                };
                
                //배우명
                $actor = array();
                foreach($object->movieInfo->actors->actor as $item){
                    array_push($actor ,$item->peopleNm);
                };

                $company = array();
                foreach($object->movieInfo->companys->company as $item){
                    array_push($company ,$item->companyNm."(".$item->companyPartNm.")");
                };

                echo("
                    <div id='movie_img' class='randomImg movielist_img'></div>
                    <div id='movie_info'>
                        <div class ='movie_title'> $movieNm </div>
                        <div class ='movie_grade'> $watchGradeNm </div>

                        <div class ='movie_titleEn'> $movieNmEn </div>

                        <div class ='movie_item1'>상영시간 : $showTm 분</div>
                        <div class ='movie_item1'>개봉일 : $openDt </div>
                        <div class ='movie_item1'>제작국가 : $nationNm </div>
                        <div class ='movie_item1'>장르 : ");printArray($genre);echo("</div>
                        <div class ='movie_item1'>감독 : ");printArray($director);echo("</div>
                        <div class ='movie_item2'>배우 : ");printArray($actor);echo("</div>
                        <div class ='movie_item2'>협력사 : ");printArray($company);echo("</div>

                    </div>
                ");
            break;

            
            case "comment":
                $con = mysqli_connect('localhost', 'user1', '12345', 'movie');
                $sql1 = "select * from comment  where movieId = '$object'";
                $result = mysqli_query($con, $sql1);

                while( $row = mysqli_fetch_array($result) )
                {
                    $loginid = $_SESSION["userid"];
                    $userid = $row['UserId'];
                    $content =$row['content'];
                    $movieId =$row['movieId'];
                    $num =$row['num'];
                    echo("
                        <div class='comment'>
                            <div class ='comment_img'></div>
                            <div class ='comment_id'>$userid</div>
                    ");
                    if($userid == $loginid){
                    echo("  
                            <a href='comment_delet.php?code=".$movieId."&num=".$num."'><div class=delet_comment>댓글삭제</div></a>
                        ");
                    }
                    echo("
                            <div class ='comment_content'>$content</div>
                        </div>
                    ");
                }
                echo("<footer> ");      
                    include 'footer.php';
                echo("</footer>");
            break;
            case "userComment":
                $con = mysqli_connect('localhost', 'user1', '12345', 'movie');
                $sql1 = "select * from comment  where UserId = '$object'";
                $result = mysqli_query($con, $sql1);
                while( $row = mysqli_fetch_array($result) )
                {
                    $userid = $row['UserId'];
                    $content =$row['content'];
                    $movieId =$row['movieId'];
                    $num =$row['num'];

                    echo("
                    <div class='comment'>
                        <div class ='comment_img randomImg main_img'></div>
                        <div class ='user_comment_id'>$movieId</div>
                        <a href='user_comment_delet.php?code=".$movieId."&num=".$num."'><div class=delet_comment>댓글삭제</div></a>
                        <div class ='comment_content'>$content</div>
                    </div>
                ");

                }
            
            break;

            default:
                break;
        }
    }

    function printArray($array){
        for($i=0; $i<count($array);$i++){
            if($i!= count($array)-1){
                echo("$array[$i] , ");
            }else{
                echo("$array[$i] ");
            }
        }
    }
    
?>



