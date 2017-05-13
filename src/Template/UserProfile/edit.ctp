<style type="text/css">
  select.form-control:not([size]):not([multiple])
  {
    height: 3.5rem;
  }

    .float-label-control { position: relative; margin-bottom: 1.5em; padding-top: 15px; }
    /*.float-label-control ::-webkit-input-placeholder { color: transparent; }
    .float-label-control :-moz-placeholder { color: transparent; }
    .float-label-control ::-moz-placeholder { color: transparent; }
    .float-label-control :-ms-input-placeholder { color: transparent; }*/
    .float-label-control input:-webkit-autofill,
    .float-label-control textarea:-webkit-autofill { background-color: transparent !important; -webkit-box-shadow: 0 0 0 1000px white inset !important; -moz-box-shadow: 0 0 0 1000px white inset !important; box-shadow: 0 0 0 1000px white inset !important; }
    .float-label-control input, .float-label-control textarea, .float-label-control label { font-size: 1.3em; box-shadow: none; -webkit-box-shadow: none; }
        .float-label-control input:focus,
        .float-label-control textarea:focus { box-shadow: none; -webkit-box-shadow: none; border-bottom-width: 2px; padding-bottom: 0; background: none; }
        .float-label-control textarea:focus { padding-bottom: 4px; }
    .float-label-control input, .float-label-control textarea { display: block; width: 100%; padding: 0.1em 0em 1px 0em; border: none; border-radius: 0px; border-bottom: 1px solid black; outline: none; margin: 0px; background: none; }
    .float-label-control textarea { padding: 0.1em 0em 5px 0em; }
    .float-label-control label { position: absolute; font-weight: normal; top: -1.0em; left: 0.08em; color: white; z-index: -1; font-size: 0.85em; -moz-animation: float-labels 300ms none ease-out; -webkit-animation: float-labels 300ms none ease-out; -o-animation: float-labels 300ms none ease-out; -ms-animation: float-labels 300ms none ease-out; -khtml-animation: float-labels 300ms none ease-out; animation: float-labels 300ms none ease-out; /* There is a bug sometimes pausing the animation. This avoids that.*/ animation-play-state: running !important; -webkit-animation-play-state: running !important; }
    .float-label-control input.empty + label,
    .float-label-control textarea.empty + label { top: 0.1em; font-size: 1.5em; animation: none; -webkit-animation: none; }
    .float-label-control input:not(.empty) + label,
    .float-label-control textarea:not(.empty) + label { z-index: 1; padding-top: 15px; }
    .float-label-control input:not(.empty):focus + label,
    .float-label-control textarea:not(.empty):focus + label { color: white; }
    .float-label-control.label-bottom label { -moz-animation: float-labels-bottom 300ms none ease-out; -webkit-animation: float-labels-bottom 300ms none ease-out; -o-animation: float-labels-bottom 300ms none ease-out; -ms-animation: float-labels-bottom 300ms none ease-out; -khtml-animation: float-labels-bottom 300ms none ease-out; animation: float-labels-bottom 300ms none ease-out; }
    .float-label-control.label-bottom input:not(.empty) + label,
    .float-label-control.label-bottom textarea:not(.empty) + label { top: 3em; }


@keyframes float-labels {
    0% { opacity: 1; color: white; top: 0.1em; font-size: 1.5em; }
    20% { font-size: 1.5em; opacity: 0; }
    30% { top: 0.1em; }
    50% { opacity: 0; font-size: 0.85em; }
    100% { top: -1em; opacity: 1; }
}

@-webkit-keyframes float-labels {
    0% { opacity: 1; color: white; top: 0.1em; font-size: 1.5em; }
    20% { font-size: 1.5em; opacity: 0; }
    30% { top: 0.1em; }
    50% { opacity: 0; font-size: 0.85em; }
    100% { top: -1em; opacity: 1; }
}

@keyframes float-labels-bottom {
    0% { opacity: 1; color: white; top: 0.1em; font-size: 1.5em; }
    20% { font-size: 1.5em; opacity: 0; }
    30% { top: 0.1em; }
    50% { opacity: 0; font-size: 0.85em; }
    100% { top: 3em; opacity: 1; }
}

@-webkit-keyframes float-labels-bottom {
    0% { opacity: 1; color: white; top: 0.1em; font-size: 1.5em; }
    20% { font-size: 1.5em; opacity: 0; }
    30% { top: 0.1em; }
    50% { opacity: 0; font-size: 0.85em; }
    100% { top: 3em; opacity: 1; }
}
.heigh{
    height: 35px !important;
}

