<?php
use App\db\models\postData;
use App\db\components\queryBuilder;

$postData=new postData(new queryBuilder());
$postData->getAllPosts();

require_once __DIR__."/../../view/posts/index.view.php";
