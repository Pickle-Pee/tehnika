<?php 
    require_once("database.php");
    require_once("models/items.php");

    $link = db_connect();
    $items = items_get($link, $_GET['id']);

    include("views/index.php");
?>