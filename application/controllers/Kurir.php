<?php 
/**
* 
*/
class Kurir extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Kurir_model');


			
	}

	function index()
	{
		//print_r($this->Karyawan_model->ambil_data());
		$data['kurir']=$this->Kurir_model->ambil_data();
		$this->load->view('Kurir/Kurir_list',$data);
	}

	function tambah(){
		$data=array(
			'nama_kurir'=>set_value('nama_kurir'),
			'no_telp'=>set_value('no_telp'),
			'id_kurir'=>set_value('id_kurir'),
			'button'=>'Tambah',
			'action'=>site_url('Kurir/tambah_aksi'),
			);

		$this->load->view('Kurir/Kurir_form',$data);
	}

	function tambah_aksi(){
		$data=array(
			'nama_kurir'=>$this->input->post('nama_kurir'),
			'no_telp'=>$this->input->post('no_telp'),
			);
		$this->Kurir_model->tambah_data($data);
		redirect(site_url('Kurir'));
	}
	function delete($id){
		$this->Kurir_model->hapus_data($id);
		redirect(site_url('Kurir'));
	}
	function edit($id){
		$kurirr=$this->Kurir_model->ambil_data_id($id);
		$data=array(
			'nama_kurir'	=>set_value('nama_kurir',$kurirr->nama_kurir),
			'no_telp'	=>set_value('no_telp',$kurirr->no_telp),
			'id_kurir'	=>set_value('id_kurir',$kurirr->id_kurir),
			'button'	=>'Edit',
			'action'	=>site_url('Kurir/edit_aksi'),
			);
		$this->load->view('Kurir/Kurir_form',$data);
	}

	function edit_aksi(){
		$data=array(
			'nama_kurir'=>$this->input->post('nama_kurir'),
			'no_telp'=>$this->input->post('no_telp'),
			);
		$id=$this->input->post('id_kurir');
		$this->Kurir_model->edit_data($id,$data);
		redirect(site_url('Kurir'));
	}


}
 ?>