<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $client_id
 * @property string $client_name
 * @property string $client_lname
 * @property string $client_email
 * @property string $client_mobile
 * @property string $client_street
 * @property string $client_suburb
 * @property string $client_state
 * @property string $client_pc
 *
 * @property \App\Model\Entity\Client $client
 */
class Client extends Entity
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
        'client_id' => false
    ];
}
