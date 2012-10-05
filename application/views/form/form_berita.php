<?php echo form_open($resource['formAction'], 'id="berita" class="form-horizontal '.$resource['addClass'].'"'); ?>

	<div class="control-group">
		<label class="control-label" for="judulBerita">Judul berita</label>
		<div class="controls">
			<input type="text" name="judulBerita" id="judulBerita">
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="tagBerita">Tag berita</label>
		<div class="controls">
			<input type="text" name="tagBerita" id="tagBerita">
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="contentBerita">Content Berita</label>
		<div class="controls">
			<textarea rows="3" type="text" name="contentBerita" id="contentBerita"></textarea>
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="publishBerita"></label>
		<div class="controls">
			<input type="checkbox" name="publishBerita" id="publishBerita" checked> Publish untuk Murid dan Karyawan.
		</div>
	</div>
	
	<div class="control-group warning">
		<div class="controls">
			<button type="submit" class="btn">Post</button>  
			<button type="reset" class="btn">reset</button>  
		</div>
	</div>
	
<?php echo form_close(); ?>