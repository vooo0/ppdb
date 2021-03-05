<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Snapmodel extends CI_Model{

    public function insertData($dataTrans)
    {
        return $this->db->insert('tbl_requesttransaksi', $dataTrans);
    }

}
?>
