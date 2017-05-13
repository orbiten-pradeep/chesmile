<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Marathon'), ['action' => 'edit', $marathon->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Marathon'), ['action' => 'delete', $marathon->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $marathon->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Marathon'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Marathon'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="marathon view large-9 medium-8 columns content">
    <h3><?= h($marathon->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $marathon->has('event') ? $this->Html->link($marathon->event->title, ['controller' => 'Events', 'action' => 'view', $marathon->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($marathon->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($marathon->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex') ?></th>
            <td><?= h($marathon->sex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($marathon->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile Number') ?></th>
            <td><?= h($marathon->mobile_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('KM') ?></th>
            <td><?= h($marathon->KM) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TSHIRT') ?></th>
            <td><?= h($marathon->TSHIRT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activation Key') ?></th>
            <td><?= h($marathon->activation_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($marathon->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($marathon->Active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($marathon->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($marathon->Created) ?></td>
        </tr>
    </table>
</div>
