<?php

// nie działa nwm czemu

namespace Mastering\MyModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData extends InstallDataInterface{
   
    public function install(ModuleDataSetupInterface $setup,ModuleContextInterface $context){
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('mastering_my_item'),[
                'name' => 'Item 1'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('mastering_my_item'),[
                'name' => 'Item 2'
            ]
        );

        $setup->endSetup();
    }
}