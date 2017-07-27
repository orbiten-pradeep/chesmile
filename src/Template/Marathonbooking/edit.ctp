<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $marathonbooking->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $marathonbooking->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Marathonbooking'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="marathonbooking form large-9 medium-8 columns content">
    <?= $this->Form->create($marathonbooking) ?>
    <fieldset>
        <legend><?= __('Edit Marathonbooking') ?></legend>
        <?php
            echo $this->Form->input('tickets_id', ['options' => $tickets]);
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('email');
            echo $this->Form->input('phone');
            echo $this->Form->input('TSHIRT');
            echo $this->Form->input('KM');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
