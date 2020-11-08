<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <title></title>
  </head>
  <body>
    <!--html에서 넘겨받은 gender 과 email_ok의 값을 저장-->
    <?php
      $gender = $_POST["gender"];
	    $email_ok = $_POST["email_ok"];
	    if ($email_ok == "예")
        $email = "수신";
	    else
		    $email = "비수신";
    ?>
	  <ul>
      <li>성별 : <?= $gender?></li>
		  <li>이메일 : <?= $email?></li>
	  </ul>
  </body>
</html>
