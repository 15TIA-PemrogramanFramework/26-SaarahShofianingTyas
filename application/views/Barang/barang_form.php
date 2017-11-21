	<?php $this->load->view('templates/header') ?>
	<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Nama Barang</label>
		<input type="text" placeholder="Masukkan Nama Barang" value="<?php echo $nama_barang; ?>" class="form-control" name="nama_barang">
	</div>
	<div class="form-group">
		<label>Merek Barang</label>
		<input type="text" placeholder="Masukkan Merek Barang" value="<?php echo $merek_barang; ?>" class="form-control" name="merek_barang">
	</div>
	<div class="form-group">
		<label>Ukuran</label>
		<input type="text" placeholder="Masukkan Ukuran" value="<?php echo $ukuran; ?>" class="form-control" name="ukuran">
	</div>

	<input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	
	<a href="<?php echo site_url('Barang')?>" class="btn btn-default">Cancel</a>

	</form>

	<?php $this->load->view('templates/footer') ?>