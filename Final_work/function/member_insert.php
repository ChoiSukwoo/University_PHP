<?php
    //$_POST 형식으로 id pass name email1 email2 값을 받아온다.
    $id   = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];

    //mysql 서버에 연결하여  user1 계정의 sample테이블에 접근
    $con = mysqli_connect("localhost", "user1", "12345", "movie");

  // sql 문을 작성한다.
	$sql = "insert into user(UserId, Password	, NickName) ";
	$sql .= "values('$id', '$pass', '$name')";

  //연결된 mysql에 sql문을 실행한다.
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
  //mysql연결을 종료한다.
  mysqli_close($con);

  //php 문안에서 스크립트를 실행하기위해 문자열로만들어 해석하게 한다.
  //echo "" 없이 스크립트문을실행 시키려하면 해석하지못한다.
    echo "
	      <script>
	          location.href = 'http://localhost/University_PHP/Final_work/index.php';
	      </script>
	  "
?>
