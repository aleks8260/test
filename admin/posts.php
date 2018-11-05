<?php
include 'db.php';

$query = 'SELECT * FROM user';
$result = mysqli_query($connection, $query);

if(!$result){
    die('Ошибка '. mysqli_error());
}
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta charset="UTF-8">
        <title>Document</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a href="/admin/posts.php">Мои посты</a>
                    <a href="/admin/create_post.php">Добавление</a>
                    <a href="/admin/delete_post.php">Удаление</a>
                    <a href="/admin/update_post.php">Изменение</a>
                    <?php
        $query = "SELECT * FROM user";

        $result = mysqli_query($connection, $query);

        if(!$result) {
            die('Query FAILED' . mysqli_error());
        } ?>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>id</td>
                                <td>Имя</td>
                                <td>Пароль</td>
                                <td>Управление</td>
                            </tr>
                            <?php

        while($row = mysqli_fetch_assoc($result)) {

            ?>

                                <tr>
                                    <td>
                                        <?= $row['id'];?>
                                    </td>
                                    <td>
                                        <?= $row['name'];?>
                                    </td>
                                    <td>
                                        <?= $row['password'];?>
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="update_post.php?post_id=<?= $row['id'];?>">Изменить</a>
                                        <a class="btn btn-danger" href="delete_post.php?post_id=<?= $row['id'];?>">Удалить</a>
                                    </td>
                                </tr>
                                <?

        } ?>
                        </table>
                </div>
            </div>
        </div>

    </body>

    </html>
