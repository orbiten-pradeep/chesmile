<nav class="large-3 medium-4 columns" id="actions-sidebar" style="display: none;">
  <ul class="side-nav">
    <li class="heading">
      <?= __('Actions') ?>
    </li>
    <li>
      <?= $this->Html->link(__('New Group'), ['action' => 'add']) ?>
    </li>
    <li>
      <?= $this->Html->link(__('List Users'), ['controller' => 'Contact', 'action' => 'index']) ?>
    </li>
    <li>
      <?= $this->Html->link(__('New User'), ['controller' => 'Contact', 'action' => 'add']) ?>
    </li>
  </ul>
</nav>
<div class="block-header">
  <h2>
    <?= __('Contacts') ?>
  </h2>
</div>
<!-- Basic Table -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          Contacts List
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
                <?= $this->Paginator->sort('Name') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('email') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('created') ?>
              </th>
              <!-- <th scope="col" class="actions"><?= __('Actions') ?></th> -->
            </tr>
          </thead>
          <tbody>
            <?php  $n=0 + (10 * $page);
foreach ($contact as $contact):  $n++; ?>
            <tr>
              <td>  
                <span class="input-group-addon">
                  <input type="radio" name="contactId" id="c<?= h($contact->id) ?>" value ="<?=($contact->id)?>" class="with-gap radio-select-list" 
                         edit-href-url="<?=$this->Url->build(array('controller' => 'Contact', 'action' => 'edit', $contact->id)); ?>"
                         view-href-url="<?=$this->Url->build(array('controller' => 'Contact', 'action' => 'view', $contact->id)); ?>"
                         add-href-url="<?=$this->Url->build(array('controller' => 'Contact', 'action' => 'add', $contact->id)); ?>"
                         activate-href-url="<?=$this->Url->build(array('controller' => 'Contact', 'action' => 'activate', $contact->id)); ?>"
                         deactivate-href-url="<?=$this->Url->build(array('controller' => 'Contact', 'action' => 'deactivate', $contact->id)); ?>">
                  <label for="c<?= h($contact->id) ?>">
                  </label>
                </span>
              </td> 
              <td>
                <?= $this->Number->format($n) ?>
              </td>
              <td>
                <?= h($contact->Name) ?>
              </td>
              <td>
                <?= h($contact->email) ?>
              </td>
              <td>
                <?= h($contact->created) ?>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table> 
        <div class="pull-right">
          <a id="add" href="">
            <button class="btn btn-primary waves-effect">Add
            </button>
          </a>
          <a id ="edit" href="">
            <button class="btn btn-primary waves-effect">Edit
            </button>
          </a>
          <a id ="view" href="">
            <button class="btn btn-primary waves-effect">View
            </button>
          </a>
          <a id ="activate" href="">
            <button class="btn btn-primary waves-effect">Activate
            </button>
          </a>
          <a id ="deactivate" href="">
            <button class="btn btn-primary waves-effect">Deactivate
            </button>
          </a>
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
