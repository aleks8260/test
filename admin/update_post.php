<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

include 'db.php';
/*echo    "update" . $_GET['post_id'];*/

$id = $_GET['post_id'];;
$username = $_POST['name'];
$password = $_POST['password'];

$sql = "UPDATE user SET name ='$username', password ='$password' WHERE id = $id";
    
    $result = mysqli_query($connection, $sql);
    if(!$result) {
    
     die("QUERY FAILED" . mysqli_error($connection));    
    }else {
    
    echo "Изменения вступили в силу"; 
    
    }
?>
<br>
<a href="/admin/posts.php">Мои посты</a>
<a href="/admin/create_post.php">Добавление</a>
<a href="/admin/delete_post.php">Удаление</a>
<a href="/admin/update_post.php">Изменение</a>