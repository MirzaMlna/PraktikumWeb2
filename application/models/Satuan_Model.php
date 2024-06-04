<?php

// application/models/User_Model.php
class Satuan_Model extends CI_Model
{
    protected $_table = 'satuan';
    protected $primary = 'id';
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}
