<?php
/**
 * 
 */
 class Antar_model extends CI_Model
 {
 	public $nama_table = 'antar';
	public $id = 'id_antar';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function ambil_data()
 	{
 			$this->db->distinct();
 		$this->db->select('ant.id_antar, kur.id_kurir, kur.nama_kurir, c.id_customer, c.nama_customer, bar.id_barang, bar.nama_barang, ant.tgl_antar, ant.wkt_antar, ant.total_bayar');
 		$this->db->from('antar ant');
 		$this->db->join('customer c', 'c.id_customer = ant.id_customer');
 		$this->db->join('kurir kur', 'kur.id_kurir = ant.id_kurir');
 		$this->db->join('barang bar', 'bar.id_barang = ant.id_barang');
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

 	function edit_data($id_antar,$data)
 	{
 		$this->db->where($this->id, $id_antar);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>