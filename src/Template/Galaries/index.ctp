<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Galary'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="galaries index large-9 medium-8 columns content">
    <h3><?= __('Galaries') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('events_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('galary') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($galaries as $galary): ?>
            <tr>
                <td><?= $this->Number->format($galary->ID) ?></td>
                <td><?= $galary->has('event') ? $this->Html->link($galary->event->title, ['controller' => 'Events', 'action' => 'view', $galary->event->id]) : '' ?></td>
                <td><?= h($galary->galary) ?></td>
                <td><?= h($galary->created) ?></td>
                <td><?= h($galary->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $galary->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $galary->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $galary->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $galary->ID)]) ?>
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
