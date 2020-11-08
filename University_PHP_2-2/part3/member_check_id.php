<!DOCTYPE html>
<head>
<meta charset="utf-8">
<!--스타일 시트-->
<style>
h3 {   padding-left: 5px;  border-left: solid 5px #edbf07;  }
#close {   margin:20px 0 0 80px;   cursor:pointer;}
</style>
</head>
<body>
<h3>아이디 중복체크</h3>
<p>
<?php
   //GET방식으로 id값을 가져온다
   $id = $_GET["id"];

   //입력된 id값이 비어있다면 존재하지 않는다는 문구를 출력
   if(!$id){ echo("<li>아이디를 입력해 주세요!</li>"); }
   else{
      //mysql 서버에 연결하여  user1 계정의 sample테이블에 접근
      $con = mysqli_connect("localhost", "user1", "12345", "sample");
      // sql 문을 작성한다. 이떄 받아온 id 값을 이용하여 구문을 완성한다.
      $sql = "select * from members where id='$id'";
      //연결된 mysql에 sql문을 실행한다.
      $result = mysqli_query($con, $sql);
      //실행된 sql문에의해 필터링된 레코드의 수를 $num_record변수에 담는다
      $num_record = mysqli_num_rows($result);
      //$num_record 변수의 값이 양수 즉 참이라고 인식될떄 이미 존재하는값이니 중복이라고 표기한다.
      if ($num_record){
         echo "<li>".$id." 아이디는 중복됩니다.</li>";
         echo "<li>다른 아이디를 사용해 주세요!</li>";
      }else{// 양수가아닐시 즉 0일시 해당 아이디는 존재하지않음으로 생성을 허가한다.
         echo "<li>".$id." 아이디는 사용 가능합니다.</li>";
      }
      //mysql연결을 종료한다.
      mysqli_close($con);
   }
?>
</p>
<!--종료이미지를 클릭할시 창을 닫는다-->
<div id="close">
   <img src="./img/close.png" onclick="javascript:self.close()">
</div>
</body>
</html>
