<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Addres Entity
 *
 * @property int $ID
 * @property int $events_id
 * @property string $address_1
 * @property string $address_2
 * @property string $landmark
 * @property string $areaname
 * @property string $city
 * @property string $state
 * @property string $country
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\Event $event
 */
class Addres extends Entity
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
        'ID' => false
    ];
}
