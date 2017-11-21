<?php $this->load->view('templates/header');?>
     
        <div class="row" style="margin-bottom: 20px">
            <div class="col-md-15">
            	<center>
            	<h1><?php echo tanggal(); ?></h1>
                <h1>Home</h1>
                <h2> Selamat datang, <?php echo $this->session->userdata('username'); ?>
                </h2>
            </center>
            </div>
        </div>

<?php $this->load->view('templates/footer'); ?>