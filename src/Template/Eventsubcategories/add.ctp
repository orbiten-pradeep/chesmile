<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Eventsubcategories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventsubcategories form large-9 medium-8 columns content">
    <?= $this->Form->create($eventsubcategory) ?>
    <fieldset>
        <legend><?= __('Add Eventsubcategory') ?></legend>
        <?php
            echo $this->Form->input('events_id', ['options' => $events]);
            echo $this->Form->input('sub_categories');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
