<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display: none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?> </li>
        
    </ul>
</nav>

<div class="block-header">
    <h2><?= __('SubCategories') ?></h2>
</div>
<!-- Basic Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Ticket Details
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body table-responsive">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable vertical-table">
                    <thead>
                        <tr>
                            <th scope="row"><?= __('Event') ?></th>
                            <th scope="row"><?= __('Firstname') ?></th>
                            <th scope="row"><?= __('Lastname') ?></th>
                            <th scope="row"><?= __('Name') ?></th>
                            <th scope="row"><?= __('Email') ?></th>
                            <th scope="row"><?= __('Service Provider') ?></th>
                            <th scope="row"><?= __('Productinfo') ?></th>
                            <th scope="row"><?= __('Phone') ?></th>
                            <th scope="row"><?= __('Tickets') ?></th>
                            <th scope="row"><?= __('Txnid') ?></th>
                            <th scope="row"><?= __('Hash') ?></th>
                            <th scope="row"><?= __('Amount') ?></th>
                            <th scope="row"><?= __('Status') ?></th>
                            <th scope="row"><?= __('Unmappedstatus') ?></th>
                            <th scope="row"><?= __('Field9') ?></th>
                            <th scope="row"><?= __('Bank Ref Num') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td><?= $ticket->has('event') ? $this->Html->link($ticket->event->title, ['controller' => 'Events', 'action' => 'view', $ticket->event->id]) : '' ?></td>
                                <td><?= h($ticket->firstname) ?></td>
                                <td><?= h($ticket->lastname) ?></td>
                                <td><?= h($ticket->name) ?></td>
                                <td><?= h($ticket->email) ?></td>
                                <td><?= h($ticket->email) ?></td>
                                <td><?= h($ticket->service_provider) ?></td>
                                <td><?= h($ticket->productinfo) ?></td>
                                <td><?= h($ticket->phone) ?></td>
                                <td><?= h($ticket->tickets) ?></td>
                                <td><?= h($ticket->txnid) ?></td>
                                <td><?= h($ticket->hash) ?></td>
                                <td><?= h($ticket->amount) ?></td>
                                <td><?= h($ticket->status) ?></td>
                                <td><?= h($ticket->unmappedstatus) ?></td>
                                <td><?= h($ticket->field9) ?></td>
                                <td><?= h($ticket->bank_ref_num) ?></td>
                            </tr>
                    </tbody>
                </table>
                <!-- <div class="paginator">
                    <ul class="pagination">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    </ul>
                    <p><?= $this->Paginator->counter() ?></p>
                </div>  -->
            </div>
            <div class="body table-responsive">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable vertical-table">
                    <thead>
                        <tr>
                             <th scope="col"><?= __('FirstName') ?></th>
                            <th scope="col"><?= __('LastName') ?></th>
                            <th scope="col"><?= __('Email') ?></th>
                            <th scope="col"><?= __('Phone') ?></th>
                            <th scope="col"><?= __('TSHIRT') ?></th>
                            <th scope="col"><?= __('KM') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php foreach ($marathons as $marathon): ?>
                    <tr>
                        <td><?= h($marathon->firstname) ?></td>
                        <td><?= h($marathon->lastname) ?></td>
                        <td><?= h($marathon->email) ?></td>
                        <td><?= h($marathon->phone) ?></td>
                        <td><?= h($marathon->TSHIRT) ?></td>
                        <td><?= h($marathon->KM) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Marathonbooking','action' => 'view', $marathon->id]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- <div class="paginator">
                    <ul class="pagination">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    </ul>
                    <p><?= $this->Paginator->counter() ?></p>
                </div>  -->
            </div>
        </div>
    </div>
</div>
<!-- <div class="tickets view large-9 medium-8 columns content">
    <h3><?= h($ticket->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $ticket->has('event') ? $this->Html->link($ticket->event->title, ['controller' => 'Events', 'action' => 'view', $ticket->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($ticket->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($ticket->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($ticket->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($ticket->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service Provider') ?></th>
            <td><?= h($ticket->service_provider) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Productinfo') ?></th>
            <td><?= h($ticket->productinfo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($ticket->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tickets') ?></th>
            <td><?= h($ticket->tickets) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Txnid') ?></th>
            <td><?= h($ticket->txnid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hash') ?></th>
            <td><?= h($ticket->hash) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= h($ticket->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($ticket->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unmappedstatus') ?></th>
            <td><?= h($ticket->unmappedstatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Field9') ?></th>
            <td><?= h($ticket->field9) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bank Ref Num') ?></th>
            <td><?= h($ticket->bank_ref_num) ?></td>
        </tr>
        <tr>
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col"><?= __('FirstName') ?></th>
                        <th scope="col"><?= __('LastName') ?></th>
                        <th scope="col"><?= __('Email') ?></th>
                        <th scope="col"><?= __('Phone') ?></th>
                        <th scope="col"><?= __('TSHIRT') ?></th>
                        <th scope="col"><?= __('KM') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                     <?php foreach ($marathons as $marathon): ?>
                    <tr>
                        <td><?= h($marathon->firstname) ?></td>
                        <td><?= h($marathon->lastname) ?></td>
                        <td><?= h($marathon->email) ?></td>
                        <td><?= h($marathon->phone) ?></td>
                        <td><?= h($marathon->TSHIRT) ?></td>
                        <td><?= h($marathon->KM) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Marathonbooking','action' => 'view', $marathon->id]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
                 
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ticket->created) ?></td>
        </tr>
    </table>
</div>
 -->