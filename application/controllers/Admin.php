<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('admin_model');
    }
    public function index()
    {
        $data['artikel'] = $this->admin_model->get_data('tbl_artikel');

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Informasi Terbaru';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Informasi Terbaru';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tambah_artikel');
        $this->load->view('templates/footer');
    }


    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $Judul = $this->input->post('Judul', true);
            $Waktu = $this->input->post('Waktu', true);
            $Pengarang = $this->input->post('Pengarang', true);
            $Deskripsi = $this->input->post('Deskripsi', true);
            $Gambar = $_FILES['Gambar']['name'];

            if (!empty($Gambar)) {
                $config['upload_path'] = './gambar/';
                $config['allowed_types'] = 'jpg|png|gif|jpeg';
                $config['max_size'] = 2048;  // KB
                $config['max_width'] = 2048;
                $config['max_height'] = 2048;
                $config['file_name'] = time() . '_' . $Gambar;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('Gambar')) {
                    $data['error_msg'] = $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $data['error_msg'] . '</div>');
                    redirect('admin');
                } else {
                    $upload_data = $this->upload->data();
                    $Gambar = $upload_data['file_name'];

                    if ($upload_data['image_width'] > $config['max_width'] || $upload_data['image_height'] > $config['max_height']) {
                        // Delete the uploaded file
                        unlink($upload_data['full_path']);

                        $data['error_msg'] = 'The image dimensions exceed the allowed maximum.';
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $data['error_msg'] . '</div>');
                        redirect('admin');
                    }
                }
            } else {
                // Jika gambar kosong, gunakan gambar default
                $Gambar = "default.jpg";
            }

            $data = array(
                'Judul' => $Judul,
                'Waktu' => $Waktu,
                'Pengarang' => $Pengarang,
                'Deskripsi' => $Deskripsi,
                'Gambar' => $Gambar,
            );

            $this->admin_model->insert_data($data, 'tbl_artikel');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah ditambahkan!</div>');
            redirect('admin');
        }
    }

    public function edit($id)
    {
        if (!$_POST) {
            $this->index();
        } else {
            $Judul = $this->input->post('Judul', true);
            $Waktu = $this->input->post('Waktu', true);
            $Pengarang = $this->input->post('Pengarang', true);
            $Deskripsi = $this->input->post('Deskripsi', true);
            $Gambar = $_FILES['Gambar']['name'];

            // Konfigurasi upload
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'jpg|png|gif';
            $config['max_size'] = 2048;
            $config['max_width'] = 2048;
            $config['max_height'] = 2048;
            $config['overwrite'] = true;  // Allow overwriting existing file
            $config['file_name'] = time() . '_' . $Gambar;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // Jika file gambar diupload
            if (!empty($Gambar)) {
                if (!$this->upload->do_upload('Gambar')) {
                    $data['error_msg'] = $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $data['error_msg'] . '</div>');
                    redirect('admin');
                }

                // Check dimensions after upload
                $upload_data = $this->upload->data();
                if ($upload_data['image_width'] > $config['max_width'] || $upload_data['image_height'] > $config['max_height']) {
                    // Delete the uploaded file
                    unlink($upload_data['full_path']);

                    $data['error_msg'] = 'The image dimensions exceed the allowed maximum.';
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $data['error_msg'] . '</div>');
                    redirect('admin');
                }

                // Hapus gambar lama jika ada
                $old_image_path = './gambar/' . $this->input->post('gambar_lama');
                if (file_exists($old_image_path)) {
                    unlink($old_image_path);
                }

                $Gambar = $upload_data['file_name'];
            } else {
                // Jika tidak ada file baru diupload, gunakan gambar lama
                $Gambar = $this->input->post('gambar_lama');
            }

            $data = array(
                'id' => $id,
                'Judul' => $Judul,
                'Waktu' => $Waktu,
                'Pengarang' => $Pengarang,
                'Deskripsi' => $Deskripsi,
                'Gambar' => $Gambar,
            );

            $this->admin_model->update_data($data, 'tbl_artikel');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diUbah</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin');
        }
    }




    public function _rules()
    {
        $this->form_validation->set_rules('Judul', 'Judul', 'required', array(
            'required' => '%s harus diisi'
        ));
        $this->form_validation->set_rules('Waktu', 'Waktu', 'required', array(
            'required' => '%s harus diisi'
        ));
        $this->form_validation->set_rules('Pengarang', 'Pengarang', 'required', array(
            'required' => '%s harus diisi'
        ));
        $this->form_validation->set_rules(
            'Gambar',
            'Gambar',
            'callback_validate_image'
        );
        $this->form_validation->set_rules('Deskripsi', 'Deskripsi', 'required', array(
            'required' => '%s harus diisi'
        ));
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->admin_model->delete($where, 'tbl_artikel');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('admin');
    }

    public function validate_image()
    {
        if (empty($_FILES['Gambar']['name'])) {
            // Jika gambar kosong, tidak perlu validasi
            return true;
        }

        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';
        $config['max_size'] = 2048;  // KB
        $config['max_width'] = 2048;
        $config['max_height'] = 2048;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('Gambar')) {
            $this->form_validation->set_message('validate_image', $this->upload->display_errors());
            return false;
        }

        $upload_data = $this->upload->data();

        if ($upload_data['image_width'] > $config['max_width'] || $upload_data['image_height'] > $config['max_height']) {
            // Delete the uploaded file
            unlink($upload_data['full_path']);

            $this->form_validation->set_message('validate_image', 'The image dimensions exceed the allowed maximum.');
            return false;
        }

        return true;
    }
}
