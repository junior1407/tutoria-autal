<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('questao_model');
        $this->load->library('form_validation');
        $this->load->library('acessobd');
    }
	public function index()
	{
        $this->simulado();

	}
    public function simulado(){
        $this->load->view('template/header');
        $data['records'] = $this->questao_model->getAll();

        $this->load->view('simulado/simulado', $data);
        $this->load->view('template/footer');
    }
    public function resultado(){

        $data = array();
        for ($i = 1; $i <=($this->input->post('num')); $i++) {
            $id_questao = $this->input->post($i);
            $alternativa_marcada = $this->input->post('quest' . $id_questao);
           $alternativa_certa = $this->questao_model->obterResposta($id_questao);

            $data[] = array(
                'id_questao' => $id_questao,
                'marcada' =>$alternativa_marcada,
                'certa' => $alternativa_certa,
                //Isso será mandado pra view de correção. Mesma página já marcada.
            );


        }

        $resultado['records']= $data;
        $this->load->view('template/header');
        $this->load->view('simulado/resultado',$resultado);
    }




/* End of file inicio.php */
/* Location: ./application/controllers/inicio.php */
}