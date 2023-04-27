<?php

namespace Vision\Mvc;

class Request {
    //get
    public function get($key=null) {
        // return $_GET[$key];
        return isset($_GET[$key]) ? $_GET[$key] : null; 
    }

    //post 
    public function post($key=null) {
        return isset($_POST[$key]) ? $_POST[$key] : null; 
    }

    //haspost
    public function hasPost($key)
    {
        return isset($key);
    }
    
    //clean 
    public function clean($key)
    {
        return trim(htmlspecialchars($key));
    }
    public function methodCheck()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function redirect($file)
    {
        header("location:$file");
    }

    public function queryString()
    {
        return $_SERVER['QUERY_STRING'];
    }

}