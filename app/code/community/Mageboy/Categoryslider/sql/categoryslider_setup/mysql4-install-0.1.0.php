<?php

/**
 * Category slider installation script
 * 
 * @category   Mageboy
 * @package    Mageboy_Categoryslider
 */
?>


<?php
$that = new Mage_Catalog_Model_Resource_Eav_Mysql4_Setup('core_setup');
$installer = $this;
$installer->startSetup();
$groupName = "Category slider";
$entityTypeId     = $that->getEntityTypeId('catalog_product');
$attributeSetId   = $that->getAttributeSetId($entityTypeId, 'Default');
$that->addAttributeGroup($entityTypeId, $attributeSetId, $groupName);

$installer->addAttribute('catalog_category', 'slider_imageone', array(
    'type'          => 'varchar',
    'label'         => 'Image One',
    'input'         => 'image',
    'backend'       => 'catalog/category_attribute_backend_image',
    'required'      => false,
    'sort_order'    => 98,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'group'         => $groupName
));

$installer->addAttribute('catalog_category', 'slider_imagetwo', array(
    'type'          => 'varchar',
    'label'         => 'Image Two',
    'input'         => 'image',
    'backend'       => 'catalog/category_attribute_backend_image',
    'required'      => false,
    'sort_order'    => 99,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'group'         => $groupName
));

$installer->addAttribute('catalog_category', 'slider_imagethree', array(
    'type'          => 'varchar',
    'label'         => 'Image Three',
    'input'         => 'image',
    'backend'       => 'catalog/category_attribute_backend_image',
    'required'      => false,
    'sort_order'    => 100,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'group'         => $groupName
));
$installer->endSetup();
?>
