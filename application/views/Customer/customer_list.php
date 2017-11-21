<?php 
$this->load->view('templates/header');
$status=$this->session->userdata('status');
?>
<div class="row">
	<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
	<?php echo anchor(site_url("Customer/tambah"),'<i class="fa fa-plus"></i> Tambah Data','class= "btn btn-primary"'); ?>
</div>
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
	<tr>
		<th>No</th>
		<th>Id Customer</th>
		<th>Nama Customer</th>
		<th>No Telepon</th>
		<th>Alamat</th>
		<?php if($status=='admin') {  ?>
		<th>Aksi</th>
		<?php } ?>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($customer as $key => $value) {?>
		
		<tr>
			<td><?php echo $key+1; ?></td>
			<td><?php echo $value->id_customer; ?></td>
			<td><?php echo $value->nama_customer; ?></td>
			<td><?php echo $value->no_telp; ?></td>
			<td><?php echo $value->alamat; ?></td>
			<?php if($status=='admin') {  ?>
			<td>
			<?php echo anchor(site_url('Customer/edit/'.$value->id_customer),
			'<i class="fa fa-pencil"></i>',
			'class="btn btn-warning"');
			?>
			

				<?php echo anchor(site_url('Customer/delete/'.$value->id_customer),
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