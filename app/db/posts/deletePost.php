<?php
 require_once "app/bootstrap.php";

 if(!isset($_GET['id']) || empty($_GET['id'])){
     exit;
 }

// if($newPost->deletePost($_GET['id'])){
//     header("location: /");
//     exit;
// }

$post=$newPost->getPostID($_GET['id']);

if(!$post){
    header("Location: /");
    exit;
}
if(isset($_POST['btnDel'])) {
    $_POST['id'] = $_GET['id'];
    $newPost->deletePost($_GET['id']);
    header("location: /");
    exit;
}
if(isset($_POST['btnBack'])) {
    header("location: /");
    exit;
}

require_once "view/posts/deletePost.view.php";