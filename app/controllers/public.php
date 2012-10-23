<?php

// existance d'un session dont on ne veut pas se rappeler
if(isset($_SESSION['connected'])){
    if($_SESSION['connected'] && !isset($_COOKIE['persist'])){
        unset($_SESSION['connected']);
        session_destroy();
    }
}

$controller->setCss(array(CSS . 'public.css' => 'all'));
$controller->setCss(array(CSS . 'login.css' => 'all'));
$controller->setJS(array(JS . 'connection.js'));