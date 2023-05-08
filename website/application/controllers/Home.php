<?php
defined('BASEPATH') or exit('Not Allowed Access Direct');

class Home extends CI_Controller {
    public function index() {
        $data['active'] = 'beranda';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
        $data['barang'] = $this->db->get('barang')->result();
        if($data['user'] == null) {
            $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-danger" role="alert">
                        Silakan Login Terlebih Dahulu!
                    </div>');
                    redirect('Auth');
        }else {
            $data['title'] = 'Selamat Datang!';
            $this->main->load('home/index', $data);
        }
    }
}
?>