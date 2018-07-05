<!-- <style type="text/css">
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
</style> -->

<style type="text/css">
    /* USER PROFILE PAGE */
 .card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}
.cs-profile-nav{
    margin: 0;
}
.cs_browse_btn{
  margin-left: 12rem !important;
}
</style>
<div class="col-lg-6 col-sm-6 mx-auto">
    <div class="card hovercard">
        <div class="card-background">
            <?php if($userProfile->Photo) {
                echo $this->Html->image('profile/'.$userProfile->Photo, array('alt'=>'profile-img','class' => 'card-bkimg'));
            }  else {
                echo $this->Html->image('profile.png',array('alt' => '','class' => 'avatar img-style','height' => '100px', 'width' => '100px')); 
            }
            ?>
        </div>
        <div class="useravatar">
            <?php if($userProfile->Photo) {
                echo $this->Html->image('profile/'.$userProfile->Photo, array('alt'=>'profile-img','class' => ''));
            }  else {
                echo $this->Html->image('profile.png',array('alt' => '','class' => 'avatar img-style','height' => '100px', 'width' => '100px')); 
            }
            ?>
            <?= $this->Form->create($userProfile,array('enctype' => 'multipart/form-data','class' => 'form-horizontal')); ?>
            <?= $this->Form->input('Photo', ['type' => 'file','label' => false,'div' => false,'class' => 'cs_browse_btn']);?>
        </div>
    </div>
    <ul class="nav nav-tabs tabs-2 light-blue darken-3 cs-login-modal-head cs-profile-nav" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"><i class="fa fa-user mr-1"></i>Profile Information</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"><i class="fa fa-user mr-1"></i>change Password</a>
        </li>
    </ul>
      <div class="tab-content p-5" style="background: #e2e2e2;">
        <div class="tab-pane fade in show active" id="tab1">
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
                <?= $this->Form->end() ?>
              </div>
            

            <div class="tab-pane fade" id="tab2" role="tabpanel">
              <?= $this->Form->create('', array('id' => 'animdiv','class' => 'form-signup formheigh changepass', 'url' => ['controller' => 'Users', 'action' => 'changepassword'])) ?>
             <?=  $this->Form->input('fullname',array('default'=> $fullname,'class' => 'form-control','type' => 'hidden')); ?>

              <?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]); ?>
              
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

<!-- <div class="container-fluid height">
    <div class="col-md-1 col-md-offset-2">
        <div class="card-prof card-container-prof">
        <div class="text-center">
         <?php if($userProfile->Photo) {
                echo $this->Html->image('profile/'.$userProfile->Photo, array('height' => '100px','width' => '100px','alt'=>'aswq','class' => 'img-style'));
            }  else {
                echo $this->Html->image('profile.png',array('alt' => '','class' => 'avatar img-style','height' => '100px', 'width' => '100px')); 
            }
            ?>
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
</div> -->