<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>

    <!--넘겨줄 값을 선언-->
    <?php
      $table1 = "free";
      $table2 = "notice";
      ?>
      
    <a href="ch7_work5_2.php?table=<?=$table1?>"> 자유게시판</a><br>
    <a href="ch7_work5_2.php?table=<?=$table2?>"> 공지사항</a><br>
  </body>
</html>
