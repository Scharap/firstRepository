<?php
require_once "app/bootstrap.php";

if(isset($_POST['btnPost'])){
    $_POST['datePublication']=date('Y-m-d');
    //
    //photo
    //
    $fileName=$_FILES['photo']['name'];
    $fileTmpName=$_FILES['photo']['tmp_name'];
    $fileType=$_FILES['photo']['type'];
    $fileError=$_FILES['photo']['error'];
    $fileSize=$_FILES['photo']['size'];

    $fileExtension=strtolower(end(explode('.', $fileName)));
    $fileName=explode('.',$fileName)[0];

    $extensions=['jpg','jpeg','png'];

    $_POST['photo']="default.jpg";

    if(in_array($fileExtension, $extensions)){
        if($fileSize<5000000){
            if($fileError===0){
                $_POST['photo']=implode('.',[$fileName, $fileExtension]);
            }
        }
    }

    $id=$newPost->insertPost($_POST);
    if($id>-1){
        $fileDestination = "img/" . $_POST['photo'];
        move_uploaded_file($fileTmpName, $fileDestination);
    }

    header("location: /");
    exit;
}

require_once "app/view/posts/insertPost.view.php";