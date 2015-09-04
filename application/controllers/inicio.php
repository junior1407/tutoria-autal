<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio  extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('questao_model');
        $this->load->library('form_validation');
        $this->load->library('acessobd');
    }
	public function index()
	{
		$this->load->view('template/header');
        $this->load->view('template/footer');
	}
    public function exibirtudo(){
        $this->load->view('template/header');
        $data['records'] = $this->questao_model->getAll();

        $this->load->view('simulado', $data);
        $this->load->view('template/footer');
    }

    public function cadastro(){
        $this->load->view('cadastro_questao');
}


/* End of file inicio.php */
/* Location: ./application/controllers/inicio.php */
}