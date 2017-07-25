<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ticket Entity
 *
 * @property int $ID
 * @property int $events_id
 * @property string $firstname
 * @property string $lastname
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $tickets
 * @property string $txnid
 * @property string $amount
 * @property \Cake\I18n\Time $created
 * @property string $Status
 *
 * @property \App\Model\Entity\Event $event
 */
class Ticket extends Entity
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
