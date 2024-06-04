<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kustomer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kustomer_Model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = array(
            'title' => 'View Kustomer',
            'kustomer' => $this->Kustomer_Model->getAll(),
            'content' => 'kustomer/index'
        );
        $this->load->view('menu/main', $data);
    }
}
