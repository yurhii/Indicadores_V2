<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consulta extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_Consulta');
    }

    public function index()
    {   
        $data['contenido'] = 'consulta';
        $data['listsectorapu'] = $this->Model_Consulta->listaSector();
        $data['listsectorIndicador'] = $this->Model_Consulta->listaIndicadorSector();
	$this->load->view('plantilla', $data);
    }    
    public function checkSector(){
        $listcheck = $this->input->post();
        
        if($listcheck){
            
        }
    }
}
