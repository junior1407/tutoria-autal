<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('questao_model');
        $this->load->model('Assunto_model');
        $this->load->library('form_validation');
        $this->load->library('acessobd');
        $this->load->library('session');
    }
    public function index()
    {

      $this->load->view('admin/login_page');



        //&this->load->view
    }

    public function addQuestao(){
        $this->load->view('admin/cabecalho');
        $this->load->view('admin/menu_lateral');
        $this->load->view('admin/cadastro_questao');
        $this->load->view('admin/rodape');
    }

    public function logado_index(){
      $this->addQuestao();
    }

    public function  buscarQuestao(){

        $data['assuntos'] = $this->Assunto_model->getAll();
        $data['anos']=$this->questao_model->getAnos();
        $data['provas'] =$this->questao_model->getProvas();

        $this->load->view('admin/cabecalho');
        $this->load->view('admin/menu_lateral');
        $this->load->view('admin/busca_questao',$data);
        $this->load->view('admin/rodape');
    }


    public function exibeTabela(){

       $this->load->view('admin/cabecalho');
        $this->load->view('admin/menu_lateral');
        $prova = $this->input->post('prova');
        $assunto = $this->input->post('assunto');
        $ano = $this->input->post('ano');
        $data['questoes'] = $this->questao_model->getQuestoesTabela($prova,$assunto,$ano);
        $this->load->view('admin/resultados_questao',$data);





       $this->load->view('admin/rodape');
    }

    public function DeleteQuestao(){

       // $this->logado_index();
        $cod_questao = $this->input->post('cod');
        $this->questao_model->deleteById($cod_questao);
        $this->logado_index();


    }

    public function ExibeQuestaoIsolada(){
        // fazer abrir em nova aba.
        $cod_questao = $this->input->post('cod');
        echo $cod_questao;
    }

    public function EditarQuestao(){
        $cod_questao = $this->input->post('cod');
        echo $cod_questao;
    }











    public function AddAssunto()
    {
        $this->load->view('admin/cabecalho');
        $this->load->view('admin/menu_lateral');
        $this->load->view('admin/cadastro_assunto');
        $this->load->view('admin/rodape');

    }









}