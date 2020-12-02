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
<link rel="stylesheet" type="text/css" href="./css/main.css?2">




</head>
<body> 
    <header>
        <?php include "header.php";?>
        <?php include "./js/movie.php";?>
    </header>


    <?php
        $code = $_GET["code"];

   	    $con = mysqli_connect("localhost", "user1", "12345", "movie");
        $sql    = "select * from favorite where userid='$userid' and movieId = '$code' ";
        $result = mysqli_query($con, $sql);
        $row    = mysqli_fetch_array($result);
        mysqli_close($con);
    ?>


	<section>
        <div id="main_content" style="height: 620px;">
            <div id="movie_title">영화 상세</div>

            <?php
                if(!$row){
                    
                    echo("
                    <a href='#'><div id ='favorite' onclick='addFavorite()' value='0' style='color: black;'>★</div></a>");
                }else{
                    echo("<a href='#'><div id ='favorite' onclick='deleteFavorite()' value='1' style='color: yellow;'>★</div></a>");
                }
            ?>
            <?php
                include_once 'ViewAdapter.php'; 
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


<?php
echo("    
    <script>
    function addFavorite(  ){
");
            $code = $_GET["code"];
            $userid = $_SESSION["userid"];
            $con = mysqli_connect('localhost', 'user1', '12345', 'movie');
            $sql1 = 'insert into favorite(userid, movieId) ';
            $sql1 .= "values('$userid', '$code')'";
            mysqli_query($con, $sql1);
            mysqli_close($con);
echo("
            document.getElementById('favorite').style.color = 'yellow'
    }
");
echo("    
    function deleteFavorite(  ){
");
                $code = $_GET["code"];
                $userid = $_SESSION["userid"];
                $con = mysqli_connect('localhost', 'user1', '12345', 'movie');
                $sql1 = 'insert into favorite(userid, movieId) ';
                $sql1 .= "values('$userid', '$code')'";
                mysqli_query($con, $sql1);
                mysqli_close($con);
echo("
            document.getElementById('favorite').style.color = 'Black'
    }
");
echo("    
    </script>
");

?>
