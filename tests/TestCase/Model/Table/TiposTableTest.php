<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposTable Test Case
 */
class TiposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposTable
     */
    public $Tipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipos',
        'app.estados',
        'app.area_activas',
        'app.areas',
        'app.bienes',
        'app.marcas',
        'app.datos',
        'app.movimientos',
        'app.usuario_activos',
        'app.usuarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tipos') ? [] : ['className' => 'App\Model\Table\TiposTable'];
        $this->Tipos = TableRegistry::get('Tipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tipos);

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
