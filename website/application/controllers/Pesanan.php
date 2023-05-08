<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');
class Pesanan extends CI_Controller {

    public function data($id) {
        $this->db->where('username', $id);
        $data['active'] = 'pesan';
        $data['title'] = 'Pesanan Saya';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
        $data['data'] = $this->db->get('pesanan')->result();
        $this->main->load('home/pesanan', $data);
    }

    public function upload() {
        $sistem = $this->input->post('sistem');
        $rand = 0;
        if($sistem == 'Makan Ditempat') {
            $rand = rand(1, 10);
        }
        $data =array(
            'username' =>$this->input->post('username'),
            'nama_barang' =>$this->input->post('barang'),
            'harga' =>$this->input->post('harga'),
            'gambar' =>$this->input->post('gambar'),
            'kategori_barang' =>$this->input->post('kategori'),
            'sistem' =>$this->input->post('sistem'),
            'nama_pemesan' =>$this->input->post('nama_pemesan'),
            'jumlah' =>$this->input->post('jumlah'),
            'metode_bayar' =>$this->input->post('bayar'),
            'meja' => $rand,
        );

        $input = $this->db->insert('pesanan', $data);
        if($input) {
            redirect('Home');
        }
    }

    public function tf(){
        $config['upload_path']          = './assets/dataimg/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('tf'))
        {
            echo('ada yg error');
        }
        else
        {
            $gambar= $this->upload->data();
            $gambar = $gambar['file_name'];
            $id = $this->input->post('id');

            $this->db->set('bukti_tf', $gambar);
            $this->db->where('pesanan', $id);
            $simpan = $this->db->update('barang',$data);

            if($simpan) {
                redirect('Barang');
            }else {
                echo('data tidak dapat dimasukan');
            }
        }
    }

    public function hapus($id) {
        $this->db->where('id_pesanan', $id);
        $delete = $this->db->delete('pesanan');
        if($delete) {
            redirect('Home');
        }
    }
    
    
    public function meja() {
        $data['active'] = 'pesan';
        $data['title'] = 'Pesanan Saya';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();
        $this->main->load('home/meja', $data);
    }
    public function hapus_meja($id) {
        $this->db->where('username', $id);
        $delete = $this->db->delete('meja');
        if($delete) {
            redirect('Home');
        }
    }

}

?>