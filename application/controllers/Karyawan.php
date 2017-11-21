<?php 
/**
* 
*/
class Karyawan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Karyawan_Model');
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
			$data['karyawan'] = $this->Karyawan_Model->Select_Karyawan();
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		//$this->load->view('Mahasiswa/mahasiswa_list',$data);
			$this->load->view('Karyawan/Karyawan_list', $data);	
	}

	function tambah_Karyawan()
	{
		$data = array(
			'nama_karyawan' => set_value('nama_karyawan'),
			'username' => set_value('username'),
			'password' => set_value('password'),
			'jenis_kelamin' => set_value('jenis_kelamin'),
			'alamat' => set_value('alamat'),
			'button' => 'Tambah',
			'input' => true,
			'action' => site_url('Karyawan/tambah_Karyawan_aksi')
			);
		$this->load->view('Karyawan/Karyawan_form', $data);
	}

	function tambah_Karyawan_aksi()
	{
		$data = array(
			'nama_karyawan' => $this->input->post('nama_karyawan'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' => $this->input->post('alamat'),
			);
		$this->Karyawan_Model->tambah_data($data);
		redirect(site_url('Karyawan'));
	}

	function delete($id)
	{
		$this->karyawan_Model->hapus_data($id);
		redirect(site_url('Karyawan'));
	}

	function edit($id)
	{
		$Karyawan=($this->Karyawan_Model->ambil_data_id($id));
		$data = array(
			'nama_karyawan' => set_value('nama_karyawan',$Karyawan->nama_karyawan),
			'username' => set_value('username',$Karyawan->username),
			'password' => set_value('password',$Karyawan->password),
			'jenis_kelamin' => set_value('jenis_kelamin',$Karyawan->jenis_kelamin),
			'jabatan' => set_value('jabatan',$Karyawan->jabatan),
			'alamat' => set_value('alamat',$Karyawan->alamat),
			'button' => 'Simpan',
			'input' => false,
			'action' => site_url('Karyawan/edit_aksi')
			);
		$this->load->view('Karyawan/Karyawan_form', $data);
	}

	function edit_aksi()
	{
		$data = array(
			'nama_karyawan' => $this->input->post('nama_karyawan'),
			'password' => $this->input->post('password'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' => $this->input->post('alamat'),
			'jabatan' => $this->input->post('jabatan'),
			);
		$username = $this->input->post('username');
		$this->Karyawan_Model->edit_data($username,$data);
		redirect(site_url('Karyawan'));
	}


}
?>