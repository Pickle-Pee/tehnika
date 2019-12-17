<?php

function items_all($link){
    $query = "SELECT * FROM items ORDER BY id DESC";
    $result = mysqli_query($link, $query);
    if (!$result)
        die(mysqli_error($link));

    $n = mysqli_num_rows($result);
    $items = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_num_rows($result);
        $items[] = $row;
    }

    return $items;
}

function items_get($link, $id_item){
    $query = sprintf("SELECT * FROM items WHERE id=%d",
(int)$id_item);
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysql_error($link));

    $item = mysqli_fetch_assoc($result);

    return $item;
}

function items_new($link, $title, $img, $description, $price){
    $title = trim($title);
    $content = trim($content);
    if ($title == '')
        return false;

    $t = "INSERT INTO items (title, img, description, price) VALUES ('%s', '%s', '%s', '%s')";

    $query = sprintf($t, 
    mysqli_real_escape_string($link, $title),
    mysqli_real_escape_string($link, $img),
    mysqli_real_escape_string($link, $description),
    mysqli_real_escape_string($link, $price));

    echo $query;
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    return true;

}

function items_edit($link, $id, $title, $description, $price){
    $title = trim($title);
    $description = trim($description);
    $price = trim($price);
    $id = (int)$id;

    if ($title == '')

    $sql = "UPDATE items SET title='%s', description='%s', price='%s' WHERE id='%s'";

    $query = sprintf($sql, mysqli_real_escape_string($link, $title),
    mysqli_real_escape_string($link, $img),
    mysqli_real_escape_string($link, $description),
    mysqli_real_escape_string($link, $price), $id);

    $result = mysli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));
    return mysqli_affected_rows($link);
}

function items_delete($link, $id){
    $id = (int)$id;
    if ($id == 0)
        return false;

    $query = sprintf("DELETE FROM items WHERE id='%d'", $id);
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));
    return mysqli_affected_rows($link);
}

?>