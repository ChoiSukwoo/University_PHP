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
        <div id="main_content">
            <?php
                include_once 'ViewAdapter.php'; 
                $type = $_GET["type"];
                Viewadater("$type") ; 
            ?>
        </div>
	</section> 
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>
