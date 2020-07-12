<?php

include '../../config/config.php';

if (isset($_COOKIE['admin']) == false and !$_COOKIE['admin']) {
    echo json_encode(['a' => 'exit']);
} else {
    $checked = $_POST['checked'];
    $id = $_POST['id'];
    $query = "UPDATE `tasks` SET `state` = $checked WHERE `tasks`.`id_task` = $id";
    $result = mysqli_query($link, $query) or die('Error ' . mysqli_error(($result)));
    echo json_encode(['a' => true]);
}
