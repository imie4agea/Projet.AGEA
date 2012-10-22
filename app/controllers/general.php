<?php

$metadata = ArrayEntity::toArrayAll('Metadata');

View::getInstance()->assign('metadata', $metadata);