<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Eventsubcategory'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventsubcategories index large-9 medium-8 columns content">
    <h3><?= __('Eventsubcategories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('events_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sub_categories') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventsubcategories as $eventsubcategory): ?>
            <tr>
                <td><?= $this->Number->format($eventsubcategory->id) ?></td>
                <td><?= $eventsubcategory->has('event') ? $this->Html->link($eventsubcategory->event->title, ['controller' => 'Events', 'action' => 'view', $eventsubcategory->event->id]) : '' ?></td>
                <td><?= $this->Number->format($eventsubcategory->sub_categories) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $eventsubcategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $eventsubcategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $eventsubcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventsubcategory->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
