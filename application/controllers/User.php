<?php
defined('BASEPATH') or exit('No direct script access allowed');


class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title' => 'View Data User',
            'user' => $this->User_Model->getAll(),
            'content' => 'user/index'
        );
        $this->load->view('menu/main', $data);
    }

    public function add()
    {
        $data = array(
            'title' => 'Tambah Data User',
            'content' => 'user/add_form'
        );
        $this->load->view('menu/main', $data);
    }

    public function save()
    {
        $this->User_Model->Save();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
        }
        redirect('user');
    }

    public function getEdit($id)
    {
        $data = array(
            'title' => 'Update Data User',
            'user' => $this->User_Model->getById($id),
            'content' => 'user/edit_form'
        );
        $this->load->view('menu/main', $data);
    }

    public function edit()
    {
        $this->User_Model->editData();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Diupdate');
        }
        redirect('user');
    }
    function deleteUser($id)
    {
        $this->User_Model->delete($id);
        redirect('user');
    }
}
