<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Invitefriend'), ['action' => 'edit', $invitefriend->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Invitefriend'), ['action' => 'delete', $invitefriend->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $invitefriend->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Invitefriends'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invitefriend'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="invitefriends view large-9 medium-8 columns content">
    <h3><?= h($invitefriend->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $invitefriend->has('event') ? $this->Html->link($invitefriend->event->title, ['controller' => 'Events', 'action' => 'view', $invitefriend->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($invitefriend->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($invitefriend->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Email') ?></h4>
        <?= $this->Text->autoParagraph(h($invitefriend->email)); ?>
    </div>
</div>
