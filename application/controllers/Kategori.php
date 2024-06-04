<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_Model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = array(
            'title' => 'View Kategori',
            'kategori' => $this->Kategori_Model->getAll(),
            'content' => 'kategori/index'
        );
        $this->load->view('menu/main', $data);
    }
}
