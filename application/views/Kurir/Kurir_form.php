	<?php $this->load->view('templates/header') ?>
	<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Nama Kurir</label>
		<input type="text" placeholder="Masukkan Nama Kurir" value="<?php echo $nama_kurir; ?>" class="form-control" name="nama_kurir">
	</div>
	<div class="form-group">
		<label>No telp</label>
		<input type="text" placeholder="Masukkan Nomor Telepon" value="<?php echo $no_telp; ?>" class="form-control" name="no_telp">
	</div>
	
	<input type="hidden" name="id_kurir" value="<?php echo $id_kurir; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	
	<a href="<?php echo site_url('Kurir')?>" class="btn btn-default">Cancel</a>

	</form>

	<?php $this->load->view('templates/footer') ?>