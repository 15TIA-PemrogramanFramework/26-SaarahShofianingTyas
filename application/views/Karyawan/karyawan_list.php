<?php 
$this->load->view('templates/header');
$status=$this->session->userdata('status');
?>
<div class="row">
	<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
	<?php echo anchor(site_url("Karyawan/tambah"),'<i class="fa fa-plus"></i> Tambah Data','class= "btn btn-primary"'); ?>
</div>
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
	<tr>
		<th>No</th>
		<th>ID Karyawan</th>
		<th>Nama Karyawan</th>
		<th>Jenis Kelamin</th>
		<th>Tanggal Lahir</th>
		<th>Alamat</th>
		<th>Username</th>
		<th>Password</th>
		<?php if($status=='admin') {  ?>
		<th>Aksi</th>
		<?php } ?>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($karyawan as $key => $value) {?>
		
		<tr>
			<td><?php echo $key+1; ?></td>
			<td><?php echo $value->id_pegawai; ?></td>
			<td><?php echo $value->nama_pegawai; ?></td>
			<td><?php echo $value->jenis_kelamin; ?></td>
			<td><?php echo $value->tgl_lahir; ?></td>
			<td><?php echo $value->alamat; ?></td>
			<td><?php echo $value->username; ?></td>
			<td><?php echo $value->password; ?></td>
			<?php if($status=='admin') {  ?>
			<td>
			<?php echo anchor(site_url('Karyawan/edit/'.$value->id_pegawai),
			'<i class="fa fa-pencil"></i>',
			'class="btn btn-warning"');
			?>
		
				<?php echo anchor(site_url('Karyawan/delete/'.$value->id_pegawai),
				'<i class="fa fa-trash"></i>',
				'class="btn btn-danger"'); ?>
</td>
<?php } ?>
		</tr>
		<?php } ?>

	</tbody>

</table>
</div>
<?php 
$this->load->view('templates/footer');

?>

<script type="text/javascript">
	$(document).ready(function() {
	$('#example').DataTable();
	});
</script>