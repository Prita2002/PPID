<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_keberatan extends CI_Controller 
{

    public function __construct() {

        parent::__construct();
        $this->load->model('informasi_model');
    }
    public function index() 
    {
        $data['keberatan'] = $this->informasi_model->get_data('tbl_keberatan')->result();
        
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Permohonan Keberatan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('p_keberatan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Permohonan keberatan';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('p_keberatan/tambah');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {   
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->tambah();
        }else{
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
                    redirect('p_keberatan');
                } else {
                    $upload_data = $this->upload->data();
                    $Gambar = $upload_data['file_name'];
                    if ($upload_data['image_width'] > $config['max_width'] || $upload_data['image_height'] > $config['max_height']) {
                        // Delete the uploaded file
                        unlink($upload_data['full_path']);
    
                        $data['error_msg'] = 'The image dimensions exceed the allowed maximum.';
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $data['error_msg'] . '</div>');
                        redirect('p_keberatan');
                    }
                    $data = array(
                        'Deskripsi' => $Deskripsi,
                        'Gambar' => $Gambar,
                    );

                    $this->informasi_model->insert_data($data, 'tbl_keberatan');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data telah ditambahkan!</div>');
                    redirect('p_keberatan');
                }
            } else {
                // Handle jika gambar kosong
                $data['error_msg'] = "Pilih gambar terlebih dahulu.";
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $data['error_msg'] . '</div>');
                redirect('p_keberatan');
            }
        }           
    }
    public function edit($no)
    {
        if (!$_POST) {
        $this->index();
        } else {
            $Deskripsi = $this->input->post('Deskripsi', true);
            $Gambar = $_FILES['Gambar']['name'];

            // Konfigurasi upload
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'jpg|png|gif';
            $config['max_size'] = 2048;  // KB
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
                    redirect('p_keberatan');
                }

                // Check dimensions after upload
                $upload_data = $this->upload->data();
                if ($upload_data['image_width'] > $config['max_width'] || $upload_data['image_height'] > $config['max_height']) {
                    // Delete the uploaded file
                    unlink($upload_data['full_path']);

                    $data['error_msg'] = 'The image dimensions exceed the allowed maximum.';
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $data['error_msg'] . '</div>');
                    redirect('p_keberatan');
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
                'no' => $no,
                'Deskripsi' => $Deskripsi,
                'Gambar' => $Gambar,
            );

            $this->informasi_model->update_data($data, 'tbl_keberatan');
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data berhasil diUbah</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('p_keberatan');
        }
    }
    

    
       
    public function _rules()
    {
        $this->form_validation->set_rules('Gambar', 'Gambar', 'callback_validate_image'
        );
        $this->form_validation->set_rules('Deskripsi', 'Deskripsi', 'required', array(
            'required' => '%s harus diisi' 
        ));
    }

    public function delete($no){
        $where = array('no' => $no);
        $this->informasi_model->delete($where, 'tbl_keberatan');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('p_keberatan');
    }
    public function validate_image()
    {
        $check = TRUE;
        if ((!isset($_FILES['Gambar'])) || $_FILES['Gambar']['size'] == 0) {
            $this->form_validation->set_message('validate_image', 'The {field} field is required');
            $check = FALSE;
        } else if (isset($_FILES['Gambar']) && $_FILES['Gambar']['size'] != 0) {
            $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
            $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
            $extension = pathinfo($_FILES["Gambar"]["name"], PATHINFO_EXTENSION);
            $detectedType = exif_imagetype($_FILES['Gambar']['tmp_name']);
            $type = $_FILES['Gambar']['type'];
            if (!in_array($detectedType, $allowedTypes)) {
                $this->form_validation->set_message('validate_image', 'Invalid Image Content!');
                $check = FALSE;
            }
            if (filesize($_FILES['Gambar']['tmp_name']) > 2097152) {
                $this->form_validation->set_message('validate_image', 'The Image file size shoud not exceed 2MB!');
                $check = FALSE;
            }
            if (!in_array($extension, $allowedExts)) {
                $this->form_validation->set_message('validate_image', "Invalid file extension {$extension}");
                $check = FALSE;
            }
        }
        return $check;
    }
}