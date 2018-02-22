<style type="text/css">
    .container{

    }
</style>

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      
      <!-- edit form column -->
      <div class="col-sm-3 col-lg-3 col-md-3 col-sm-offset-2 col-lg-offset-2">
        <!--<div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>-->
        <h3>Personal info</h3>
        
        <!-- <form class="form-horizontal" role="form"> -->
        <?= $this->Form->create($userProfile,array('enctype' => 'multipart/form-data','class' => 'form-horizontal')); ?>

        <?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]); ?>

         <div class="text-center">
            <?php echo $this->Html->image('profile.png',array('alt' => '','class' => 'avatar img-circle')); ?>
            <h6>Upload a different photo...</h6>
          
            <?= $this->Form->input('Photo', ['type' => 'file']);?>
        </div>
        </div>
        <div class="col-sm-3 col-sm-offset-2 col-lg-3 col-md-3 col-lg-offset-0 ">
        <div class="form-group">
            <?=  $this->Form->input('fullname',array('default'=> $fullname,'class' => 'form-control','type' => 'text')); ?>
        </div>

        <div class="form-group">
            <?= $this->Form->input('email', array('default'=> $email, 'readonly' => 'readonly', 'class' => 'form-control'));?>
        </div>

        <div class="form-group">
            <?=  $this->Form->input('group_id', array('options' => $groups,'class' => 'form-control')); ?>
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
        <div class="pull-right">


            <?= $this->Form->button(__('Submit'),array('class' => 'btn btn-primary')); ?>
        </div>
            <?= $this->Form->end() ?>
            </div>

         </div>
    </div>
</div>

     
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
    </ul>
</nav>

<!--
<div class="userProfile form large-9 medium-8 columns content">
    <?= $this->Form->create($userProfile, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Add User Profile') ?></legend>
        <?php
            echo $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]);
            echo $this->Form->input('fullname',['default'=> $fullname]);
            echo $this->Form->input('email', array('default'=> $email, 'readonly' => 'readonly'));
            echo $this->Form->input('group_id', ['options' => $groups]);
            echo $this->Form->input('Mobile');
            echo $this->Form->input('Address_1');
            echo $this->Form->input('Address_2');
            echo $this->Form->input('City');
            echo $this->Form->input('State');
            echo $this->Form->input('Country');
            echo $this->Form->input('Zipcode');
            echo $this->Form->input('Photo', ['type' => 'file']);
            //echo $this->Form->input('Created');
            //echo $this->Form->input('Modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
-->