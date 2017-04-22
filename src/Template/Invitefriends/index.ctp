<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Invitefriend'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="invitefriends index large-9 medium-8 columns content">
    <h3><?= __('Invitefriends') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('events_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('activation_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($invitefriends as $invitefriend): ?>
            <tr>
                <td><?= $this->Number->format($invitefriend->ID) ?></td>
                <td><?= $invitefriend->has('event') ? $this->Html->link($invitefriend->event->title, ['controller' => 'Events', 'action' => 'view', $invitefriend->event->id]) : '' ?></td>
                <td><?= h($invitefriend->activation_key) ?></td>
                <td><?= h($invitefriend->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $invitefriend->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invitefriend->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $invitefriend->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $invitefriend->ID)]) ?>
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
