<?php 
namespace Vision\Mvc\Controller;

use Vision\Mvc\Model\Post;
use Vision\Mvc\View;

class PostController{
    public function all(){

         // Model
        $post = new Post;
        //    $post->setTableName();
        $data['posts'] = $post->all();
    //     echo "<pre>";
    //     var_dump($posts);
        
        // echo "all";
        View::render("all.php",$data);
    }
}

?>