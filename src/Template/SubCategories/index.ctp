<style>
.input-group-addon:last-child {
    border-left: 0;
    border: 0;
    background:  0;
}
</style>
<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display: none;">
  <ul class="side-nav">
    <li class="heading">
      <?= __('Actions') ?>
    </li>
    <li>
      <?= $this->Html->link(__('New Sub Category'), ['action' => 'add']) ?>
    </li>
    <li>
      <?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?>
    </li>
    <li>
      <?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?>
    </li>
  </ul>
</nav>
<div class="block-header">
  <h2>
    <?= __('SubCategories') ?>
  </h2>
</div>
<!-- Basic Table -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          SubCategories List
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
                <?= $this->Paginator->sort('categories_id') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('SubCategory') ?>
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
              <!--  <th scope="col" class="actions"><?= __('Actions') ?></th> -->
            </tr>
          </thead>
          <tbody>
            <?php 
$n=0 + (10 * $page);
foreach ($subCategories as $subCategory):$n++; ?>
            <tr>
              <td> 
                <span class="input-group-addon input-radio" >
                  <input type="radio" name="subCategoryId" 
                         id="s<?= h($subCategory->id) ?>" value ="<?=($subCategory->id)?>" class="with-gap radio-select-list" 
                         edit-href-url="<?=$this->Url->build(array('controller' => 'SubCategories', 'action' => 'edit', $subCategory->id)); ?>"
                         view-href-url="<?=$this->Url->build(array('controller' => 'SubCategories', 'action' => 'view', $subCategory->id)); ?>"
                         add-href-url="<?=$this->Url->build(array('controller' => 'SubCategories', 'action' => 'add', $subCategory->id)); ?>"
                         activate-href-url="<?=$this->Url->build(array('controller' => 'SubCategories', 'action' => 'activate', $subCategory->id)); ?>"
                         deactivate-href-url="<?=$this->Url->build(array('controller' => 'SubCategories', 'action' => 'deactivate', $subCategory->id)); ?>">
                  <label for="s<?= h($subCategory->id) ?>">
                  </label>
                </span>
              </td>
              <td>
                <?= $this->Number->format($n) ?>
              </td>
              <td>
                <?= $subCategory->has('category') ? $this->Html->link($subCategory->category->name, ['controller' => 'Categories', 'action' => 'view', $subCategory->category->id]) : '' ?>
              </td>
              <td>
                <?= h($subCategory->name) ?>
              </td>
              <td>
                <?= h($subCategory->active) ?>
              </td>
              <td>
                <?= h($subCategory->created) ?>
              </td>
             <td><?= $this->Form->postLink(__('Activate'), ['action' => 'activate', $subCategory->id], ['confirm' => __('Are you sure you want to Activate # {0}?', $subCategory->id)]) ?>
                     <?= $this->Form->postLink(__('Deactivate'), ['action' => 'deactivate', $subCategory->id], ['confirm' => __('Are you sure you want to Deactivate # {0}?', $subCategory->id)]) ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <div class="pull-right"> 
         <!--  <a id="add" href="">
            <button class="btn btn-primary waves-effect">Add
            </button>
          </a> -->
           <?php
echo $this->Html->link( $this->Html->tag('i', 'Add SubCategory', array('class' => 'btn btn-primary waves-effect', 'title'=>'Add SubCategory')), ['action' => 'add'], array('escape'=>false)); ?> 
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
<!-- <div class="subCategories index large-9 medium-8 columns content">
<h3><?= __('Sub Categories') ?></h3>
<table cellpadding="0" cellspacing="0">
<thead>
<tr>
<th scope="col"><?= $this->Paginator->sort('id') ?></th>
<th scope="col"><?= $this->Paginator->sort('categories_id') ?></th>
<th scope="col"><?= $this->Paginator->sort('name') ?></th>
<th scope="col"><?= $this->Paginator->sort('active') ?></th>
<th scope="col"><?= $this->Paginator->sort('created') ?></th>
<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
<th scope="col" class="actions"><?= __('Actions') ?></th>
</tr>
</thead>
<tbody>
<?php foreach ($subCategories as $subCategory): ?>
<tr>
<td><?= $this->Number->format($subCategory->id) ?></td>
<td><?= $subCategory->has('category') ? $this->Html->link($subCategory->category->name, ['controller' => 'Categories', 'action' => 'view', $subCategory->category->id]) : '' ?></td>
<td><?= h($subCategory->name) ?></td>
<td><?= h($subCategory->active) ?></td>
<td><?= h($subCategory->created) ?></td>
<td><?= h($subCategory->modified) ?></td>
<td class="actions">
<?= $this->Html->link(__('View'), ['action' => 'view', $subCategory->id]) ?>
<?= $this->Html->link(__('Edit'), ['action' => 'edit', $subCategory->id]) ?>
<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subCategory->id)]) ?>
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
