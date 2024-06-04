<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Supplier_Model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = array(
            'title' => 'View Supplier',
            'supplier' => $this->Supplier_Model->getAll(),
            'content' => 'supplier/index'
        );
        $this->load->view('menu/main', $data);
    }
}
