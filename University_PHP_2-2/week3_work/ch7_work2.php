<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <title></title>
  </head>
  <body>
    <ul>
		  <li>나의 취미 :
        <!--html에서 넘겨받은 hobby의 수만큼 반복하며 hobby 출력-->
			  <?php
				  $num = count($_POST["hobby"]);
				  for ($i=0; $i<$num; $i++) {
				    echo $_POST["hobby"][$i];
            if($i != $num - 1){echo ", ";}
				  }
			  ?>
		  </li>
	  </ul>
  </body>
</html>
