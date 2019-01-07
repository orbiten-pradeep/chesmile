<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ticket Entity
 *
 * @property int $id
 * @property int $orders_id
 * @property int $events_id
 * @property string $firstname
 * @property string $lastname
 * @property string $name
 * @property string $email
 * @property string $service_provider
 * @property string $productinfo
 * @property string $phone
 * @property string $ticketName
 * @property string $ticketType
 * @property string $commissionPer
 * @property string $commissionAmt
 * @property string $tickets
 * @property string $eachPrice
 * @property string $commissionTotal
 * @property string $txnid
 * @property string $hash
 * @property string $amount
 * @property \Cake\I18n\Time $created
 * @property string $status
 * @property string $unmappedstatus
 * @property string $field9
 * @property string $bank_ref_num
 *
 * @property \App\Model\Entity\Order $order
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
        'id' => false
    ];
}
