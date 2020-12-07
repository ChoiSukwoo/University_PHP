<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
?>		
        <div id="top">
            <h3>
                <a href="index.php">영화 박스 오피스</a>
            </h3>
            <ul id="top_menu">  
<?php
    if(!$userid) {
?>                
                <li><a href="member_form.php">회원 가입</a> </li>
                <li> | </li>
                <li><a href="login_form.php">로그인</a></li>
<?php
    } else {
                $logged = $username."(".$userid.")님";
?>
                <li><?=$logged?> </li>
                <li> | </li>
                <li><a href="function/logout.php">로그아웃</a> </li>
                <li> | </li>
                <li><a href="member_modify_form.php">정보 수정</a></li>
<?php
    }
?>
            </ul>
        </div>
        <div id="menu_bar">
            <ul>  
                <li><a href="index.php">HOME</a></li>
                <li><a href="movie_list.php?type=daily">일일 박스 오피스</a></li>                                
                <li><a href="movie_list.php?type=weekly">지난주 박스 오피스</a></li>
                <li><a href="movie_list.php?type=allmovie">전체 박스 오피스</a></li>
            </ul>
        </div>



        <div id="main_img_bar" >
            <img src="./img/main_img.png" href="index.php">
        </div>