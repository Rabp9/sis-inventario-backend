<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MovimientosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MovimientosTable Test Case
 */
class MovimientosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MovimientosTable
     */
    public $Movimientos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.movimientos',
        'app.bienes',
        'app.tipos',
        'app.marcas',
        'app.estados',
        'app.area_activas',
        'app.areas',
        'app.datos',
        'app.usuario_activos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Movimientos') ? [] : ['className' => 'App\Model\Table\MovimientosTable'];
        $this->Movimientos = TableRegistry::get('Movimientos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Movimientos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
