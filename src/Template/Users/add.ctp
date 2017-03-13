<style>
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
.signupform{
height: 545px;
}
@media only screen and (max-width: 1366px) {
.full{
	margin-top: 0% !important;
	height: 35px !important;
	max-width: 220px !important;
	background: #f2f2f2;
	border: 1px solid #aaaaaa !important;
	border-radius: 0 !important;
  }
  .txt{
	font-size: 8px !important;
}

.tagsignin{
	margin-top:-1% !important;
	font-size:18px;
	text-align:center;
	color:#444444;
	font-weight:300;
}
}

.full{
	margin-top: 10%;
	height: 45px;
	width: 250px !important;
	background: #f2f2f2;
	border: 1px solid #aaaaaa !important;
	border-radius: 0 !important;
}
.txt{
	font-size: 11px;
}

.tagsignin{
	margin-top:-3%;
	font-size:18px;
	text-align:center;
	color:#444444;
	font-weight:300;
}
.tagsignin .uplink{
	text-decoration:none;
	font-weight:700;
	color:#444444;
	cursor:pointer;
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
	'width' 		: the_dom_width,
	'height'		: the_dom_height,
	'position' 		: 'absolute',
	'top'			: the_dom_offset.top,
	'left'	 		: the_dom_offset.left,
	'z-index' 		: 100,
	'overflow' 		: 'hidden',
	'background-clip'	: 'padding-box'
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
	'width' 			: circular_width,
	'height'			: circular_width,
	'background'			: 'rgba(0,0,0,0.3)',
	'position'			: 'absolute',
	'top'				: click_y_ripple - ( circular_width / 2 ),
	'left'				: click_x_ripple - ( circular_width / 2 ),
	'content'			: '',
	'background-clip' 		: 'padding-box',
	'-webkit-border-radius'     	: '50%',
	'border-radius'             	: '50%',
	'-webkit-animation-name'	: 'ripple-animation',
	'animation-name'              	: 'ripple-animation',
	'-webkit-animation-duration'  	: '1s',
	'animation-duration'          	: '1s',
	'-webkit-animation-fill-mode' 	: 'both',
	'animation-fill-mode'         	: 'both'  			
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
<?= $this->Form->create($user, array('id' => 'animdiv','class' => 'form-inline signin signupform pure-form')) ?>
<fieldset>
		<div id="contents1">	
			  <div class="form-group">
				<h2>The fun begins with ChennaiSmile.Enjoy <br><span style="color:#1a8ec8">Sign</span><span style="color:#444545"> up</span></h2>
				
				 <?= $this->Form->input('fullname', array('id' => 'fullname', 'class' => 'form-control full','label' => false,'placeholder' => 'fullname')) ?>
			  </div><br>	
			  <div class="form-group">
				
				
				 <?= $this->Form->input('email', array('id' => 'email', 'class' => 'form-control','label' => false,'placeholder' => 'email')) ?>
			  </div><br>
			  <div class="form-group">
			    
				<?= $this->Form->input('password',array('id' => 'password', 'class' => 'form-control','label' => false,'placeholder' => 'password')) ?>
				<?= $this->Form->input('password',array('id' => 'confirm_password', 'class' => 'form-control','label' => false,'placeholder' => 'Re-type password')) ?>



	

				 <?= $this->Form->hidden('group_id', ['options' => $groups], ['default' => '1']); ?>
			  </div>
			 <p class="txt"> *By clicking Creat Account means you’re okay with ChennaiSmile Terms and Privacy Policy and Cookie Policy.<p>
		
			  <?= $this->Form->button(__('Create Account'), array('id' => 'Login', 'class' => 'btn btn-primary ripple-effect')) ?>
			  <p class="tagsignin">
			  <?= $this->Html->link(__('Sign In'), ['controller' => 'Users', 'action' => 'login'], array('class' => 'uplink')) ?> it's easy</p>
			 </div>
			<!-- 
			<div id="contents2">
				<div class="form-group">
					<h2>Sign Up</h2>
					<label class="sr-only" for="exampleInputEmail3">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
				</div>
			  <br>
			  <p class="tag1" ><a class="uplink1" onclick="magic1()">Sign In</a> </p>
			</div>
			-->
		    
    
</fieldset>

	<!-- 		<form class="pure-form">
    <fieldset>
        <legend>Confirm password with HTML5</legend>

        <input type="password" placeholder="Password" id="password" required>
        <input type="password" placeholder="Confirm Password" id="confirm_password" required>

        <button type="submit" class="pure-button pure-button-primary">Confirm</button>
    </fieldset>
</form>  -->
<?= $this->Form->end() ?>

<script type="text/javascript">
	var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>