<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeatureTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeatureTable Test Case
 */
class FeatureTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FeatureTable
     */
    public $Feature;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.feature',
        'app.feats',
        'app.property',
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
        $config = TableRegistry::exists('Feature') ? [] : ['className' => 'App\Model\Table\FeatureTable'];
        $this->Feature = TableRegistry::get('Feature', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Feature);

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
