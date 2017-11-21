	<?php $this->load->view('templates/header') ?>
	<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Nama Customer</label>
		<input type="text" placeholder="Masukkan Nama Customer" value="<?php echo $nama_customer; ?>" class="form-control" name="nama_customer">
	</div>
	<div class="form-group">
		<label>No Telepon</label>
		<input type="text" placeholder="Masukkan Nomor Telepon" value="<?php echo $no_telp; ?>" class="form-control" name="no_telp">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" placeholder="Masukkan Alamat" value="<?php echo $alamat; ?>" class="form-control" name="alamat">
	</div>

	<input type="hidden" name="id_customer" value="<?php echo $id_customer; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	
	<a href="<?php echo site_url('Customer')?>" class="btn btn-default">Cancel</a>

	</form>

	<?php $this->load->view('templates/footer') ?>