<div class="block-header">
    <h2>Ticket Details</h2>
</div>
<!-- Basic Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body table-responsive">
                <table class=" table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th scope="col"><?= __('Ticket Id') ?></th>
                            <th scope="col"><?= __('Firstname') ?></th>
                            <th scope="col"><?= __('Lastname') ?></th>
                            <th scope="col"><?= __('Email') ?></th>
                            <th scope="col"><?= __('Phone') ?></th>
                            <th scope="col"><?= __('TSHIRT') ?></th>
                            <th scope="col"><?= __('KM') ?></th>
                            <th scope="col"><?= __('Id') ?></th>
                            <th scope="col"><?= __('Created') ?></th>
                        </tr>
                    </thead>
                    <tbody>

                            <tr>
                                <td><?= $marathonbooking->has('ticket') ? $this->Html->link($marathonbooking->ticket->id, ['controller' => 'Tickets', 'action' => 'view', $marathonbooking->tickets_id]) : '' ?></td>
                                <td><?= h($marathonbooking->firstname) ?></td>
                                <td><?= h($marathonbooking->lastname) ?></td>
                                <td><?= h($marathonbooking->email) ?></td>
                                <td><?= h($marathonbooking->phone) ?></td>
                                <td><?= h($marathonbooking->TSHIRT) ?></td>
                                <td><?= h($marathonbooking->KM) ?></td>
                                <td><?= $this->Number->format($marathonbooking->id) ?></td>
                                <td><?= h($marathonbooking->created) ?></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- <div class="marathonbooking view large-9 medium-8 columns content">
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
</div> -->
