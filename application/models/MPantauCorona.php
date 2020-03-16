<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class MPantauCorona extends CI_Model{

       public function loadData()
       {
            $this->db->select('*');
            $this->db->from('tb_indonesia');
            return $this->db->get()->result();
       }
  }