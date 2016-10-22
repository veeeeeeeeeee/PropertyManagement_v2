<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PropertyFeaturesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PropertyFeaturesTable Test Case
 */
class PropertyFeaturesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PropertyFeaturesTable
     */
    public $PropertyFeatures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.property_features',
        'app.propertys',
        'app.features',
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
        $config = TableRegistry::exists('PropertyFeatures') ? [] : ['className' => 'App\Model\Table\PropertyFeaturesTable'];
        $this->PropertyFeatures = TableRegistry::get('PropertyFeatures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PropertyFeatures);

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
