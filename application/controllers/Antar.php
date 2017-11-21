<?php 
/**
* 
*/
class Antar extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Antar_model');
		$this->load->model('Kurir_model');
		$this->load->model('Customer_model');
		$this->load->model('Barang_model');
		
		/*if($this->session->userdata('logged_in'))
		{
		}
		else
		{
			redirect('login', 'refresh');
		}*/	
	}
	
	function index()
	{
		$session_data = $this->session->userdata('logged_in');
		$data2['id_kurir'] = $session_data['id_kurir'];
		$data['Antar'] = $this->Antar_model->ambil_data();
		$this->load->view('Antar/antar_list',$data);
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
	}

	function tambah_data()
	{
		$data = array(
			'kurir' => $this->Kurir_model->ambil_data(),
			'id_antar' => set_value('id_antar'),
			'customer' => $this->Customer_model->ambil_data(),
			'barang' => $this->Barang_model->ambil_data(),
			'tgl_antar' => set_value('tgl_antar'),
			'wkt_antar' => set_value('wkt_antar'),
			'total_bayar' => set_value('total_bayar'),
			'button' => 'Simpan',
			'action' => site_url('Antar/tambah_data_aksi'),
			);
		$this->load->view('Antar/antar_form', $data);
	}

	function tambah_data_aksi()
	{
		$data = array(

			'id_kurir' => $this->input->post('id_kurir'),
			'id_antar' => $this->input->post('id_antar'),
			'id_customer' => $this->input->post('id_customer'),
			'id_barang' => $this->input->post('id_barang'),
			'tgl_antar' => $this->input->post('tgl_antar'),
			'wkt_antar' => $this->input->post('wkt_antar'),
			'total_bayar' => $this->input->post('total_bayar'),
			);
		$this->Antar_model->tambah_data($data);
		redirect(site_url('Antar'));
	}

	function delete($id)
	{
		$this->Antar_model->hapus_data($id);
		redirect(site_url('Antar'));
	}

	function edit($id)
	{
		$Antar=($this->Antar_model->ambil_data_id($id));

		//Mencari Indeks Customer
		$Customer=($this->Customer_model->ambil_data_id($Antar->id_customer));
		$arrCustomer = $this->Customer_model->ambil_data();
		$indexCustomer=0; 
		foreach ($arrCustomer as $key => $value) {
			if($value->nama_customer == $Customer->nama_customer){
				break;
			}
			else {
				$indexCustomer++;
			}
		}

		//Mencari Indeks Pegawai
	
		$Kurir=($this->Kurir_model->ambil_data_id($Antar->id_kurir));
		$arrKurir = $this->Kurir_model->ambil_data();
		$indexKurir=0; 
		foreach ($arrKurir as $key => $value) {
			if($value->nama_kurir == $Kurir->nama_kurir){
				break;
			}
			else{
				$indexKurir++;
			}
		} 

		//Mencari Indeks Treatment
		$Barang=($this->Barang_model->ambil_data_id($Antar->id_barang));
		$arrBarang = $this->Barang_model->ambil_data();
		$indexBarang=0; 
		foreach ($arrBarang as $key => $value) {
			if($value->nama_barang == $Barang->nama_barang){
				break;
			}
			else{
				$indexBarang++;
			}
		}

		$data = array(
			'kurir' => $this->Kurir_model->ambil_data(),
			'id_antar' => set_value('id_antar',$Antar->id_antar),
			'customer' => $this->Customer_model->ambil_data(),
			'barang' => $this->Barang_model->ambil_data(),
			'tgl_antar' => set_value('tgl_antar',$Antar->id_antar),
			'wkt_antar' => set_value('wkt_antar',$Antar->wkt_antar),
			'total_bayar' => set_value('total_bayar',$Antar->total_bayar),
			'button' => 'Edit',
			'action' => site_url('Antar/edit_aksi')
			);
		$this->load->view('Antar/antar_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'id_kurir' => $this->input->post('id_kurir'),
			'id_customer' => $this->input->post('id_customer'),
			'id_barang' => $this->input->post('id_barang'),
			'tgl_antar' => $this->input->post('tgl_antar'),
			'wkt_antar' => $this->input->post('wkt_antar'),
			'total_bayar' => $this->input->post('total_bayar'),
			
			);
		$id_antar = $this->input->post('id_antar');
		$this->Antar_model->edit_data($id_antar,$data);
		redirect(site_url('antar'));
	}
}
?>