<?php
/**
 * 
 */
 class Rental_Model extends CI_Model
 {
 	public $nama_table = 'penyewaan';
	public $id = 'id_sewa';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function Select_Rental()
 	{
 		$this->db->distinct();
 		$this->db->select('pw.id_sewa, p.nama_pelanggan nama_pelanggan, k.nama_karyawan nama_karyawan, m.nama_mobil nama_mobil, pw.tanggal_sewa ,m.harga');
 		$this->db->from('penyewaan pw');
 		$this->db->join('pelanggan p', 'p.id_pelanggan = pw.id_pelanggan');
 		$this->db->join('karyawan k', 'k.username = pw.username');
 		$this->db->join('mobil m', 'm.id_mobil = pw.id_mobil');
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

 	function edit_data($id_sewa,$data)
 	{
 		$this->db->where($this->id, $id_sewa);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>