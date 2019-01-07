<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bookingonline'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bookingonline form large-9 medium-8 columns content">
    <?= $this->Form->create($bookingonline) ?>
    <fieldset>
        <legend><?= __('Add Bookingonline') ?></legend>
        <?php
            echo $this->Form->input('events_id', ['options' => $events]);
            echo $this->Form->input('name');
            echo $this->Form->input('tickettype');
            echo $this->Form->input('price');
            echo $this->Form->input('noofseats');
            echo $this->Form->input('commission_per');
            echo $this->Form->input('commission_amt');
            echo $this->Form->input('enddate', ['empty' => true]);
            echo $this->Form->input('startdate', ['empty' => true]);
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
