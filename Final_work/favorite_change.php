<?php
    session_start();
    $userid = $_SESSION["userid"];
    $value = $_GET['value'];
    $code = $_GET['code'];
    if($value == 0){
        $con = mysqli_connect('localhost', 'user1', '12345', 'movie');
        $sql1 = 'insert into favorite(userid, movieId) ';
        $sql1 .= "values('$userid', '$code')";
        mysqli_query($con, $sql1);
        mysqli_close($con);
    }else{
        $con = mysqli_connect('localhost', 'user1', '12345', 'movie');
        $sql1 = 'delete from favorite ';
        $sql1 .= "where UserId='$userid'and movieId='$code'";
        mysqli_query($con, $sql1);
        mysqli_close($con);
    }
    
    echo("
    <script>
      location.href = 'http://localhost/University_PHP/Final_work/movie.php?code=$code';
    </script>
  ");
?>
