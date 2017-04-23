<!-- Signup Container -->
<style type="text/css">
  .intro-header_CHENNAI {
  padding-top: 100px;  /*If you're making other pages, make sure there is 50px of padding to make sure the navbar doesn't overlap content! */
    /*padding-bottom: 50px;*/
    text-align: center;
    color: #f8f8f8;
  /*background-image:url(../img/cs-homepage-BG.jpg);*/
   
    /*background-size: cover;*/
}

.card-container.card {
    max-width: 350px;
    padding: 40px 40px;
}

.formheigh{
  margin-top: -35px;
}

/*.btn {
    
    height: 30px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}*/

/*
 * Card component
 */
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 30px auto 25px;
    margin-top: 30px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 7px 7px rgba(0, 0, 0, 0.1);
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.cs-signin-button{
  padding: 6px 12px 6px;
}
 .mobile-signIn{
    display:none;
  }
  .viewSignInForim{
    display: none;
  }
@media only screen and (max-width: 991px) {

  .desktop-signIn{
    display:none;
  }
  .form-signup{
    display:none;
  }
.mobile-signIn{
    display:block;
  }

  .viewSignInForim{
    display: block;
  }
}
.form-signup{
 font-family: Helvetica,Arial,sans-serif !important;
  font-size: 13px !important;
  font-weight: normal !important;
}

 .desktop-signIn{
  font-family: Helvetica,Arial,sans-serif !important;
  font-size: 13px !important;
  font-weight: normal !important;
}
.mobile-signIn{
  font-family: Helvetica,Arial,sans-serif !important;
  font-size: 13px !important;
  font-weight: normal !important;
}

/*  input:required:invalid {
    border: 1px solid red;
  border-radius:0;
}

 input:required:valid{
  border: 1px solid #848484;
  border-radius:0;
  }
input:required:{
  border: 1px solid #848484;
  border-radius:0;

}
*/

/*input.invalid{
      border: 2px solid red;
      border-radius:0;
    }
    
    input.valid{
      border: 2px solid green;
      border-radius:0;
    }*/
