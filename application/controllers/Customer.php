<?php 
/**
* 
*/
class Customer extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model');


			
	}

	function index()
	{
		//print_r($this->Karyawan_model->ambil_data());
		$data['customer']=$this->Customer_model->ambil_data();
		$this->load->view('Customer/customer_list',$data);
	}

	function tambah(){
		$data=array(
			'nama_customer'=>set_value('nama_customer'),
			'no_telp'=>set_value('no_telp'),
			'alamat'=>set_value('alamat'),
			'id_customer'=>set_value('id_customer'),
			'button'=>'Tambah',
			'action'=>site_url('Customer/tambah_aksi'),
			);
		$this->load->view('Customer/customer_form',$data);
	}

	function tambah_aksi(){
		$data=array(
			'nama_customer'=>$this->input->post('nama_customer'),
			'no_telp'=>$this->input->post('no_telp'),
			'alamat'=>$this->input->post('alamat'),
			);
		$this->Customer_model->tambah_data($data);
		redirect(site_url('Customer'));
	}
	function delete($id){
		$this->Customer_model->hapus_data($id);
		redirect(site_url('Customer'));
	}
	function edit($id){
		$cst=$this->Customer_model->ambil_data_id($id);
		$data=array(
			'nama_customer'	=>set_value('nama_customer',$cst->nama_customer),
			'no_telp'	=>set_value('no_telp',$cst->no_telp),
			'alamat'	=>set_value('alamat',$cst->alamat),
			'id_customer'	=>set_value('id_customer',$cst->id_customer),
			'button'	=>'Edit',
			'action'	=>site_url('Customer/edit_aksi'),
			);
		$this->load->view('Customer/customer_form',$data);
	}

	function edit_aksi(){
		$data=array(
			'nama_customer'=>$this->input->post('nama_customer'),
			'no_telp'=>$this->input->post('no_telp'),
			'alamat'=>$this->input->post('alamat'),
			);
		$id=$this->input->post('id_customer');
		$this->Customer_model->edit_data($id,$data);
		redirect(site_url('Customer'));
	}


}
 ?>