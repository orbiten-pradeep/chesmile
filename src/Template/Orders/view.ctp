<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $order->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orders view large-9 medium-8 columns content">
    <h3><?= h($order->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $order->has('event') ? $this->Html->link($order->event->title, ['controller' => 'Events', 'action' => 'view', $order->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($order->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($order->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fullname') ?></th>
            <td><?= h($order->fullname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($order->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($order->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TicketsCnt') ?></th>
            <td><?= h($order->ticketsCnt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AmountTot') ?></th>
            <td><?= h($order->amountTot) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Productinfo') ?></th>
            <td><?= h($order->productinfo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service Provider') ?></th>
            <td><?= h($order->service_provider) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Txnid') ?></th>
            <td><?= h($order->txnid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hash') ?></th>
            <td><?= h($order->hash) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unmappedstatus') ?></th>
            <td><?= h($order->unmappedstatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Field9') ?></th>
            <td><?= h($order->field9) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bank Ref Num') ?></th>
            <td><?= h($order->bank_ref_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($order->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($order->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($order->created) ?></td>
        </tr>
    </table>
</div>
