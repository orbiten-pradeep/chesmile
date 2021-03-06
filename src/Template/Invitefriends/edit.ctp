<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $invitefriend->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $invitefriend->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Invitefriends'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="invitefriends form large-9 medium-8 columns content">
    <?= $this->Form->create($invitefriend) ?>
    <fieldset>
        <legend><?= __('Edit Invitefriend') ?></legend>
        <?php
            echo $this->Form->input('events_id', ['options' => $events]);
            echo $this->Form->input('activation_key');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
