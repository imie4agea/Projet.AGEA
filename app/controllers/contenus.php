<?php

if(isset($_SESSION['connected']) && $_SESSION['connected']){

    // Modifier un contenu

    if (isset($_GET['content_id'])){
            $display_content = true;

            $content = $em->getRepository('Content')->find($_GET['content_id']);

            $content_title        = $content->getTitle();
            $content_body         = $content->getBody();
            $content_type_label   = $content->getContentType()->getLabel();
            $content_type_picture = $content->getContentType()->getPicture();
            $picture_id           = $content_type_picture ? $content->getResource()->getId() : null; 
            $picture_title        = $content_type_picture ? $content->getResource()->getTitle() : null; 

            View::getInstance()->assign('content_title', $content_title);
            View::getInstance()->assign('content_body', $content_body);
            View::getInstance()->assign('content_type_label', $content_type_label);
            View::getInstance()->assign('content_type_picture', $content_type_picture);
            View::getInstance()->assign('picture_id', $picture_id);
            View::getInstance()->assign('picture_title', $picture_title);
    } else {
            $display_content = false;
    }

    // Nouveau contenu

    if (isset($_GET['new_content']) && isset($_POST['content_type_id']) && $_GET['new_content'] == 'true'){
            $content_type = $em->getRepository('ContentType')->find($_POST['content_type_id']);

            $content_type_label   = $content_type->getLabel();
            $content_type_picture = $content_type->getPicture();

            View::getInstance()->assign('content_type_label', $content_type_label);
            View::getInstance()->assign('content_type_picture', $content_type_picture);

            $display_new = true;
    } else {
            $display_new = false;
    }

    // Liste des contenus

    $content_types      = $em->getRepository('ContentType')->findAll();
    $contents           = $em->getRepository('Content')->findAll();
    $resources          = $em->getRepository('Resource')->findAll();
    $list_contents      = array();
    $list_content_types = array();
    $list_resources     = array();

    foreach ($contents as $content){
            $list_contents[$content->getId()]['title'] = $content->getTitle();
            $list_contents[$content->getId()]['type']  = $content->getContentType()->getLabel();
    }

    foreach ($content_types as $content_type){
            $list_content_types[$content_type->getId()] = $content_type->getLabel();
    }

    foreach ($resources as $resource){
            if ($resource->getImage() == true){
                    $list_resources[$resource->getId()]['title'] = $resource->getTitle();
                    $list_resources[$resource->getId()]['url']   = $resource->getUrl();
            }
    }

    View::getInstance()->assign('list_contents', $list_contents);
    View::getInstance()->assign('list_content_types', $list_content_types);
    View::getInstance()->assign('list_resources', $list_resources);
    View::getInstance()->assign('display_content', $display_content);
    View::getInstance()->assign('display_new', $display_new);
}
else{
    header("Location: ./");
}