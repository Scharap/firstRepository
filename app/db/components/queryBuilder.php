<?php


namespace App\db\components;


class queryBuilder
{
    public $pdo;

    public function __construct()
    {
        $config = require_once __DIR__ . '/../../../config.php';
        $this->pdo = Connection::make($config);
    }


    public function getAll($table, $order="")
    {
        $sql = "select * from $table order by :order";
        $stmt = $this->pdo->prepare($sql);
        if($stmt->execute(["order"=>$order])){
            $result = $stmt->fetchAll();
            return $result;
        }
        return null;
    }

    public function getOne($table, $id)
    {
        $sql = "select * from $table where id=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(["id" => $id]);
        return $stmt->fetch();
    }

//    public function insertPost($table)
//    {
//        $sql="INSERT INTO posts(title, description, datePublication, photo)
//                                             VALUE (:title, :description, :datePublication, :photo)";
//
//        $stmt = $this->pdo->prepare($sql);
//        return $stmt->execute($table);

//        if ($stmt->execute(
//            [
//                "title" => $data["title"],
//                "description" => $data["description"],
//                "datePublication" => $data["datePublication"],
//                "photo"=>$data["photo"]
//            ])) {
//            return $this->pdo->lastInsertId();
//        };
//        return -1;
//    }


    public function deleteRow($table, $id)
    {
        $sql = "delete from $table where id=:id";
        $stmt=$this->pdo->prepare($sql);
        return $stmt->execute(["id" => $id]);
    }

    public function store($table, $data)
    {
        $keys = array_keys($data);
        $fields = implode(',', $keys);
        $values = ":" . implode(', ', $keys);
        $sql = 'insert into $table($fields) value("$values")';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);

        return $this->pdo->LastInsertId();
    }

    public function update($table, $data)
    {
        $fields = '';
        foreach ($data as $key=>$value) {
            if ($key !== "id") {
                $fields .= $key . "=:" . $key . ", ";
            }
            $fields = rtrim($fields, ', ');
        }
        $sql = "update $table set $fields where id=:id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($data);
    }

}