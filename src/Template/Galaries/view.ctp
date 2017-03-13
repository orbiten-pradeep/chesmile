<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Galary'), ['action' => 'edit', $galary->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Galary'), ['action' => 'delete', $galary->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $galary->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Galaries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Galary'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="galaries view large-9 medium-8 columns content">
    <h3><?= h($galary->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $galary->has('event') ? $this->Html->link($galary->event->title, ['controller' => 'Events', 'action' => 'view', $galary->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Galary') ?></th>
            <td><?= h($galary->galary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($galary->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($galary->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($galary->modified) ?></td>
        </tr>
    </table>
</div>
