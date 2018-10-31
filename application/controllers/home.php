<?php
session_start();
if (isset($_SESSION['user'])) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Anda Sudah Login BOSS !!')
                    window.location.href='main';
                    </SCRIPT>");
}

class home extends CI_Controller {

    //GENERAL HOME

    public function index() {
		
        $this->load->model('m_client');
        $this->load->view('header');
        $this->load->view('v_home');
        $this->latestPost();
    }

    //USER        
    public function create() {
        $this->load->view('v_create');
    }

    public function login() {
        $this->load->view('v_login');
    }

    public function latestPost() {
        $this->load->model('m_laporan');
        $status = "Validasi";
        $data['iklan'] = $this->m_laporan->getLatestIklan($status)->result();
        $this->load->view('v_latestpost', $data);
    }

}

?>