<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar" style="display: none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= //$this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?> </li>
        <li><?= //$this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
        <li><?= //$this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
        <li><?=// $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
        <li><?= //$this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= //$this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>-->
 <div class="block-header">
    <h2><?= h($group->name) ?></h2>
</div>
<!-- Basic Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Groups List
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
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($group->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($group->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($group->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($group->modified) ?></td>
        </tr>
    </table>
</div>
            <div class="body table-responsive">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                             <th scope="col"><?= __('Id') ?></th>
                            <th scope="col"><?= __('Email') ?></th>
                            <th scope="col"><?= __('Password') ?></th>
                            <th scope="col"><?= __('Fullname') ?></th>
                            <th scope="col"><?= __('Group Id') ?></th>
                            <th scope="col"><?= __('Created') ?></th>
                            <th scope="col"><?= __('Modified') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($group->users as $users): ?>
                            <tr>
                                <td><?= h($users->id) ?></td>
                                <td><?= h($users->email) ?></td>
                                <td><?= h($users->password) ?></td>
                                <td><?= h($users->fullname) ?></td>
                                <td><?= h($users->group_id) ?></td>
                                <td><?= h($users->created) ?></td>
                                <td><?= h($users->modified) ?></td>
                                <td class="actions">
                                    <?php
                                    echo $this->Html->link( $this->Html->tag('i', 'remove_red_eye', array('class' => 'material-icons', 'title'=>'View User')), ['action' => 'view', $users->id], array('escape'=>false)); ?>

                                    <?= $this->Html->link( $this->Html->tag('i', 'edit', array('class' => 'material-icons', 'title'=>'Edit')), ['action' => 'edit', $users->id], array('escape'=>false)); ?>

                                    <?= $this->Form->postLink($this->Html->tag('i', 'delete', array('class' => 'material-icons', 'title'=>'Delete')), ['action' => 'delete', $users->id], ['escape'=>false, 'confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                    </tbody>
                </table>
                 <div class="pull-right"> <button type="button" class="btn btn-primary waves-effect">Add</button>
     <button type="button" class="btn btn-primary waves-effect">View</button>
      <button type="button" class="btn btn-primary waves-effect">Edit</button>
       <button type="button" class="btn btn-primary waves-effect">Activate</button>
        <button type="button" class="btn btn-primary waves-effect">Deactivate</button>
    </div><br>
                <div class="paginator" style="display: none;">
                    <ul class="pagination">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    </ul>
                    <p><?= $this->Paginator->counter() ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
