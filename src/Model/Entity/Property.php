<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Property Entity
 *
 * @property int $prop_id
 * @property string $prop_street
 * @property string $prop_suburb
 * @property string $prop_state
 * @property string $prop_pc
 * @property int $prop_type
 * @property float $price
 * @property string $prop_desc
 *
 * @property \App\Model\Entity\Prop $prop
 * @property \App\Model\Entity\Feature[] $feature
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
        'prop_id' => false
    ];
}
