<?php 
$this->load->view('templates/header');
$status=$this->session->userdata('status');
?>
</div>
<!-- End Sidebar scroll-->
</aside>
<div id="page-wrapper" >
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
				<?php echo anchor(site_url("Melaundry/tambah_data"),'<i class="fa fa-plus"></i> Tambah Data','class= "btn btn-primary"'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Pegawai</th>
										<th>Nama Customer</th>
										<th>Nama Barang</th>
										<th>Tanggal Masuk Laundry</th>
										<th>Waktu</th>
										<th>Jenis Laundry</th>
										<th>Jumlah</th>
										<th>Harga</th>
										<?php if($status=='admin') {  ?>
										<th>Aksi</th>
										<?php } ?>
									</tr>
								</thead>

								<tbody>
									<?php foreach ($Melaundry as $key => $value) {?>

									<tr>
										<td><?php echo $key+1; ?></td>
										<td><?php echo $value->nama_pegawai; ?></td>
										<td><?php echo $value->nama_customer; ?></td>
										<td><?php echo $value->nama_barang; ?></td>
										<td><?php echo $value->tgl_masuk; ?></td>
										<td><?php echo $value->waktu; ?></td>
										<td><?php echo $value->jenis_laundry; ?></td>
										<td><?php echo $value->jumlah; ?></td>
										<td><?php echo $value->harga; ?></td>
										<?php if($status=='admin') {  ?>
										<td>
											<?php echo anchor(site_url('melaundry/edit/'.$value->id_laundry),
												'<i class="fa fa-pencil"></i>',
												'class="btn btn-warning"');
												?>

												<?php echo anchor(site_url('melaundry/delete/'.$value->id_laundry),
													'<i class="fa fa-trash"></i>',
													'class="btn btn-danger"'); ?>
												</td>
												<?php } ?>
											</tr>
											<?php } ?>		

										</tbody>

									</table>
								</div>
							</div>
						</div>
					</div>




					<?php 
					$this->load->view('templates/footer');

					?>

					<script type="text/javascript">
						$(document).ready(function() {
							$('#example').DataTable();
						});
					</script>