<?php

// application/models/User_Model.php
class Kustomer_Model extends CI_Model
{
    protected $_table = 'kustomer';
    protected $primary = 'id';
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}
