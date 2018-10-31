<?php

session_start();
if (!isset($_SESSION['admin'])) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Silahkan login !!')
                    window.location.href='cpanel';
                    </SCRIPT>");
}

class manage extends CI_Controller {

    //GENERAL HOME
    public function index() {
        $this->load->model('m_client');
        $this->load->view('v_market');
        $this->latestPost();
    }

    //USER
    public function deleteIklan() {
        $this->load->model('m_laporan');
        $id_iklan = $this->uri->segment(3);
        $this->db->where('ID_IKLAN', $id_iklan);
        $this->db->delete('iklan');
        redirect('manage/cekpost');
    }

    public function moderasilaporan() {
        $this->load->view('header');
        $this->load->model('m_laporan');
        $status = "Moderasi";
        $data['iklan'] = $this->m_laporan->getLatestIklan($status)->result();
        $this->load->view('v_moderasi_post', $data);
    }

    public function moderasiSubmit() {
        $id_iklan = $this->input->post('id_laporan');
        $data = array(
            'JUDUL' => $this->input->post('judul'),
            'COVER_LAPORAN' => $this->input->post('foto'),
            'DESKRIPSI' => $this->input->post('deskripsi'),
            'STATUS_LAPORAN' => $this->input->post('status')
        );
        $this->db->where('ID_IKLAN', $id_iklan);
        $this->db->update('iklan', $data);
        redirect('manage/moderasilaporan');
    }

    public function cekpost() {
        $this->load->view('header');
        $this->load->model('m_laporan');
        $data['iklan'] = $this->m_laporan->getIklan()->result();
        $this->load->view('v_cekpost', $data);
    }
    public function sortPost(){
        $this->load->view('header');
        $this->load->model('m_laporan');
        $date = $this->input->post('bulan');
        $data['iklan'] = $this->m_laporan->getPostByMonth($date)->result();
        //$data['gendeng'] = $this->input->post('bulan');
        if($date==""){
            header("Location: cekpost");
        }else{
            $this->load->view('v_cekpost',$data);
        }
        
    }
    public function cekuser() {
        $this->load->view('header');
        $this->load->model('m_client');
        $data['member'] = $this->m_client->getUser()->result();
        $this->load->view('v_member', $data);
    }

    public function deleteuser() {
        $this->load->model('m_client');
        $user = $this->uri->segment(3);
        $this->db->where('USERNAME', $user);
        $this->db->delete('member');
        $this->db->where('USERNAME_MEMBER', $user);
        $this->db->delete('iklan');
        $this->db->where('USERNAME_MEMBER', $user);
        $this->db->delete('komentar');
        redirect('manage/cekuser');
    }

}

?>