<?php

function get_posts($limit, $offset, $sort, $type)
{

    if ($sort == 'name') {
        $t = 'name';
    } elseif ($sort == 'mail') {
        $t = 'mail';
    } elseif ($sort == 'state') {
        $t = 'state';
    }

    if ($type == 'asc') {
        $f = "ASC";
    } elseif ($type == 'desc') {
        $f = "DESC";
    }

    $query = "SELECT * FROM `tasks` ORDER BY $t $f  LIMIT $limit OFFSET $offset";
    global $link;
    $result = mysqli_query($link, $query);
    return $result;
}



?>