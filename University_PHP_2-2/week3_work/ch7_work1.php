
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--html에서 넘겨받은 값을 저장-->
    <?php
      $id = $_POST["id"];
      $pass = $_POST["pass"];
    ?>
    <ul>
      <!--html에서 넘겨받은 값을 기반으로 출력-->
      <li>아 &nbsp;이 &nbsp;디 : <?=$id?></li>
      <li>비밀번호 : <?=$pass?></li>
    </ul>
  </body>
</html>
