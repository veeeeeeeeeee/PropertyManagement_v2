<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PropertysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PropertysTable Test Case
 */
class PropertysTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PropertysTable
     */
    public $Propertys;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.propertys',
        'app.properties'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Propertys') ? [] : ['className' => 'App\Model\Table\PropertysTable'];
        $this->Propertys = TableRegistry::get('Propertys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Propertys);

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
