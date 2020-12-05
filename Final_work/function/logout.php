<?php
  session_start();
  unset($_SESSION["userid"]);
  unset($_SESSION["username"]);
  
  echo("
       <script>
          location.href = 'http://localhost/University_PHP/Final_work/index.php';
         </script>
       ");
?>
