<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mediapartner->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mediapartner->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mediapartners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mediapartners form large-9 medium-8 columns content">
    <?= $this->Form->create($mediapartner) ?>
    <fieldset>
        <legend><?= __('Edit Mediapartner') ?></legend>
        <?php
            echo $this->Form->input('events_id', ['options' => $events]);
            echo $this->Form->input('MediaPartners');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
