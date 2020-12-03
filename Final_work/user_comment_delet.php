<?php
    $num = $_GET['num'];
    
    $con = mysqli_connect('localhost', 'user1', '12345', 'movie');
    $sql1 = 'delete from comment ';
    $sql1 .= "where num='$num'";
    mysqli_query($con, $sql1);
    mysqli_close($con);

    
    echo("
    <script>
      location.href = 'http://localhost/University_PHP/Final_work/member_modify_form.php';
    </script>
  ");
?>
