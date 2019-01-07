<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tickets index large-9 medium-8 columns content">
    <h3><?= __('Tickets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('orders_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('events_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_provider') ?></th>
                <th scope="col"><?= $this->Paginator->sort('productinfo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticketName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticketType') ?></th>
                <th scope="col"><?= $this->Paginator->sort('commissionPer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('commissionAmt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tickets') ?></th>
                <th scope="col"><?= $this->Paginator->sort('eachPrice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('commissionTotal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('txnid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hash') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unmappedstatus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('field9') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bank_ref_num') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tickets as $ticket): ?>
            <tr>
                <td><?= $this->Number->format($ticket->id) ?></td>
                <td><?= $ticket->has('order') ? $this->Html->link($ticket->order->ID, ['controller' => 'Orders', 'action' => 'view', $ticket->order->ID]) : '' ?></td>
                <td><?= $ticket->has('event') ? $this->Html->link($ticket->event->title, ['controller' => 'Events', 'action' => 'view', $ticket->event->id]) : '' ?></td>
                <td><?= h($ticket->firstname) ?></td>
                <td><?= h($ticket->lastname) ?></td>
                <td><?= h($ticket->name) ?></td>
                <td><?= h($ticket->email) ?></td>
                <td><?= h($ticket->service_provider) ?></td>
                <td><?= h($ticket->productinfo) ?></td>
                <td><?= h($ticket->phone) ?></td>
                <td><?= h($ticket->ticketName) ?></td>
                <td><?= h($ticket->ticketType) ?></td>
                <td><?= h($ticket->commissionPer) ?></td>
                <td><?= h($ticket->commissionAmt) ?></td>
                <td><?= h($ticket->tickets) ?></td>
                <td><?= h($ticket->eachPrice) ?></td>
                <td><?= h($ticket->commissionTotal) ?></td>
                <td><?= h($ticket->txnid) ?></td>
                <td><?= h($ticket->hash) ?></td>
                <td><?= h($ticket->amount) ?></td>
                <td><?= h($ticket->created) ?></td>
                <td><?= h($ticket->status) ?></td>
                <td><?= h($ticket->unmappedstatus) ?></td>
                <td><?= h($ticket->field9) ?></td>
                <td><?= h($ticket->bank_ref_num) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticket->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticket->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
