<!-- 해당페이지에서는 뷰모양을 제공 인수들을 받아서 뷰에 바인딩시킨후 출력까지 담당 -->
<script>
    function movie_page(code) {location.href="movie.php?code="+code ; }
</script>

<!--main_daily_adapter-->
<?php
    function main_daily_adapter($object){
        foreach ($object as $dailyBoxOffice) {
            //영화제목
            $movieNm    = $dailyBoxOffice->movieNm;
            //신규여뷰
            $movienew    = $dailyBoxOffice->rankOldAndNew;
            //랭크 변화율
            $rnum       = $dailyBoxOffice->rnum;
            $rankInten    = $dailyBoxOffice->rankInten;
            //누적관객수 변화율
            $audiCnt    = $dailyBoxOffice->audiCnt;
            $audiInten    = $dailyBoxOffice->audiInten;
            //영화 고유 코드
            $movieCd = $dailyBoxOffice->movieCd;
?>
            <!--실제 뷰 생성-->
            <div class='main'   onClick='movie_page(<?=$movieCd?>)' >
                <div class='randomImg main_img' ></div>
                <div class='main_box1'>
                    <div class='main_title'><?=$movieNm?></div>
                    <div class='main_rank'>No. <?=$rnum?></div>
                    <?php if((int)$rankInten == 0){?> <div class='main_rankSame'> - 0</div> <?php }?>
                    <?php if((int)$rankInten > 0 ){?> <div class='main_rankUp'> ▲ <?=$rankInten?></div> <?php }?>
                    <?php if((int)$rankInten < 0 ){?> <div class='main_rankDown'> ▼ <?=$rankInten*-1?> </div> <?php }?>
                    <?php if($movienew == "NEW" ){ ?> <div class='main_new'> <?=$movienew?> </div> <?php }?>
                    <div class='main_audiCnt'> 당일 관객수 : <?=$audiCnt?></div>
                    <div class='main_audiChange'> ▲ <?=$audiInten?></div>
                </div>
            </div>
<?php
        }      
    }
?>

<!--main_weekly_view-->
<?php
    function main_weekly_adapter($object){
        foreach ($object as $weeklyBoxOffice) {
            //영화제목
            $movieNm    = $weeklyBoxOffice->movieNm;
            //신규여뷰
            $movienew    = $weeklyBoxOffice->rankOldAndNew;
            //랭크 변화율
            $rnum       = $weeklyBoxOffice->rnum;
            $rankInten    = $weeklyBoxOffice->rankInten;
            //누적관객수 변화율
            $audiAcc    = $weeklyBoxOffice->audiAcc;
            //영화 고유 코드
            $movieCd = $weeklyBoxOffice->movieCd;
?>
            <!--실제 뷰 생성-->
            <div class='main'  onClick='movie_page(<?=$movieCd?>)'>
                <div class='randomImg main_img' ></div>
                <div class='main_box1'>
                    <div class='main_title'><?=$movieNm?></div>
                    <div class='main_rank'>No. <?=$rnum?></div>
                    <?php if((int)$rankInten == 0){?> <div class='main_rankSame'> - 0</div> <?php }?>
                    <?php if((int)$rankInten > 0 ){?> <div class='main_rankUp'> ▲ <?=$rankInten?></div> <?php }?>
                    <?php if((int)$rankInten < 0 ){?> <div class='main_rankDown'> ▼ <?=$rankInten*-1?> </div> <?php }?>
                    <?php if($movienew == "NEW" ){ ?> <div class='main_new'> <?=$movienew?> </div> <?php }?>
                    <div class='main_audiCnt'> 누적 관객수 : <?=$audiAcc?></div>
                </div>
            </div>
<?php
        }    
    }
?>



