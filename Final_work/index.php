<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>
<!-- 랜덤이미지 링크 -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="./css/randomImg.css?">
<link rel="stylesheet" type="text/css" href="./css/viewstyle.css?">
<link rel="stylesheet" type="text/css" href="./css/common.css?">
<link rel="stylesheet" type="text/css" href="./css/main.css?">


<?php   
        include_once 'mvvm/xmlExtract.php'; 
        include_once 'mvvm/viewAdapter.php'; 
        $main_daily=extract_xml('main_daily') ;
        $main_weekly=extract_xml('main_weekly') ;
?> 

</head>
<body> 
	<header>
    	<?php include "header.php";?>
    </header>
	<section>
	<div id="main_content">
        <div class="latest">
            <h4>일일 박스오피스</h4>
            <?php main_daily_adapter($main_daily)?>
        </div>
        <div class="latest">
            <h4>지난주 박스오피스</h4>
            <?php main_weekly_adapter($main_weekly)?>
        </div>

    </div>
    </section> 
    <footer>
        <?php include "footer.php";?>
    </footer>
</body>
</html>
