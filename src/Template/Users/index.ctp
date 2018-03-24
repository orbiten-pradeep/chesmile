<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display: none;">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'adminindex']) ?></li>
        <li><?= $this->Html->link(__('List Sub Categories'), ['controller' => 'SubCategories','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="block-header">
    <h2><?= __('All Users') ?></h2>
</div>
<!-- Basic Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Users List
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
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr><th scope="col"><?= $this->Paginator->sort('Select') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Serial No') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fullname') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('group_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                           <!--  <th scope="col" class="actions"><?= __('Actions') ?></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                         $n=0 + (10 * $page);
                        foreach ($users as $user): $n++;?>
                            <tr><td> 
                                        <span class="input-group-addon"><!-- 
                                            <input type="radio" class="with-gap" id="ig_radio" -->
                                            <input type="radio" name="userId" id="u<?= h($user->id) ?>" value ="<?=($user->id)?>" class="with-gap" 
                                             edit-href-url="<?=$this->Url->build(array('controller' => 'Users', 'action' => 'edit', $user->id)); ?>"
                                            view-href-url="<?=$this->Url->build(array('controller' => 'Users', 'action' => 'view', $user->id)); ?>"
                                            add-href-url="<?=$this->Url->build(array('controller' => 'Users', 'action' => 'add', $user->id)); ?>"
                                            activate-href-url="<?=$this->Url->build(array('controller' => 'Users', 'action' => 'activate', $user->id)); ?>"
                                            deactivate-href-url="<?=$this->Url->build(array('controller' => 'Users', 'action' => 'deactivate', $user->id)); ?>">
                                             <label for="u<?= h($user->id) ?>"></label>
                                        </span>
                                      
      </td>
                                <td><?= $this->Number->format($n) ?></td>
                                <td><?= h($user->email) ?></td>
                                <td><?= h($user->fullname) ?></td>
                                <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
                                <td>
                                <?php 
                                    if($user->Active) 
                                        { echo "Enabled"; } 
                                    else 
                                        { echo "Disabled"; } 
                                ?>
                                </td>
                                <!-- <td class="actions">
                                    <?php
                                    echo $this->Html->link( $this->Html->tag('i', 'remove_red_eye', array('class' => 'material-icons', 'title'=>'View User')), ['action' => 'view', $user->id], array('escape'=>false)); ?>

                                    <?= $this->Html->link( $this->Html->tag('i', 'edit', array('class' => 'material-icons', 'title'=>'Edit')), ['action' => 'edit', $user->id], array('escape'=>false)); ?>

                                    <?= $this->Form->postLink($this->Html->tag('i', 'delete', array('class' => 'material-icons', 'title'=>'Delete')), ['action' => 'delete', $user->id], ['escape'=>false, 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                </td> -->
                            </tr>
                            <?php endforeach; ?>
                    </tbody>
                </table> <div class="pull-right">  <a id="add" href=""><button class="btn btn-primary waves-effect">Add</button></a>
                <a id ="edit" href=""><button class="btn btn-primary waves-effect">Edit</button></a>
                  <a id ="view" href=""><button class="btn btn-primary waves-effect">View</button></a>
                    <a id ="activate" href=""><button class="btn btn-primary waves-effect">Activate</button></a>
                      <a id ="deactivate" href=""><button class="btn btn-primary waves-effect">Deactivate</button></a>
<!-- <button type="button" class="btn btn-primary waves-effect">Add</button>
     <button type="button" class="btn btn-primary waves-effect">View</button>
      <button type="button" class="btn btn-primary waves-effect">Edit</button>
       <button type="button" class="btn btn-primary waves-effect">Activate</button>
        <button type="button" class="btn btn-primary waves-effect">Deactivate</button>
 -->    </div><br>
                <div class="paginator">
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(function(){
  $('input:radio').change(function(){
$('a#deactivate').attr('href',  $(this).attr('deactivate-href-url')); // better if you add an id to anchor & then
     $('a#activate').attr('href', $(this).attr('activate-href-url')); // better if you add an id to anchor & then
     $('a#view').attr('href', $(this).attr('view-href-url')); // better if you add an id to anchor & then
      $('a#edit').attr('href',  $(this).attr('edit-href-url')); // better if you add an id to anchor & then 
    $('a#add').attr('href',  $(this).attr('add-href-url')); // better if you add an id to anchor & then $('a#idofAnchor')
});

});</script>

<!-- <div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                
                <th scope="col"><?= $this->Paginator->sort('fullname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->fullname) ?></td>
                <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
                <td>
                <?php 
                    if($user->Active) 
                        { echo "Enabled"; } 
                    else 
                        { echo "Disabled"; } 
                ?>
                </td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table> <div class="pull-right"> <button type="button" class="btn btn-primary waves-effect">Add</button>
     <button type="button" class="btn btn-primary waves-effect">View</button>
      <button type="button" class="btn btn-primary waves-effect">Edit</button>
       <button type="button" class="btn btn-primary waves-effect">Activate</button>
        <button type="button" class="btn btn-primary waves-effect">Deactivate</button>
    </div><br>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div> -->
