<?php

// nie działa nwm czemu

namespace Mastering\MyModule\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Db\Ddl\Table; 

class InstallSchema implements InstallSchemaInterface{

    public function install(SchemaSetupInterface $setup,ModuleContextInterface $context){
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('mastering_my_item')
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            [
                'identity' => true,
                'nullable' => false,
                'primary' => true
            ],
            "Item ID"
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            ['nullable'=>false],
            "Name of Item"
        )->addIndex(
            $setup->getIdxName('mastering_my_item',['name']),
            ['name']
        )->setComment(
            'Sample Items'
        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}