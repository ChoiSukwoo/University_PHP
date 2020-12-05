<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>
<link rel="stylesheet" type="text/css" href="./css/common.css?3">
<link rel="stylesheet" type="text/css" href="./css/member.css?6">
<link rel="stylesheet" type="text/css" href="./css/viewstyle.css?6">
<link rel="stylesheet" type="text/css" href="./css/randomImg.css?1">

<script>

</script>

<script>
   function user_comment_pagechange() {
		comment = document.getElementById("comment_page").value
		favorite = document.getElementById("favorite_page_h").value
        location.href="member_modify_form.php?"+"&commentPage="+comment+"&favoritePage="+favorite
	}
	function user_favorite_pagechange() {
		comment = document.getElementById("comment_page_h").value
		favorite = document.getElementById("favorite_page").value
        location.href="member_modify_form.php?"+"&commentPage="+comment+"&favoritePage="+favorite
    }
</script>


<script type="text/javascript" src="./js/member_modify.js?1"></script>
</head>
<body> 
	<header>
    	<?php include "header.php";?>
    </header>
<?php    

	if(isset($_GET['commentPage'])){$commentPage= $_GET['commentPage'];}else{$commentPage=1;};
	if(isset($_GET['favoritePage'])){$favoritePage= $_GET['favoritePage'];}else{$favoritePage=1;};

   	$con = mysqli_connect("localhost", "user1", "12345", "movie");
    $sql    = "select * from user where userid='$userid'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	$pass = $row['Password'];
	$name = $row['NickName'];
	mysqli_close($con);
?>
	<section>

		<div id="main_content" >
		<div style="width: 600px; float:left;">
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
				userComment_view($userid,$commentPage); 
			?>
		</div>
		</div>

		<div id="user_favorite">
			<div type=text id=user_favorite_title> 즐겨찾기 목록 </div>
			<?php
			    include_once 'View.php'; 
				userfavorite_view($userid,$favoritePage); 
			?>
		</div>

		</div> <!-- main_content -->

	</section> 
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>

