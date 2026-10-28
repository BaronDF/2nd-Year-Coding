<?php 
include "db.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from users where email = '$email'";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows>0){
        $row = mysqli_fetch_assoc($result);
        if ($row['password'] == $password){
            $_SESSION['user_id'] =
            $row ['id'];
            $_SESSION['role'] = 
            $row ['role']; 
            if ($row ['role'] == "admin"){
                header("admin/dashboard.php");
            }else {
                header ("Location: dashboard.php");
            }
    }else {
        header ("Location: login.php");

    }
    }else {
        echo "Error! : {$result->error}";
    }
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
    <form action="login.php" method= "post">
        <input type="email" name="email" placeholder = "Enter your email"><br>
        <input type="password" name="password" placeholder = "Enter a password"><br>
        <button type = "submit">Sign In</button>
    </form>
</body>
</html>