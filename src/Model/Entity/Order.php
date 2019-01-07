<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $ID
 * @property int $events_id
 * @property string $firstname
 * @property string $lastname
 * @property string $fullname
 * @property string $email
 * @property string $phone
 * @property string $ticketsCnt
 * @property string $amountTot
 * @property string $productinfo
 * @property string $service_provider
 * @property string $txnid
 * @property string $hash
 * @property string $unmappedstatus
 * @property string $field9
 * @property string $bank_ref_num
 * @property string $status
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\Event $event
 */
class Order extends Entity
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
