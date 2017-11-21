<?php 
/**
* 
*/
class Pelanggan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pelanggan_Model');
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
			$data['pelanggan'] = $this->Pelanggan_Model->Select_Pelanggan();
			$this->load->view('pelanggan/pelanggan_list', $data);
	}

	function tambah_pelanggan()
	{
		$data = array(
			'id_pelanggan' => set_value('id_pelanggan'),
			'nama_pelanggan' => set_value('nama_pelanggan'),
			'jenis_kelamin' => set_value('jenis_kelamin'),
			'no_tlp' => set_value('no_tlp'),
			'alamat' => set_value('alamat'),
			'button' => 'Tambah',
			'action' => site_url('Pelanggan/tambah_pelanggan_aksi')
			);
		$this->load->view('pelanggan/pelanggan_form', $data);
	}

	function tambah_pelanggan_aksi()
	{
		$data = array(
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'no_tlp' => $this->input->post('no_tlp'),
			'alamat' => $this->input->post('alamat'),
			);
		$this->Pelanggan_Model->tambah_data($data);
		redirect(site_url('Pelanggan'));
	}

	function delete($id)
	{
		$this->Pelanggan_Model->hapus_data($id);
		redirect(site_url('Pelanggan'));
	}

	function edit($id)
	{
		$pelanggan=($this->Pelanggan_Model->ambil_data_id($id));
		$data = array(
			'nama_pelanggan' => set_value('nama_pelanggan',$pelanggan->nama_pelanggan),
			'jenis_kelamin' => set_value('jenis_kelamin',$pelanggan->jenis_kelamin),
			'no_tlp' => set_value('no_tlp',$pelanggan->no_tlp),
			'alamat' => set_value('alamat',$pelanggan->alamat),
			'id_pelanggan' => set_value('id_pelanggan',$pelanggan->id_pelanggan),
			'button' => 'Simpan',
			'action' => site_url('Pelanggan/edit_aksi')
			);
		$this->load->view('pelanggan/pelanggan_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'no_tlp' => $this->input->post('no_tlp'),
			'alamat' => $this->input->post('alamat'),
			);
		$id_pelanggan = $this->input->post('id_pelanggan');
		$this->Pelanggan_Model->edit_data($id_pelanggan,$data);
		redirect(site_url('Pelanggan'));
	}
}
?>