<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mediapartner'), ['action' => 'edit', $mediapartner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mediapartner'), ['action' => 'delete', $mediapartner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mediapartner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mediapartners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mediapartner'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mediapartners view large-9 medium-8 columns content">
    <h3><?= h($mediapartner->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $mediapartner->has('event') ? $this->Html->link($mediapartner->event->title, ['controller' => 'Events', 'action' => 'view', $mediapartner->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MediaPartners') ?></th>
            <td><?= h($mediapartner->MediaPartners) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mediapartner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mediapartner->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mediapartner->modified) ?></td>
        </tr>
    </table>
</div>
