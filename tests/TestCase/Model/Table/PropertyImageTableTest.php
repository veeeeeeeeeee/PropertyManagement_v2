<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PropertyImageTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PropertyImageTable Test Case
 */
class PropertyImageTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PropertyImageTable
     */
    public $PropertyImage;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.property_image',
        'app.imgs',
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
        $config = TableRegistry::exists('PropertyImage') ? [] : ['className' => 'App\Model\Table\PropertyImageTable'];
        $this->PropertyImage = TableRegistry::get('PropertyImage', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PropertyImage);

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
