<?php

$sort = isset($_GET['sort']) ? $_GET['sort'] : 'name';
$type = isset($_GET['type']) ? $_GET['type'] : 'asc';

if($sort == 'name'){
    $name = 'selected';
}

if($sort == 'mail'){
    $mail = 'selected';
}

if($sort == 'state'){
    $state = 'selected';
}

if($type == 'asc'){
    $asc = 'selected';
}else{
    $desc = 'selected';
}

?>

<div class="sort-conteiner">
    <form id="sortForm" action="" method="post">
        <select name="" id="typeSort">
            <option value="name" <?php echo $name ?>>По имени</option>
            <option value="mail" <?php echo $mail ?>>По e-mail</option>
            <option value="state" <?php echo $state ?>>По статусу</option>
        </select>
        <select name="" id="hsort">
            <option value="asc" <?php echo $asc ?>>По возрастанию</option>
            <option value="desc" <?php echo $desc ?>>По убыванию</option>
        </select>
        <input type="submit" id="sendSort" value="Сотировать">
    </form>
</div>