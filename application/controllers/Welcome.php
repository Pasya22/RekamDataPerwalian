<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('MSudi');
		$this->load->library('session');
		$this->load->helper('url', 'form');
	}

	public function index()
	{
		if ($this->session->userdata('Login')) {
			$data['title'] = 'Home';
			$data['nama'] = 'nama';
			$this->load->view('temp/header', $data);
			$data['content'] = 'VBlank';
			$this->load->view('VRekamHome', $data);
			$this->load->view('temp/footer', $data);
		} else {
			redirect(site_url('Login'));
		}
	}

	public function Tracking()
	{

		$data['tampil'] = $this->MSudi->getTahun();
		$data['title'] = 'Tracking Data Mahasiswa';
		$this->load->view('temp/header', $data);
		$data['content'] = 'VBlank';
		$this->load->view('Tracking/VTracking', $data);
		$this->load->view('temp/footer', $data);
	}
	public function filter()
	{

		$tahun_masuk = $this->input->post('tahun_masuk');

		$data = $this->MSudi->GetDataWhere('t_tracking', 'tahun_masuk', $tahun_masuk)->result();
		// $data['title'] = 'Tracking';
		// $this->load->view('temp/header', $data);
		// $data['content'] = 'VBlank';
		// $this->load->view('Tracking/VTracking', $data);
		// $this->load->view('temp/footer', $data);
		echo json_encode($data);
		// $key = $this->input->post('key');
		// $jk = $this->input->post('jk');
		// $agama = $this->input->post('agama');
		// $status_kwn = $this->input->post('status_kwn');
		// $data['tampil'] = $this->MSudi->search($key,$jk,$agama,$status_kwn);
		// $data['content']='VBlank';
		// $this->load->view('Tracking/VTracking',$data);
	}

	public function detail()
	{
		// $npm = $this->MSudi->GetData('t_tracking')->result();
		$npm = $this->uri->segment(3);
		$data['detail'] = $this->MSudi->GetDataWhere('t_tracking', 'npm', $npm)->row();
		$data['tampil'] = $this->MSudi->GetDataWhere('nilai', 'npm', $npm)->result();
		$data['title'] = 'Data Matakuliah';
		$this->load->view('temp/header', $data);
		$data['content'] = 'VBlank';
		$this->load->view('Detail/VDetail', $data);
		$this->load->view('temp/footer', $data);
		// $this->load->view('Tracking/VTracking', $data);

	}
	public function Push()
	{
		// $npm = $this->MSudi->GetData('t_tracking')->result();
		$kd_matkul = $this->uri->segment(3);
		$data['push'] = $this->MSudi->GetDataWhere('matkul', 'kd_matkul', $kd_matkul)->row();
		// $data['tampil'] = $this->MSudi->GetDataWhere('nilai', 'kd_matkul', $kd_matkul)->result();
		$data['title'] = 'Data Matakuliah';
		$this->load->view('temp/header', $data);
		$data['content'] = 'VBlank';
		$this->load->view('Detail/VDetail', $data);
		$this->load->view('temp/footer', $data);
		// $this->load->view('Tracking/VTracking', $data);

	}


	public function RekamData()
	{

		$data['title'] = 'Rekam Data';
		$this->load->view('temp/header', $data);
		$data['content'] = 'VBlank';
		$this->load->view('RekamData/VRekamData', $data);
		$this->load->view('temp/footer', $data);
	}

	public function Perwalian()
	{

		$data['title'] = 'Perwalian';
		$this->load->view('temp/header', $data);
		$data['content'] = 'VBlank';
		$this->load->view('Perwalian/VPerwalian', $data);
		$this->load->view('temp/footer', $data);
	}

	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}
}