</style>
<style type="text/css">
    .float-label-control { position: relative; margin-bottom: 1.5em; }
    /*.float-label-control ::-webkit-input-placeholder { color: transparent; }
    .float-label-control :-moz-placeholder { color: transparent; }
    .float-label-control ::-moz-placeholder { color: transparent; }
    .float-label-control :-ms-input-placeholder { color: transparent; }*/
    .float-label-control input:-webkit-autofill,
    .float-label-control textarea:-webkit-autofill { background-color: transparent !important; -webkit-box-shadow: 0 0 0 1000px white inset !important; -moz-box-shadow: 0 0 0 1000px white inset !important; box-shadow: 0 0 0 1000px white inset !important; }
    .float-label-control input, .float-label-control textarea, .float-label-control label { font-size: 1.2em; box-shadow: none; -webkit-box-shadow: none; }
        .float-label-control input:focus,
        .float-label-control textarea:focus { box-shadow: none; -webkit-box-shadow: none; border-bottom-width: 2px; padding-bottom: 0; background: none; }
        .float-label-control textarea:focus { padding-bottom: 4px; }
    .float-label-control input, .float-label-control textarea { display: block; width: 100%; padding: 0.1em 0em 1px 0em; border: none; border-radius: 0px; border-bottom: 1px solid #aaa; outline: none; margin: 0px; background: none; }
    .float-label-control textarea { padding: 0.1em 0em 5px 0em; }
    .float-label-control label { position: absolute; font-weight: normal; top: -1.0em; left: 0.08em; color: #aaaaaa; z-index: -1; font-size: 0.85em; -moz-animation: float-labels 300ms none ease-out; -webkit-animation: float-labels 300ms none ease-out; -o-animation: float-labels 300ms none ease-out; -ms-animation: float-labels 300ms none ease-out; -khtml-animation: float-labels 300ms none ease-out; animation: float-labels 300ms none ease-out; /* There is a bug sometimes pausing the animation. This avoids that.*/ animation-play-state: running !important; -webkit-animation-play-state: running !important; }
    .float-label-control input.empty + label,
    .float-label-control textarea.empty + label { top: 0.1em; font-size: 1.5em; animation: none; -webkit-animation: none; }
    .float-label-control input:not(.empty) + label,
    .float-label-control textarea:not(.empty) + label { z-index: 1; }
    .float-label-control input:not(.empty):focus + label,
    .float-label-control textarea:not(.empty):focus + label { color: #aaaaaa; }
    .float-label-control.label-bottom label { -moz-animation: float-labels-bottom 300ms none ease-out; -webkit-animation: float-labels-bottom 300ms none ease-out; -o-animation: float-labels-bottom 300ms none ease-out; -ms-animation: float-labels-bottom 300ms none ease-out; -khtml-animation: float-labels-bottom 300ms none ease-out; animation: float-labels-bottom 300ms none ease-out; }
    .float-label-control.label-bottom input:not(.empty) + label,
    .float-label-control.label-bottom textarea:not(.empty) + label { top: 3em; }


@keyframes float-labels {
    0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
    20% { font-size: 1.5em; opacity: 0; }
    30% { top: 0.1em; }
    50% { opacity: 0; font-size: 0.85em; }
    100% { top: -1em; opacity: 1; }
}

@-webkit-keyframes float-labels {
    0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
    20% { font-size: 1.5em; opacity: 0; }
    30% { top: 0.1em; }
    50% { opacity: 0; font-size: 0.85em; }
    100% { top: -1em; opacity: 1; }
}

@keyframes float-labels-bottom {
    0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
    20% { font-size: 1.5em; opacity: 0; }
    30% { top: 0.1em; }
    50% { opacity: 0; font-size: 0.85em; }
    100% { top: 3em; opacity: 1; }
}

@-webkit-keyframes float-labels-bottom {
    0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
    20% { font-size: 1.5em; opacity: 0; }
    30% { top: 0.1em; }
    50% { opacity: 0; font-size: 0.85em; }
    100% { top: 3em; opacity: 1; }
}
.wrapp{
    max-width: 640px;
    /*margin: 0 auto;*/
    padding: 55px;
    box-sizing: border-box;
    background-color:  #ffffff;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
    margin-bottom: 35px;
   /* font: bold 14px sans-serif;
    text-align: center;*/
}
.heigh{
    height: 35px !important;
}

label {
    font-weight: inherit !important;
}
.help-block{
    color: red !important;
    font-size: 11px;
    font-style: normal;
}
</style>
<!-- Login Container -->
<div class="container cs-header-container col-xs-12 col-sm-12 col-md-12 col-lg-12  ">
<div class="row">
<nav class="navbar navbar-default cs-header-navbar">
  <div class="container-fluid"> 
    <div class="navbar-header" style="padding: 5px 15px !important;">
     <!--  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> -->
  <img class="img-responsive sizelog" src="<?=$this->Url->image('chennaismile-logo.png')?>" >
    </div>
   <!--  <div class="collapse navbar-collapse mob-navbar-collapse"> -->
   <?= $this->Form->create('',array('id' => 'loginForm','class' => 'navbar-form navbar-right desktop-signIn')) ?>
       <!--  <form name="signin" class="navbar-form navbar-right cs-navbar-form" role="form"> -->
    <div class="form-group float-label-control">
   
     <!--  <input id="username" type="text" pattern="[a-zA-Z0-9_-]{6,12}" autofocus required title="must be alphanumeric in 6-12 chars">    -->
    <?= $this->Form->input('email', array('div' => false,'id' => 'email','class' => 'form-control form-element','label' => false,'placeholder' => 'Email Address','required' => true)) ?>
     <label for="">Email Address</label> 
     <!--  <input id="email" type="email" class="form-control cs-textbox" name="userName" value="" placeholder="Email Address" required=""> -->
        <div class="forgotpass"> &nbsp;</div>
    </div>
     

    <div class="form-group float-label-control">
    <?= $this->Form->input('password',array('id' => 'password', 'class' => 'form-control form-element','div' => false,'label' => false,'placeholder' => 'Password','required' => true)) ?>
    <label for="">password</label>
      <!-- <input id="password" type="password" class="form-control cs-textbox"  name="password" value="" placeholder="Password" required="">  --> 
      <!-- <br> -->

      <div class="forgotpass">
       <a style="font-size: 12px;" data-toggle="modal" href="#myModal">Forgot Password?</a>
      </div>
      </div>




    
        <div class="input-group cs-navbar-password-field">
        <?= $this->Form->submit(__('Log In'), array('id' => 'Login', 'class' => 'btn btn-primary cs-primary-button','value' => 'submit')) ?>
            <!-- <input type="button" class="btn btn-primary cs-primary-button" value="Log In"> -->
               <div class="forgotpass"> &nbsp;</a></div>

        </div>
      <br>

    <!--  <a data-toggle="modal" href="#myModal" class="forghide" style="margin-left: 180px;" >Forgot Password?</a> -->

    <?= $this->Form->end() ?>
        <!-- </form> -->
          <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content"  style="background-color: #E2E2E2;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Forgot Password</h4>
        </div>
        <div class="modal-body">
         <?= $this->Form->create('', array('id' => 'forgotpassform', 'url' => ['action' => 'forgetpassword'])) ?>
      
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">
            <div class="form-group float-label-control">
             <!-- <?= $this->Form->input('email', array('id' => 'email', 'class' => 'form-control cs-signup-field cs-border-radius-none','label' => false,'placeholder' => 'Email Address')) ?> -->
             <label for="">Email Address</label>
             <?= $this->Form->input('email', array('div' => false,'id' => 'email', 'class' => 'form-control form-element','label' => false,'placeholder' => 'Enter email', 'required' => true)) ?>
              <!-- <input type="email" name="email" id="email" tabindex="3" class="form-control cs-signup-field cs-border-radius-none" required="" placeholder="Email Address"> -->
            </div>
        </div>


        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">
          <div class="form-group text-center">
          <?= $this->Form->submit(__('Recover'), array('id' => 'Login', 'class' => 'btn btn-primary btn-lg cs-signup-button')) ?>
          <!-- <?= $this->Form->button(__('Create Account'), array('id' => 'Login', 'class' => 'btn btn-primary btn-lg cs-signup-button')) ?> -->
        
              <!-- <button type="button" class="btn btn-primary btn-lg cs-signup-button" tabindex="8">Create a new account</button> --> 

          </div>
        </div>
  
    <?= $this->Form->end() ?>
        </div>
        <div class="modal-footer">
         <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        </div>
      </div>
      
    </div>
  </div>


<!--     </div> -->
  </div>
</nav>
</div>
</div>


<div class="wrapper">
<!-- Page Content -->
    <div class="intro-header_CHENNAI">
  <div class="container"><br>
   <h1 style="color:#ffffff">Fun begins with ChennaiSmile!</h1>
        <div class="card card-container">
           
            <?= $this->Form->create('',array('id' => 'loginForm2','class' => 'form-signin formheigh mobile-signIn')) ?>
            <!-- <form class="form-signin"> -->
            <h3 style="color:#333333">Sign In & Enjoy</h3>
             
          <div class="form-group float-label-control">
   
     <!--  <input id="username" type="text" pattern="[a-zA-Z0-9_-]{6,12}" autofocus required title="must be alphanumeric in 6-12 chars">    -->
    <?= $this->Form->input('email', array('div' => false,'id' => 'email','class' => 'form-control form-element','label' => false,'placeholder' => 'Email Address','required' => true)) ?>
     <label for="">Email Address</label> 
     <!--  <input id="email" type="email" class="form-control cs-textbox" name="userName" value="" placeholder="Email Address" required=""> -->
        <div class="forgotpass"> &nbsp;</div>
    </div>
          <div class="form-group float-label-control">
          <label for="">Password</label> 
        <?= $this->Form->input('password',array('div' => false,'id' => 'password', 'class' => 'form-control form-element','label' => false,'placeholder' => 'Password','required' => true)) ?>
            <!-- <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Password" required> -->
          </div>
        
               <?= $this->Form->submit(__('Log In'), array('id' => 'Login2', 'class' => 'btn btn-primary btn-lg cs-signup-button cs-signin-button')) ?>


                <!-- <button class="btn btn-primary btn-lg cs-signup-button" type="submit">Create Account</button> -->
            <!-- </form> --><!-- /form -->
            <div class="forgotpass" style=" margin-top: 10px;">
              <div style=" color: #000;">Not a member? <a class="viewSignupForim">Join Now</a></div>
           </div>
            <?= $this->Form->end() ?>
              


           <!--  <p id="profile-name" class="profile-name-card"></p> -->
           <?= $this->Form->create('', array('id' => 'signupForm','class' => 'form-signup formheigh ', 'url' => ['action' => 'add'])) ?>
            <!-- <form class="form-signin"> -->
            <h3 style="color:#333333">Sign up & Enjoy</h3>
            <input type="hidden" id="checkUrl" name="checkUrl" value="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'isemailexist'));?>">
            <!--  <div class="form-group float-label-control">
   
     
    <?= $this->Form->input('email', array('div' => false,'id' => 'email','class' => 'form-control form-element','label' => false,'placeholder' => 'Email Address','required' => true)) ?>
     <label for="">Email Address</label> 
        <div class="forgotpass"> &nbsp;</div>
    </div> -->
              <div class="form-group float-label-control" style="margin-top: 20px;">
              <label for="">Name</label> 
           <?= $this->Form->input('fullname', array('div' => false,'id' => 'fullname', 'class' => 'form-control form-element','label' => false,'placeholder' => 'Full Name','required' => true)) ?>
            <!-- <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required> -->
          </div>
          <div class="form-group float-label-control">
          <label for="">Email</label> 
        <?= $this->Form->input('email', array('div' => false,'id' => 'email', 'class' => 'form-control form-element','label' => false,'placeholder' => 'Email Address','required' => true)) ?>
            <!-- <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" required> -->
          </div>
          <div class="form-group float-label-control">
          <label for="">Password</label>
        <?= $this->Form->input('password',array('id' => 'new_password', 'class' => 'form-control form-element','label' => false,'placeholder' => 'Password','required' => true)) ?>
            <!-- <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Password" required> -->
          </div>
          <div class="form-group float-label-control">
          <label for="">Confirm Password</label>
<?= $this->Form->input('confirm_password',array('div' => false,'id' => 'confirm_password', 'type' => 'password', 'class' => 'form-control form-element','label' => false,'placeholder' => 'Re-type Password','required' => true)) ?>
            <!-- <input type="text" class="form-control" id="subject" name="subject" placeholder="Re-type Password" required> -->
          </div>
              <?= $this->Form->hidden('group_id', ['options' => $groups], ['default' => '1']); ?> 
                  <p style="color:#333333;font-size: 11px;"  align="left">*By clicking Create Account means you're okay with ChennaiSmile Terms and Privacy Policy and Cookie Policy.</p>
                
              <?= $this->Form->button(__('Create Account'), array('id' => 'signup', 'class' => 'btn btn-primary btn-lg cs-signup-button')) ?>
                <!-- <button class="btn btn-primary btn-lg cs-signup-button" type="submit">Create Account</button> -->

                 <div class="forgotpass" style=" margin-top: 10px;">
                    <div style=" color: #000;"><a class="viewSignInForim">Back to SignIn</a></div>
                 </div>
            <!-- </form> --><!-- /form -->
            <?= $this->Form->end() ?>
            
        </div><!-- /card-container -->
    </div>
    </div> 
    </div>



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
  
$('.viewSignupForim').click(function(){
  $('.form-signup').fadeIn();
  $('.mobile-signIn').hide();
});

$('.viewSignInForim').click(function(){
  $('.form-signup').hide();
  $('.mobile-signIn').fadeIn();
});

// $('#email').on('input', function() {
//           var input=$(this);
//           var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
//           var is_email=re.test(input.val());
//           if(is_email){input.removeClass("invalid").addClass("valid");}
//           else{input.removeClass("valid").addClass("invalid");}
//         });
 
$(document ).ready( function () {

  /*$.validator.setDefaults({
      submitHandler: function (form) {

         if ($(form).valid()) {
             form.submit();
         }
      }
  });*/


$("#forgotpassform" ).validate( {
    rules: {    
      email: {
        required: true,
        email: true
      },
    },
    messages: {
      email: "Please enter a email address"
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
  
  $("#signupForm" ).validate( {
    rules: {
      fullname: "required",      
      email: {
        required: true,
        email: true,
        remote: {
          url: $("#checkUrl").val(),
          type: "POST",
          cache: false,
          dataType: "json",
          data: {
              email: function() { return $("#signupForm #email").val(); }
          },
          dataFilter: function(response) {
            if(response != "") {
              var resp = JSON.parse(response); 
              return (resp.code == true) ? true : false;
            } 
            else { 
              return false;
            }
          }
        }
      },
      password: {
        required: true,
        minlength: 6
      },
      confirm_password: {
        required: true,
        minlength: 6,
        equalTo: "#new_password"
      }
    },
    messages: {
      fullname: "Please enter your Fullname",      
      email: { 
        required: "Please enter a valid email address",
        remote: "Email ID already exist" 
      },
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


  $("#loginForm" ).validate( {
    rules: {    
      email: {
        required: true,
        email: true
      },
      password: {
        required: true
      }
    },
    messages: {
      email: "Please enter a email address",
      password: {
        required: "Please provide a password"      
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


  $("#loginForm2" ).validate( {
    rules: {    
      email: {
        required: true,
        email: true
      },
      password: {
        required: true
      }
    },
    messages: {
      email: "Please enter a email address",
      password: {
        required: "Please provide a password"      
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


