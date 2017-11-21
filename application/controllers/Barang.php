<?php 
/**
* 
*/
class Barang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model');


			
	}

	function index()
	{
		//print_r($this->Karyawan_model->ambil_data());
		$data['barang']=$this->Barang_model->ambil_data();
		$this->load->view('Barang/barang_list',$data);
	}

	function tambah(){
		$data=array(
			'nama_barang'=>set_value('nama_barang'),
			'merek_barang'=>set_value('merek_barang'),
			'ukuran'=>set_value('ukuran'),
			'id_barang'=>set_value('id_barang'),
			'button'=>'Tambah',
			'action'=>site_url('Barang/tambah_aksi'),
			);

		$this->load->view('Barang/barang_form',$data);
	}

	function tambah_aksi(){
		$data=array(
			'nama_barang'=>$this->input->post('nama_barang'),
			'merek_barang'=>$this->input->post('merek_barang'),
			'ukuran'=>$this->input->post('ukuran'),
			);
		$this->Barang_model->tambah_data($data);
		redirect(site_url('Barang'));
	}
	function delete($id){
		$this->Barang_model->hapus_data($id);
		redirect(site_url('Barang'));
	}
	function edit($id){
		$brg=$this->Barang_model->ambil_data_id($id);
		$data=array(
			'nama_barang'	=>set_value('nama_barang',$brg->nama_barang),
			'merek_barang'	=>set_value('merek_barang',$brg->merek_barang),
			'ukuran'	=>set_value('ukuran',$brg->ukuran),
			'id_barang' =>set_value('id_barang',$brg->id_barang),
			'button'	=>'Edit',
			'action'	=>site_url('Barang/edit_aksi'),
			);
		$this->load->view('Barang/barang_form',$data);
	}

	function edit_aksi(){
		$data=array(
			'nama_barang'=>$this->input->post('nama_barang'),
			'merek_barang'=>$this->input->post('merek_barang'),
			'ukuran'=>$this->input->post('ukuran'),
			);
		$id=$this->input->post('id_barang');
		$this->Barang_model->edit_data($id,$data);
		redirect(site_url('Barang'));
	}


}
 ?>