<?php

defined('BASEPATH') or exit('Not Allowed Doirect Access');

class Cavet extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        // $this->load->model('Barang_model');
    }

    public function index() {
        $this->data['title'] = 'Menu Kami';
        $this->data['active'] = 'cavet';
        $this->data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();  
            $this->data['barang'] = $this->db->get('barang')->result();
            $this->main->load('home/produk', $this->data);
    }
    
    public function kategori($kategori) {
        $this->db->where('kategori', $kategori);
        $data['active'] = 'cavet';
        $data['barang'] = $this->db->get('barang')->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();  
        $this->main->load('home/produk', $data);
    }
    
    public function detail_produk($id) {
        if($this->session->userdata('email')==null) {
            $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-danger" role="alert">
                        Please Login to continue!
                    </div>');
            redirect('Auth');
        }else {
            $this->data['title'] = 'Detail Menu';
            $this->data['active'] = 'cavet';
            $this->data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();  
            $this->data['barang'] = $this->db->get_where('barang', ['id' => $id])->row();
            $this->main->load('home/detail_produk', $this->data);
        }
    }

    public function filter() {
        $data['title'] = 'Daftar produk';
        $data['active'] = 'produk';
        $data['user'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row();  
        $min = $this->input->post('min');
        $max = $this->input->post('max');

        // echo($min);

        $val = array('harga >=' => $min, 'harga <=' =>$max);
        $this->db->where($val);
        $data['barang'] = $this->db->get('barang')->result();
        $this->main->load('home/produk', $data);
    }

    public function meja() {
        $rand = rand(1,10);
        $data =array(
            'id' => $rand,
            'nama_pemesan' => $this->input->post('nama'),
            'username' => $this->input->post('user'),
            'email' => $this->input->post('email'),
            'no' => $this->input->post('no'),
            'tanggal' => $this->input->post('tanggal'),
            'waktu' => $this->input->post('jam'),
            'pesan' => $this->input->post('pesan'),
        );

        $input = $this->db->insert('meja', $data);
        if($input) {
            redirect('Home');
        }else {
            echo('gagal');
        }
    }
}