<?php
    function movie_list_adapter($type,$object){
        switch ($type){
            case "daily":

                foreach ($object as $weeklyBoxOffice) {
                    //영화 제목
                    $movieNm    = $weeklyBoxOffice->movieNm;
                    //신규진입여부
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
                    //영화 고유 코드
                    $movieCd = $weeklyBoxOffice->movieCd;
?>
                    <div class='movielist' onClick='movie_page(<?=$movieCd?>)'>
                        <div class='movielist_title'><?=$movieNm?></div>
                        <div class='randomImg movielist_img' ></div>
                        <div class='movielist_rank'>No. <?=$rnum?></div>
                        <?php if((int)$rankInten == 0){?> <div class='main_rankSame'> - 0</div> <?php }?>
                        <?php if((int)$rankInten > 0 ){?> <div class='main_rankUp'> ▲ <?=$rankInten?></div> <?php }?>
                        <?php if((int)$rankInten < 0 ){?> <div class='main_rankDown'> ▼ <?=$rankInten*-1?> </div> <?php }?>
                        <?php if($movienew == "NEW" ){ ?> <div class='main_new'> <?=$movienew?> </div> <?php }?>
                        <div class='movielist_audiCnt1'> 영화 개봉일: <?=$openDt?></div>
                        <div class='movielist_audiCnt'> 누적 관객수: <?=$audiAcc?></div>
                        <div class='movielist_audiCnt'> 당일 관객수: <?=$audiCnt?></div>
                        <div class='movielist_audiChange'> ▲ <?=$audiInten?></div>
                        <div class='movielist_audiCnt'> 오늘의 상영횟수: <?=$showCnt?></div>
                    </div>
<?php
                }
            break;
            case "weekly":
                foreach ($object as $weeklyBoxOffice) {
                //영화 제목
                $movieNm    = $weeklyBoxOffice->movieNm;
                //신규진입여부
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
                //영화 고유 코드
                $movieCd = $weeklyBoxOffice->movieCd;
?>
                <div class='movielist' onClick='movie_page(<?=$movieCd?>)'>
                    <div class='movielist_title'><?=$movieNm?></div>
                    <div class='randomImg movielist_img' ></div>
                    <div class='movielist_rank'>No. <?=$rnum?></div>
                    <?php if((int)$rankInten == 0){?> <div class='main_rankSame'> - 0</div> <?php }?>
                    <?php if((int)$rankInten > 0 ){?> <div class='main_rankUp'> ▲ <?=$rankInten?></div> <?php }?>
                    <?php if((int)$rankInten < 0 ){?> <div class='main_rankDown'> ▼ <?=$rankInten*-1?> </div> <?php }?>
                    <?php if($movienew == "NEW" ){ ?> <div class='main_new'> <?=$movienew?> </div> <?php }?>
                    <div class='movielist_audiCnt'> 영화 개봉일: <?=$openDt?></div>
                    <div class='movielist_audiCnt'> 누적 관객수: <?=$audiAcc?></div>
                    <div class='movielist_audiCnt'> 지난주 관객수: <?=$audiCnt?></div>
                    <div class='movielist_audiChange'> ▲ <?=$audiInten?></div>
                    <div class='movielist_audiCnt'> 오늘의 상영횟수: <?=$showCnt?></div>
                </div>
<?php
                }
            break;
            case "allmovie":
                foreach ($object->xpath('//movie') as $movieList) {
                //영화 제목
                $movieNm    = $movieList->movieNm;
                //영화 제목(영문)
                $movieNmEn    = $movieList->movieNmEn;
                //장르
                $genreAlt    = $movieList->genreAlt;
                //제조국
                $repNationNm    = $movieList->repNationNm;
                //개봉일
                $openDt    = $movieList->openDt;
                $movieCd = $movieList->movieCd;
?>
                <div class='movielist' onClick='movie_page(<?=$movieCd?>)'>
                    <div class='randomImg movielist_img' ></div>
                    <div class='movielist_audiCnt1'> <?=$movieNm?></div>
                    <div class='movielist_audiCnt' style='color:gray'> <?=$movieNmEn?></div>
                    <div class='movielist_audiCnt'> 영화 개봉일: <?=$openDt?></div>
                    <div class='movielist_audiCnt'> 장르 : <?=$genreAlt?></div>
                    <div class='movielist_audiCnt'> 제조국: <?=$repNationNm?></div>
                </div>
<?php
                }
            break;
        }
    }



    
?>
