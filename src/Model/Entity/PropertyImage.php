<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PropertyImage Entity
 *
 * @property int $property_image_id
 * @property string $property_image_path
 * @property int $property_id
 *
 * @property \App\Model\Entity\PropertyImage $parent_property_image
 * @property \App\Model\Entity\Property $property
 */
class PropertyImage extends Entity
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
        'property_image_id' => false
    ];
}
