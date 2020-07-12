<?php 
    include 'config.php';
    $name = htmlspecialchars($_POST['name']);
    $mail = htmlspecialchars($_POST['mail']) ;
    $text = htmlspecialchars($_POST['text']) ;


 /*   $HESH = password_hash($password, PASSWORD_DEFAULT);
      echo $HESH;
 */

    $query = "INSERT INTO `tasks`( `name`, `mail`, `text`, `state`, `edited`) 
    VALUES ( '$name', '$mail', '$text', 0, 0)";
    $mass = [];
    $result = mysqli_query($link, $query) or die ('Error ' . mysqli_error(($result)));
    echo json_encode(['a'=> true ]) ;

    mysqli_close($link);

?>