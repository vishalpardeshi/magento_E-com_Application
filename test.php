<?php

require_once 'app/Mage.php';

Mage::app();

$category = Mage::getModel("catalog/category")->load(3);
var_dump($category->getChildren());
/*
Tutorial 2 avoid modify core model
*/
/*
$Product = new TutsPlus_Demo_Model_product;
$Product->sayHello();
*/
