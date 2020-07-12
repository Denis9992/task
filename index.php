<?php
include "./config/config.php";
include "./config/control.php";

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'name';
$type = isset($_GET['type']) ? $_GET['type'] : 'asc';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/head-style.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/media.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <title>Tasks</title>
</head>

<body>
    <?php include 'header.php' ?>

    <div class="conteiner">
        <div class="control-block">
            <input class="create" id='create' type="button" value="Создать задачу">
            <div id="backModal" class="modal"></div>
        </div>
        <div class="modal-content" id="modalWin">
            <div class='modal-head'>
                <div>Создать задачу</div>
                <i id='close' class="fa fa-times-circle" aria-hidden="true"></i>
            </div>

            <form id='form' action="" method="post">
                <input class="inp" placeholder="Name" type="text" name='name' maxlength="7" required>
                <input class="inp" placeholder="E-mail" type="email" name='mail' maxlength="20" required>
                <textarea class="textarea" placeholder="Текст задачи" name='text' maxlength="140" required></textarea>
                <input type="submit" class='sub createSub' value='Создать'>
            </form>
        </div>
        <div class="task-conteiner">

            <?php
            include "./config/sort.php"
            ?>

            <?php
            include "./config/tasks.php"
            ?>

            <div class="pagination-block">
                <div class="pag-nav">
                    <?php
                    $query = "SELECT COUNT(*) FROM `tasks`";
                    $result = mysqli_query($link, $query);
                    $count = mysqli_fetch_row($result);
                    $pages = ceil(intval($count[0]) / $limit);
                    for ($i = 1; $i <= $pages; ++$i) {
                        if ($page == $i) {
                    ?>
                            <a class="active" href="?page=<?php echo $i ?>&sort=<?php echo $sort ?>&type=<?php echo $type ?>"><?php echo $i ?></a>
                        <?php
                        } else {
                        ?>
                            <a href="?page=<?php echo $i ?>&sort=<?php echo $sort ?>&type=<?php echo $type ?>"><?php echo $i ?></a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>
<script src='script/modal.js'></script>
<script src='script/sort.js'></script>

</html>