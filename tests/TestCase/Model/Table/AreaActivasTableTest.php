<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AreaActivasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AreaActivasTable Test Case
 */
class AreaActivasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AreaActivasTable
     */
    public $AreaActivas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.area_activas',
        'app.areas',
        'app.estados'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AreaActivas') ? [] : ['className' => 'App\Model\Table\AreaActivasTable'];
        $this->AreaActivas = TableRegistry::get('AreaActivas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AreaActivas);

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
