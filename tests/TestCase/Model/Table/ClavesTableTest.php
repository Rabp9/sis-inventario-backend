<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClavesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClavesTable Test Case
 */
class ClavesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClavesTable
     */
    public $Claves;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.claves'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Claves') ? [] : ['className' => 'App\Model\Table\ClavesTable'];
        $this->Claves = TableRegistry::get('Claves', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Claves);

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
}
