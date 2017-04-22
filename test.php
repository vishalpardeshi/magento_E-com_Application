<?php

require_once 'app/Mage.php';

Mage::app();

/*
Tutorial 2 avoid modify core model
*/
$category = Mage::getModel("Catalog/Category")->load(3);
var_dump($category->getChildren());


/*
$Product = new TutsPlus_Demo_Model_product;
$Product->sayHello();
*/
