<?php

class laporan extends CI_Controller {
    //GENERAL HOME
    public function index() {
        session_start();
        $this->load->model('m_client');
        $this->load->view('v_main');
    }
    //USER
    public function buatlaporan() {
        session_start();
        $this->load->view('header');
        $this->load->view('v_buatlaporan');
    }

    public function buatlaporanSubmit() {
        $getdir = $this->do_upload();
        $data = array(
            'USERNAME_MEMBER' => $this->input->post('user'),
            'JUDUL' => $this->input->post('judul'),
            'COVER_LAPORAN' => $getdir,
            'DESKRIPSI' => $this->input->post('deskripsi'),
            'STATUS_LAPORAN' => "Moderasi",
            'TANGGAL' => date('Y-m-d')
        );
        $this->db->insert('iklan', $data);
        redirect('laporan/laporanku');
    }
    public function editLaporanSubmit() {
        $getdir = $this->do_upload();
        $id_iklan = $this->input->post('id');
        if (stripos($getdir, "http://localhost") !== false) {
            $getdir = $getdir;
        } else {
            $getdir = $this->input->post('foto');
        }
        $data = array(
            'JUDUL' => $this->input->post('judul'),
            'COVER_LAPORAN' => $getdir,
            'DESKRIPSI' => $this->input->post('deskripsi'),
            'STATUS_LAPORAN' => $this->input->post('status')
        );
        $this->db->where('ID_IKLAN', $id_iklan);
        $this->db->update('iklan', $data);
        redirect('iklan/iklanku');
    }
    public function do_upload() {
        $config['upload_path'] = './assets/image/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 2000;
        $config['max_height'] = 2000;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile')) {
            $getfullpath = array('error' => $this->upload->display_errors());
            $string = "Tidak ada foto";
        } else {
            $data = $this->upload->data();
            $getfullpath = $data['full_path'];
            $string = str_replace("C:/xampp/htdocs/", "http://localhost/", $getfullpath);
        }
        return $string;
    }
    public function load_navigation() {
        $this->load->model('m_pesan');
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
        } else {
            $user = $this->uri->segment(3);
        }
        $data['count'] = $this->getNotif();
        $this->load->view('v_laporan', $data);
    }
    public function komentarSubmit() {
        $user = $this->input->post('user');
        $status = '0';
        $id = $this->input->post('id');
        $this->load->model('m_laporan');
        $coba = $this->m_laporan->getWLihatIklan($id , "Validasi")->row_array();
        $userown = $coba['USERNAME_MEMBER'];
        if($user == $userown){
            $status = '0';
        }else{
            $status = '1' ;
        }
        $data = array(
            'ID_IKLAN' => $id,
            'USERNAME_MEMBER' => $user,
            'KOMENTAR' => $this->input->post('komentar'),
            'STATUS' => $status
        );
        $this->db->insert('komentar', $data);
        redirect('main/lihatlaporan/' . $id);
    }
    public function laporanku() {
        session_start();
        $user = $_SESSION['user'];
        $this->load->view('header');
        $this->load->model('m_laporan');
        $this->load_navigation();
        $data['iklan'] = $this->m_laporan->getWIklan($user)->result();
        $this->load->view('v_laporanku', $data);
    }

    public function laporanuser() {
        session_start();
        $user = $this->uri->segment(3);
        $this->load->view('header');
        $this->load->model('m_laporan');
        $this->load_navigation();
        $data['iklan'] = $this->m_laporan->getWIklan($user)->result();
        $this->load->view('v_laporanuser', $data);
    }

    public function search() {
        //$search = $this->uri->segment(3);
        $this->load->model('m_laporan');
        $data['cari'] = $this->input->post('inputsearch');
        $data['judul'] = $this->m_laporan->getIklan()->result();
        $this->load->view('v_resultiklan', $data);
    }
    public function getNotif() {
        $this->load->model('m_komentar');
        $this->load->model('m_laporan');
        if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];
        }else{
            $user = $this->uri->segment(3);
        }
        $data = $this->m_komentar->getStatusKomentar($user)->result();
        $counter = 0;
        return $counter;
    }

}
?>