<?php 

namespace Vision\Mvc;


abstract class Model{
    private $conn;
    protected $table;
    public function __construct(){
        $this->conn= mysqli_connect("localhost","root","","simpleproject");
        $this->setTableName();
    }

    abstract public function setTableName();

    public function all(){
        $query="select * from $this->table";
         return $runQuery = mysqli_query($this->conn,$query);
        //  if(mysqli_num_rows($runQuery)>0){
        //     $posts= mysqli_fetch_all($runQuery);
        // }
    }
}

?>