<?php
/**
 * 
 */
 class Melaundry_model extends CI_Model
 {
 	public $nama_table = 'melaundry';
	public $id = 'id_laundry';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function ambil_data()
 	{
 			$this->db->distinct();
 		$this->db->select('la.id_laundry, kar.id_pegawai, kar.nama_pegawai, c.id_customer, c.nama_customer, bar.id_barang, bar.nama_barang, la.tgl_masuk, la.waktu, la.jenis_laundry, la.jumlah, la.harga');
 		$this->db->from('melaundry la');
 		$this->db->join('customer c', 'c.id_customer = la.id_customer');
 		$this->db->join('karyawan kar', 'kar.id_pegawai = la.id_pegawai');
 		$this->db->join('barang bar', 'bar.id_barang = la.id_barang');
 		return $this->db->get($this->nama_table)->result();



 		//$data['peminjaman'] = $this->db->order_by($this->id, $this->order);
 		//return $this->db->get($this->nama_table)->result();
 	}

 	function ambil_data_id($id)
 	{
 		$this->db->where($this->id,$id);
 		return $this->db->get($this->nama_table)->row();
 	}

 	function tambah_data($data)
 	{
 		return $this->db->insert($this->nama_table, $data);
 	}

 	function hapus_data($id)
 	{
 		$this->db->where($this->id, $id);
 		$this->db->delete($this->nama_table);
 	}

 	function edit_data($id_laundry,$data)
 	{
 		$this->db->where($this->id, $id_laundry);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>