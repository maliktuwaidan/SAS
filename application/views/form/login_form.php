<?php 
	if($_POST && !empty($validation_error))
		echo '<b>'.$validation_error.'</b>';
	echo form_open('login', 'class="form-horizontal"'); ?>

	<div class="control-group <?php echo form_error('inputUser') ? 'error' : ''; ?>">
		<label class="control-label" for="inputUser">Username</label>
		<div class="controls">
			<input type="text" name="inputUser" id="inputUser" value="<?php echo set_value('inputUser'); ?>" placeholder="<?php echo form_error('inputUser') ? 'Username Harus Diisi' : 'Username'; ?>">
		</div>
	</div>
	
	<div class="control-group <?php echo form_error('inputPassword') ? 'error' : ''; ?>">
		<label class="control-label" for="inputPassword">Password</label>
		<div class="controls">
			<input type="password" name="inputPassword"  id="inputPassword" value="<?php echo set_value('inputPassword'); ?>" placeholder="<?php echo form_error('inputUser') ? 'Password Harus Diisi' : 'Password'; ?>">
		</div>
	</div>
	
	<div class="control-group warning">
		<div class="controls">
			<button type="submit" class="btn">Sign in</button>  
		</div>
	</div>
	
<?php echo form_close(); ?>