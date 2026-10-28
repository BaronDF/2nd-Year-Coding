<?php
include "db.php";
if ($_SERVER['REQUEST_METHOD'] == "POST"){


    $name =$_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "insert into users (name,email,password,role) values('$name','$email','$password','$role')";
    $result = mysqli_query($conn,$sql);
    if(!$result) {
        echo "Error! : {$result->error}";
    }else {
        echo "You've registered successfully!!!";
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
    <form action="register.php" method= "post">
        <input type="text" name="name" placeholder = "Enter a username"> <br>
        <input type="email" name="email" placeholder = "Enter your email"><br>
        <input type="password" name="password" placeholder = "Enter a password"><br>
        <input type="text" name="role" value="user" hidden><br>
        <button type = "submit">Sign Up</button>
    </form>
</body>
</html>