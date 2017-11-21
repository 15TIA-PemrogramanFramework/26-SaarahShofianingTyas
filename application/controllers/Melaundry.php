<?php 
/**
* 
*/
class Melaundry extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Melaundry_model');
		$this->load->model('Karyawan_model');
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
		$data2['username'] = $session_data['username'];
		$data['Melaundry'] = $this->Melaundry_model->ambil_data();
		$this->load->view('MeLaundry/melaundry_list',$data);
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
	}

	function tambah_data()
	{
		$data = array(
			'karyawan' => $this->Karyawan_model->ambil_data(),
			'id_laundry' => set_value('id_laundry'),
			'customer' => $this->Customer_model->ambil_data(),
			'barang' => $this->Barang_model->ambil_data(),
			'tgl_masuk' => set_value('tgl_masuk'),
			'waktu' => set_value('waktu'),
			'jenis_laundry' => set_value('jenis_laundry'),
			'jumlah' => set_value('jumlah'),
			'harga' => set_value('harga'),
			'button' => 'Simpan',
			'action' => site_url('Melaundry/tambah_data_aksi'),
			);
		$this->load->view('MeLaundry/melaundry_form', $data);
	}

	function tambah_data_aksi()
	{
		$data = array(

			'id_pegawai' => $this->input->post('id_pegawai'),
			'id_laundry' => $this->input->post('id_laundry'),
			'id_customer' => $this->input->post('id_customer'),
			'id_barang' => $this->input->post('id_barang'),
			'tgl_masuk' => $this->input->post('tgl_masuk'),
			'waktu' => $this->input->post('waktu'),
			'jenis_laundry' => $this->input->post('jenis_laundry'),
			'jumlah' => $this->input->post('jumlah'),
			'harga' => $this->input->post('harga'),
			);
		$this->Melaundry_model->tambah_data($data);
		redirect(site_url('Melaundry'));
	}

	function delete($id)
	{
		$this->Melaundry_model->hapus_data($id);
		redirect(site_url('Melaundry'));
	}

	function edit($id)
	{
		$melaundry=($this->Melaundry_model->ambil_data_id($id));

		//Mencari Indeks Customer
		$Customer=($this->Customer_model->ambil_data_id($melaundry->id_customer));
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
	
		$Karyawan=($this->Karyawan_model->ambil_data_id($melaundry->id_pegawai));
		$arrKaryawan = $this->Karyawan_model->ambil_data();
		$indexKaryawan=0; 
		foreach ($arrKaryawan as $key => $value) {
			if($value->nama_pegawai == $Karyawan->nama_pegawai){
				break;
			}
			else{
				$indexKaryawan++;
			}
		} 

		//Mencari Indeks Treatment
		$Barang=($this->Barang_model->ambil_data_id($melaundry->id_barang));
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
			'karyawan' => $this->Karyawan_model->ambil_data(),
			'id_laundry' => set_value('id_laundry',$melaundry->id_laundry),
			'customer' => $this->Customer_model->ambil_data(),
			'barang' => $this->Barang_model->ambil_data(),
			'tgl_masuk' => set_value('tgl_masuk',$melaundry->id_laundry),
			'waktu' => set_value('waktu',$melaundry->waktu),
			'jenis_laundry' => set_value('jenis_laundry',$melaundry->jenis_laundry),
			'jumlah' => set_value('jumlah',$melaundry->jumlah),
			'harga' => set_value('harga',$melaundry->harga),
			'button' => 'Edit',
			'action' => site_url('Melaundry/edit_aksi')
			);
		$this->load->view('MeLaundry/melaundry_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'id_pegawai' => $this->input->post('id_pegawai'),
			'id_customer' => $this->input->post('id_customer'),
			'id_barang' => $this->input->post('id_barang'),
			'tgl_masuk' => $this->input->post('tgl_masuk'),
			'waktu' => $this->input->post('waktu'),
			'jenis_laundry' => $this->input->post('jenis_laundry'),
			'tgl_masuk' => $this->input->post('tgl_masuk'),
			'jumlah' => $this->input->post('jumlah'),
			'harga' => $this->input->post('harga'),
			);
		$id_laundry = $this->input->post('id_laundry');
		$this->Melaundry_model->edit_data($id_laundry,$data);
		redirect(site_url('melaundry'));
	}

}
?>