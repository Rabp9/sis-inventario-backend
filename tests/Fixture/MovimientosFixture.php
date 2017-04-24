<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MovimientosFixture
 *
 */
class MovimientosFixture extends TestFixture
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
        'area_activa_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'usuario_activo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_inicio' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_fin' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'estado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_movimientos_bienes1_idx' => ['type' => 'index', 'columns' => ['bien_id'], 'length' => []],
            'fk_movimientos_area_activas1_idx' => ['type' => 'index', 'columns' => ['area_activa_id'], 'length' => []],
            'fk_movimientos_usuario_activos1_idx' => ['type' => 'index', 'columns' => ['usuario_activo_id'], 'length' => []],
            'fk_movimientos_estados1_idx' => ['type' => 'index', 'columns' => ['estado_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'bien_id', 'area_activa_id', 'usuario_activo_id', 'estado_id'], 'length' => []],
            'fk_movimientos_area_activas1' => ['type' => 'foreign', 'columns' => ['area_activa_id'], 'references' => ['area_activas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_movimientos_bienes1' => ['type' => 'foreign', 'columns' => ['bien_id'], 'references' => ['bienes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_movimientos_estados1' => ['type' => 'foreign', 'columns' => ['estado_id'], 'references' => ['estados', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_movimientos_usuario_activos1' => ['type' => 'foreign', 'columns' => ['usuario_activo_id'], 'references' => ['usuario_activos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'area_activa_id' => 1,
            'usuario_activo_id' => 1,
            'fecha_inicio' => '2017-04-18',
            'fecha_fin' => '2017-04-18',
            'estado_id' => 1
        ],
    ];
}
