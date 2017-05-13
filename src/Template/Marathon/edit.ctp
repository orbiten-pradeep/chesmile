<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $marathon->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $marathon->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Marathon'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="marathon form large-9 medium-8 columns content">
    <?= $this->Form->create($marathon) ?>
    <fieldset>
        <legend><?= __('Edit Marathon') ?></legend>
        <?php
            echo $this->Form->input('events_id', ['options' => $events]);
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('date', ['empty' => true]);
            echo $this->Form->input('sex');
            echo $this->Form->input('email');
            echo $this->Form->input('mobile_number');
            echo $this->Form->input('KM');
            echo $this->Form->input('TSHIRT');
            echo $this->Form->input('activation_key');
            echo $this->Form->input('Active');
            echo $this->Form->input('Created');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
