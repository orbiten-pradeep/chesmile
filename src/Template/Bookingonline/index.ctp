<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bookingonline'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bookingonline index large-9 medium-8 columns content">
    <h3><?= __('Bookingonline') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('events_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tickettype') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('noofseats') ?></th>
                <th scope="col"><?= $this->Paginator->sort('commission_per') ?></th>
                <th scope="col"><?= $this->Paginator->sort('commission_amt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('enddate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('startdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bookingonline as $bookingonline): ?>
            <tr>
                <td><?= $this->Number->format($bookingonline->id) ?></td>
                <td><?= $bookingonline->has('event') ? $this->Html->link($bookingonline->event->title, ['controller' => 'Events', 'action' => 'view', $bookingonline->event->id]) : '' ?></td>
                <td><?= h($bookingonline->name) ?></td>
                <td><?= h($bookingonline->tickettype) ?></td>
                <td><?= h($bookingonline->price) ?></td>
                <td><?= h($bookingonline->noofseats) ?></td>
                <td><?= h($bookingonline->commission_per) ?></td>
                <td><?= h($bookingonline->commission_amt) ?></td>
                <td><?= h($bookingonline->enddate) ?></td>
                <td><?= h($bookingonline->startdate) ?></td>
                <td><?= $this->Number->format($bookingonline->status) ?></td>
                <td><?= h($bookingonline->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bookingonline->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bookingonline->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bookingonline->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookingonline->id)]) ?>
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
