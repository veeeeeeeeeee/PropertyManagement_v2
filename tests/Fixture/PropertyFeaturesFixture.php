<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PropertyFeaturesFixture
 *
 */
class PropertyFeaturesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'prop_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'feat_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'no_feat' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'feat_id' => ['type' => 'index', 'columns' => ['feat_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['prop_id', 'feat_id'], 'length' => []],
            'property_features_ibfk_1' => ['type' => 'foreign', 'columns' => ['prop_id'], 'references' => ['propertys', 'prop_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'property_features_ibfk_2' => ['type' => 'foreign', 'columns' => ['feat_id'], 'references' => ['features', 'feat_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'prop_id' => 1,
            'feat_id' => 1,
            'no_feat' => 1
        ],
    ];
}
