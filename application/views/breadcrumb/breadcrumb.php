<ul class="breadcrumb">
	<li><?php echo $this->uri->segment(1); ?> <span class="divider">/</span></li>
	<li class="active"><?php echo $trace; ?></li>
</ul>
<div class="row sas-message" align="center" title="Klik Untuk Menutup Pesan ini."><?php echo $this->session->flashdata('sas-message'); ?></div>
<br />
