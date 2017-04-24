<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BienDatosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BienDatosTable Test Case
 */
class BienDatosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BienDatosTable
     */
    public $BienDatos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bien_datos',
        'app.bienes',
        'app.datos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BienDatos') ? [] : ['className' => 'App\Model\Table\BienDatosTable'];
        $this->BienDatos = TableRegistry::get('BienDatos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BienDatos);

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
