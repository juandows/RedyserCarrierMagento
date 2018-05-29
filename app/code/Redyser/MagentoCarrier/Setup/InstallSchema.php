<?php

namespace Redyser\MagentoCarrier\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        //cart table

        $setup->getConnection()->addColumn(

            $setup->getTable('sales_shipment_track'),

            'redyser_bultos',

            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, //TYPE_TEXT,
                //'length' => 255,
                'nullable' => true,
                'default' => null,
                'comment' => 'Bultos Redyser Carrier'
            ]

        );

        $setup->getConnection()->addColumn(

            $setup->getTable('sales_shipment_track'),

            'redyser_servicio',

            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                'nullable' => true,
                'default' => null,
                'comment' => 'Servicio Redyser Carrier'
            ]

        );

        $setup->getConnection()->addColumn(

            $setup->getTable('sales_shipment_track'),

            'redyser_cliente',

            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                'nullable' => true,
                'default' => null,
                'comment' => 'Cliente Redyser Carrier'
            ]

        );

        $setup->getConnection()->addColumn(

            $setup->getTable('sales_shipment_track'),

            'redyser_manifiesto_id',

            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                'nullable' => true,
                'default' => null,
                'comment' => 'Id Manifiesto Redyser Carrier'
            ]

        );

        $setup->getConnection()->addColumn(

            $setup->getTable('sales_shipment_track'),

            'redyser_manifiesto_fecha',

            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
                'nullable' => true,
                'default' => null,
                'comment' => 'Fecha Manifiesto Redyser Carrier'
            ]

        );

        $setup->getConnection()->addColumn(

            $setup->getTable('sales_shipment_track'),

            'redyser_estado',

            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'length' => 1,
                'nullable' => true,
                'default' => null,
                'comment' => 'Estado Redyser Carrier'
            ]

        );

        $setup->getConnection()->addColumn(

            $setup->getTable('sales_shipment_track'),

            'redyser_estado_fecha',

            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
                'nullable' => true,
                'default' => null,
                'comment' => 'Fecha Estado Redyser Carrier'
            ]

        );

        $setup->getConnection()->addColumn(

            $setup->getTable('sales_shipment_track'),

            'redyser_estado_desc',

            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'length' => 255,
                'nullable' => true,
                'default' => null,
                'comment' => 'Descripcion Estado Redyser Carrier'
            ]

        );

        $setup->getConnection()->addColumn(

            $setup->getTable('sales_shipment_track'),

            'redyser_peso',

            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_FLOAT,
                'nullable' => true,
                'default' => null,
                'comment' => 'Peso Redyser Carrier'
            ]

        );

        $setup->getConnection()->addColumn(

            $setup->getTable('sales_shipment_track'),

            'redyser_estado2',

            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'length' => 1,
                'nullable' => true,
                'default' => null,
                'comment' => 'Estado2 Redyser Carrier'
            ]

        );

        $setup->getConnection()->addColumn(

            $setup->getTable('sales_shipment_track'),

            'redyser_fecha_listo',

            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
                'nullable' => true,
                'default' => null,
                'comment' => 'Fecha Listo Redyser Carrier'
            ]

        );



        $table = $setup->getTable('redyser_manifiestos'
        )->addColumn(
            'manifiesto_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Id manifiesto'
        )->addColumn(
            'manifiesto_fecha',
            \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
            null,
            ['nullable' => true, 'default' => null],
            'Fecha manifiesto'
        );
        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }

}