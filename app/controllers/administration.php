<?php

// soit on a une session d'ouverte
// soit on a un cookie
if((isset($_SESSION['connected']) && $_SESSION['connected']) ||
        (isset($_COOKIE['persist']) && $_COOKIE['persist'] == md5("admin"))){
    $controller->setCss(array(CSS . 'admin.css' => 'all'));
}
 else {
     header("Location: ./");
}
