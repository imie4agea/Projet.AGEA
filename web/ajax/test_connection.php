<?php

define('ROOT_DIR', dirname(dirname(dirname(__FILE__))) . '/');
include_once ROOT_DIR . 'app/config/config.php';

// données envoyées
if(isset($_GET['username']) && isset($_GET['password'])){
    // données correspondante
    $user = getEntityManager()->getRepository("User")->find(2);
    if($_GET['username'] == $user->getUsername() && md5($_GET['password']) == $user->getPassword()){
        if(isset($_SESSION['connected'])){
            unset($_SESSION['connected']);
            session_destroy();
        }
        session_start();
        $_SESSION['connected'] = true;
        setcookie("persist", md5("admin"));
        echo "ok";
    }
    else{
        echo "no";
    }
}
