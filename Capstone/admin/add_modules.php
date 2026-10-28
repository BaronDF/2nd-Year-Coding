<?php 
session_start();
if($_SERVER['REQUEST_METHOD'] == "post"){
    $title = $_POST['title'];
    $author = $_POST['author'];
    include "../db.php";
    $sql = "insert into books (title,author) values ('$title', '$author')";
    $result = mysqli_query($conn,$sql);
    if (!$result) {
        echo "Error!: {$conn->error}"
    
}else {
    echo "Module added successfully"
}
}
?>
<!DOCTYPE html>
<html>
<head>  
    <meta charset="utf-8";>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel ="stylesheet" type = "text/css" href="../style.css">
</head>
<body>
    <div class="admin_add_modules">
    <form action= "admin/add_modules.php" method = "post" enctype="form-data/multipart">
         <input type="text" name="title" placeholder = "Title: "> <br>
        <input type="text" name="author" placeholder= "Author: "> <br>
        <button type="submit">Add Book</button>
    </form>
    </div>
</body>
</html>