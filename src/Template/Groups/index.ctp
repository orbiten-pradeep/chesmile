<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display: none;">
  <ul class="side-nav">
    <li class="heading">
      <?= __('Actions') ?>
    </li>
    <li>
      <?= $this->Html->link(__('New Group'), ['action' => 'add']) ?>
    </li>
    <li>
      <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?>
    </li>
    <li>
      <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?>
    </li>
  </ul>
</nav>
<div class="block-header">
  <h2>
    <?= __('Groups') ?>
  </h2>
</div>
<!-- Basic Table -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          Groups List
        </h2>
        <ul class="header-dropdown m-r--5 pull-right">
        <?= $this->Form->create("",['type'=> 'get'])?>
      <?= $this->Form->control('keyword',['default'=> $this->request->query('keyword')]); ?>
       <button>Search</button>
        <?= $this->Form->end()?>
        </ul>
      </div>
      <div class="body table-responsive">
        <table class="table table-bordered table-striped table-hover ">
          <thead>
            <tr>
              <th scope="col"><?= __('Select') ?>
               <!--  <?= $this->Paginator->sort('Select') ?> -->
              </th>
              <th scope="col"><?= __('Serial No') ?>
                <!-- <?= $this->Paginator->sort('Serial No') ?> -->
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('name') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('role') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('created') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('modified') ?>
              </th>
              <!-- <th scope="col" class="actions"><?= __('Actions') ?></th> -->
            </tr>
          </thead>
          <tbody>
            <?php
$n=0 + (10 * $page);
foreach ($groups as $group): $n++; ?>
            <tr>
              <td> 
                <span class="input-group-addon">
                  <input type="radio" name="groupId" id="g<?= h($group->id) ?>" value ="<?=($group->id)?>" class="with-gap radio-select-list" 
                         edit-href-url="<?=$this->Url->build(array('controller' => 'Groups', 'action' => 'edit', $group->id)); ?>"
                         view-href-url="<?=$this->Url->build(array('controller' => 'Groups', 'action' => 'view', $group->id)); ?>"
                         add-href-url="<?=$this->Url->build(array('controller' => 'Groups', 'action' => 'add', $group->id)); ?>"
                         activate-href-url="<?=$this->Url->build(array('controller' => 'Groups', 'action' => 'activate', $group->id)); ?>"
                         deactivate-href-url="<?=$this->Url->build(array('controller' => 'Groups', 'action' => 'deactivate', $group->id)); ?>">
                  <label for="g<?= h($group->id) ?>">
                  </label>
                </span>
              </td>
              <td>
                <?= $this->Number->format($n) ?>
              </td>
              <td>
                <?= h($group->name) ?>
              </td>
              <td>
                <?= h($group->role) ?>
              </td>
              <td>
                <?= h($group->created) ?>
              </td>
              <td>
                <?= h($group->modified) ?>
              </td>
              <!--  <td class="actions">
<?php
echo $this->Html->link( $this->Html->tag('i', 'remove_red_eye', array('class' => 'material-icons', 'title'=>'View Group')), ['action' => 'view', $group->id], array('escape'=>false)); ?>
<?= $this->Html->link( $this->Html->tag('i', 'edit', array('class' => 'material-icons', 'title'=>'Edit')), ['action' => 'edit', $group->id], array('escape'=>false)); ?>
<?= $this->Html->link( $this->Html->tag('i', 'add_circle', array('class' => 'material-icons', 'title'=>'Activate')), ['action' => '', $group->id], array('escape'=>false));?>
<?= $this->Html->link( $this->Html->tag('i', 'remove_circle', array('class' => 'material-icons', 'title'=>'De-Activate')), ['action' => '', $group->id], array('escape'=>false));?>
<?= $this->Form->postLink($this->Html->tag('i', 'delete', array('class' => 'material-icons', 'title'=>'Delete')), ['action' => 'delete', $group->id], ['escape'=>false, 'confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?>
</td> -->
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <div class="pull-right">
         <?php
echo $this->Html->link( $this->Html->tag('i', 'Add Group', array('class' => 'btn btn-primary waves-effect', 'title'=>'Add Group')), ['action' => 'add'], array('escape'=>false)); ?> 
         
          <!-- <a id="add" href="">
            <button class="btn btn-primary waves-effect">Add
            </button>
          </a> -->
          <a id ="edit" href="">
            <button class="btn btn-primary waves-effect">Edit
            </button>
          </a>
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
          <!-- <button type="button" class="btn btn-primary waves-effect">Add</button>
<button type="button" class="btn btn-primary waves-effect">View</button>
<button type="button" class="btn btn-primary waves-effect">Edit</button>
<button type="button" class="btn btn-primary waves-effect">Activate</button>
<button type="button" class="btn btn-primary waves-effect">Deactivate</button> -->
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
<!-- <div class="groups index large-9 medium-8 columns content">
<h3><?= __('Groups') ?></h3>
<table cellpadding="0" cellspacing="0">
<thead>
<tr>
<th scope="col"><?= $this->Paginator->sort('id') ?></th>
<th scope="col"><?= $this->Paginator->sort('name') ?></th>
<th scope="col"><?= $this->Paginator->sort('role') ?></th>
<th scope="col"><?= $this->Paginator->sort('created') ?></th>
<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
<th scope="col" class="actions"><?= __('Actions') ?></th>
</tr>
</thead>
<tbody>
<?php foreach ($groups as $group): ?>
<tr>
<td><?= $this->Number->format($group->id) ?></td>
<td><?= h($group->name) ?></td>
<td><?= h($group->role) ?></td>
<td><?= h($group->created) ?></td>
<td><?= h($group->modified) ?></td>
<td class="actions">
<?= $this->Html->link(__('View'), ['action' => 'view', $group->id]) ?>
<?= $this->Html->link(__('Edit'), ['action' => 'edit', $group->id]) ?>
<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?>
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
