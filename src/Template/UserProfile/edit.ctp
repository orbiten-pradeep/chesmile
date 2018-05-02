<style type="text/css">
  .cs-add-form{
    background-color: #4ABAC6;
  }
  .cs_add_form_col{
    margin: 0 auto;
  }
  .cs_add_form_col input.form-control{
    color: white !important;
  }
  .cs_add_form_col select.form-control{
    color: white !important;
  }

  .cs_add_form_col input::-webkit-input-placeholder {
  color: white !important;
  }
   
  .cs_add_form_col input:-moz-placeholder { /* Firefox 18- */
  color: white !important;  
  }
   
  .cs_add_form_col input::-moz-placeholder {  /* Firefox 19+ */
  color: white !important;  
  }
   
  .cs_add_form_col input:-ms-input-placeholder {  
  color: white !important;  
  }

  .cs_add_form_col textarea::-webkit-input-placeholder {
  color: white !important;
  }
   
  .cs_add_form_col textarea:-moz-placeholder { /* Firefox 18- */
  color: white !important;  
  }
   
  .cs_add_form_col textarea::-moz-placeholder {  /* Firefox 19+ */
  color: white !important;  
  }
   
  .cs_add_form_col textarea:-ms-input-placeholder {  
  color: white !important;  
  }
  .cs_add_form_col label{
    color: white;
  }
.card-container-prof.card-prof {
    max-width: 210px;
    padding: 10px 15px;

}
.img-style{
    background-color: white;
    padding: 5px;
    margin-top: 15px;
    border: 1px solid #a7a7a7;
}
.email-bg{
  background-color: #4ABAC6 !important;
}
.height{
    background-color: #474747;
    height:100px;
}
input{
    color:white !important;
}
label{
  color: white !important;
}
</style>

<div class="container-fluid height">
    <div class="col-md-1 col-md-offset-2">
        <div class="card-prof card-container-prof">
        <div class="text-center">
         <?php if($userProfile->Photo) {
                echo $this->Html->image('profile/'.$userProfile->Photo, array('height' => '100px','width' => '100px','alt'=>'aswq','class' => 'img-style'));
            }  else {
                echo $this->Html->image('profile.png',array('alt' => '','class' => 'avatar img-style','height' => '100px', 'width' => '100px')); 
            }
            ?>
            
           <!--  <h3><?= h($userProfile->fullname) ?></h3> -->
            <!-- <h6>Upload a different photo...</h6>
           <?= $this->Form->input('Photo', ['type' => 'file']);?> -->
        </div>
        </div>
    </div>
    <div class="col-md-9 col-lg-4 name-space" style="margin-top:35px;">
                <h3 style="color: white;"><?= h($userProfile->fullname) ?></h3>
            </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8 mt-4 mx-auto">
      <div class="d-flex flex-column">
        <ul class="nav nav-tabs tabs-2 light-blue darken-3 cs-login-modal-head" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#info" role="tab"><i class="fa fa-user mr-1"></i> Basic Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#pswd" role="tab"><i class="fa fa-user-plus mr-1"></i>Change Password</a>
            </li>
        </ul>
        <div class="tab-content">
                  <div class="tab-pane fade in show active" id="info" role="tabpanel">
                      <div class="p-4 mb-4 cs-add-form rounded z-depth-1">
                        <?php echo $this->Html->image('profile.png',array('alt' => '','class' => 'avatar img-circle','height' => '100px')); ?>
        <?= $this->Form->create($userProfile,array('enctype' => 'multipart/form-data','class' => 'form-horizontal')); ?>
          <?= $this->Form->input('Photo', ['type' => 'file','label' => false,'div' => false]);?>
        <?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]); ?>
              <div class="md-form">
                    <?php echo  $this->Form->input('fullname',array('default'=> $fullname, 'label' => 'Fullname', 'div' => false ,'class' => 'form-control form-element','type' => 'text', 'placeholder' => 'Enter Your Fullname','required' => true)); ?>
                </div>  
                <div class="md-form">
                    <?php echo $this->Form->input('email', array('default'=> $email,'div' => false, 'label' => 'Email', 'readonly' => 'readonly', 'class' => 'form-control', 'placeholder' => 'Your email address'));?>
                </div>  
                <div class="md-form">
                    <?php echo $this->Form->input('Mobile',array('class' => 'form-control','div' => false, 'label' => 'Mobile Number', 'placeholder' => 'Enter your mobile number')); ?>
                </div>
                <?= $this->Form->hidden('active');?>
                <div class="md-form">
                  <?=  $this->Form->input('group_id', array('type' => 'hidden','options' => $groups,'class' => 'form-control size')); ?>
                </div>

                <div class="md-form">
                  <?php echo $this->Form->input('Address_1',array('class' => 'form-control','div' => false, 'label' => 'Address-1','class' => 'form-control','placeholder' => 'Enter your address-1'));?>
                </div>
                <div class="md-form">
                  <?php echo $this->Form->input('Address_2',array('class' => 'form-control','div' => false, 'label' => 'Address-2','class' => 'form-control','placeholder' => 'Enter your address-2'));?>
                </div>
                <div class="md-form">
                  <?=$this->Form->input('City',array('div' => false,'label' => 'City','class' => 'form-control','placeholder' => 'Enter your city'));?>
                </div>
                <div class="md-form">
                  <?= $this->Form->input('State',array('div' => false,'label' => 'State','class' => 'form-control','placeholder' => 'Enter your state'));?>
                </div>
                <div class="md-form">
                  <?= $this->Form->input('Country',array('div' => false,'label' => 'Country','class' => 'form-control form-element','placeholder' => 'Enter your Country'));?>
                </div>
                <div class="md-form">
                  <?= $this->Form->input('Zipcode',array('div' => false,'label' => 'Zipcode','class' => 'form-control form-element','placeholder' => 'Enter your Zipcode'));?>
                </div>
                <?= $this->Form->button(__('Submit'),array('class' => 'btn btn-primary')); ?>
              </div>
            </div>
            <?= $this->Form->end() ?>
            <div class="tab-pane fade" id="pswd" role="tabpanel">
              <?= $this->Form->create('', array('id' => 'animdiv','class' => 'form-signup formheigh changepass', 'url' => ['controller' => 'Users', 'action' => 'changepassword'])) ?>
             <?=  $this->Form->input('fullname',array('default'=> $fullname,'class' => 'form-control','type' => 'hidden')); ?>

              <?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]); ?>
              <div class="p-4 mb-4 cs-add-form rounded z-depth-1">
               <div class="md-form">
                <?= $this->Form->input('password',array('id' => 'password', 'class' => 'form-control form-element','div' => false,'label' => 'New Password','placeholder' => 'Enter a new password','required' => true)) ?>
                </div>
                <div class="md-form">
                  <?= $this->Form->input('password',array('div' => false,'id' => 'confirm_password', 'class' => 'form-control form-element','label' => 'Confirm Password','placeholder' => 'Confirm Password','required' => true)) ?>
                </div>
                <?= $this->Form->submit(__('Update'), array('id' => 'Login', 'class' => 'btn btn-primary btn-lg cs-signup-button')) ?>
            <?= $this->Form->end() ?>
              </div>
            </div>
        </div>
      </div>
    </div>   
  </div>
</div>