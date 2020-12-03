<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>
<link rel="stylesheet" type="text/css" href="./css/common.css?3">
<link rel="stylesheet" type="text/css" href="./css/member.css?6">
<link rel="stylesheet" type="text/css" href="./css/viewstyle.css?1">
<link rel="stylesheet" type="text/css" href="./css/randomImg.css?1">

<script type="text/javascript" src="./js/member_modify.js?1"></script>
</head>
<body> 
	<header>
    	<?php include "header.php";?>
    </header>
<?php    
   	$con = mysqli_connect("localhost", "user1", "12345", "movie");
    $sql    = "select * from user where userid='$userid'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	$pass = $row['Password'];
	$name = $row['NickName'];
    mysqli_close($con);
?>
	<section>

		<div id="main_content" style="height: 600px;">
		
		<div id="join_box">
          	<form  name="member_form" method="post" action="member_modify.php?id=<?=$userid?>">
			    <h2>회원 정보수정</h2>
    		    	<div class="form id">
				        <div class="col1">아이디</div>
				        <div class="col2">
							<?=$userid?>
				        </div>                 
			       	</div>
			       	<div class="clear"></div>

			       	<div class="form">
				        <div class="col1">비밀번호</div>
				        <div class="col2">
							<input type="password" name="pass" value="<?=$pass?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">비밀번호 확인</div>
				        <div class="col2">
							<input type="password" name="pass_confirm" value="<?=$pass?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">이름</div>
				        <div class="col2">
							<input type="text" name="name" value="<?=$name?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="bottom_line"> </div>
			       	<div class="buttons">
					    <a href="#"><img style="cursor:pointer" src="./img/button_save.gif" onclick="check_input()"></a>&nbsp;
                  		<img id="reset_button" style="cursor:pointer" src="./img/button_reset.gif" onclick="reset_form()">
	           		</div>
           	</form>
		</div> <!-- join_box -->
		<div id="user_comment">
			<div type=text id=user_comment_title> 내가 작성한 댓글 </div>
			<?php
			    include_once 'View.php'; 
				makeView("userComment",$userid); 
			?>
		</div>
		<div id="user_favorite">
			a
		</div>
		
		<footer>
    	<?php include "footer.php";?>
    	</footer>

		</div> <!-- main_content -->
	</section> 

</body>
</html>

