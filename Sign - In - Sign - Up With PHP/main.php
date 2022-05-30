<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "reglog");
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM login WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location:signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="logout.php" method="post">
        <button type="submit" name="logout">LogOut</button>
    </form>
</body>
</html>