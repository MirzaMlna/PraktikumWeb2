<?php

// application/models/User_Model.php
class Kategori_Model extends CI_Model
{
    protected $_table = 'kategori';
    protected $primary = 'id';
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}
