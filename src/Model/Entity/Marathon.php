<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Marathon Entity
 *
 * @property int $ID
 * @property int $events_id
 * @property string $firstname
 * @property string $lastname
 * @property \Cake\I18n\Time $date
 * @property string $sex
 * @property string $email
 * @property string $mobile_number
 * @property string $KM
 * @property string $TSHIRT
 * @property string $activation_key
 * @property int $Active
 * @property \Cake\I18n\Time $Created
 *
 * @property \App\Model\Entity\Event $event
 */
class Marathon extends Entity
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
