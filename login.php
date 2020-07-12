<?php
 if (isset($_COOKIE['admin']) == true and $_COOKIE['admin'] == 1) { 
    header('Location: http://testttts.zzz.com.ua/');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/head-style.css">
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/media.css">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">

    <title>Вход</title>
</head>
<body>
<?php include 'header.php' ?>
    

<div class="conteiner">
        <div class="form-conteiner">
            <div class="auth">Авторизация</div>
            <form id='form' action="" method="post">
                <input class="inp" placeholder="Name" type="text" name='name' maxlength="7" required>
                <input class="inp" placeholder="Password" type="password" name='password' maxlength="20" required>
                <input type="submit" class='sub' value='Войти'>
            </form>
        </div>
</div>


</body>
<script src="script/login.js"></script>
</html>