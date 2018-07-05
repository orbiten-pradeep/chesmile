<div class="block-header">
  <h2>
    <?= __('Events') ?>
  </h2>
</div>
<!-- Basic Table -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          Listing
          <small>All Settlements Listing
          </small>
        </h2>
      </div>
      <div class="body table-responsive">
        <table class="table table-bordered table-striped table-hover ">
          <thead>
            <tr> 
              <th scope="col">
               <?= __('Select') ?><!--  <?= $this->Paginator->sort('Select') ?> -->
              </th>
              <th scope="col">
                <?= __('Serial No') ?><!-- <?= $this->Paginator->sort('Serial No') ?> -->
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('title') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('active') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('categories_id') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('Oranizers') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('Ticket Amount') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('Commission Amount') ?>
              </th>
              <th scope="col">
                <?= $this->Paginator->sort('Settle Amount') ?>
              </th>
              <!--  <th scope="col" class="actions"><?= __('Actions') ?></th> -->
            </tr>
          </thead>
          <tbody>
            <?php  
$n=0 + (10 * $page);
foreach ($eventss as $event): $n++; ?>
            <tr>
              <td> 
                <!-- <div class="form-check mb-4">
<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
</div>
<?php echo $this->Form->input('condition_access', [
'type' => 'radio',
'options' => [
['value' => 1, 'text' => __('Free Access')],
['value' => 2, 'text' => __('Payment Access')],
['value' => 3, 'text' => __('Reduce price')]
],
'templates' => [
'nestingLabel' => '{{hidden}}<label{{attrs}}>{{text}}</label>{{input}}',
'radioWrapper' => '<div class="radio">{{label}}</div>'
]
]);?> -->
                <span class="input-group-addon">
                  <input type="radio" name="eventId" id="e<?= h($event->id) ?>" value ="<?=($event->id)?>" class="with-gap radio-select-list"
                  admin-href-url="<?=$this->Url->build(array('controller' => 'Events', 'action' => 'settlementedit', $event->id)); ?>"
                     edit-href-url="<?=$this->Url->build(array('controller' => 'Events', 'action' => 'edit', $event->id)); ?>"
                         view-href-url="<?=$this->Url->build(array('controller' => 'Events', 'action' => 'settlementview', $event->id)); ?>"
                         add-href-url="<?=$this->Url->build(array('controller' => 'Events', 'action' => 'add', $event->id)); ?>"
                         activate-href-url="<?=$this->Url->build(array('controller' => 'Events', 'action' => 'activate', $event->id)); ?>"
                         deactivate-href-url="<?=$this->Url->build(array('controller' => 'Events', 'action' => 'deactivate', $event->id)); ?>">
                  <label for="e<?= h($event->id) ?>">
                  </label>
                </span>
              </td>
              <td>
                <?= $this->Number->format($n) ?>
              </td>
              <td>
                <?= h($event->title) ?>
              </td>
              <td>
                <?php 
if($event->active == 1)
{ echo "Enabled"; } 
else if($event->active == 0)
{ echo "Waiting for Admin Review.."; } 
elseif ($event->active == 2) {
echo "Deleted";
}
//echo $event;
?>  
              </td>
              <td>
                <?= $event->has('category') ? $this->Html->link($event->category->name, ['controller' => 'Categories', 'action' => 'view', $event->category->id]) : '' ?>
              </td>
               <td>
                <?= h($event->OrganizersName) ?>
              </td>
              <td>
                <?= h($event->price) ?>
              </td>
              <td>
                <?= h($event->commamount) ?>
              </td>
               <td>
                <?= h($event->settamount) ?>
              </td>
              <!-- <td>
                <?php if($event->register_online == 0) {
echo "Disabled";
} else {
echo "Enabled";
}
?>
              </td> -->
              <!--   <td class="actions">
<?php
echo $this->Html->link( $this->Html->tag('i', 'remove_red_eye', array('class' => 'material-icons', 'title'=>'View Event')), ['action' => 'view', $event->id], array('escape'=>false)); ?>
<?php 
if($event->active == 1) {
echo $this->Html->link( $this->Html->tag('i', 'remove_circle', array('class' => 'material-icons', 'title'=>'De-Activate')), ['action' => 'activate', $event->id], array('escape'=>false));
}
else {
echo $this->Html->link( $this->Html->tag('i', 'add_circle', array('class' => 'material-icons', 'title'=>'Activate')), ['action' => 'activate', $event->id], array('escape'=>false));
}
?>
<?= $this->Html->link( $this->Html->tag('i', 'mode_edit', array('class' => 'material-icons', 'title'=>'Admin Edit')), ['action' => 'adminedit', $event->id], array('escape'=>false)); ?>
<?= $this->Html->link( $this->Html->tag('i', 'edit', array('class' => 'material-icons', 'title'=>'Edit')), ['action' => 'edit', $event->id], array('escape'=>false)); ?>
<!-- <?= $this->Form->postLink($this->Html->tag('i', 'delete', array('class' => 'material-icons', 'title'=>'Delete Event')), ['action' => 'delete', $event->id], ['escape'=>false, 'confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> 
</td> -->
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table> 
        <div class="pull-right">
       <!--  <?php
echo $this->Html->link( $this->Html->tag('i', 'Add Event', array('class' => 'btn btn-primary waves-effect', 'title'=>'Add Event')), ['action' => 'add'], array('escape'=>false)); ?>  -->
         <!--  <a id ="edit" href="">
            <button class="btn btn-primary waves-effect">Edit
            </button>
          </a>
          -->  <a id ="admin" href="">
            <button class="btn btn-primary waves-effect">AdminEdit
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
          </a> -->
          <!--   <button type="button" class="btn btn-primary waves-effect">Add</button>
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