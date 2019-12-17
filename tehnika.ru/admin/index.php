<?php
    require_once("../database.php");
    require_once("../models/items.php");

    $link = db_connect();
    $items = [];

    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "";

    if($action == "add") {
        include("../views/admin.php");
        
    } else if ($action == "edit") {
        if(!isset($_GET['id']))
            header("Location: index.php");
        $id = (int)$_GET['id'];

        if(!empty($_POST) && $id > 0) {
            items_edit($link, $id, $_POST['title'], $_POST['description'], $_POST['price']);
                header("Location: index.php");
        }
        $items = items_get($link, $id);
        include("../views/single-item.php");
    } 
    
    else if ($action == "delete") {
        $id = $_GET['id'];
        $item = items_delete($link, $id);
        header("Location: index.php");
    }

    else {
        $items = items_all($link);
        include("../views/admin.php");
    }


?>