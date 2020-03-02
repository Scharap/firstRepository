<?php

use App\db\components\connection;
use App\db\components\queryBuilder;

require_once "app/db/components/queryBuilder.php";
require_once "app/db/components/connection.php";


$config = require_once "config.php";
$newPost=new queryBuilder();

