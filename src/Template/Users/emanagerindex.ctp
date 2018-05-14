<!-- Basic Table -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          Event Managers List
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
                <?= $this->Paginator->sort('email') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('fullname') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('group_id') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('active') ?>
              </th>
              <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
          </thead>
          <tbody>
            <?php 
$n=0 + (10 * $page);
foreach ($users as $user): $n++;?>
            <tr>
              <td> 
                <span class="input-group-addon">
                  <input type="radio" name="userId" id="u<?= h($user->id) ?>" value ="<?=($user->id)?>" class="with-gap radio-select-list" 
                         edit-href-url="<?=$this->Url->build(array('controller' => 'Users', 'action' => 'edit', $user->id)); ?>"
                         view-href-url="<?=$this->Url->build(array('controller' => 'Users', 'action' => 'view', $user->id)); ?>"
                         add-href-url="<?=$this->Url->build(array('controller' => 'Users', 'action' => 'add', $user->id)); ?>">
                  <label for="u<?= h($user->id) ?>">
                  </label>
                </span>
              </td>
              <td>
                <?= $this->Number->format($n) ?>
              </td>
              <td>
                <?= h($user->email) ?>
              </td>

              <td>
                <?= h($user->fullname) ?>
              </td>
              
              <td>
                <?= $user->has('group') ? $this->Html->link($user->group->name, [$user->group->id]) : '' ?>
              </td>
               <td>
                <?php 
                  if($user->Active == 1) 
                  { echo "Enabled"; } 
                  else 
                  { echo "Disabled"; } 
                ?>
              </td> 
              <td><?= $this->Form->postLink(__('Activate'), ['action' => 'activateindividual', $user->id], ['confirm' => __('Are you sure you want to Activate # {0}?', $user->id)]) ?>
                     <?= $this->Form->postLink(__('Deactivate'), ['action' => 'deactivateindividual', $user->id], ['confirm' => __('Are you sure you want to Deactivate # {0}?', $user->id)]) ?>        
              </td>
              
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table> 
        <div class="pull-right"> 
         <?php
echo $this->Html->link( $this->Html->tag('i', 'Add New', array('class' => 'btn btn-primary waves-effect', 'title'=>'Add New')), ['action' => 'add'], array('escape'=>false)); ?> 
         
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
         <!--  <a id ="activate" href="">
            <button class="btn btn-primary waves-effect">Activate
            </button>
          </a>
          <a id ="deactivate" href="">
            <button class="btn btn-primary waves-effect">Deactivate
            </button>
          </a>  -->
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
