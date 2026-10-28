<?php 
include "db.php";
echo "Welcome to the homepage";
session_start();
if (isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];

}else {
    header("Location: login.php");
    exit();
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
    <a href = "logout.php?user_id=<?php echo $user_id?>">Log Out </a>
</body>
</html>