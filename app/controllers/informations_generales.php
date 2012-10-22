<?php

$basedata   = $em->getRepository('Metadata')->findAll();
$meta_data  = array();
$meta_infos = array();

foreach ($basedata as $data){
	if ($data->getMetadata()){
		$meta_data[$data->getName()]['label'] = $data->getLabel();
		$meta_data[$data->getName()]['value'] = $data->getValue();
	} else {
		$meta_infos[$data->getName()]['label'] = $data->getLabel();
		$meta_infos[$data->getName()]['value'] = $data->getValue();
	}
}

View::getInstance()->assign('meta_data', $meta_data);
View::getInstance()->assign('meta_infos', $meta_infos);