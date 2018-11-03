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

$id = $_GET['post_id'];
$username = $_POST['name'];
$password = $_POST['password'];

    $sql = "DELETE FROM user WHERE id =$id";
    $result = mysqli_query($connection, $sql);

    if (!$result) {
        die('Запрос не удался' . mysqli_error($connection));
    }else{
        echo "Удалена запись";
    }
?>


<a href="/admin/posts.php">Мои посты</a>
<a href="/admin/create_post.php">Добавление</a>
<a href="/admin/delete_post.php">Удаление</a>
<a href="/admin/update_post.php">Изменение</a>