<style type="text/css">
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
    /* just in case there no content*/
    padding: 20px 25px 30px;
    /*margin: 30px auto 25px;*/
   /* margin: 30px 190px 25px;*/
    margin-top: 70px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    /*-moz-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 7px 7px rgba(0, 0, 0, 0.1);*/
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: white !important;
}
::-moz-placeholder { /* Firefox 19+ */
  color: white !important;
}
:-ms-input-placeholder { /* IE 10+ */
  color: white !important;
}
:-moz-placeholder { /* Firefox 18- */
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
    /*background-color:white;*/
    /* just in case there no content*/
    padding: 20px 25px 30px;
    /*margin: 30px auto 25px;*/
    margin-top: 15px;
    /*-moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 7px 7px rgba(0, 0, 0, 0.1);*/
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
<!-- <div class="container">
    <div class="col-md-offset-2" style="margin-top: 50px;">
            <h1 style="margin-left: -10px;">My Profile</h1>
        </div>
</div> -->

<div class="container content">
    <div class="row">

    <div class="card card-container col-md-6 mx-auto">
    
    <div>
    
    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-pencil-square-o')).'Edit', array('action' => 'edit', $userProfile->id), array('class' => 'btn btn-primary pull-right','escape' => false)) ?>
            </div>

                   <!--  <h3><?= h($userProfile->fullname) ?></h3> -->
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

 <script type="text/javascript">
    /* Float Label Pattern Plugin for Bootstrap 3.1.0 by Travis Wilson
**************************************************/

(function ($) {
    $.fn.floatLabels = function (options) {

        // Settings
        var self = this;
        var settings = $.extend({}, options);


        // Event Handlers
        function registerEventHandlers() {
            self.on('input keyup change', 'input, textarea', function () {
                actions.swapLabels(this);
            });
        }


        // Actions
        var actions = {
            initialize: function() {
                self.each(function () {
                    var $this = $(this);
                    var $label = $this.children('label');
                    var $field = $this.find('input,textarea').first();

                    if ($this.children().first().is('label')) {
                        $this.children().first().remove();
                        $this.append($label);
                    }

                    var placeholderText = ($field.attr('placeholder') && $field.attr('placeholder') != $label.text()) ? $field.attr('placeholder') : $label.text();

                    $label.data('placeholder-text', placeholderText);
                    $label.data('original-text', $label.text());

                    if ($field.val() == '') {
                        $field.addClass('empty')
                    }
                });
            },
            swapLabels: function (field) {
                var $field = $(field);
                var $label = $(field).siblings('label').first();
                var isEmpty = Boolean($field.val());

                if (isEmpty) {
                    $field.removeClass('empty');
                    $label.text($label.data('original-text'));
                }
                else {
                    $field.addClass('empty');
                    $label.text($label.data('placeholder-text'));
                }
            }
        }


        // Initialization
        function init() {
            registerEventHandlers();

            actions.initialize();
            self.each(function () {
                actions.swapLabels($(this).find('input,textarea').first());
            });
        }
        init();


        return this;
    };

    $(function () {
        jQuery('.form-element').each(function(){
          if($(this).parent().hasClass('required')){
             jQuery('.form-element').unwrap();
          }
        });

        setTimeout(function(){
            $('.float-label-control').floatLabels();
        },1000);
    });
})(jQuery);
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