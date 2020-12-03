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




</head>
<body> 
    <header>
        <?php include "header.php";?>
    </header>

	<section>
        <div id="main_content" style="height: 620px;">
            <div id="movie_title">영화 상세</div>
            
            <?php
                $code = $_GET["code"];
                if (isset($_SESSION["userid"])){
                    $userid = $_SESSION["userid"];
   	                $con = mysqli_connect("localhost", "user1", "12345", "movie");
                    $sql    = "select * from favorite where userid='$userid' and movieId = '$code' ";
                    $result = mysqli_query($con, $sql);
                    $row    = mysqli_fetch_array($result);
                    mysqli_close($con);
                    if(!$row){
                        echo("<a href='favorite_change.php?code=".$code."&value=".'0'."'><div id='favorite' style='color: black;'>★</div></a></form>");
                    }else{
                        echo("<a href='favorite_change.php?code=".$code."&value=".'1'."'><div id='favorite' style='color: yellow;'>★</div></a></form>");
                    }
                }   
                include_once 'ViewAdapter.php'; 
                Viewadater("movie",$code) ; 
            ?>
            <form method="$_POST" action='addComment.php' id="commentInput">
                    <div id="comment_T">Comment</div>
                    <div style="width : 150px; height:20px; float:left;" >코멘트 입력</div>
                    <input type="submit" style="width : 150px; height:20px; float:right;" value="등록하기">
                    <input type="text" name="commentInput" class='commentInput'>
                    <input type="hidden" name="code" value="<?=$code?>">
            </form>
            <?php
                makeView("comment",$code) ; 
            ?>
            

        </div>

	</section> 
          

            
    
</body>
</html>


