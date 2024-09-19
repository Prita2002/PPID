<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class S_layanan extends CI_Controller 
{
    public function __construct() {

        parent::__construct();
        $this->load->model('informasi_model');
    }
    public function sklayanan ()
    {
        $data ['title'] = 'SK Layanan';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/standarlayanan/p_sk', $data );
        $this->load->view('frontend/footer');
    }
    public function index ()
    {
        $data['informasi'] = $this->informasi_model->get_data('tbl_informasi')->result_array();
        $data ['title'] = 'Permohonan informasi';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/standarlayanan/p_informasi',$data );
        $this->load->view('frontend/footer');
    }
    public function keberatan ()
    {
        $data['keberatan'] = $this->informasi_model->get_data('tbl_keberatan')->result_array();
        $data ['title'] = 'Permohonan Keberatan';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/standarlayanan/p_keberatan', $data );
        $this->load->view('frontend/footer');
    }
    
    public function sengketa ()
    {
        $data['sengketa'] = $this->informasi_model->get_data('tbl_sengketa')->result_array();
        $data ['title'] = 'Permohonan Sengketa';
        $this->load->view('frontend/header', $data );
        $this->load->view('frontend/standarlayanan/p_sengketa', $data );
        $this->load->view('frontend/footer');
    }
    
}