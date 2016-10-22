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
        'property_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'feature_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'property_feature_no' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'feat_id' => ['type' => 'index', 'columns' => ['feature_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['property_id', 'feature_id'], 'length' => []],
            'property_features_ibfk_1' => ['type' => 'foreign', 'columns' => ['property_id'], 'references' => ['properties', 'property_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'property_features_ibfk_2' => ['type' => 'foreign', 'columns' => ['feature_id'], 'references' => ['features', 'feature_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'property_id' => 1,
            'feature_id' => 1,
            'property_feature_no' => 1
        ],
    ];
}
