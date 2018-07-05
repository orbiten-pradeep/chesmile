<!-- Basic Table -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          Users List
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
                <!-- <?= $this->Paginator->sort('Select') ?> -->
              </th>
              <th scope="col"><!-- <?= __('Serial No') ?> -->
                <?= $this->Paginator->sort('UserID') ?>
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
                         add-href-url="<?=$this->Url->build(array('controller' => 'Users', 'action' => 'adminadd', $user->id)); ?>"
                         activate-href-url="<?=$this->Url->build(array('controller' => 'Users', 'action' => 'activate', $user->id)); ?>"
                         deactivate-href-url="<?=$this->Url->build(array('controller' => 'Users', 'action' => 'deactivate', $user->id)); ?>">
                  <label for="u<?= h($user->id) ?>">
                  </label>
                </span>
              </td>
              <td> <?= h($user->id) ?>
              <!--   <?= $this->Number->format($n) ?> -->
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
echo $this->Html->link( $this->Html->tag('i', 'Add Users', array('class' => 'btn btn-primary waves-effect', 'title'=>'Add Users')), ['action' => 'adminadd'], array('escape'=>false)); ?> 
          
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