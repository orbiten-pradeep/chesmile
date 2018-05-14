<div class="block-header">
  <h2>
    <?= __('Ticket Details') ?>
  </h2>
</div>
<!-- Basic Table -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          Tickets List
        </h2>
      </div>
      <div class="body table-responsive">
        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
          <thead>
            <tr>
              <th scope="col">
                <?= $this->Paginator->sort('Select') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('Serial No') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('events_id') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('firstname') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('name') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('email') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('phone') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('tickets') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('amount') ?>
              </th>
             
              <th scope="col">
                <?= $this->Paginator->sort('status') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('unmappedstatus') ?>
              </th>
              <!--  <th scope="col" class="actions"><?= __('Actions') ?></th> -->
            </tr>
          </thead>
          <tbody>
            <?php   $n=0 + (10 * $page);
foreach ($tickets as $ticket): $n++; ?>
            <tr> 
              <td> 
                <span class="input-group-addon">
                  <input type="radio" name="ticketId" id="t<?= h($ticket->id) ?>" class="with-gap radio-select-list"
                         edit-href-url="<?=$this->Url->build(array('controller' => 'Tickets', 'action' => 'edit', $ticket->id)); ?>"
                         view-href-url="<?=$this->Url->build(array('controller' => 'Tickets', 'action' => 'view', $ticket->id)); ?>"
                         add-href-url="<?=$this->Url->build(array('controller' => 'Tickets', 'action' => 'add', $ticket->id)); ?>"
                         activate-href-url="<?=$this->Url->build(array('controller' => 'Tickets', 'action' => 'activate', $ticket->id)); ?>"
                         deactivate-href-url="<?=$this->Url->build(array('controller' => 'Tickets', 'action' => 'deactivate', $ticket->id)); ?>">
                  <label for="t<?= h($ticket->id) ?>">
                  </label>
                </span>
              </td>
              <td>
                <?= $this->Number->format($n) ?>
              </td>
              <td>
                <?= $ticket->has('event') ? $this->Html->link($ticket->event->title, ['controller' => 'Events', 'action' => 'view', $ticket->event->id]) : '' ?>
              </td>
              <td>
                <?= h($ticket->firstname) ?>
              </td>
              <td>
                <?= h($ticket->name) ?>
              </td>
              <td>
                <?= h($ticket->email) ?>
              </td>
              <td>
                <?= h($ticket->phone) ?>
              </td>
              <td>
                <?= h($ticket->tickets) ?>
              </td>
              <td>
                <?= h($ticket->amount) ?>
              </td>

 
              <td>
                <?= h($ticket->status) ?>
              </td>
              <td>
                <?= h($ticket->unmappedstatus) ?>
              </td>
             

              <!--  <td class="actions">
<?php
echo $this->Html->link( $this->Html->tag('i', 'remove_red_eye', array('class' => 'material-icons', 'title'=>'View Sub Category')), ['action' => 'view', $ticket->id], array('escape'=>false)); ?>
<?= $this->Html->link( $this->Html->tag('i', 'edit', array('class' => 'material-icons', 'title'=>'Edit')), ['action' => 'edit', $ticket->id], array('escape'=>false)); ?>
<?= $this->Form->postLink($this->Html->tag('i', 'delete', array('class' => 'material-icons', 'title'=>'Delete')), ['action' => 'delete', $ticket->id], ['escape'=>false, 'confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?>
</td> -->
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <div class="pull-right">
        <!--   <a id="add" href="">
            <button class="btn btn-primary waves-effect">Add
            </button>
          </a> <?php
echo $this->Html->link( $this->Html->tag('i', 'Add Event', array('class' => 'btn btn-primary waves-effect', 'title'=>'Add Event')), ['action' => 'add'], array('escape'=>false)); ?> 
          <a id ="edit" href="">
            <button class="btn btn-primary waves-effect">Edit
            </button>
          </a> -->
          <a id ="view" href="">
            <button class="btn btn-primary waves-effect">View
            </button>
          </a>
          <!-- <a id ="activate" href="">
            <button class="btn btn-primary waves-effect">Activate
            </button>
          </a>
          <a id ="deactivate" href="">
            <button class="btn btn-primary waves-effect">Deactivate
            </button>
          </a> -->
        </div>
        <br>
        <div class="paginator">
          <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
          </ul>
          <p>
            <?= $this->Paginator->counter() ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 
<div class="tickets index large-9 medium-8 columns content">
<h3><?= __('Tickets') ?></h3>
<table cellpadding="0" cellspacing="0">
<thead>
<tr>
<th scope="col"><?= $this->Paginator->sort('id') ?></th>
<th scope="col"><?= $this->Paginator->sort('events_id') ?></th>
<th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
<th scope="col"><?= $this->Paginator->sort('name') ?></th>
<th scope="col"><?= $this->Paginator->sort('email') ?></th>
<th scope="col"><?= $this->Paginator->sort('phone') ?></th>
<th scope="col"><?= $this->Paginator->sort('tickets') ?></th>
<th scope="col"><?= $this->Paginator->sort('amount') ?></th>
<th scope="col"><?= $this->Paginator->sort('status') ?></th>
<th scope="col"><?= $this->Paginator->sort('unmappedstatus') ?></th>
<th scope="col" class="actions"><?= __('Actions') ?></th>
</tr>
</thead>
<tbody>
<?php foreach ($tickets as $ticket): ?>
<tr>
<td><?= $this->Number->format($ticket->id) ?></td>
<td><?= $ticket->has('event') ? $this->Html->link($ticket->event->title, ['controller' => 'Events', 'action' => 'view', $ticket->event->id]) : '' ?></td>
<td><?= h($ticket->firstname) ?></td>
<td><?= h($ticket->name) ?></td>
<td><?= h($ticket->email) ?></td>
<td><?= h($ticket->phone) ?></td>
<td><?= h($ticket->tickets) ?></td>
<td><?= h($ticket->amount) ?></td>
<td><?= h($ticket->status) ?></td>
<td><?= h($ticket->unmappedstatus) ?></td>
<td class="actions">
<?= $this->Html->link(__('View'), ['action' => 'view', $ticket->id]) ?>
<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?>
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
</div> -->
