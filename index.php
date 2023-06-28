<?php
require_once('controller\articleController.php');
$action = isset($_GET['action']) ? $_GET['action'] : 'home';

    switch($action){
        case 'home':
            seeLastArticle();
            break;
        case 'seeByCat':
            seeByCategorie($_GET['id']);
            break;
        case 'seeById':
            seeById($_GET['id']);
            break;
    }


?>