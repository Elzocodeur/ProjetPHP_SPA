<?php

require_once 'config/helpers.php';
require_once 'config/bootstrap.php';
require_once 'config/fileLoad.php';


    $route = [
        '/' => "login",
        '/apprenant' => 'apprenant',
        '/presence' => 'presence',
        '/promotion' => 'promotion',
        '/referentiel' => 'referentiel',
        
    ];
    
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    
    if(array_key_exists($uri,$route)){
        if($route[$uri] !="login"){
            require_once 'templates/partial/header.html.php';
            require_once "models/".$uri.".model.php";
                require_once "templates/".$route[$uri].".html.php" ;
                require_once 'templates/partial/footer.html.php';       
            }else{
                require_once "templates/".$route[$uri].".html.php";
            }
        }


?>