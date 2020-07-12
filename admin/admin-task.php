<?php


$limit  = 3;
$offset = $limit * ($page - 1);
$result = get_posts($limit, $offset, $sort, $type);
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="task">
                <div class="info">
                    <div class="name"><?php echo $row['name'] ?></div>
                    <div class="mail"><?php echo $row['mail'] ?></div>
                    <div class="state">Статус:
                        <?php if ($row["state"]) {
                        ?> <i class="fa fa-check" aria-hidden="true"></i>
                        <?php
                        } else {
                        ?> <i class="fa fa-times" aria-hidden="true"></i>
                        <?php
                        } ?>
                    </div>
                    <?php if($row['edited']){ ?>
                    <div class="mail">Редактировано администратором</div>
                    <?php } ?>
                </div>
                <textarea autocomplete='off' class="text admtext" name="" id="save<?php echo $row['id_task'] ?>" cols="30" rows="10"><?php echo  $row['text'] ?></textarea>
                <!-- <div class="text"><?php #echo $row['text'] 
                                        ?></div> -->
                <input type="submit" id="<?php echo $row['id_task'] ?>" class='sub' value='Сохранить'>
                <label>
                    <?php if ($row['state'] == true) { ?>
                        Состояние <input class="state" autocomplete='off' type="checkbox" name="" checked='checked' id="state<?php echo $row['id_task'] ?>">
                    <?php }else{ ?>
                        Состояние <input class="state" autocomplete='off' type="checkbox" name="" id="state<?php echo $row['id_task'] ?>">
                    <?php } ?>
        
                </label>
        
            </div>
        <?php
        }
}else{
    ?>
    <div class="task">Задач нет</div>
    <?php
}

?>