<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Addres'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="address index large-9 medium-8 columns content">
    <h3><?= __('Address') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('events_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('landmark') ?></th>
                <th scope="col"><?= $this->Paginator->sort('areaname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($address as $addres): ?>
            <tr>
                <td><?= $this->Number->format($addres->ID) ?></td>
                <td><?= $addres->has('event') ? $this->Html->link($addres->event->title, ['controller' => 'Events', 'action' => 'view', $addres->event->id]) : '' ?></td>
                <td><?= h($addres->address_1) ?></td>
                <td><?= h($addres->address_2) ?></td>
                <td><?= h($addres->landmark) ?></td>
                <td><?= h($addres->areaname) ?></td>
                <td><?= h($addres->city) ?></td>
                <td><?= h($addres->state) ?></td>
                <td><?= h($addres->country) ?></td>
                <td><?= h($addres->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $addres->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $addres->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $addres->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $addres->ID)]) ?>
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
