<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientTable Test Case
 */
class ClientTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClientTable
     */
    public $Client;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.client',
        'app.clients'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Client') ? [] : ['className' => 'App\Model\Table\ClientTable'];
        $this->Client = TableRegistry::get('Client', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Client);

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
