<?php
/**
 * 
 */
 class Mobil_Model extends CI_Model
 {
 	public $nama_table = 'mobil';
	public $id = 'id_mobil';
 	public $order = 'ASC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function Select_Mobil()
 	{
 		$data['mobil'] = $this->db->order_by($this->id, $this->order);
 		return $this->db->get($this->nama_table)->result();
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

 	function edit_data($id_mobil,$data)
 	{
 		$this->db->where($this->id, $id_mobil);
 		$this->db->update($this->nama_table,$data);
 	}
 } 
 ?>