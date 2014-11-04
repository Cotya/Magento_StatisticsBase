<?php


/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$tableKey = 'cotya_statisticsbase/entry';

$table = $installer->getConnection()
    ->newTable($installer->getTable($tableKey))
    
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_BIGINT, null, array(
            'auto_increment' => true,
            'unsigned'  => true,
            'nullable'  => false,
            'primary'   => true,
        ))
    
    ->addColumn(
        'when',
        Varien_Db_Ddl_Table::TYPE_DATETIME,
        null,
        array(
            'nullable'  => false,
            'default'   => false,
        ),
        'Datetime of measurement'
    )
    ->addColumn(
        'type',
        Varien_Db_Ddl_Table::TYPE_VARCHAR,
        255,
        array(
            'nullable'  => false,
        )
    )
    ->addColumn(
        'value',
        Varien_Db_Ddl_Table::TYPE_INTEGER,
        null,
        array(
            'nullable'  => false,
        )
    )
    
    ->addIndex(
        $installer->getIdxName($tableKey, array('when')),
        array('when')
    )
    ->addIndex(
        $installer->getIdxName($tableKey, array('type')),
        array('type')
    )
    
    ->setComment('Cotya Statistics');

$installer->getConnection()->createTable($table);

$installer->endSetup();

