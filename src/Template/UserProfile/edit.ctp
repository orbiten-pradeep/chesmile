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
        <?= $this->Form->create($userProfile,array('enctype' => 'multipart/form-data','class' => 'form-horizontal')); ?>

        <?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]); ?>

         <div class="text-center">
            <?php echo $this->Html->image('profile.png',array('alt' => '','class' => 'avatar img-circle')); ?>
            <h6>Upload a different photo...</h6>
           <?= $this->Form->input('Photo', ['type' => 'file']);?>
        </div>
    </div>
    <div class="col-sm-3 col-sm-offset-2 col-lg-3 col-md-3 col-lg-offset-1 content">
        <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#home" data-toggle="tab" title="welcome">
                   Basic info
                  </a></li>

                  <li><a href="#profile" data-toggle="tab" title="profile">
                     <span class="round-tabs two">
                       Change password
                     </span> 
                    </a>
                 </li>
                     
                     </ul>
                      <div class="tab-content">
                      <div class="tab-pane fade in active" id="home">
        <div class="form-group">
            <?=  $this->Form->input('fullname',array('default'=> $fullname,'class' => 'form-control','type' => 'text')); ?>
        </div>

        <div class="form-group">
            <?= $this->Form->input('email', array('default'=> $email, 'readonly' => 'readonly', 'class' => 'form-control'));?>
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
        <div class="pull-right">


            <?= $this->Form->button(__('Submit'),array('class' => 'btn btn-primary')); ?>
        </div>
            <?= $this->Form->end() ?>
            </div>


              <div class="tab-pane fade" id="profile">
               <div class="form-group">
           <?= $this->Form->input('Country',array('class' => 'form-control'));?>
        </div>

        <div class="form-group">
           <?= $this->Form->input('Zipcode',array('class' => 'form-control'));?>
        </div>

            <?= $this->Form->end() ?>
         


              </div>
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