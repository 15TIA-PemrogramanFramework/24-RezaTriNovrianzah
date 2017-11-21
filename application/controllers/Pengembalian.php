<?php 
/**
* 
*/
class Pengembalian extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pengembalian_Model');
		$this->load->model('Karyawan_Model');
		$this->load->model('Pelanggan_Model');
		$this->load->model('Mobil_Model');
		if($this->session->userdata('logged_in'))
		{
		}
		else
		{
			redirect('login', 'refresh');
		}	
	}
	function index()
	{
			$session_data = $this->session->userdata('logged_in');
			$data2['username'] = $session_data['username'];
			$data['pengembalian'] = $this->Pengembalian_Model->Select_Pengembalian();
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
			$this->load->view('Pengembalian/Pengembalian_list', $data);
	}

	function tambah_pengembalian()
	{
		$data = array(
			'id_kembali' => set_value('id_kembali'),
			'tanggal_kembali' => set_value('tanggal_kembali'),
			'status' => set_value('status'),
			'karyawan' => $this->Karyawan_Model->Select_Karyawan(),
			'pelanggan' => $this->Pelanggan_Model->Select_Pelanggan(),
			'mobil' => $this->Mobil_Model->Select_Mobil(),
			'button' => 'Tambah',
			'action' => site_url('Pengembalian/tambah_Pengembalian_aksi')
			);
		$this->load->view('Pengembalian/Pengembalian_form', $data);
	}

	function tambah_Pengembalian_aksi()
	{
		$data = array(
			'id_kembali' => $this->input->post('id_kembali'),
			'tanggal_kembali' => $this->input->post('tanggal_kembali'),
			'username' => $this->input->post('username'),
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'id_mobil' => $this->input->post('id_mobil'),
			'status' => $this->input->post('status'),
			);
		$this->Pengembalian_Model->tambah_data($data);
		redirect(site_url('Pengembalian'));
	}

	function delete($id)
	{
		$this->Pengembalian_Model->hapus_data($id);
		redirect(site_url('Pengembalian'));
	}

	function edit($id)
	{
		$pengembalian=($this->Pengembalian_Model->ambil_data_id($id));
		
		//Mencari Indeks Anggota
		$pelanggan=($this->Pelanggan_Model->ambil_data_id($pengembalian->id_pelanggan));
		$arrPelanggan = $this->Pelanggan_Model->Select_Pelanggan();
		$indexPelanggan=0; 
		foreach ($arrPelanggan as $key => $value) {
			if($value->nama_pelanggan == $pelanggan->nama_pelanggan){
				break;
			}
			else{
				$indexPelanggan++;
			}
		}

		//Mencari Indeks Petugas
		$karyawan=($this->Karyawan_Model->ambil_data_id($pengembalian->username));
		$arrKaryawan = $this->Karyawan_Model->Select_Karyawan();
		$indexKaryawan=0; 
		foreach ($arrKaryawan as $key => $value) {
			if($value->nama_karyawan == $karyawan->nama_karyawan){
				break;
			}
			else{
				$indexKaryawan++;
			}
		}

		//Mencari Indeks Buku
		$mobil=($this->Mobil_Model->ambil_data_id($pengembalian->id_mobil));
		$arrMobil = $this->Mobil_Model->Select_Mobil();
		$indexMobil=0; 
		foreach ($arrMobil as $key => $value) {
			if($value->nama_mobil == $mobil->nama_mobil){
				break;
			}
			else{
				$indexMobil++;
			}
		}

		$data = array(
			'tanggal_kembali' => set_value('tanggal_kembali',$pengembalian->tanggal_kembali),
			'karyawan' => $this->Karyawan_Model->Select_Karyawan(),
			'pelanggan' => $this->Pelanggan_Model->Select_Pelanggan(),
			'mobil' => $this->Mobil_Model->Select_Mobil(),
			'id_kembali' => set_value('id_kembali',$pengembalian->id_kembali),
			'status' => set_value('status',$pengembalian->status),
			'id_pelanggan' => set_value('id_pelanggan',$indexPelanggan),
			'username' => set_value('username',$indexKaryawan),
			'id_mobil' => set_value('id_mobil',$indexMobil),
			'button' => 'Simpan',
			'action' => site_url('pengembalian/edit_aksi')
			);
		$this->load->view('pengembalian/Pengembalian_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'tanggal_kembali' => $this->input->post('tanggal_kembali'),
			'username' => $this->input->post('username'),
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'id_mobil' => $this->input->post('id_mobil'),
			'tanggal_kembali' => $this->input->post('tanggal_kembali'),
			'status' => $this->input->post('status'),
			);
		$id_kembali = $this->input->post('id_kembali');
		$this->Pengembalian_Model->edit_data($id_kembali,$data);
		redirect(site_url('pengembalian'));
	}

}
?>