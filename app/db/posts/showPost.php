<?php
require_once "app/bootstrap.php";
$title= "Просмотр информации";
$post=$postData->getOne($_GET['id']);
if(!$post){
    header("Location: /");
    exit;
}

require_once __DIR__."/../../view/posts/showPost.view.php";