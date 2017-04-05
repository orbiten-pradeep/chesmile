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

input.invalid{
      border: 2px solid red;
      border-radius:0;
    }
    
    input.valid{
      border: 2px solid green;
      border-radius:0;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
  <img class="img-responsive sizelog" src="/chesmile/img/logo.png" >
    </div>
   <!--  <div class="collapse navbar-collapse mob-navbar-collapse"> -->
   <?= $this->Form->create('',array('id' => 'animdiv','class' => 'navbar-form navbar-right cs-navbar-form desktop-signIn')) ?>
       <!--  <form name="signin" class="navbar-form navbar-right cs-navbar-form" role="form"> -->
    <div class="input-group cs-navbar-email-field">
     <!--  <input id="username" type="text" pattern="[a-zA-Z0-9_-]{6,12}" autofocus required title="must be alphanumeric in 6-12 chars">    -->
    <?= $this->Form->input('email', array('id' => 'email','class' => 'form-control cs-textbox','label' => false,'placeholder' => 'Email Address','required' => true)) ?> 
     <!--  <input id="email" type="email" class="form-control cs-textbox" name="userName" value="" placeholder="Email Address" required=""> -->
        <div class="forgotpass"> &nbsp;</a></div>
    </div>

    <div class="input-group cs-navbar-password-field">
    <?= $this->Form->input('password',array('id' => 'password', 'class' => 'form-control cs-textbox','label' => false,'placeholder' => 'Password','required' => true)) ?>
      <!-- <input id="password" type="password" class="form-control cs-textbox"  name="password" value="" placeholder="Password" required="">  --> 
      <!-- <br> -->
      <div class="forgotpass">
       <a data-toggle="modal" href="#myModal">Forgot Password?</a>
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
         <?= $this->Form->create('', array('id' => 'animdiv'), ['url' => ['action' => 'forgetpassword']]) ?>
      
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-10">
            <div class="form-group">
             <!-- <?= $this->Form->input('email', array('id' => 'email', 'class' => 'form-control cs-signup-field cs-border-radius-none','label' => false,'placeholder' => 'Email Address')) ?> -->
             <?= $this->Form->input('email', array('id' => 'email', 'class' => 'form-control','label' => false,'placeholder' => 'Enter email', 'required')) ?>
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
           

            <?= $this->Form->create('', array('id' => 'animdiv','class' => 'form-signin formheigh mobile-signIn', 'url' => ['action' => 'add'])) ?>
            <!-- <form class="form-signin"> -->
            <h3 style="color:#333333">Sign In & Enjoy</h3>
             
          <div class="form-group" style="margin-top: 20px;">
        <?= $this->Form->input('email', array('id' => 'email', 'class' => 'form-control cs-textbox','label' => false,'placeholder' => 'Email Address','required' => true)) ?>
            <!-- <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" required> -->
          </div>
          <div class="form-group">
        <?= $this->Form->input('password',array('id' => 'password', 'class' => 'form-control cs-textbox','label' => false,'placeholder' => 'Password','required' => true)) ?>
            <!-- <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Password" required> -->
          </div>
        
                
              <?= $this->Form->button(__('Sign In'), array('id' => 'Login', 'class' => 'btn btn-primary btn-lg cs-signup-button cs-signin-button')) ?>
                <!-- <button class="btn btn-primary btn-lg cs-signup-button" type="submit">Create Account</button> -->
            <!-- </form> --><!-- /form -->
            <div class="forgotpass" style=" margin-top: 10px;">
              <div style=" color: #000;">Not a member? <a class="viewSignupForim">Join Now</a></div>
           </div>
            <?= $this->Form->end() ?>
              


           <!--  <p id="profile-name" class="profile-name-card"></p> -->
           <?= $this->Form->create('', array('id' => 'animdiv','class' => 'form-signup formheigh ', 'url' => ['action' => 'add'])) ?>
            <!-- <form class="form-signin"> -->
            <h3 style="color:#333333">Sign up & Enjoy</h3>
              <div class="form-group" style="margin-top: 20px;">
           <?= $this->Form->input('fullname', array('id' => 'fullname', 'class' => 'form-control cs-textbox full','label' => false,'placeholder' => 'Full Name','required' => true)) ?>
            <!-- <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required> -->
          </div>
          <div class="form-group">
        <?= $this->Form->input('email', array('id' => 'email', 'class' => 'form-control cs-textbox','label' => false,'placeholder' => 'Email Address','required' => true)) ?>
            <!-- <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" required> -->
          </div>
          <div class="form-group">
        <?= $this->Form->input('password',array('id' => 'password', 'class' => 'form-control cs-textbox','label' => false,'placeholder' => 'Password','required' => true)) ?>
            <!-- <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Password" required> -->
          </div>
          <div class="form-group">
<?= $this->Form->input('password',array('id' => 'confirm_password', 'class' => 'form-control cs-textbox','label' => false,'placeholder' => 'Re-type Password','required' => true)) ?>
            <!-- <input type="text" class="form-control" id="subject" name="subject" placeholder="Re-type Password" required> -->
          </div>
              <?= $this->Form->hidden('group_id', ['options' => $groups], ['default' => '1']); ?> 
                  <p style="color:#333333;font-size: 11px;"  align="left">*By clicking Create Account means you're okay with ChennaiSmile Terms and Privacy Policy and Cookie Policy.</p>
                
              <?= $this->Form->button(__('Create Account'), array('id' => 'Login', 'class' => 'btn btn-primary btn-lg cs-signup-button')) ?>
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
  
$('.viewSignupForim').click(function(){
  $('.form-signup').fadeIn();
  $('.mobile-signIn').hide();
});

$('.viewSignInForim').click(function(){
  $('.form-signup').hide();
  $('.mobile-signIn').fadeIn();
});

$('#email').on('input', function() {
          var input=$(this);
          var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
          var is_email=re.test(input.val());
          if(is_email){input.removeClass("invalid").addClass("valid");}
          else{input.removeClass("valid").addClass("invalid");}
        });
$("#Login").click(function(event){
        var form_data=$("#animdiv").serializeArray();
        var error_free=true;
        for (var input in form_data){
          var element=$("#email");
          var valid=element.hasClass("valid");
          var error_element=$("span", element.parent());
          if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
          else{error_element.removeClass("error_show").addClass("error");}
        }
        if (!error_free){
          event.preventDefault(); 
        }
      });
</script>



<!-- <style>
.btn{
  margin-top:5%;
  height:45px;
  width:250px;
  background:#4abac5;
  color:#f2f2f2;
  font-size:25px;
  font-weight:400;
  border:1px solid #f2f2f2;
}
.btn-primary:hover {
    color: #fff;
    background-color: #444545;
    }
    .btn-primary:active {
    color: #fff;
    background-color: #4abac5;
    border-color: #4abac5;
    background-image: none;
}
.btn-primary:focus {
    color: #fff;
    background-color: #4abac5;
    border-color: #4abac5;
    }

 .btn-primary:active:focus {
 color: #fff;
background-color: #4abac5;
border-color: #4abac5;
}
#contents1{
  opacity:1;
  transition: opacity .5s ease-in;
  margin-top: -35px !important;
}
 @media only screen and (max-width: 1366px) {
  #contents1{
  opacity:1;
  transition: opacity .5s ease-in;
  margin-top: -10px !important;
}
 }
