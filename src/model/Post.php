<?php 
namespace Vision\Mvc\Model;
use Vision\Mvc\Model;
// Model is the name of class in Model.php

class Post extends Model{
public function setTableName(){
$this->table="posts";
}
}
?>