<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Model_Consulta extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function all() {
        $query = $this->db->get('sector');
        return $query->result();
    }

}