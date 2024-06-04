<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Satuan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Satuan_Model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = array(
            'title' => 'View Satuan',
            'satuan' => $this->Satuan_Model->getAll(),
            'content' => 'satuan/index'
        );
        $this->load->view('menu/main', $data);
    }
}
