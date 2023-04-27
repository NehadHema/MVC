<?php 
namespace Vision\Mvc;
class View{

    public static function render($file,$data){
        $path="C:/xampp/htdocs/php/week12/MVC/src/view/";
        $fullPath=$path.$file;
        if(file_exists($fullPath)){
            extract($data);
           include($fullPath);
        }else{
            die("File not found");
        }
    }
}

?>