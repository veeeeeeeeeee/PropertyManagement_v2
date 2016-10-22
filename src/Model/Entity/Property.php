<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Property Entity
 *
 * @property int $property_id
 * @property string $property_street
 * @property string $property_suburb
 * @property string $property_state
 * @property string $property_pc
 * @property int $property_type
 * @property float $property_price
 * @property string $property_desc
 *
 * @property \App\Model\Entity\Property $property
 */
class Property extends Entity
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
        'property_id' => false
    ];
}
