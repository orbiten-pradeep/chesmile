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
    <?= __('Contact Us') ?>
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
              <th scope="col"><?= __('Serial No') ?>
               <!--  <?= $this->Paginator->sort('Serial No') ?> -->
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('Name') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('email') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('Message') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('Replied') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('created') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('Status') ?>
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
                  <input type="radio" name="contactId" id="g<?= h($contact->ID) ?>" value ="<?=($contact->ID)?>" class="with-gap radio-select-list" 
                   reply-href-url="<?=$this->Url->build(array('controller' => 'Contact', 'action' => 'reply', $contact->ID)); ?>"
                         edit-href-url="<?=$this->Url->build(array('controller' => 'Contact', 'action' => 'edit', $contact->ID)); ?>"
                         view-href-url="<?=$this->Url->build(array('controller' => 'Contact', 'action' => 'view', $contact->ID)); ?>"
                       >
                  <label for="g<?= h($contact->ID) ?>">
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
                <?= h($contact->comments) ?>
              </td>
               <td>
                <?= h($contact->reply) ?>
              </td>
              <td>
                <?= h($contact->created)?>
              </td>
              <td>
                <?php 
if($contact->status == 1)
{ echo "Replied"; } 
else if($contact->active == 0)
{ echo "Waiting for Reply.."; } 
//echo $event;
?>  
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <div class="pull-right">
        <!--  <?php
echo $this->Html->link( $this->Html->tag('i', 'Add Group', array('class' => 'btn btn-primary waves-effect', 'title'=>'Add Group')), ['action' => 'add'], array('escape'=>false)); ?> 
        -->
          <a id ="edit" href="">
            <button class="btn btn-primary waves-effect">Edit
            </button>
          </a>
          <a id ="view" href="">
            <button class="btn btn-primary waves-effect">View
            </button>
          </a>
           <a id ="reply" href="">
            <button class="btn btn-primary waves-effect">Reply
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