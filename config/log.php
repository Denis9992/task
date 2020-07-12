<?php 
    include 'config.php';
    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']) ;


 /*   $HESH = password_hash($password, PASSWORD_DEFAULT);
      echo $HESH;
 */

    $query = "SELECT * FROM `admin` WHERE `name` = '$name' AND `password` = '$password'";
    $mass = [];
    $result = mysqli_query($link, $query) or die ('Error ' . mysqli_error(($result)));
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $mass = $row;
        }
        setcookie('admin', true, time()+3600*999999, '/' );
        setcookie('name', $mass['name'], time()+3600*999999, '/' );
        setcookie('id', $mass['id_admin'], time()+3600*999999, '/' );
        echo json_encode(['a'=> true ]) ;
    }else{
        echo json_encode(['a'=> false]);
    }




    mysqli_close($link);

?>