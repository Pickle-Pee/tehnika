<?php 
    require_once("database.php");
    require_once("models/items.php");
    
    $link = db_connect();
    $items = items_all($link);

    include("views/index.php");
?>