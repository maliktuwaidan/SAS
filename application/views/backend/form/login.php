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
					<form class="form-horizontal">
						<div class="control-group">
							<label class="control-label" for="inputUser">Username</label>
							<div class="controls">
								<input type="text" id="inputUser" placeholder="Username">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword">Password</label>
							<div class="controls">
								<input type="password" id="inputPassword" placeholder="Password">
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn">Sign in</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	
	
	
	<hr>

	<?php $this->load->view('backend/template/footer'); ?>

</div> 
<!-- /container -->