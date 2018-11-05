<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <div class="form-group">
            <label for="username">Name</label>
            <input type="text" name="name" class="form-control">
            
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">

        </div>

        <input class="btn btn-primary" type="submit" name="submit" value="Изменить">

    </form>
</body>

</html>
<?php

include 'db.php';
/*echo    "update" . $_GET['post_id'];*/
if(isset($_POST['submit'])) {
$id = $_GET['post_id'];;
$username = $_POST['name'];
$password = $_POST['password'];

$sql = "UPDATE user SET name ='$username', password ='$password' WHERE id = $id";
    
    $result = mysqli_query($connection, $sql);
    if(!$result) {
    
     die('Ошибка' . mysqli_error($connection));    
    }else {
        echo "Изменения вступили в силу"; 
    }
}
?>
    <br>
    <a href="/admin/posts.php">Мои посты</a>
    <a href="/admin/create_post.php">Добавление</a>
    <a href="/admin/delete_post.php">Удаление</a>
    <a href="/admin/update_post.php">Изменение</a>
