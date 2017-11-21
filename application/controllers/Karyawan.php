<?php 
/**
* 
*/
class Karyawan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Karyawan_model');

		if($this->session->userdata('logined')&& $this->session->userdata('logined') != true)
		{
			redirect('/');
		}
			
	}

	function index()
	{
		//print_r($this->Karyawan_model->ambil_data());
		$data['karyawan']=$this->Karyawan_model->ambil_data();
		$this->load->view('Karyawan/karyawan_list',$data);
	}

	function tambah(){
		$data=array(
			'nama_pegawai'=>set_value('nama_pegawai'),
			'jenis_kelamin'=>set_value('jenis_kelamin'),
			'tgl_lahir'=>set_value('tgl_lahir'),
			'alamat'=>set_value('alamat'),
			'username'=>set_value('username'),
			'password'=>set_value('password'),
			'id_pegawai'=>set_value('id_pegawai'),
			'button'=>'Tambah',
			'action'=>site_url('Karyawan/tambah_aksi'),
			);
		$this->load->view('Karyawan/karyawan_form',$data);
	}

	function tambah_aksi(){
		$data=array(
			'nama_pegawai'=>$this->input->post('nama_pegawai'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'tgl_lahir'=>$this->input->post('tgl_lahir'),
			'alamat'=>$this->input->post('alamat'),
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			);
		$this->Karyawan_model->tambah_data($data);
		redirect(site_url('Karyawan'));
	}
	function delete($id){
		$this->Karyawan_model->hapus_data($id);
		redirect(site_url('Karyawan'));
	}
	function edit($id){
		$krw=$this->Karyawan_model->ambil_data_id($id);
		$data=array(
			'nama_pegawai'	=>set_value('nama_pegawai',$krw->nama_pegawai),
			'jenis_kelamin'	=>set_value('jenis_kelamin',$krw->jenis_kelamin),
			'tgl_lahir'	=>set_value('tgl_lahir',$krw->tgl_lahir),
			'alamat'	=>set_value('alamat',$krw->alamat),
			'username'	=>set_value('username',$krw->username),
			'password'	=>set_value('password',$krw->password),
			'id_pegawai'=>set_value('id_pegawai',$krw->id_pegawai),
			'button'	=>'Edit',
			'action'	=>site_url('Karyawan/edit_aksi'),
			);
		$this->load->view('Karyawan/karyawan_form',$data);
	}

	function edit_aksi(){
		$data=array(
			'nama_pegawai'=>$this->input->post('nama_pegawai'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'tgl_lahir'=>$this->input->post('tgl_lahir'),
			'alamat'=>$this->input->post('alamat'),
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			);
		$id=$this->input->post('id_pegawai');
		$this->Karyawan_model->edit_data($id,$data);
		redirect(site_url('Karyawan'));
	}


}
 ?>