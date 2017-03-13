<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Eventsubcategory'), ['action' => 'edit', $eventsubcategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Eventsubcategory'), ['action' => 'delete', $eventsubcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventsubcategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Eventsubcategories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Eventsubcategory'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eventsubcategories view large-9 medium-8 columns content">
    <h3><?= h($eventsubcategory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $eventsubcategory->has('event') ? $this->Html->link($eventsubcategory->event->title, ['controller' => 'Events', 'action' => 'view', $eventsubcategory->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($eventsubcategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sub Categories') ?></th>
            <td><?= $this->Number->format($eventsubcategory->sub_categories) ?></td>
        </tr>
    </table>
</div>
