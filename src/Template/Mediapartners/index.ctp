<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mediapartner'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mediapartners index large-9 medium-8 columns content">
    <h3><?= __('Mediapartners') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('events_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MediaPartners') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mediapartners as $mediapartner): ?>
            <tr>
                <td><?= $this->Number->format($mediapartner->id) ?></td>
                <td><?= $mediapartner->has('event') ? $this->Html->link($mediapartner->event->title, ['controller' => 'Events', 'action' => 'view', $mediapartner->event->id]) : '' ?></td>
                <td><?= h($mediapartner->MediaPartners) ?></td>
                <td><?= h($mediapartner->created) ?></td>
                <td><?= h($mediapartner->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mediapartner->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mediapartner->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mediapartner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mediapartner->id)]) ?>
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
