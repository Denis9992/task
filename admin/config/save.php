<?php
include '../../config/config.php';

if (isset($_COOKIE['admin']) == false and !$_COOKIE['admin']) {
    echo json_encode(['a' => 'exit']);
} else {
    $text = htmlspecialchars($_POST['text']);
    $id = $_POST['id'];
    $query = "UPDATE `tasks` SET `text` = '$text', `edited` = '1' 
    WHERE `tasks`.`id_task` = $id";
    $result = mysqli_query($link, $query) or die('Error ' . mysqli_error(($result)));
    echo json_encode(['a' => true]);
}
