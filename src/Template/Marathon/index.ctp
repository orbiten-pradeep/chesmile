<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Marathon'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="marathon index large-9 medium-8 columns content">
    <h3><?= __('Marathon') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('events_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('KM') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TSHIRT') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($marathon as $marathon): ?>
            <tr>
                <td><?= $this->Number->format($marathon->ID) ?></td>
                <td><?= $marathon->has('event') ? $this->Html->link($marathon->event->title, ['controller' => 'Events', 'action' => 'view', $marathon->event->id]) : '' ?></td>
                <td><?= h($marathon->firstname) ?></td>
                <td><?= h($marathon->lastname) ?></td>
                <td><?= h($marathon->date) ?></td>
                <td><?= h($marathon->sex) ?></td>
                <td><?= h($marathon->email) ?></td>
                <td><?= h($marathon->mobile_number) ?></td>
                <td><?= h($marathon->KM) ?></td>
                <td><?= h($marathon->TSHIRT) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $marathon->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $marathon->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $marathon->ID)]) ?>
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
