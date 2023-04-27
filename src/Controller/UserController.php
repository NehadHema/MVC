<?php 
namespace Vision\Mvc\Controller;

use Vision\Mvc\Model\User;
use Vision\Mvc\View;

class UserController{
    public function all(){

         // Model
        $user = new User;
        $data['users'] = $user->all();

        // View
        View::render("allusers.php",$data);
    }
}

?>