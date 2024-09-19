<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('page_model');
    }
    public function index()
    {
        $data['page'] = $this->page_model->get_data('tbl_page');

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Informasi Terbaru';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('page/index', $data);
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
        $this->load->view('page/tambah_page');
        $this->load->view('templates/footer');
    }


    public function tambah_aksi()
    {
        $Judul = $this->input->post('Judul', true);
        $Waktu = $this->input->post('Waktu', true);
        $Deskripsi = $this->input->post('Deskripsi', true);

        // Check if a file is selected for upload
        if (!empty($_FILES['Gambar']['name'])) {
            $Gambar = $_FILES['Gambar']['name'];

            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';
            $config['max_size'] = 0;  // KB
            $config['max_width'] = 0;
            $config['max_height'] = 0;
            $config['file_name'] = time() . '_' . $Gambar;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('Gambar')) {
                $data['error_msg'] = $this->upload->display_errors();
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $data['error_msg'] . '</div>');
                redirect('page');
                return; // Stop execution if upload fails
            }

            $upload_data = $this->upload->data();
            $Gambar = $upload_data['file_name'];
        } else {
            // No file selected, set $Gambar to an empty string or any default value
            $Gambar = 'default.jpg';
        }

        $data = array(
            'Judul' => $Judul,
            'Waktu' => $Waktu,
            'Deskripsi' => $Deskripsi,
            'Gambar' => $Gambar,
        );

        $this->page_model->insert_data($data, 'tbl_page');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah ditambahkan!</div>');
        redirect('page');
    }


    public function edit($id)
    {
        if (!$_POST) {
            $this->index();
        } else {
            $Judul = $this->input->post('Judul', true);
            $Waktu = $this->input->post('Waktu', true);
            $Deskripsi = $this->input->post('Deskripsi', true);
            $Gambar = $_FILES['Gambar']['name'];

            // Konfigurasi upload
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'jpg|png|gif';
            $config['max_size'] = 0;  // Unlimited file size
            $config['max_width'] = 0;
            $config['max_height'] = 0;
            $config['overwrite'] = true;  // Allow overwriting existing file
            $config['file_name'] = time() . '_' . $Gambar;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // Jika file gambar diupload
            if (!empty($Gambar)) {
                if (!$this->upload->do_upload('Gambar')) {
                    $data['error_msg'] = $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $data['error_msg'] . '</div>');
                    redirect('page');
                }

                // Hapus gambar lama jika ada
                $old_image_path = './gambar/' . $this->input->post('gambar_lama');
                if (file_exists($old_image_path)) {
                    unlink($old_image_path);
                }

                $Gambar = $this->upload->data('file_name');
            } else {
                // Jika tidak ada file baru diupload, gunakan gambar lama
                $Gambar = $this->input->post('gambar_lama');
            }

            $data = array(
                'Content_id' => $id,
                'Judul' => $Judul,
                'Waktu' => $Waktu,
                'Deskripsi' => $Deskripsi,
                'Gambar' => $Gambar,
            );

            $this->page_model->update_data($data, 'tbl_page');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diUbah</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
            redirect('page');
        }
    }


    public function delete($id)
    {
        $where = array('Content_id' => $id);
        $this->page_model->delete($where, 'tbl_page');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('page');
    }

    public function p_ppid()
    {
        $data['content'] = $this->page_model->get_content_by_id(1);

        if ($data['content']) {
            $data['title'] = 'Profile PPID LLDIKTI V';
            $this->load->view('frontend/header', $data);
            $this->load->view('frontend/profile/p_ppid', $data);
            $this->load->view('frontend/footer');
        } else {
            echo "Content not found!";
        }
    }
    public function struktur()
    {
        $data['content'] = $this->page_model->get_content_by_id(2);

        if ($data['content']) {
            $data['title'] = 'Struktur PPID';
            $this->load->view('frontend/header', $data);
            $this->load->view('frontend/profile/struktur_organisasi', $data);
            $this->load->view('frontend/footer');
        } else {
            echo "Content not found!";
        }
    }
    public function fungsi_ppid()
    {
        $data['content'] = $this->page_model->get_content_by_id(3);

        if ($data['content']) {
            $data['title'] = 'Fungsi PPID';
            $this->load->view('frontend/header', $data);
            $this->load->view('frontend/profile/fungsi_ppid', $data);
            $this->load->view('frontend/footer');
        } else {
            echo "Content not found";
        }
    }

    public function visimisi()
    {
        $data['content'] = $this->page_model->get_content_by_id(7);

        if ($data['content']) {
            $data['title'] = 'Visi dan Misi';
            $this->load->view('frontend/header', $data);
            $this->load->view('frontend/profile/p_visimisi', $data);
            $this->load->view('frontend/footer');
        } else {
            echo "Content not found";
        }
    }
    public function pelayananinformasi()
    {
        $data['content'] = $this->page_model->get_content_by_id(5);

        if ($data['content']) {
            $data['title'] = 'Pelayanan Informasi';
            $this->load->view('frontend/header', $data);
            $this->load->view('frontend/standarlayanan/p_informasi', $data);
            $this->load->view('frontend/footer');
        } else {
            echo "Content not found";
        }
    }
    public function pelayanansengketa()
    {
        $data['content'] = $this->page_model->get_content_by_id(4);

        if ($data['content']) {
            $data['title'] = 'Pelayanan Sengketa';
            $this->load->view('frontend/header', $data);
            $this->load->view('frontend/standarlayanan/p_sengketa', $data);
            $this->load->view('frontend/footer');
        } else {
            echo "Content not found";
        }
    }
    public function pelayanankeberatan()
    {
        $data['content'] = $this->page_model->get_content_by_id(6);

        if ($data['content']) {
            $data['title'] = 'Pelayanan Keberatan';
            $this->load->view('frontend/header', $data);
            $this->load->view('frontend/standarlayanan/p_keberatan', $data);
            $this->load->view('frontend/footer');
        } else {
            echo "Content not found";
        }
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
