<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 01.12.16
 * Time: 18:00
 */

$installer = $this;
$tableNews = $installer->getTable('wizmagstatist/table_statist');

//var_dump($tableNews);

//die($tableNews);

$installer->startSetup();

$installer->getConnection()->dropTable($tableNews);
$table = $installer->getConnection()
    
    ->newTable($tableNews)
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
    ))
    ->addColumn('sku', Varien_Db_Ddl_Table::TYPE_TEXT, '255', array(
        'nullable'  => false,
    ))
    ->addColumn('vendorsku', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
    ))
    ->addColumn('productname', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
    ))
    ->addColumn('quantity', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'nullable'  => false,
    ))
    ->addColumn('product_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'nullable'  => false,
    ))
    ->addColumn('totalamount', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'nullable'  => false,
    ))
    ->addColumn('lastsold', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
        'nullable'  => false,
    ));

$installer->getConnection()->createTable($table);

$installer->endSetup();
