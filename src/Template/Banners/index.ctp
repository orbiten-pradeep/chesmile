<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Banner'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="banners index large-9 medium-8 columns content">
    <h3><?= __('Banners') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('events_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('caption') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($banners as $banner): ?>
            <tr>
                <td><?= $this->Number->format($banner->id) ?></td>
                <td><?= $banner->has('event') ? $this->Html->link($banner->event->title, ['controller' => 'Events', 'action' => 'view', $banner->event->id]) : '' ?></td>
                <td><?= h($banner->image) ?></td>
                <td><?= h($banner->url) ?></td>
                <td><?= h($banner->caption) ?></td>
                <td><?= $this->Number->format($banner->active) ?></td>
                <td><?= h($banner->created) ?></td>
                <td class="actions">
               <?= $this->Html->link(__('View'), ['action' => 'view', $banner->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $banner->id]) ?>
                    <?= $this->Form->postLink(__('Activate'), ['action' => 'activate', $banner->id], ['confirm' => __('Are you sure you want to Activate # {0}?', $banner->id)]) ?>
                     <?= $this->Form->postLink(__('Deactivate'), ['action' => 'deactivate', $banner->id], ['confirm' => __('Are you sure you want to Deactivate # {0}?', $banner->id)]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $banner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]) ?>
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
</div>
 -->


<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display: none;">
  <ul class="side-nav">
    <li class="heading">
      <?= __('Actions') ?>
    </li>
    <li>
      <li><?= $this->Html->link(__('New Banner'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li></li>
  </ul>
</nav>
<div class="block-header">
  <h2>
    <?= __('Banners') ?>
  </h2>
</div>
<!-- Basic Table -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          Banners List
        </h2>
      </div>
      <div class="body table-responsive">
        <table class="table table-bordered table-striped table-hover ">
          <thead>
            <tr>
             <th scope="col"><?= __('Select') ?><!-- <?= $this->Paginator->sort('Select') ?> --></th>
             <th scope="col"><?= __('Serial No') ?><!-- <?= $this->Paginator->sort('Serial No') ?> --></th>
                <th scope="col"><?= $this->Paginator->sort('events_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bannerstype') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categories_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('caption') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= __('Actions') ?><!-- <?= $this->Paginator->sort('Actions') ?> --></th>
            </tr>
          </thead>
          <tbody>
            <?php $n=0 + (10 * $page);
foreach ($banners as $banner): $n++;?>
            <tr>
              <td> 
                <span class="input-group-addon">
                  <input type="radio" name="banner_id" id="c<?= h($banner->id) ?>" value ="<?=($banner->id)?>" class="with-gap radio-select-list" 
                         edit-href-url="<?=$this->Url->build(array('controller' => 'Banners', 'action' => 'edit', $banner->id)); ?>"
                         view-href-url="<?=$this->Url->build(array('controller' => 'Banners', 'action' => 'view', $banner->id)); ?>"
                         add-href-url="<?=$this->Url->build(array('controller' => 'Banners', 'action' => 'add', $banner->id)); ?>"
                         activate-href-url="<?=$this->Url->build(array('controller' => 'Banners', 'action' => 'activate', $banner->id)); ?>"
                         deactivate-href-url="<?=$this->Url->build(array('controller' => 'Banners', 'action' => 'deactivate', $banner->id)); ?>">
                  <label for="c<?= h($banner->id) ?>">
                  </label>
                </span>                      
              </td>
               <td>
                <?= $this->Number->format($n) ?>
              </td> 
                <td><?= $banner->has('event') ? $this->Html->link($banner->event->title, ['controller' => 'Events', 'action' => 'view', $banner->event->id]) : '' ?></td>
                <td><?= h($banner->bannerstype) ?></td>
               <td><?= h($banner->categories_id) ?></td>
                 <td>
                <?php echo $this->Html->image('banners_hme/'.$banner->image, array('width' => '20px', 'height' => '20px','alt'=>'Banner Image')); ?>
              </td>
              
               <!--  <td><?= h($banner->image) ?></td> -->
                <td><?= h($banner->url) ?></td>
                <td><?= h($banner->caption) ?></td>
                <td><?= $this->Number->format($banner->active) ?></td>
                <td><?= h($banner->created) ?></td>
 <td><?= $this->Form->postLink(__('Activate'), ['action' => 'activate', $banner->id], ['confirm' => __('Are you sure you want to Activate # {0}?', $banner->id)]) ?>
                     <?= $this->Form->postLink(__('Deactivate'), ['action' => 'deactivate', $banner->id], ['confirm' => __('Are you sure you want to Deactivate # {0}?', $banner->id)]) ?></td>
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
echo $this->Html->link( $this->Html->tag('i', 'Add New Banner', array('class' => 'btn btn-primary waves-effect', 'title'=>'Add Banner')), ['action' => 'add'], array('escape'=>false)); ?> 
          <a id ="edit" href="">
            <button class="btn btn-primary waves-effect">Edit
            </button>
          </a>
          <a id ="view" href="">
            <button class="btn btn-primary waves-effect">View
            </button>
          </a>
          <!--   <a id ="activate" href="">
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
