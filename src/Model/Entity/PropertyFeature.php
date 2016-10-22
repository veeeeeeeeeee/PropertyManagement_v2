<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PropertyFeature Entity
 *
 * @property int $property_id
 * @property int $feature_id
 * @property int $property_feature_no
 *
 * @property \App\Model\Entity\Property $property
 * @property \App\Model\Entity\Feature $feature
 */
class PropertyFeature extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'property_id' => false,
        'feature_id' => false
    ];
}
