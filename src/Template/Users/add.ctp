<!-- <script>
$(window).on('load',function(){
        window.location="/";
    });
</script> -->

<div class="login-box">
    <div class="logo">
        <?php echo $this->Html->image('chennaismile-logo.png',array('alt' => 'Logo Chennai Smile','class' => 'cs_admin_logo')); ?>
    </div>
    <div class="card">
        <div class="body">
        	<?= $this->Form->create($user, array('id' => 'animdiv','class' => 'form-inline signin')) ?>
                <div class="msg">Sign up to join Chennaismile</div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="fullname" placeholder="Full Name" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">email</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="email" placeholder="Email Address" required>
                    </div>
                </div>
                <?= $this->Form->hidden('group_id', ['options' => $groups], ['default' => '1']); ?>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" id="confirm_password" placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                    	 <?= $this->Form->button(__('Create Account'), array('id' => 'Login', 'class' => 'btn btn-block bg-pink waves-effect')) ?>
                    </div>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<!-- <?= $this->Form->create($user, array('id' => 'animdiv','class' => 'form-inline signin signupform pure-form')) ?>
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
</fieldset> -->
