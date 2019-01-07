<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orders index large-9 medium-8 columns content">
    <h3><?= __('Orders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('events_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fullname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticketsCnt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amountTot') ?></th>
                <th scope="col"><?= $this->Paginator->sort('productinfo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_provider') ?></th>
                <th scope="col"><?= $this->Paginator->sort('txnid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hash') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unmappedstatus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('field9') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bank_ref_num') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= $this->Number->format($order->ID) ?></td>
                <td><?= $order->has('event') ? $this->Html->link($order->event->title, ['controller' => 'Events', 'action' => 'view', $order->event->id]) : '' ?></td>
                <td><?= h($order->firstname) ?></td>
                <td><?= h($order->lastname) ?></td>
                <td><?= h($order->fullname) ?></td>
                <td><?= h($order->email) ?></td>
                <td><?= h($order->phone) ?></td>
                <td><?= h($order->ticketsCnt) ?></td>
                <td><?= h($order->amountTot) ?></td>
                <td><?= h($order->productinfo) ?></td>
                <td><?= h($order->service_provider) ?></td>
                <td><?= h($order->txnid) ?></td>
                <td><?= h($order->hash) ?></td>
                <td><?= h($order->unmappedstatus) ?></td>
                <td><?= h($order->field9) ?></td>
                <td><?= h($order->bank_ref_num) ?></td>
                <td><?= h($order->status) ?></td>
                <td><?= h($order->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $order->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $order->ID)]) ?>
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
