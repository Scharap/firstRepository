<?php

namespace App\db\components;

use PDO;
use PDOException;

class connection
{
    public static function make($config){
        try{
            return new PDO(
                "mysql:host={$config['host']};dbname={$config['db']}",
                $config['login'],
                $config['password'],
                $config['opt']
            );
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
}