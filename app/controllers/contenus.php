<?php

// Supprimer un contenu

if (isset($_GET['delete_content'])){
	$content = $em->getRepository('Content')->find($_GET['edit_content']);
}

// Modifier un contenu

if (isset($_GET['edit_content'])){
	$edit_content = true;

	$content      = $em->getRepository('Content')->find($_GET['edit_content']);
	$content_type = $content->getContentType();

	View::getInstance()->assign('content', $content->toArray());
	View::getInstance()->assign('content_type', $content_type->toArray());
} else {
	$edit_content = false;
}

// Nouveau contenu

if (isset($_GET['add_content']) && isset($_POST['content_type_id'])) {
	$add_content = true;

	$content_type = $em->getRepository('ContentType')->find($_POST['content_type_id']);

	View::getInstance()->assign('content_type', $content_type->toArray());
} else {
	$add_content = false;
}

// Liste des contenus

$contents           = ArrayEntity::toArrayAll('Content');
$content_types      = ArrayEntity::toArrayAll('ContentType');
$resources          = ArrayEntity::toArrayAll('Resource');

View::getInstance()->assign('contents', $contents);
View::getInstance()->assign('content_types', $content_types);
View::getInstance()->assign('resources', $resources);

View::getInstance()->assign('edit_content', $edit_content);
View::getInstance()->assign('add_content', $add_content);