<?php
/**
 * 
 */
 class Pengembalian_Model extends CI_Model
 {
 	public $nama_table = 'pengembalian';
	public $id = 'id_kembali';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function Select_Pengembalian()
 	{
 		$this->db->distinct();
 		$this->db->select('pb.id_kembali, pb.status, p.nama_pelanggan nama_pelanggan, k.nama_karyawan nama_karyawan, m.nama_mobil nama_mobil, pb.tanggal_kembali');
 		$this->db->from('pengembalian pb');
 		$this->db->join('pelanggan p', 'p.id_pelanggan = pb.id_pelanggan');
 		$this->db->join('karyawan k', 'k.username = pb.username');
 		$this->db->join('mobil m', 'm.id_mobil = pb.id_mobil');
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

 	function edit_data($id_kembali,$data)
 	{
 		$this->db->where($this->id, $id_kembali);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>