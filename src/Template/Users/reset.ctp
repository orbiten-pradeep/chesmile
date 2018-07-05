<style type="text/css">
	footer{
		position: absolute;
		width: 100%;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-4 mx-auto mt-5 mb-5">
			<div class="p-4 mb-4 flex-cont rounded">
				<?= $this->Form->create('',array('id' => 'animdiv','class' => 'form-signin')) ?>
				    <div class="md-form form-sm mb-5">
				        <?= $this->Form->input('password', array('label' => 'New Password','div' => false,'id' => 'email','class' => 'form-control form-control-sm validate','required' => true)) ?>   
				    </div>

				    <div class="md-form form-sm mb-5">
				        <?= $this->Form->input('password',array('label' => 'Re-type Password','div' => false,'id' => 'password', 'class' => 'form-control form-control-sm validate','required' => true)) ?>
				    </div>
				    <?= $this->Form->submit(__('Save'), array('id' => 'Login2', 'class' => 'btn btn-primary btn-lg cs-signup-button cs-signin-button')) ?>
				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>
</div>


<!-- <div class="wrapper">
    <div class="intro-header_CHENNAI">
  <div class="container">
        <div class="card card-container">
           <?= $this->Form->create('', array('id' => 'animdiv','class' => 'form-signup formheigh ')) ?>
            <h3 style="color:#333333">Reset Password</h3>

            <div class="form-group float-label-control">
              <label for="">New Password</label> 
           <?= $this->Form->input('password', array('div' => false,'id' => 'password', 'class' => 'form-control form-element','label' => false,'placeholder' => 'Enter a new password','required' => true)) ?>
          </div>

          <div class="form-group float-label-control">
              <label for="">Re-type Password</label> 
           <?= $this->Form->input('password', array('div' => false,'id' => 'confirm_password', 'class' => 'form-control form-element','label' => false,'placeholder' => 'Re-type Password','required' => true)) ?>
          </div>

           <?= $this->Form->submit(__('Save'), array('id' => 'Login', 'class' => 'btn btn-primary btn-lg cs-signup-button')) ?>
            <?= $this->Form->end() ?>
            
        </div>
    </div>
    </div> 
    </div> -->
