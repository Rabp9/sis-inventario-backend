<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LicenciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LicenciasTable Test Case
 */
class LicenciasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LicenciasTable
     */
    public $Licencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.licencias',
        'app.estados',
        'app.area_activas',
        'app.bienes',
        'app.tipos',
        'app.datos',
        'app.alternativas',
        'app.marcas',
        'app.bien_datos',
        'app.movimientos',
        'app.areas',
        'app.users',
        'app.personas',
        'app.detalle_trabajadores',
        'app.responsable',
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
        $config = TableRegistry::exists('Licencias') ? [] : ['className' => 'App\Model\Table\LicenciasTable'];
        $this->Licencias = TableRegistry::get('Licencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Licencias);

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
