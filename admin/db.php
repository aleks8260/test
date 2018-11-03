<?php
$connection = mysqli_connect('localhost','root','','lesson8');
    if(!$connection){
        die('Ошибка'.mysqli_connect_error());
    }
?>