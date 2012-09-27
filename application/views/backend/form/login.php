<div class="container">
	<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit row">
			<div class="row">
				<div class="span4">
					<img src="<?php echo $backend['layout_image_path']; ?>1.jpg" class="img-rounded">
				</div>
				
				<div class="span7">
					<h2>Selamat Datang pada SAS</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<hr>
					<?php echo form_open('backend/login', 'class="form-horizontal"'); ?>
					
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
						
						<div class="control-group error">
							<div class="controls">
								<button type="submit" class="btn">Sign in</button>
							</div>
						</div>
						
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	
	
	
	<hr>

	<?php $this->load->view('backend/template/footer'); ?>

</div> 
<!-- /container -->