</style>


<script type="text/javascript">
$('body').on( 'click', '.ripple-effect', function(e){
// Cache the selector
var the_dom = $(this);

// Sometimes the clicked element != the limit of the ripple effect. We'll talk about it later below
var the_dom_limit = the_dom;

// Get the click and the clicked element offsets
var the_dom_offset = the_dom_limit.offset();    
var click_x = e.pageX;
var click_y = e.pageY;
    
// Get the width and the height of clicked element
var the_dom_width = the_dom_limit.outerWidth();
var the_dom_height = the_dom_limit.outerHeight();

// Draw the ripple effect wrap
var ripple_effect_wrap = $('<span class="ripple-effect-wrap"></span>');
ripple_effect_wrap.css({
  'width'     : the_dom_width,
  'height'    : the_dom_height,
  'position'    : 'absolute',
  'top'     : the_dom_offset.top,
  'left'      : the_dom_offset.left,
  'z-index'     : 100,
  'overflow'    : 'hidden',
  'background-clip' : 'padding-box'
});

// Append the ripple effect wrap
ripple_effect_wrap.appendTo('body');
    
// Determine the position of the click relative to the clicked element
var click_x_ripple = click_x - the_dom_offset.left;
var click_y_ripple = click_y - the_dom_offset.top;
var circular_width = 1000;

// Draw the ripple effect
var ripple = $('<span class="ripple"></span>');
ripple.css({
  'width'       : circular_width,
  'height'      : circular_width,
  'background'      : 'rgba(0,0,0,0.3)',
  'position'      : 'absolute',
  'top'       : click_y_ripple - ( circular_width / 2 ),
  'left'        : click_x_ripple - ( circular_width / 2 ),
  'content'     : '',
  'background-clip'     : 'padding-box',
  '-webkit-border-radius'       : '50%',
  'border-radius'               : '50%',
  '-webkit-animation-name'  : 'ripple-animation',
  'animation-name'                : 'ripple-animation',
  '-webkit-animation-duration'    : '1s',
  'animation-duration'            : '1s',
  '-webkit-animation-fill-mode'   : 'both',
  'animation-fill-mode'           : 'both'        
});
$('.ripple-effect-wrap:last').append( ripple );
    
// Remove rippling component after half second
setTimeout( function(){
  ripple_effect_wrap.fadeOut(function(){
    $(this).remove();
  });
}, 100 );
});
</script>

<?= $this->Form->create('', array('id' => 'animdiv','class' => 'form-inline signin pure-form')) ?>
<fieldset>
    <div id="contents1">  
        <div class="form-group">
        <h2>Log in to have fun<!-- <span style="color:#1a8ec8">Log</span><span style="color:#444545"> in </span> --></h2>
        
        <!--  <?= $this->Form->input('email', array('id' => 'email', 'class' => 'form-control','label' => false,'placeholder' => 'email')) ?>
        </div><br>
        <div class="form-group">
          
        <?= $this->Form->input('password',array('id' => 'password', 'class' => 'form-control','label' => false,'placeholder' => 'password')) ?>
        </div><br>
        <br>
        <?= $this->Form->submit(__('Log in'), array('id' => 'Login', 'class' => 'btn btn-primary ripple-effect')) ?>
        
        <p class="tag" >not yet a user ? 
        <?= $this->Html->link(__('Sign Up'), ['controller' => 'Users', 'action' => 'add'], array('class' => 'uplink')) ?> it's easy</p>
        <br>
        <p class="tag"><?php echo $this->Html->link("Forgot Password ?",array("action"=>"forgetpassword")); ?></p>
       </div>
        
</fieldset>
<?= $this->Form->end() ?>
 -->



 