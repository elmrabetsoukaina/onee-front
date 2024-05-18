<?php

    $url = "";

    if(isset($_GET['url'])){
        $url = explode('/', $_GET['url']);
     
    }

    if(file_exists("./Views/$url[0].php")){
        require_once("./Views/$url[0].php");

    }else{
        require_once("./Views/error.php");
    }