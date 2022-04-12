<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('MLogin');
    }

    public function index()
    {
        if ($this->session->userdata('Login')) {
            redirect(site_url('Welcome'));
        }
        // if (isset($_POST['btn_login'])) {
        //     $username = $_POST['txt_user'];
        //     $password = $_POST['txt_pass'];
        //     $notif = $this->MLogin->GoLogin($username, $password);
        //     if ($notif) {
        //         $this->load->library('session');
        //         $this->session->set_userdata('Login', 'OnLogin');
        //         // redirect(site_url('Welcome'));
        //         echo json_encode(array('status' => 'success'));
        //     } elseif($this->form_validation->run() == false) {
        //         $this->session->set_flashdata('message','user id atau pasword anda salah!');
        //         $this->load->library('session');
        //         $this->session->unset_userdata('Login');
        //         // redirect(site_url('Login'));
        //         echo json_encode(array('status' => 'error'));
        // }
        // }

        $this->load->view('Login/VLogin');
    }

    public function goLogin()
    {
        $username = $this->input->post('txt_user');
        $password = $this->input->post('txt_pass');

        $masuk = $this->MLogin->GoLogin($username, $password);

        if ($masuk->num_rows() > 0) { //jika login sebagai dosen
            $data = $masuk->row_array();
            $this->session->set_userdata('Login', 'OnLogin');
            $this->session->set_userdata('nama', $data['nama']);

            // $this->session->set_userdata('akses', 'Masuk');
            $this->session->set_userdata('nid', $data['nid']);

            // $this->session->set_userdata('ses_nama',$data['username']);

            // redirect('Admin');
            echo json_encode(array('status' => 'success'));
            $this->load->library('session');
            $this->session->set_flashdata('massages', 'Selamat Datang');
        } else {
            $this->session->set_flashdata('message', 'user id atau pasword anda salah!');
            $this->session->unset_userdata('Login');
            echo json_encode(array('status' => 'error'));
        }
    }
}