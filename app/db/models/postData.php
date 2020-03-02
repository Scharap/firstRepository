<?php
namespace App\db\models;
use App\db\components\queryBuilder;

class postData
{
    protected $db;

    public function __construct(queryBuilder $db)
    {
        $this->db=$db;
    }

    public function getAllPosts(){
        $posts=$this->db->getAll("posts", "datePublication");
        require_once __DIR__."/../../view/posts/index.view.php";
    }

    public function getOne($id){
        return $this->db->getOne("posts", $id);
    }

    public function store($data){
        $temp["datePublication"]=date("Y-m-d");
        $temp["title"]=$data["title"];
        $temp["description"]=$data["description"];
        $temp["photo"]=$data["photo"];
        $temp["id_user"]=rand(1,2);

        $this->db->store("posts", $temp);
    }
}