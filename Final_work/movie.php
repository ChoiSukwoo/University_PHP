<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>

<!-- 랜덤이미지 링크 -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="./css/randomImg.css?1">
<link rel="stylesheet" type="text/css" href="./css/viewstyle.css?3">
<link rel="stylesheet" type="text/css" href="./css/common.css?3">
<link rel="stylesheet" type="text/css" href="./css/main.css?4">

<script>
    function change_favorite(code,value,name){
        location.href = "http://localhost/University_PHP/Final_work/function/favorite_change.php?code="+code+"&value="+value+"&name="+name ;
    }

    function add_comment(code,name){
        comment = document.getElementById("commentInputValue").value
        location.href = "http://localhost/University_PHP/Final_work/function/addComment.php?code="+code+"&value="+comment+"&name="+name ;
    }
</script>


<?php 
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


</head>
<body> 
    <header>
        <?php include "header.php";?>
        
        <?php
            include_once 'mvvm/xmlExtract.php'; 
            $code = $_GET["code"];

            $login = false;
            if (isset($_SESSION["userid"])){
                $userid = $_SESSION["userid"];
   	            $con = mysqli_connect("localhost", "user1", "12345", "movie");
                $sql    = "select * from favorite where userid='$userid' and movieId = '$code' ";
                $sql1 = "select * from comment  where movieId = '$code'";
                $result = mysqli_query($con, $sql);
                $result1 = mysqli_query($con, $sql1);
                $row    = mysqli_fetch_array($result);
                mysqli_close($con);
                $login=true;
            }

            $xmlResult = extract_xml("movie",$code);
            //영화 영문명
            $name = $xmlResult->movieNm;
            //영화 영문명
            $movieNmEn = $xmlResult->movieNmEn;
           //상영시간
            $showTm = $xmlResult->showTm;
            //개봉 시기
            $openDt = $xmlResult->openDt;
            //제작 국가
            $nationNm = $xmlResult->nations->nation->nationNm;

            //관람등급
            $watchGradeNm = $xmlResult->audits->audit->watchGradeNm;

            //장르
            $genre = array();
            foreach($xmlResult->genres->genre as $item){
                array_push($genre ,$item->genreNm);
            };

            //감독명
            $director = array();
            foreach($xmlResult->directors->director as $item){
                array_push($director ,$item->peopleNm);
            };
 
            //배우명
            $actor = array();
            foreach($xmlResult->actors->actor as $item){
                array_push($actor ,$item->peopleNm);
            };

            $company = array();
            foreach($xmlResult->companys->company as $item){
                array_push($company ,$item->companyNm."(".$item->companyPartNm.")");
            };
        ?>



    </header>

	<section>
        <div id="main_content" style="height: 620px;">
            <div id="movie_title">영화 상세</div>

            <!--로그인 중일떄만 즐겨찾기가능-->
            <?php   if($login && !$row){?>
                <div onclick="change_favorite('<?=$code?>',0,'<?=$name?>')" id='favorite' style='color: black;'>★</div></a>
            <?php   }else if( $login ==true && $row) {?>
                <div onclick="change_favorite('<?=$code?>',1,'<?=$name?>')" id='favorite' style='color: yellow;'>★</div></a>
            <?php   }?>

            <div id='movie_img' class='randomImg movielist_img'></div>
            <div id='movie_info'>
                <div class ='movie_title'> <?=$name?> </div>
                <div class ='movie_grade'> <?=$watchGradeNm?> </div>

                <div class ='movie_titleEn'> <?=$movieNmEn?> </div>

                <div class ='movie_item1'>상영시간 : <?=$showTm?> 분</div>
                <div class ='movie_item1'>개봉일 : <?=$openDt?> </div>
                <div class ='movie_item1'>제작국가 : <?=$nationNm?> </div>
                <div class ='movie_item1'>장르 : <?= printArray($genre)?></div>
                <div class ='movie_item1'>감독 : <?= printArray($director)?></div>
                <div class ='movie_item2'>배우 : <?= printArray($actor)?></div>
                <div class ='movie_item2'>협력사 : <?= printArray($company)?>("</div>

            </div>            



            <div id="comment_T">Comment</div>

            <!--로그인 중일떄만 코멘트입력가능-->
            <?php if($login){?>
            <div id="commentInput">
                <div style="width : 150px; height:20px; float:left;" >코멘트 입력</div>
                <input type="button" style="width : 150px; height:20px; float:right;" value="등록하기" onclick="add_comment('<?=$code?>','<?=$name?>')">
                <input type="text" id="commentInputValue" class='commentInput'>
                <input type="hidden" name="code" value="<?=$code?>">
            </div>
            <?php  
                while( $row1 = mysqli_fetch_array($result1) ){
                    $commentid = $row1['UserId'];
                    $content =$row1['content'];
                    $movieId =$row1['movieId'];
                    $num =$row1['num'];
            ?> 
                    <div class='comment'>
                        <div class ='comment_img'></div>
                        <div class ='comment_id'><?=$commentid?></div>
            <?php   if($userid == $commentid){?>    
                        <a href='function/deletComment.php?code=<?=$movieId?>&num=<?=$num?>'><div class=delet_comment>댓글삭제</div></a>
            <?php   }?>
                        <div class ='comment_content'><?=$content?></div>
                    </div>
            <?php }
            } ?>
        </div>

	</section> 
          
    <footer>      
        <?php include 'footer.php';?>
    </footer>
            
    
</body>
</html>


