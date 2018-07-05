<!-- <style type="text/css">
.height{
    background-color: #474747;
    height:100px;
}

.formheigh{
  margin-top: -35px;
}

.card {
    background-color: #4ABAC6;
    color: white;
    padding: 20px 25px 30px;
    margin-top: 70px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;

}
::-webkit-input-placeholder { 
  color: white !important;
}
::-moz-placeholder { 
  color: white !important;
}
:-ms-input-placeholder {
  color: white !important;
}
:-moz-placeholder { 
  color: white !important;
}


input{
    color:white !important;
}

.error{
    color: red !important;
    font-size: 11px;
    font-style: normal;

}
  .card-prof {
    padding: 20px 25px 30px;
    margin-top: 15px;
}

.card-container-prof.card-prof {
    max-width: 210px;
    padding: 10px 15px;

}
.email-bg{
  background-color: #4ABAC6 !important;
}

.category_btn{
    display: none !important;
}
.search-box-li{
    display: none !important;
}
.img-style{
    background-color: white;
    padding: 5px;
    margin-top: 15px;
    border: 1px solid #a7a7a7;
}

.table{
    width:70% !important;
}
@media screen and (min-width: 1280px)
and (max-width: 1366px){
    .name-space{
    margin-left: 20px;
}
}
@media screen and (min-width: 768px)
and (max-width: 980px){
.name-space{
margin-left: 70px;
}
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
    /*margin-left: -100px;
    margin-top: -200px;*/
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
        </div>
        <div class="card-info"> <span class="card-title"><?= h($user->fullname) ?></span>

        </div>
    </div>
    <ul class="nav nav-tabs tabs-2 light-blue darken-3 cs-login-modal-head cs-profile-nav" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"><i class="fa fa-user mr-1"></i>Profile Information</a>
        </li>
    </ul>
      <div class="tab-content p-5" style="background: #e2e2e2;">
        <div class="tab-pane fade in show active" id="tab1">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-pencil-square-o')).'Edit', array('action' => 'edit', $userProfile->id), array('class' => 'btn btn-primary pull-right','escape' => false)) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-6">
                    <p><?= __('Email') ?></p>
                </div>
                <div class="col-md-6 col-6">
                    <p><?= h($user->email) ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-6">
                    <p><?= __('Fullname') ?></p>
                </div>
                <div class="col-md-6 col-6">
                    <p><?= h($user->fullname) ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-6">
                    <p><?= __('Account Type') ?></p>
                </div>
                <div class="col-md-6 col-6">
                    <p><?= h($group->name) ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-6">
                    <p><?= __('Mobile') ?></p>
                </div>
                <div class="col-md-6 col-6">
                    <p><?= h($userProfile->Mobile) ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-6">
                    <p><?= __('Address 1') ?></p>
                </div>
                <div class="col-md-6 col-6">
                    <p><?= h($userProfile->Address_1) ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-6">
                    <p><?= __('Address 2') ?></p>
                </div>
                <div class="col-md-6 col-6">
                    <p><?= h($userProfile->Address_2) ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-6">
                    <p><?= __('City') ?></p>
                </div>
                <div class="col-md-6 col-6">
                    <p><?= h($userProfile->City) ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-6">
                    <p><?= __('State') ?></p>
                </div>
                <div class="col-md-6 col-6">
                    <p><?= h($userProfile->State) ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-6">
                    <p><?= __('Country') ?></p>
                </div>
                <div class="col-md-6 col-6">
                    <p><?= h($userProfile->Country) ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-6">
                    <p><?= __('Zipcode') ?></p>
                </div>
                <div class="col-md-6 col-6">
                    <p><?= h($userProfile->Zipcode) ?></p>
                </div>
            </div>
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

<div class="container content">
    <div class="row">

    <div class="card card-container col-md-6 mx-auto">
    
    <div>
    
    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-pencil-square-o')).'Edit', array('action' => 'edit', $userProfile->id), array('class' => 'btn btn-primary pull-right','escape' => false)) ?>
            </div>

    <table class="table borderless" cellspacing="0" cellpadding="0" border="0">
         <tr style="border-top-style: hidden;">
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
         <tr>
            <th style="padding-top: 30px;" scope="row"><?= __('Fullname') ?></th>
            <td style="padding-top: 30px;"><?= h($user->fullname) ?></td>
        </tr>
        <tr>
            <th style="padding-top: 30px;" scope="row"><?= __('Account Type') ?></th>
            <td style="padding-top: 30px;"><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th style="padding-top: 30px;" scope="row"><?= __('Mobile') ?></th>
            <td style="padding-top: 30px;"><?= h($userProfile->Mobile) ?></td>
        </tr>
        <tr>
            <th style="padding-top: 30px;" scope="row"><?= __('Address 1') ?></th>
            <td style="padding-top: 30px;"><?= h($userProfile->Address_1) ?></td>
        </tr>
        <tr>
            <th style="padding-top: 30px;" scope="row"><?= __('Address 2') ?></th>
            <td style="padding-top: 30px;"><?= h($userProfile->Address_2) ?></td>
        </tr>
        <tr>
            <th style="padding-top: 30px;" scope="row"><?= __('City') ?></th>
            <td style="padding-top: 30px;"><?= h($userProfile->City) ?></td>
        </tr>
        <tr>
            <th style="padding-top: 30px;" scope="row"><?= __('State') ?></th>
            <td style="padding-top: 30px;"><?= h($userProfile->State) ?></td>
        </tr>
        <tr>
            <th style="padding-top: 30px;" scope="row"><?= __('Country') ?></th>
            <td style="padding-top: 30px;"><?= h($userProfile->Country) ?></td>
        </tr>
        <tr>
            <th style="padding-top: 30px;" scope="row"><?= __('Zipcode') ?></th>
            <td style="padding-top: 30px;"><?= $this->Number->format($userProfile->Zipcode) ?></td>
        </tr>
    </table>

    





</div>
</div>
</div> -->

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
<!--     </div>
</div> -->

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