<?php
    session_start();
    $userid = $_SESSION["userid"];
    $code = $_GET["code"];
    $value = $_GET["commentInput"];

    $con = mysqli_connect('localhost', 'user1', '12345', 'movie');
    $sql1 = 'insert into comment(userid,movieId,content) ';
    $sql1 .= "values('$userid', '$code','$value')";
    mysqli_query($con, $sql1);
    mysqli_close($con);
    echo("
        <script>
            location.href = 'http://localhost/University_PHP/Final_work/movie.php?code=$code';
        </script>
    ");
?>
