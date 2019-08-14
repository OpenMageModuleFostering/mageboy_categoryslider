<?php  
/**
 * Category slider item Block
 *
 * @author Krishna Ijjada
 */

 
class Mageboy_Categoryslider_Block_Index extends Mage_Core_Block_Template{   

public function getResponsivebannersliderEnabled()
    {
        return Mage::getStoreConfig('generalsetting/categoryslidergroup/enable',Mage::app()->getStore());
    }

public function getResponsivebannersliderSpeed()
    {
        return Mage::getStoreConfig('generalsetting/categoryslidergroup/slidespeed',Mage::app()->getStore());
    }

public function getResponsivebannerSlideType()
    {
        return Mage::getStoreConfig('generalsetting/categoryslidergroup/styletype',Mage::app()->getStore());
    }

public function getResponsivebannerBannerLoop()
    {
        return Mage::getStoreConfig('generalsetting/categoryslidergroup/bannerloop',Mage::app()->getStore());
    }

public function getResponsivebannerPauseOnhover()
    {
        return Mage::getStoreConfig('generalsetting/categoryslidergroup/pauseonhover',Mage::app()->getStore());
    }


}
