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

/* SE NÃO TIVER LOGADO, LOGUE.
        if (! $this->session->userdata('first_name'))
        {
            redirect('login'); // the user is not logged in, redirect them!
        }*/

    }
    public function index()
    {
        // se for adm.
//$myUser = $this->session->userdata('user');
      //  if ($myUser && $myUser->is_admin == "Yes")
      $this->load->view('admin/login_page');



    }

    public function redirectLogin(){

        $newdata = array(

            'email'     => $this->input->post("email"),
            'logged_in' => TRUE,
        );

        $this->session->set_userdata($newdata);

        echo $this->session->userdata('email');
    }


    public function processar(){

        $this->questao_model->cadastrar();
        $this->logado_index();

    }

    public function addQuestao(){
        $this->load->view('admin/cabecalho');
        $this->load->view('admin/menu_lateral');
        $data['assuntos'] = $this->Assunto_model->getAll();
        $this->load->view('admin/cadastro_questao',$data);
        $this->load->view('admin/rodape');
    }

    public function logado_index(){


        $this->load->view('admin/cabecalho');
        $this->load->view('admin/menu_lateral');
        $this->load->view('admin/blank');
        $this->load->view('admin/rodape');
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

        $cod_questao = $this->input->get('cod');
        //EXIBIR QUESTAO


    }

    public function EditarQuestao(){
        $cod_questao = $this->input->post('cod');
        $data['atual']=$this->questao_model->getById($cod_questao);
        $data['assuntos'] = $this->Assunto_model->getAll();
        $this->load->view('admin/cabecalho');
        $this->load->view('admin/menu_lateral');
        $this->load->view('admin/editar_questao',$data);
        $this->load->view('admin/rodape');

    }

    public function AtualizarQuestao(){
        $this->questao_model->atualizar();
        $this->logado_index();





}
















    public function AddAssunto(){
        $this->load->view('admin/cabecalho');
        $this->load->view('admin/menu_lateral');
        $this->load->view('admin/cadastro_assunto');
        $this->load->view('admin/rodape');}



    public function processarAssunto(){

        $this->Assunto_model-> processar();
        $this->logado_index();


}

    public function listaAssuntos(){
        $this->load->view('admin/cabecalho');
        $this->load->view('admin/menu_lateral');

        $data['assuntos'] = $this->Assunto_model->getAll();

        $this->load->view('admin/resultados_assunto',$data);
    }


    public function EditarAssunto()
    {


        $idassunto = $this->input->post('cod');
        $data['atual'] = $this->Assunto_model->getById($idassunto);
        $this->load->view('admin/cabecalho');
        $this->load->view('admin/menu_lateral');
        $this->load->view('admin/editar_assunto', $data);
        $this->load->view('admin/rodape');


    }

    public function AtualizaAssunto(){

        $this->Assunto_model->atualizar();
        $this->logado_index();



    }

    public function DeleteAssunto(){

        // $this->logado_index();
        $idassunto = $this->input->post('cod');
        $this->Assunto_model->deleteById($idassunto);
        $this->logado_index();


    }








}