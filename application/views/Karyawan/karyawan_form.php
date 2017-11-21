	<?php $this->load->view('templates/header') ?>
	<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Nama Karyawan</label>
		<input type="text" placeholder="Masukkan Nama Karyawan" value="<?php echo $nama_pegawai; ?>" class="form-control" name="nama_pegawai">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<input type="text" placeholder="Masukkan Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" class="form-control" name="jenis_kelamin">
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input type="date" placeholder="Masukkan Tanggal Lahir" value="<?php echo $tgl_lahir; ?>" class="form-control" name="tgl_lahir">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" placeholder="Masukkan Alamat" value="<?php echo $alamat; ?>" class="form-control" name="alamat">
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" placeholder="Masukkan Username" value="<?php echo $username; ?>" class="form-control" name="username">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" placeholder="Masukkan Password" value="<?php echo $password; ?>" class="form-control" name="password">
	</div>

	<input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	
	<a href="<?php echo site_url('Karyawan')?>" class="btn btn-default">Cancel</a>

	</form>

	<?php $this->load->view('templates/footer') ?>