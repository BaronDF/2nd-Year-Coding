<?php 
session_start();
if (isset ($_SESSION['user_id'])){
    if($_SESSION['role'] == "admin"){
        echo "Your are admin";
    }else {
        header("Location: ../dashboard.php");
    }
}else {
    header("Location: ../login.php")
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8";>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel ="stylesheet" type = "text/css" href="style.css">
</head>
<body>
    <a href = "../logout.php>">Log Out </a>
</body>
</html>