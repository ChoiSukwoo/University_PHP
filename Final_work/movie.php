<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>

<!-- 랜덤이미지 링크 -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="./css/randomImg.css?1">
<link rel="stylesheet" type="text/css" href="./css/viewstyle.css?1">
<link rel="stylesheet" type="text/css" href="./css/common.css?1">
<link rel="stylesheet" type="text/css" href="./css/main.css?1">


</head>
<body> 
	<header>
    	<?php include "header.php";?>
    </header>
	<section>
        <div id="main_content" style="height: 620px;">
            <?php
                include_once 'ViewAdapter.php'; 
                $code = $_GET["code"];
                Viewadater("movie",$code) ; 
            ?>
            <div id="commentInput">
                <div id="comment_T">Comment</div>
                <div style="width : 150px; height:20px; float:left;" >코멘트 입력</div>
                <button style="width : 150px; height:20px; float:right;" >등록하기</button>
                <input type="text" class='commentInput'>
        
            </div>
        </div>

	</section> 
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>
