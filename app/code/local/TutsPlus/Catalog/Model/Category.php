<?php

  class TutsPlus_Catalog_Model_Category extends Mage_Catalog_Model_Category {

    public function getChildren()
    {
        echo "Class rewritting";
        return  $this->getResource()->getChildren($this, false);
    }
  }
