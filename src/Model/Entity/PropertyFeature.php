<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PropertyFeature Entity
 *
 * @property int $prop_id
 * @property int $feat_id
 * @property int $no_feat
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
        'prop_id' => false,
        'feat_id' => false
    ];
}
