<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $order->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $order->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orders form large-9 medium-8 columns content">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Edit Order') ?></legend>
        <?php
            echo $this->Form->input('events_id', ['options' => $events]);
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('fullname');
            echo $this->Form->input('email');
            echo $this->Form->input('phone');
            echo $this->Form->input('ticketsCnt');
            echo $this->Form->input('amountTot');
            echo $this->Form->input('productinfo');
            echo $this->Form->input('service_provider');
            echo $this->Form->input('txnid');
            echo $this->Form->input('hash');
            echo $this->Form->input('unmappedstatus');
            echo $this->Form->input('field9');
            echo $this->Form->input('bank_ref_num');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
