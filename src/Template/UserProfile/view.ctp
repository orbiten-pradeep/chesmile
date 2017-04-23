<style type="text/css">
  select.form-control:not([size]):not([multiple])
  {
    height: 3.5rem;
  }

  .card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    /*margin: 30px auto 25px;*/
    margin-top: 100px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 7px 7px rgba(0, 0, 0, 0.1);
}

.card-container.card {
    max-width: 350px;
    padding: 40px 40px;
}
.borderless td, .borderless th {
    border: none;
}
</style>
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      
      <!-- edit form column -->
      <div class="col-sm-3 col-lg-3 col-md-3 col-sm-offset-2 col-lg-offset-2 card card-container">
        <!--<div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>-->
        <!-- <form class="form-horizontal" role="form"> -->
      <!--   <?= $this->Form->create($userProfile,array('enctype' => 'multipart/form-data','class' => 'form-horizontal')); ?>

        <?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]); ?> -->

         <div class="text-center">
         <?php if($userProfile->Photo) {
                echo $this->Html->image('profile/'.$userProfile->Photo, array('width' => '200px','alt'=>'aswq'));
            }  else {
                echo $this->Html->image('profile.png',array('alt' => '','class' => 'avatar img-circle')); 
            }
            ?>
            <!-- <h6>Upload a different photo...</h6>
           <?= $this->Form->input('Photo', ['type' => 'file']);?> -->
        </div>
    </div>
    <?php $this->assign('Photo', $Photo); ?>
    <div class="col-sm-3 col-sm-offset-2 col-lg-3 col-md-3 col-lg-offset-1 content">
    <h3><?= h($userProfile->fullname) ?></h3>
    <table class="table borderless">
         <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
         <tr>
            <th scope="row"><?= __('Fullname') ?></th>
            <td><?= h($user->fullname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($userProfile->Mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address 1') ?></th>
            <td><?= h($userProfile->Address_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address 2') ?></th>
            <td><?= h($userProfile->Address_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($userProfile->City) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($userProfile->State) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($userProfile->Country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zipcode') ?></th>
            <td><?= $this->Number->format($userProfile->Zipcode) ?></td>
        </tr>
    </table>

    <div class="pull-right">
    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-pencil-square-o')).'Edit', array('action' => 'edit', $userProfile->id), array('class' => 'btn btn-primary','escape' => false)) ?>
    <!-- <button type="submit" class="btn btn-primary">
  <i class="fa fa-pencil-square-o"></i> Edit
</button> -->
       <!--  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userProfile->id], array('class' => 'btn btn-primary')) ?> -->
    </div>

</div>
</div>
</div>
<script type="text/javascript">
 // function to set the height on fly
 function autoHeight() {
   $('.content').css('min-height', 0);
   $('.content').css('min-height', (
     $(document).height() 
     - $('#header').height() 
     - $('.footer').height()
   ));
 }

 // onDocumentReady function bind
 $(document).ready(function() {
   autoHeight();
 });

 // onResize bind of the function
 $(window).resize(function() {
   autoHeight();
 });
 </script>
    <!-- <div class="col-sm-3 col-sm-offset-2 col-lg-3 col-md-3 col-lg-offset-1 content">

        <div class="form-group">
            <?=  $this->Form->input('fullname',array('default'=> $fullname,'class' => 'form-control','type' => 'text')); ?>
        </div>

        <div class="form-group">
            <?= h($user->email) ?>
        </div>

        <div class="form-group">
            <?=  $this->Form->input('group_id', array('options' => $groups,'class' => 'form-control size')); ?>
        </div>

        <div class="form-group">
            <?= $this->Form->input('Mobile',array('class' => 'form-control')); ?>
        </div>

        <div class="form-group">
            <?= $this->Form->input('Address_1',array('class' => 'form-control'));?>
        </div>

        <div class="form-group">
            <?= $this->Form->input('Address_2',array('class' => 'form-control'));?>
        </div>

        <div class="form-group">
            <?=$this->Form->input('City',array('class' => 'form-control'));?>
        </div>

        <div class="form-group">
           <?= $this->Form->input('State',array('class' => 'form-control'));?>
        </div>

        <div class="form-group">
           <?= $this->Form->input('Country',array('class' => 'form-control'));?>
        </div>

        <div class="form-group">
           <?= $this->Form->input('Zipcode',array('class' => 'form-control'));?>
        </div>

            <?= $this->Form->end() ?>


               <div class="form-group">
           <?= $this->Form->input('Country',array('class' => 'form-control'));?>
        </div>

        <div class="form-group">
           <?= $this->Form->input('Zipcode',array('class' => 'form-control'));?>
        </div>
        <div class="pull-right">
        <?= $this->Form->button(__('Submit'),array('class' => 'btn btn-primary')); ?>
        </div>
            <?= $this->Form->end() ?>
         </div> -->
    </div>
</div>

<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Profile'), ['action' => 'edit', $userProfile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Profile'), ['action' => 'delete', $userProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userProfile->id)]) ?> </li>
    </ul>
</nav>
<div class="userProfile view large-9 medium-8 columns content">
    <h3><?= h($userProfile->fullname) ?></h3>
    <table class="vertical-table">
    	 <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
    	 <tr>
            <th scope="row"><?= __('Fullname') ?></th>
            <td><?= h($user->fullname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($userProfile->Mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address 1') ?></th>
            <td><?= h($userProfile->Address_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address 2') ?></th>
            <td><?= h($userProfile->Address_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($userProfile->City) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($userProfile->State) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($userProfile->Country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?php if($userProfile->Photo) 
            {
            	echo $this->Html->image('profile/'.$userProfile->Photo, array('width' => '200px','alt'=>'aswq'));
            }  ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zipcode') ?></th>
            <td><?= $this->Number->format($userProfile->Zipcode) ?></td>
        </tr>
    </table>
</div>
 -->