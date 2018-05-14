<div class="login-box">
    <div class="logo">
        <?php echo $this->Html->image('chennaismile-logo.png',array('alt' => 'Logo Chennai Smile','class' => 'cs_admin_logo')); ?>
    </div>
    <div class="card">
        <div class="body">
        	<?= $this->Form->create('', array('id' => 'sign_in','class' => 'form-inline signin')) ?>
                <div class="msg">Sign in to start your session</div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="email" placeholder="Email Address" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="col-xs-4">
                        <?= $this->Form->submit(__('Login'), array('id' => 'Login', 'class' => 'btn btn-block bg-pink waves-effect')) ?>
                    </div>
                </div>
                <div class="row m-t-15 m-b--20">
                    <div class="col-xs-6">
                        <!-- <a href="sign-up.html">Register Now!</a> -->
                        <?= $this->Html->link(__('Sign Up'), ['controller' => 'Users', 'action' => 'adminadd'], array('class' => 'uplink')) ?> 
                    </div>
                    <!-- <div class="col-xs-6 align-right">
                        <a href="forgot-password.html">Forgot Password?</a>
                    </div> -->
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>