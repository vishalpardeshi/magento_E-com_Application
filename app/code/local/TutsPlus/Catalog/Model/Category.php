<?php

  class TutsPlus_catalog_Model_Category extends Mage_Catalog_Model_Category {

   public function getChildren()
      {
          die("this");
          return $this->getResource()->getChildren($this, false);
      }
  }
