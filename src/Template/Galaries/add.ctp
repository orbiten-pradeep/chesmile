<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Galaries'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="galaries form large-9 medium-8 columns content">
    <?= $this->Form->create($galary, array('enctype' => 'multipart/form-data')) ?>
    <fieldset>
        <legend><?= __('Add Galary') ?></legend>
        <?php
            echo $this->Form->input('events_id', ['options' => $events]);
            echo $this->Form->input('galary[]', array('type' => 'file', 'multiple'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
