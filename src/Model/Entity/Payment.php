<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $ID
 * @property int $events_id
 * @property string $events_title
 * @property string $name
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $phone
 * @property string $amount
 * @property string $txnid
 * @property string $status
 * @property string $productinfo
 *
 * @property \App\Model\Entity\Event $event
 */
class Payment extends Entity
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
