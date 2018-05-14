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
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">group</i>
                    </span>
                    <?= $this->Form->select('group_id', $groups,array('class' => 'form-control show-tick')); ?>
                   <!--  <select class="form-control show-tick">
                        <option value="">-- Please select --</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
					</select> -->
                    <!-- <div class="form-line">
                        <?= $this->Form->select('group_id', $groups); ?>
                    </div> -->
                </div>
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
                <div class="row m-t-15 m-b--20">
                    <div class="col-xs-6">
                    	<?= $this->Html->link(__('Sign In'), ['controller' => 'Users', 'action' => 'adminlogin'], array('class' => 'uplink')) ?>
                    </div>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>


<!-- 
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



	

				 <?= $this->Form->select('group_id', $groups); ?>
			  </div>
			 <p class="txt"> *By clicking Creat Account means you’re okay with ChennaiSmile Terms and Privacy Policy and Cookie Policy.<p>
		
			  <?= $this->Form->button(__('Create Account'), array('id' => 'Login', 'class' => 'btn btn-primary ripple-effect')) ?>
			  <p class="tagsignin">
			  <?= $this->Html->link(__('Sign In'), ['controller' => 'Users', 'action' => 'adminlogin'], array('class' => 'uplink')) ?> it's easy</p>
			 </div>
</fieldset>

<?= $this->Form->end() ?> -->