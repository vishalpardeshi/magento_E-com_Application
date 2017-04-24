<?php

require_once 'app/Mage.php';

Mage::app();

$category = Mage::getModel("catalog/category")->load(3);
var_dump($category->getChildren());
