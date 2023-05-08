<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');

class Barang extends CI_Controller {

    public function __construct() {
        parent:: __construct();
    }
    
    public function data($id) {
        $this->data['active'] = 'barang';
        $this->data['title'] = 'Daftar Barang';
        $this->data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();  
        $this->db->where('kategori', $id);
        $this->data['barang'] = $this->db->get('barang')->result();
        $this->template->load('admin/barang/list-barang', $this->data);
    }
    
    public function add() {
        $this->data['title'] = 'Tambah Data Barang';
        $this->data['active'] = 'barang';
        $this->data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();  
        $this->template->load('admin/barang/add', $this->data);
    }

    public function add_save() {
        
                $config['upload_path']          = './assets/dataimg/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;

                $this->upload->initialize($config);
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('gambar'))
                {
                        // echo('ada yg error');
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                    $gambar= $this->upload->data();
                    $gambar = $gambar['file_name'];

                    $data =array(
                        'nama_barang' => $this->input->post('nama'),
                        'harga' => $this->input->post('harga'),
                        'gambar' => $gambar,
                        'kategori' => $this->input->post('kategori'),
                    );
            
                    $simpan = $this->db->insert('barang',$data);
            
                    if($simpan) {
                        redirect('Admin');
                    }else {
                        echo('data tidak dapat dimasukan');
                    }
                }
        
    }

    public function edit($id) {
        $data['title'] = 'Edit Data';
        $data['active'] = 'barang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row();  
        $this->db->where('id', $id);
        $data['barang'] = $this->db->get('barang')->row();
        $this->template->load('admin/barang/edit', $data);
    }

    public function edit_save() {
                $config['upload_path']          = './assets/dataimg';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;
                $this->upload->initialize($config);
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('gambar'))
                {
                        echo('ada yg error');
                }
                else
                {
                    $gambar= $this->upload->data();
                    $gambar = $gambar['file_name'];

                    $data =array(
                        'nama_barang' => $this->input->post('nama'),
                        'harga' => $this->input->post('harga'),
                        'gambar' => $gambar,
                        'kategori' => $this->input->post('kategori')
                    );
            
                    $id = $this->input->post('id');
                    $this->db->where('id', $id);
                    $update = $this->db->update('barang', $data);
                    if($update) {
                        redirect('Admin');
                    }else{
                        echo('gagal update data');
                    }
                }
    }

    public function barang_ready($id) {
            $this->db->set('status', 0);
            $this->db->where('id', $id);
            $simpan = $this->db->update('barang');
            if($simpan) {
                redirect('Barang');
            }else {
                redirect('Barang/edit/<?=$id?>');
}

}
public function barang_habis($id) {
$this->db->set('status', 1);
$this->db->where('id', $id);
$simpan = $this->db->update('barang');
if($simpan) {
redirect('Barang');
}else {
redirect('Barang/edit/<?=$id?>');
}

}

public function hapus($id) {
$this->db->where('id', $id);
$delete = $this->db->delete('barang');

if($delete) {
redirect('Admin');
}else {
echo('data gabisa dihapus');
}
}
}

?>