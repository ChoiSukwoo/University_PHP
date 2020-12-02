<?php
    $id = $_GET["id"];

    $pass = $_POST["pass"];
    $name = $_POST["name"];

          
    $con = mysqli_connect("localhost", "user1", "12345", "movie");
    $sql = "update user set Password='$pass', NickName='$name'";
    $sql .= " where UserId='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'index.php';
	      </script>
	  ";
?>

   
