<?php
defined('BASEPATH') or exit('Not Allowed Direct Acccess');

class Admin extends CI_Controller {
    public function index() {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();  
        if($data['user']==null) {
            $this->load->view('403');
        }else if($data['user']['role_id']==0) {
            $data['active'] = 'Dashboard';
            $data['title'] = 'Admin ' . $data['user']['username'];
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();  
            $this->template->load('admin/dashboard', $data);
        }else {
            $this->load->view('403');
        }
    }
    public function pesanan() {
        $data['active'] = 'pesan';
        $data['title'] = 'Daftar Pesanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();  
        $data['pesan'] = $this->db->get('pesanan')->result();
        $this->template->load('admin/pesanan/data', $data);
    }
    
    public function pesanan_detail($id) {
        $data['active'] = 'pesan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();  
        $this->db->where('id_pesanan', $id);
        $data['pesan'] = $this->db->get('pesanan')->row();
        $this->template->load('admin/pesanan/detail', $data);
    }

    public function siapkirim($id) {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();  
        if($data['user']['role_id'] == 0) {
            $this->db->set('status', 1);
            $this->db->where('id_pesanan', $id);
            $kirim = $this->db->update('pesanan');
            if($kirim) {
                redirect('Admin/pesanan');
            }else {
                redirect('Admin/pesanan_detail');
            }
        } else {
            $this->load->view('403');
        } 
    }
    public function batalkirim($id) {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();  
        if($data['user']['role_id'] == 0) {
            $this->db->set('status', 0);
            $this->db->where('id_pesanan', $id);
            $kirim = $this->db->update('pesanan');
            if($kirim) {
                redirect('Admin/pesanan');
            }else {
                redirect('Admin/pesanan_detail');
            }
        } else {
            $this->load->view('403');
        } 
    }
}

?>