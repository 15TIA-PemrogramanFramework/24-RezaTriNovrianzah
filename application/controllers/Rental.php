<?php 
/**
* 
*/
class Rental extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Rental_Model');
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
			$data['penyewaan'] = $this->Rental_Model->Select_Rental();
			$this->load->view('rental/rental_list',$data);
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
	}

	function tambah_Rental()
	{
		$data = array(
			'id_sewa' => set_value('id_sewa'),
			'tanggal_sewa' => set_value('tanggal_sewa'),
			'karyawan' => $this->Karyawan_Model->Select_Karyawan(),
			'pelanggan' => $this->Pelanggan_Model->Select_Pelanggan(),
			'mobil' => $this->Mobil_Model->Select_Mobil(),
			'button' => 'Simpan',
			'action' => site_url('Rental/tambah_Rental_aksi')
			);
		$this->load->view('rental/rental_form', $data);
	}

	function tambah_Rental_aksi()
	{
		$data = array(
			'id_sewa' => $this->input->post('id_sewa'),
			'tanggal_sewa' => $this->input->post('tanggal_sewa'),
			'username' => $this->input->post('username'),
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'id_mobil' => $this->input->post('id_mobil'),
			'id_sewa' => $this->input->post('id_sewa'),
			);
		$this->Rental_Model->tambah_data($data);
		redirect(site_url('Rental'));
	}

	function delete($id)
	{
		$this->Rental_Model->hapus_data($id);
		redirect(site_url('Rental'));
	}

	function edit($id)
	{
		$rental=($this->Rental_Model->ambil_data_id($id));

		//Mencari Indeks Anggota
		$pelanggan=($this->Pelanggan_Model->ambil_data_id($rental->id_pelanggan));
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
		$karyawan=($this->Karyawan_Model->ambil_data_id($rental->username));
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
		$mobil=($this->Mobil_Model->ambil_data_id($rental->id_mobil));
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
			'tanggal_sewa' => set_value('tanggal_sewa',$rental->tanggal_sewa),
			'karyawan' => $this->Karyawan_Model->Select_Karyawan(),
			'pelanggan' => $this->Pelanggan_Model->Select_Pelanggan(),
			'mobil' => $this->Mobil_Model->Select_Mobil(),
			'id_sewa' => set_value('id_sewa',$rental->id_sewa),
			'id_pelanggan' => set_value('id_pelanggan',$indexPelanggan),
			'id_karyawan' => set_value('id_karyawan',$indexKaryawan),
			'id_mobil' => set_value('id_mobil',$indexMobil),
			'button' => 'Edit',
			'action' => site_url('rental/edit_aksi')
			);
		$this->load->view('rental/Rental_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'tanggal_sewa' => $this->input->post('tanggal_sewa'),
			'username' => $this->input->post('username'),
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'id_mobil' => $this->input->post('id_mobil'),
			'tanggal_sewa' => $this->input->post('tanggal_sewa'),
			);
		$id_sewa = $this->input->post('id_sewa');
		$this->Rental_Model->edit_data($id_sewa,$data);
		redirect(site_url('rental'));
	}

}
?>