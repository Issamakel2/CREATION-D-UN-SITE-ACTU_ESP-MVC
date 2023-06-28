<?php

require_once('model/Manager.php');
require_once('model/Model.php');

function seeLastArticle(){
    $model = new Model();
    $articles = $model->getLastArticle();
    $categories = $model->getCategorie();
    require('view/home.php');
}
function seeByCategorie($id){
    $model = new Model();
    $articles = $model->getArticleByCategorie($id);
    $categories = $model->getCategorie();
    require('view/showByCategorie.php');

}
function seeById($id){
    $model = new Model();
    $article = $model->getArticleById($id);
    $categories = $model->getCategorie();
    require('view/showArticle.php');

}


?>