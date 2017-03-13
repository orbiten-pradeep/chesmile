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
<style type="text/css">
	.forgetpass{
		height: 400px;
	}
#contents1{
	opacity:1;
	transition: opacity .5s ease-in;
	margin-top: 0px !important;
}

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
height: 550px;
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
<?= $this->Form->create('', array('id' => 'animdiv','class' => 'form-inline signin forgetpass')) ?>
<fieldset>
		<div id="contents1">	
			  <div class="form-group">
				<h2><span style="color:#1a8ec8">Forgot</span>&nbsp;&nbsp;<span style="color:#444545">Password</span></h2>
				<br>
				 <?= $this->Form->input('email', array('id' => 'email', 'class' => 'form-control','label' => false,'placeholder' => 'Enter email', 'required')) ?>
			  </div><br>
			  <br>
			  <?= $this->Form->submit(__('Recover'), array('id' => 'Login', 'class' => 'btn btn-primary ripple-effect')) ?>
			   <p class="tag" >not yet a user ? 
			  <?= $this->Html->link(__('Sign Up'), ['controller' => 'Users', 'action' => 'add'], array('class' => 'uplink')) ?> it's easy</p>
		</div>
</fieldset>
<?= $this->Form->end() ?>