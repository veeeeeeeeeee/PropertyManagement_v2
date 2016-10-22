<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PropertyImage Entity
 *
 * @property int $img_id
 * @property string $img_path
 * @property int $prop_id
 *
 * @property \App\Model\Entity\Img $img
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
        'img_id' => false
    ];
}