label {
    font-weight: inherit !important;
}
.height{
    background-color: #474747;
    height:100px;
}
.card-container.card {
    max-width: 650px;
    padding: 40px 40px;
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
    margin-top: 0px;
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

.form-control:focus{
    border-color: white !important;
}

.error-message{
    color: red !important;
    font-size: 11px;
    font-style: normal;
}
.help-block{
    color: red !important;
    font-size: 11px;
    font-style: normal;
}
.error{
    color: red !important;
    font-size: 11px;
    font-style: normal;

}
  .card-prof {
    background-color: #4ABAC6;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    /*margin: 30px auto 25px;*/
    margin-top: 15px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 7px 7px rgba(0, 0, 0, 0.1);
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

.nav-tabs > li.active > a{
  background-color: #337ab7 !important;
  color: white !important;
}
.nav-tabs {
    border-bottom: 0px !important;
}

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    appearance: none !important;
    margin: 0 !important; 
}

input[type=number] {
    -moz-appearance:textfield;
}
</style>

<div class="container-fluid height">
    <div class="col-md-offset-2">
        <div class="card-prof card-container-prof">
        <?php echo $this->Html->image('profile.png',array('alt' => '','class' => 'avatar img-circle','height' => '100px')); ?>
        <?= $this->Form->create($userProfile,array('enctype' => 'multipart/form-data','class' => 'form-horizontal')); ?>
          <?= $this->Form->input('Photo', ['type' => 'file','label' => false]);?>
        </div>
    </div>
</div>

<div class="container content">
    <div class="row">
 <ul class="nav nav-tabs col-md-offset-2" style="margin-top:70px;" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#home" data-toggle="tab" title="welcome">
                  Basic Info
                  </a></li>

                  <li><a href="#profile" data-toggle="tab" title="profile">
                     <span class="round-tabs two">
                       Change Password
                     </span> 
                    </a>
                 </li>
                     
                     </ul>

    <div class="card card-container col-md-offset-2">
    <div class="tab-content">
    <div class="tab-pane fade in active" id="home">

        <?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]); ?>
                    <div class="form-group float-label-control">
                        <label for="">Fullname</label>
                       <?php echo  $this->Form->input('fullname',array('default'=> $fullname, 'label' => false, 'div' => false ,'class' => 'form-control form-element','type' => 'text', 'placeholder' => 'Fullname','required' => true)); ?>
                      
                    </div>

                    <div class="form-group float-label-control">
                        <label for="">Email Address</label>
                        <?php echo $this->Form->input('email', array('default'=> $email,'div' => false, 'label' => false, 'readonly' => 'readonly', 'class' => 'form-control form-element email-bg', 'placeholder' => 'Your email address'));?>
                    </div>

            <?= $this->Form->hidden('active');?>


            <div class="form-group float-label-control">
                   <label for="">Mobile Number</label>
                    <?php echo $this->Form->input('Mobile',array('class' => 'form-control form-element','div' => false, 'label' => false, 'placeholder' => 'Enter your mobile number')); ?>
            </div>

             <div class="form-group float-label-control">
              <label for="">Mobile Number</label>
            <?=  $this->Form->input('group_id', array('options' => $groups,'class' => 'form-control size')); ?>
            </div>


            <div class="form-group float-label-control">
                   <label for="">Address-1</label>
                   <?php echo $this->Form->input('Address_1',array('class' => 'form-control','div' => false, 'label' => false,'class' => 'form-control form-element','placeholder' => 'Enter your address-1'));?>
            </div>

            <div class="form-group float-label-control">
                   <label for="">Address-2 (Optional)</label>
                   <?php echo $this->Form->input('Address_2',array('class' => 'form-control','div' => false, 'label' => false,'class' => 'form-control form-element','placeholder' => 'Enter your address-2'));?>
            </div>

            <div class="form-group float-label-control">
                   <label for="">City</label>
                    <?=$this->Form->input('City',array('div' => false,'label' => false,'class' => 'form-control form-element','placeholder' => 'Enter your city'));?>
            </div>

              <div class="form-group float-label-control">
                <label for="">State</label>
                 <?= $this->Form->input('State',array('div' => false,'label' => false,'class' => 'form-control form-element','placeholder' => 'Enter your state'));?>

                </div>

                <div class="form-group float-label-control">
                <label for="">Country</label>
                 <?= $this->Form->input('Country',array('div' => false,'label' => false,'class' => 'form-control form-element','placeholder' => 'Enter your Country'));?>
                 </div>
                 <div class="form-group float-label-control">
                <label for="">Zipcode</label>
                 <?= $this->Form->input('Zipcode',array('div' => false,'label' => false,'class' => 'form-control form-element','placeholder' => 'Enter your Zipcode'));?>
                 </div>
                 <?= $this->Form->button(__('Submit'),array('class' => 'btn btn-primary')); ?>
          </div>
            <?= $this->Form->end() ?>

            <div class="tab-pane fade" id="profile">
             <?= $this->Form->create('', array('id' => 'animdiv','class' => 'form-signup formheigh changepass', 'url' => ['controller' => 'Users', 'action' => 'changepassword'])) ?>
             <?=  $this->Form->input('fullname',array('default'=> $fullname,'class' => 'form-control','type' => 'hidden')); ?>

              <?= $this->Form->hidden('user_id', ['options' => $users,'default'=> $users_id]); ?>

               <div class="form-group float-label-control">
                <label for="">New Password</label>
                 <?= $this->Form->input('password',array('id' => 'password', 'class' => 'form-control form-element','div' => false,'label' => false,'placeholder' => 'Enter a new password','required' => true)) ?>
                 </div>

                 <div class="form-group float-label-control">
                <label for="">Confirm Password</label>
                 <?= $this->Form->input('password',array('div' => false,'id' => 'confirm_password', 'class' => 'form-control form-element','label' => false,'placeholder' => 'Confirm Password','required' => true)) ?>
                 </div>
           

             <?= $this->Form->submit(__('Update'), array('id' => 'Login', 'class' => 'btn btn-primary btn-lg cs-signup-button')) ?>
            <?= $this->Form->end() ?>
            </div>





