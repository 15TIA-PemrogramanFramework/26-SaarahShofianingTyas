	<?php $this->load->view('templates/header') ?>

	<div id="page-wrapper" >
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<!-- Form Elements -->
					<div class="panel panel-default">

						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
								<h3>Form Booking</h3>
									<form action="<?php echo $action; ?>" method="POST">
										<div class="form-group">
											<label>Nama Kurir</label>
											<select class="form-control select2" name="id_kurir" id="Kurir" style="width: 100%;">
												<?php foreach ($kurir as $key => $value) { ?>
													<option value="<?php echo $value->id_kurir; ?>"><?php echo $value->nama_kurir;?></option>
													<?php } ?>
												</select>
											</div>
											<!-- /.form-group -->

											<!-- /.form-group -->
											<div class="form-group">
												<label>Nama Customer</label>
												<select class="form-control select2" name="id_customer" id="Customer" style="width: 100%;">
													<?php foreach ($customer as $key => $value) { ?>
														<option value="<?php echo $value->id_customer; ?>"><?php echo $value->nama_customer;?></option>
														<?php } ?>
													</select>
												</div>
												<!-- /.form-group -->
												<div class="form-group">
													<label>Nama Barang</label>
													<select class="form-control select2" name="id_barang" id="Barang" style="width: 100%;">
														<?php foreach ($barang as $key => $value) { ?>
															<option value="<?php echo $value->id_barang; ?>"><?php echo $value->nama_barang;?></option>
															<?php } ?>
														</select>
													</div>
													<!-- /.form-group -->
													<div class="form-group">
														<label>Tanggal Antar</label>
														<input type="date" name="tgl_antar" value="<?php echo $tgl_antar;?>" class="form-control pull-right" placeholder="">
													</div>
													<div class="form-group">
														<label>Waktu Antar</label>
														<input type="" name="wkt_antar" value="<?php echo $wkt_antar;?>" class="form-control pull-right" placeholder="">
													</div>
														<div class="form-group">
														<label>Total Bayar</label>
														<input type="" name="total_bayar" value="<?php echo $total_bayar;?>" class="form-control pull-right" placeholder="">
													</div>
															
												
													<!-- /.form-group -->
													<input type="hidden" name="id_antar" value="<?php echo $id_antar; ?>">
													<center>
														<div style="margin-top: 50px;">
															<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
															<a href="<?php echo site_url('Antar'); ?>" class="btn btn-default">Kembali</a>
															<input type="reset" class="btn btn-default">
														</div>
													</center>
												</form>
											</div>
										</div>
										<!-- /.row -->
									</div>
									<!-- /.box-body -->
								</div>
								<!-- /.box -->
							</section>
							<!-- /.content -->
						</div> 
					</div>
				</div>
			</div>

						<!-- /.content-wrapper -->
						<script>
							function matchIndex() {
								var indexCustomer = <?php echo $id_customer; ?>;
								var indexKurir = <?php echo $id_kurir; ?>;
								var indexBarang = <?php echo $id_barang; ?>;
								document.getElementById("Customer").selectedIndex = indexCustomer;
								document.getElementById("Kurir").selectedIndex = indexKurir;
								document.getElementById("Barang").selectedIndex = indexBarang;
							}
						</script>
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