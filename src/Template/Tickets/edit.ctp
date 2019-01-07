<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ticket->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tickets form large-9 medium-8 columns content">
    <?= $this->Form->create($ticket) ?>
    <fieldset>
        <legend><?= __('Edit Ticket') ?></legend>
        <?php
            echo $this->Form->input('orders_id', ['options' => $orders]);
            echo $this->Form->input('events_id', ['options' => $events]);
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            echo $this->Form->input('service_provider');
            echo $this->Form->input('productinfo');
            echo $this->Form->input('phone');
            echo $this->Form->input('ticketName');
            echo $this->Form->input('ticketType');
            echo $this->Form->input('commissionPer');
            echo $this->Form->input('commissionAmt');
            echo $this->Form->input('tickets');
            echo $this->Form->input('eachPrice');
            echo $this->Form->input('commissionTotal');
            echo $this->Form->input('txnid');
            echo $this->Form->input('hash');
            echo $this->Form->input('amount');
            echo $this->Form->input('status');
            echo $this->Form->input('unmappedstatus');
            echo $this->Form->input('field9');
            echo $this->Form->input('bank_ref_num');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
