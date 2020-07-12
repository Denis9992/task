<header class="header">
    <div class="head-conteiner">
        <div class="logo">Задачи</div>
        <div class="navigation">

            <?php if (isset($_COOKIE['admin']) == true and $_COOKIE['admin'] == 1) { ?>
                <nav><a href="http://testttts.zzz.com.ua/">К задачам</a></nav>
                <nav><a href="exit.php">Выход</a></nav>
            <?php } else { ?>
                <?php if (($_SERVER['REQUEST_URI'] !== '/login.php')) { ?>
                    <nav><a href="login.php">Войти</a></nav>
                <?php } else { ?>
                    <nav><a href="http://testttts.zzz.com.ua/">К задачам</a></nav>
                <?php } ?>
            <?php } ?>


        </div>
        <?php #if ($_SERVER['REQUEST_URI'] !== '/login.php') { 
        ?>

    </div>
</header>