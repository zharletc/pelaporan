<?php

session_start();

class main extends CI_Controller {

    //GENERAL HOME
    public function index() {
        if (!isset($_SESSION['user'])) {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Silahkan Login Terlebih Dahulu !!')
                    window.location.href='login';
                    </SCRIPT>");
        }
        $this->load->view('header');
        $this->load->model('m_client');
        $this->load_market();
        $this->latestPost();
    }

    //USER
    public function load_market() {
        $this->load->model('m_pesan');
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $data['count'] = $this->getNotif();
            $this->load->view('v_main', $data);
        }
    }

    public function pasangiklan() {
        session_start();
        $this->load->view('v_pasangiklan');
    }

    
    public function cekkomment() {
        $id = $this->uri->segment(3);
        $data = array(
            'STATUS' => '0'
        );
        $this->db->where('ID_IKLAN', $id);
        $this->db->update('komentar', $data);
        redirect('main/lihatiklan/'.$id);
    }

    public function komentarmasuk() {
        $this->load->model('m_komentar');
        $this->load->model('m_laporan');
        $user = $_SESSION['user'];
        $data = $this->m_komentar->getStatusKomentar($user)->result();
        $iklan = $this->m_laporan->getWIklan($user)->result();
        foreach ($iklan as $output2) {
            $temp = $output2->ID_IKLAN;
            foreach ($data as $output) {
                $temp2 = $output->ID_IKLAN;
                if ($temp2 == $temp) {
                   $temp3[] = $output2;
                }
            }
        }
        $simpan['iklan'] = $temp3;
        if(!isset($temp3)){
              echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Tidak ada Notifikasi Komentar Masuk')
                    window.history.back();
                    </SCRIPT>");
        }else{
            $this->load->view('v_notifkommentar' , $simpan);
        }        
    }

    public function latestPost() {
        $this->load->model('m_laporan');
        $status = "Validasi";
        $data['iklan'] = $this->m_laporan->getLatestIklan($status)->result();
        $this->load->view('v_latestpost', $data);
    }

    public function lihatlaporan() {
        $this->load->view('header');
        $this->load->model('m_laporan');
        $id_iklan = $this->uri->segment(3);
        $status = "Validasi";
        $data['iklan'] = $this->m_laporan->getWLihatiklan($id_iklan, $status)->result();
        $data['komentar'] = $this->komentar($id_iklan);
        $this->load->view('v_lihatlaporan', $data);
    }

    public function komentar($id_iklan) {
        $this->load->model('m_komentar');
        $data = $this->m_komentar->getWKomentar($id_iklan)->result();
        return $data;
    }

    public function getNotif() {
        $this->load->model('m_komentar');
        $this->load->model('m_laporan');
        $user = $_SESSION['user'];
        $data = $this->m_komentar->getStatusKomentar($user)->result();
        $iklan = $this->m_laporan->getWIklan($user)->result();
        $counter = 0;
        foreach ($iklan as $output2) {
            $temp = $output2->ID_IKLAN;
            foreach ($data as $output) {
                $temp2 = $output->ID_IKLAN;
                if ($temp2 == $temp) {
                    $counter++;
                }
            }
        }
        return $counter;
    }

}

?>