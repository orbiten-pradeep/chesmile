<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display: none;">
  <ul class="side-nav">
    <li class="heading">
      <?= __('Actions') ?>
    </li>
    <li>
      <?= $this->Html->link(__('New Category'), ['action' => 'add']) ?>
    </li>
  </ul>
</nav>
<div class="block-header">
  <h2>
    <?= __('Categories') ?>
  </h2>
</div>
<!-- Basic Table -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          Categories List
        </h2>
        <ul class="header-dropdown m-r--5">
          <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">more_vert
              </i>
            </a>
            <ul class="dropdown-menu pull-right">
              <li>
                <a href="javascript:void(0);">Action
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">Another action
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">Something else here
                </a>
              </li>
            </ul>
          </li>
        </ul>
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
                <?= $this->Paginator->sort('name') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('color') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('Litecolor') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('card') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('active') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('created') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('modified') ?>
              </th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
          </thead>
          <tbody>
            <?php $n=0 + (10 * $page);
foreach ($categories as $category): $n++;?>
            <tr>
              <td> 

                <span class="input-group-addon">
                 <input type="radio" name="category_id" id="c<?= h($category->id) ?>" value ="<?=($category->id)?>" class="with-gap radio-select-list" 
                         edit-href-url="<?=$this->Url->build(array('controller' => 'Categories', 'action' => 'edit', $category->id)); ?>"
                         view-href-url="<?=$this->Url->build(array('controller' => 'Categories', 'action' => 'view', $category->id)); ?>"
                         add-href-url="<?=$this->Url->build(array('controller' => 'Categories', 'action' => 'add', $category->id)); ?>"
                         activate-href-url="<?=$this->Url->build(array('controller' => 'Categories', 'action' => 'activate', $category->id)); ?>"
                         deactivate-href-url="<?=$this->Url->build(array('controller' => 'Categories', 'action' => 'deactivate', $category->id)); ?>">
                  <label for="c<?= h($category->id) ?>">
                  </label>
               </span>                      
              </td>
            <!--   <td><?= $this->Number->format($category->id) ?></td> -->
            <td>
                <?= $this->Number->format($n) ?>
              </td>
              <td>
                <?= h($category->name) ?>
              </td>
              <td style="background-color: <?php echo "#".$category->color; ?>">
                <?= h($category->color) ?>
              </td>
              <td style="background-color: <?php echo "#".$category->categorylitecolor; ?>">
                <?= h($category->categorylitecolor) ?>
              </td>
              <td>
                <?php echo $this->Html->image('card/'.$category->card, array('width' => '20px', 'height' => '20px','alt'=>'Card')); ?>
              </td>
              <!-- <td>
                <?= h($category->active) ?>
              </td> -->
               <td>
                <?php 
if($category->active == 1)
{ echo "Enabled"; } 
else if($category->active == 0)
{ echo "Waiting for Admin Review.."; } 
elseif ($category->active == 2) {
echo "Deactivated";
}
//echo $event;
?>  </td>
              <td>
                <?= h($category->created) ?>
              </td>
               <td>
                <?= h($category->modified) ?>
              </td>
               <td><?= $this->Form->postLink(__('Activate'), ['action' => 'activate', $category->id], ['confirm' => __('Are you sure you want to Activate # {0}?', $category->id)]) ?>
                     <?= $this->Form->postLink(__('Deactivate'), ['action' => 'deactivate', $category->id], ['confirm' => __('Are you sure you want to Deactivate # {0}?', $category->id)]) ?></td>
             
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
         <div class="pull-right"> 
          <!-- <a id="add" href="">
            <button class="btn btn-primary waves-effect">Add
            </button>
          </a> -->
           <?php
echo $this->Html->link( $this->Html->tag('i', 'Add New Category', array('class' => 'btn btn-primary waves-effect', 'title'=>'Add Banner')), ['action' => 'add'], array('escape'=>false)); ?> 
          <a id ="edit" href="">
            <button class="btn btn-primary waves-effect">Edit
            </button>
          </a>
          <a id ="view" href="">
            <button class="btn btn-primary waves-effect">View
            </button>
          </a>
       
           <!--  <a id ="activate" href="">
            <button class="btn btn-primary waves-effect" >Activate
            </button>
          </a>
          <a id ="deactivate" href="" >
            <button class="btn btn-primary waves-effect" >Deactivate
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
<!-- <div class="categories index large-9 medium-8 columns content">
<h3><?= __('Categories') ?></h3>
<table cellpadding="0" cellspacing="0">
<thead>
<tr>
<th scope="col"><?= $this->Paginator->sort('id') ?></th>
<th scope="col"><?= $this->Paginator->sort('name') ?></th>
<th scope="col"><?= $this->Paginator->sort('color') ?></th>
<th scope="col"><?= $this->Paginator->sort('card') ?></th>
<th scope="col"><?= $this->Paginator->sort('active') ?></th>
<th scope="col"><?= $this->Paginator->sort('created') ?></th>
<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
<th scope="col" class="actions"><?= __('Actions') ?></th>
</tr>
</thead>
<tbody>
<?php foreach ($categories as $category): ?>
<tr>
<td><?= $this->Number->format($category->id) ?></td>
<td><?= h($category->name) ?></td>
<td style="background-color: <?php echo "#".$category->color; ?>"><?= h($category->color) ?></td>
<td><?php echo $this->Html->image('card/'.$category->card, array('width' => '20px', 'height' => '20px','alt'=>'Card')); ?></td>
<td><?= h($category->active) ?></td>
<td><?= h($category->created) ?></td>
<td><?= h($category->modified) ?></td>
<td class="actions">
<?= $this->Html->link(__('View'), ['action' => 'view', $category->id]) ?>
<?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id]) ?>
<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
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
