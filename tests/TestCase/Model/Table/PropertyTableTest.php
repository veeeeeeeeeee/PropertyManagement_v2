<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PropertyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PropertyTable Test Case
 */
class PropertyTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PropertyTable
     */
    public $Property;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.property',
        'app.props',
        'app.feature',
        'app.feats',
        'app.property_feature'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Property') ? [] : ['className' => 'App\Model\Table\PropertyTable'];
        $this->Property = TableRegistry::get('Property', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Property);

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