</div>
</div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

<script type="text/javascript">
$(document ).ready( function () {

  /*$.validator.setDefaults({
      submitHandler: function (form) {

         if ($(form).valid()) {
             form.submit();
         }
      }
  });*/


  $(".form-horizontal" ).validate( {
    rules: {
      Address_1: "required",
      City: "required",
      State: "required",
      Country: "required",
    Mobile:  {
                    required: true,
                    minlength: 10,
                    number: true
            }
            },
    messages: {
      Address_1: "Please enter your Address",
      City: "Please enter your city",
      State: "Please enter your state",
      Country: "Please enter your Country",
     contact_number:"Please enter a number with at least 7 and max 10 characters!",
      Mobile:"Please enter a number with at least 10 characters!"
    },
    errorElement: "em",
    errorPlacement: function ( error, element ) {
      // Add the `help-block` class to the error element
      error.addClass( "help-block" );

      if ( element.prop( "type" ) === "checkbox" ) {
        error.insertAfter( element.parent( "label" ) );
      } else {
        error.insertAfter( element );
      }
    },
    highlight: function ( element, errorClass, validClass ) {
      $( element ).parents( ".input" ).addClass( "has-error" ).removeClass( "has-success" );
    },
    unhighlight: function (element, errorClass, validClass) {
      $( element ).parents( ".input" ).addClass( "has-success" ).removeClass( "has-error" );
    }
  });


   $(".changepass" ).validate( {
    rules: {    
      password: {
        required: true,
        minlength: 6
      },
      confirm_password: {
        required: true,
        minlength: 6,
        equalTo: "password"
      }
    },
    messages: {
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long"
      },
      confirm_password: {
        required: "Please provide a confirm password",
        minlength: "Your password must be at least 6 characters long",
        equalTo: "Please enter the same password as above"
      }
     
    },
    errorElement: "em",
    errorPlacement: function ( error, element ) {
      // Add the `help-block` class to the error element
      error.addClass( "help-block" );
      console.log(element);

      if ( element.prop( "type" ) === "checkbox" ) {
        error.insertAfter( element.parent( "label" ) );
      } else {
        error.insertAfter( element );
      }
    },
    highlight: function ( element, errorClass, validClass ) {
      $( element ).parents( ".input" ).addClass( "has-error" ).removeClass( "has-success" );
    },
    unhighlight: function (element, errorClass, validClass) {
      $( element ).parents( ".input" ).addClass( "has-success" ).removeClass( "has-error" );
    }
  });

});




</script>
<script type="text/javascript">

$(document).ready(function() {
        $(".imagevalid").validate();
    });

</script>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
    </ul>
</nav> -->

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
