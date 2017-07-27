<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Marathonbooking'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="marathonbooking index large-9 medium-8 columns content">
    <h3><?= __('Marathonbooking') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tickets_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TSHIRT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('KM') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($marathonbooking as $marathonbooking): ?>
            <tr>
                <td><?= $this->Number->format($marathonbooking->id) ?></td>
                <td><?= $marathonbooking->has('ticket') ? $this->Html->link($marathonbooking->ticket->name, ['controller' => 'Tickets', 'action' => 'view', $marathonbooking->ticket->id]) : '' ?></td>
                <td><?= h($marathonbooking->firstname) ?></td>
                <td><?= h($marathonbooking->lastname) ?></td>
                <td><?= h($marathonbooking->email) ?></td>
                <td><?= h($marathonbooking->phone) ?></td>
                <td><?= h($marathonbooking->TSHIRT) ?></td>
                <td><?= h($marathonbooking->KM) ?></td>
                <td><?= h($marathonbooking->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $marathonbooking->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $marathonbooking->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $marathonbooking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marathonbooking->id)]) ?>
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
