<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BienDatosFixture
 *
 */
class BienDatosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'bien_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dato_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'descripcion' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_bien_datos_bienes1_idx' => ['type' => 'index', 'columns' => ['bien_id'], 'length' => []],
            'fk_bien_datos_datos1_idx' => ['type' => 'index', 'columns' => ['dato_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'bien_id', 'dato_id'], 'length' => []],
            'fk_bien_datos_bienes1' => ['type' => 'foreign', 'columns' => ['bien_id'], 'references' => ['bienes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_bien_datos_datos1' => ['type' => 'foreign', 'columns' => ['dato_id'], 'references' => ['datos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'bien_id' => 1,
            'dato_id' => 1,
            'descripcion' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
