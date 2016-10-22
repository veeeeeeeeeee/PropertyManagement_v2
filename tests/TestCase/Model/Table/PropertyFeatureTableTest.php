<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PropertyFeatureTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PropertyFeatureTable Test Case
 */
class PropertyFeatureTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PropertyFeatureTable
     */
    public $PropertyFeature;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.property_feature',
        'app.property',
        'app.props',
        'app.feature',
        'app.feats'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PropertyFeature') ? [] : ['className' => 'App\Model\Table\PropertyFeatureTable'];
        $this->PropertyFeature = TableRegistry::get('PropertyFeature', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PropertyFeature);

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
