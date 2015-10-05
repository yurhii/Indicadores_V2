<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consulta extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_Consulta');
    }

    public function index()
    {   
        $data['contenido'] = 'consulta';
        $data['query'] = $this->Model_Consulta->all();
	$this->load->view('plantilla', $data);
    }    
    public function checkLista(){
        $listcheck = $this->input->post();
        
        if($listcheck){
            print_r($listcheck['listaSector']); exit;
        }
    }
}
