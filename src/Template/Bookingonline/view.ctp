<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bookingonline'), ['action' => 'edit', $bookingonline->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bookingonline'), ['action' => 'delete', $bookingonline->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookingonline->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bookingonline'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookingonline'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bookingonline view large-9 medium-8 columns content">
    <h3><?= h($bookingonline->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $bookingonline->has('event') ? $this->Html->link($bookingonline->event->title, ['controller' => 'Events', 'action' => 'view', $bookingonline->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($bookingonline->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tickettype') ?></th>
            <td><?= h($bookingonline->tickettype) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= h($bookingonline->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Noofseats') ?></th>
            <td><?= h($bookingonline->noofseats) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Commission Per') ?></th>
            <td><?= h($bookingonline->commission_per) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Commission Amt') ?></th>
            <td><?= h($bookingonline->commission_amt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bookingonline->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($bookingonline->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enddate') ?></th>
            <td><?= h($bookingonline->enddate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Startdate') ?></th>
            <td><?= h($bookingonline->startdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bookingonline->created) ?></td>
        </tr>
    </table>
</div>
