<?php echo form_open('administrator', 'id="berita2" class="form-horizontal"'); ?>

	<div class="control-group">
		<label class="control-label" for="judulBerita">Judul berita</label>
		<div class="controls">
			<input type="text" name="judulBerita" id="judulBerita">
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="contentBerita">Content Berita</label>
		<div class="controls">
			<textarea rows="3" type="text" name="contentBerita" id="contentBerita"></textarea>
		</div>
	</div>
	
	<div class="control-group warning">
		<div class="controls">
			<button type="submit" class="btn">Post</button>  
		</div>
	</div>
	
<?php echo form_close(); ?>