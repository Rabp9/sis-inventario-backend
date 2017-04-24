<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BienesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BienesTable Test Case
 */
class BienesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BienesTable
     */
    public $Bienes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bienes',
        'app.tipos',
        'app.estados',
        'app.area_activas',
        'app.areas',
        'app.datos',
        'app.marcas',
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
        $config = TableRegistry::exists('Bienes') ? [] : ['className' => 'App\Model\Table\BienesTable'];
        $this->Bienes = TableRegistry::get('Bienes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bienes);

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
