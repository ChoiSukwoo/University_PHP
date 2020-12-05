<?php
    session_start();
    $userid = $_SESSION["userid"];
    $code = $_GET["code"];
    $value = $_GET["commentInput"];
    $name = $_GET["name"];

    $con = mysqli_connect('localhost', 'user1', '12345', 'movie');
    $sql1 = 'insert into comment(userid,movieId,content,movieName) ';
    $sql1 .= "values('$userid', '$code','$value','$name')";
    mysqli_query($con, $sql1);
    mysqli_close($con);
    echo("
        <script>
            location.href = 'http://localhost/University_PHP/Final_work/movie.php?code=$code';
        </script>
    ");
?>
