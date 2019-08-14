<?php

/**
 * Category slider index controller
 *
 * @category    Mageboy
 * @package     Mageboy_Categoryslider
 */

class Mageboy_Categoryslider_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
          $this->renderLayout(); 
	  
    }
}
