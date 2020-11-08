<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <title></title>
  </head>
  <body>
		<?php
			$table = $_GET["table"];
			if($table == "free")
				$board_title = "자유게시판";
			elseif($table == "notice")
				$board_title = "공지사항";
		?>
		<h1><?= $board_title?></h1>
	</body>
</html>
