<div class="container">
	<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit row">
			<div class="row">
			
				<div class="span4">
					<img src="<?php echo $backend['layout_image_path']; ?>login_image.jpg" class="img-rounded">
				</div>
				
				<div class="span7">
				
					<h2>Selamat Datang pada SAS</h2>
					<b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</b>
					<hr>
					
					<?php $this->load->view('form/login_form'); ?>
					
				</div>
			</div>
		</div>
	
	<hr>

	<?php $this->load->view('template/footer_view'); ?>

</div> 
<!-- /container -->