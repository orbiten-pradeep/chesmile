<?php
if(isset($errors)){
	echo '<div class="error">';
	echo "<ul>";
	foreach($errors as $error){
	 echo"<li><div class='error-message'>$error</div></li>";
	}
	echo"</ul>";
	echo'</div>';
}
?>

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


<!-- <?= $this->Form->create('', array('id' => 'animdiv','class' => 'form-inline signin')) ?>
<fieldset>
		<div id="contents1">	
			 <div class="form-group">
			    
				<?= $this->Form->input('password',array('id' => 'password', 'class' => 'form-control','label' => false,'placeholder' => 'Enter a new password')) ?>
			  </div><br>
			  <br>
			  <?= $this->Form->submit(__('Save'), array('id' => 'Login', 'class' => 'btn btn-primary')) ?>
		</div>
</fieldset>
<?= $this->Form->end() ?> -->

<div class="wrapper">
<!-- Page Content -->
    <div class="intro-header_CHENNAI">
  <div class="container"><br>
   <h1 style="color:#ffffff">Fun begins with ChennaiSmile!</h1>
        <div class="card card-container">
           <?= $this->Form->create('', array('id' => 'animdiv','class' => 'form-signup formheigh ')) ?>
            <h3 style="color:#333333">Reset Password</h3>
              <div class="form-group" style="margin-top: 20px;">
           <?= $this->Form->input('password',array('id' => 'password', 'class' => 'form-control cs-textbox','label' => false,'placeholder' => 'Enter a new password','required' => true)) ?>
          </div>
          <div class="form-group">
<?= $this->Form->input('password',array('id' => 'confirm_password', 'class' => 'form-control cs-textbox','label' => false,'placeholder' => 'Re-type Password','required' => true)) ?>
          </div>
           <?= $this->Form->submit(__('Save'), array('id' => 'Login', 'class' => 'btn btn-primary btn-lg cs-signup-button')) ?>
              <!-- <?= $this->Form->button(__('Create Account'), array('id' => 'Login', 'class' => 'btn btn-primary btn-lg cs-signup-button')) ?> -->
            <?= $this->Form->end() ?>
            
        </div><!-- /card-container -->
    </div>
    </div> 
    </div>