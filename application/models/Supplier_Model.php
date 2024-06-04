<?php

// application/models/User_Model.php
class Supplier_Model extends CI_Model
{
    protected $_table = 'suplier';
    protected $primary = 'id';
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}
