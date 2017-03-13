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




<?= $this->Form->create('', array('id' => 'animdiv','class' => 'form-inline signin')) ?>
<fieldset>
		<div id="contents1">	
			 <div class="form-group">
			    
				<?= $this->Form->input('password',array('id' => 'password', 'class' => 'form-control','label' => false,'placeholder' => 'password')) ?>
			  </div><br>
			  <br>
			  <?= $this->Form->submit(__('Save'), array('id' => 'Login', 'class' => 'btn btn-primary')) ?>
		</div>
</fieldset>
<?= $this->Form->end() ?>