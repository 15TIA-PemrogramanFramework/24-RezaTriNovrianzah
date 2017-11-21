<?php 
/**
* 
*/
class Mobil extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
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
			$data['mobil'] = $this->Mobil_Model->Select_Mobil();
			$this->load->view('mobil/mobil_list', $data, $data2);		
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
		
	}

	function tambah_mobil()
	{
		$data = array(
			'nomor_polisi' => set_value('nomor_polisi'),
			'merk_mobil' => set_value('merk_mobil'),
			'nama_mobil' => set_value('nama_mobil'),
			'warna' => set_value('warna'),
			'harga' => set_value('harga'),
			'button' => 'Tambah',
			'action' => site_url('mobil/tambah_mobil_aksi')
			);
		$this->load->view('mobil/Mobil_form', $data);
	}

	function tambah_mobil_aksi()
	{
		$data = array(
			'nomor_polisi' => $this->input->post('nomor_polisi'),
			'merk_mobil' => $this->input->post('merk_mobil'),
			'nama_mobil' => $this->input->post('nama_mobil'),
			'warna' => $this->input->post('warna'),
			'harga' => $this->input->post('harga'),
			);
		$this->Mobil_Model->tambah_data($data);
		redirect(site_url('mobil'));
	}

	function delete($id)
	{
		$this->Mobil_Model->hapus_data($id);
		redirect(site_url('mobil'));
	}

	function edit($id)
	{
		$mobil=($this->Mobil_Model->ambil_data_id($id));
		$data = array(
			'nomor_polisi' => set_value('nomor_polisi',$mobil->nomor_polisi),
			'merk_mobil' => set_value('merk_mobil',$mobil->merk_mobil),
			'nama_mobil' => set_value('nama_mobil',$mobil->nama_mobil),
			'warna' => set_value('warna',$mobil->warna),
			'harga' => set_value('harga',$mobil->harga),
			'id_mobil' => set_value('id_mobil',$mobil->id_mobil),
			'button' => 'Simpan',
			'action' => site_url('mobil/edit_aksi')
			);
		$this->load->view('mobil/mobil_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'nomor_polisi' => $this->input->post('nomor_polisi'),
			'merk_mobil' => $this->input->post('merk_mobil'),
			'nama_mobil' => $this->input->post('nama_mobil'),
			'warna' => $this->input->post('warna'),
			'harga' => $this->input->post('harga'),
			);
		$id = $this->input->post('id_mobil');
		$this->Mobil_Model->edit_data($id,$data);
		redirect(site_url('mobil'));
	}
}
?>