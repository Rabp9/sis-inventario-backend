<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuarioActivosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuarioActivosTable Test Case
 */
class UsuarioActivosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsuarioActivosTable
     */
    public $UsuarioActivos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usuario_activos',
        'app.usuarios',
        'app.estados',
        'app.area_activas',
        'app.areas',
        'app.bienes',
        'app.tipos',
        'app.marcas',
        'app.datos',
        'app.movimientos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsuarioActivos') ? [] : ['className' => 'App\Model\Table\UsuarioActivosTable'];
        $this->UsuarioActivos = TableRegistry::get('UsuarioActivos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsuarioActivos);

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
