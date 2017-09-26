<div class="marathonbooking view large-9 medium-8 columns content">
    <h3><?= h($marathonbooking->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ticket') ?></th>
            <td><?= $marathonbooking->has('ticket') ? $this->Html->link($marathonbooking->ticket->id, ['controller' => 'Tickets', 'action' => 'view', $marathonbooking->tickets_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($marathonbooking->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($marathonbooking->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($marathonbooking->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($marathonbooking->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TSHIRT') ?></th>
            <td><?= h($marathonbooking->TSHIRT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('KM') ?></th>
            <td><?= h($marathonbooking->KM) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($marathonbooking->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($marathonbooking->created) ?></td>
        </tr>
    </table>
</div>
