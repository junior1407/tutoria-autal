<?php
/**
 * Created by PhpStorm.
 * User: junior
 * Date: 06/07/2015
 * Time: 20:29
 */

class Questao_model extends CI_Model{


    function getAnos(){
        $this->db->group_by('ano');
        $this->db->select('ano');
        $q=$this->db->get('questao');
        if ($q->num_rows() > 0 ){
            foreach($q->result() as $row){
                $data[] = $row;

            }
            return $data;
        }

    }

    function getQuestoesTabela($prova,$assunto,$ano){
        if ($prova != 'empty'){
           $this->db->where('prova',$prova);
        }
        if ($assunto!='empty'){
            $this->db->where('id_assunto_questao',$assunto);
        }
        if($ano!='empty'){
            $this->db->where('ano',$ano);
        }
        $q =$this->db->get('questao');
        if ($q->num_rows()>0){
            foreach ($q->result() as $row){
                $data[]=$row;
            }
            return $data;
        }
    }

    function getProvas(){
        $this->db->group_by('prova');
        $this->db->select('prova');
        $q=$this->db->get('questao');
        if ($q->num_rows() > 0 ){
            foreach($q->result() as $row){
                $data[] = $row;

            }
            return $data;
        }

    }


    function cadastrar(){

        $prova= $this->input->post('prova');
        $ano=$this->input->post('ano'); // RESOLVER
        $id_assunto=$this->input->post('assunto');
        $correta=$this->input->post('correta'); // RESOLVER
        $enunciado= $this->input->post('enunciado');
        $link1=$this->input->post('enunciado_link1');
        $link2=$this->input->post('enunciado_link2');
        $link3=$this->input->post('enunciado_link3');
        if (!empty($link1)) {
            $link1 = '<br> <img src="' . $link1 . '" width="350" class="img-responsive" style="float:left">';
            $enunciado = $enunciado . $link1;

            if (!empty($link2)){
                $enunciado= $enunciado.'<img src="'.$link2.'" width="350" class="img-responsive" style="float:left">';

                if(!empty($link3)){
                    $enunciado= $enunciado.'<img src="'.$link3.'" width="350" class="img-responsive" style="float:left">';
                }
        }}
        $a=$this->input->post('a');
        $linka= $this->input->post('alternativa_a_link');
        if(!empty($linka)) {
            $a = $a . '<img src="' .$linka . '" width="150" class="img-responsive" style="display:inline-block">';
        }
        $b=$this->input->post('b');
        $linkb= $this->input->post('alternativa_b_link');
        if(!empty($linkb)) {
            $b = $b . '<img src="' . $linkb . '" width="150" class="img-responsive" style="display:inline-block">';
        }
        $c=$this->input->post('c');
        $linkc= $this->input->post('alternativa_c_link');
        if (!empty($linkc)){
            $c=$c.'<img src="'.$linkc.'" width="150" class="img-responsive" style="display:inline-block">';
        }

        $d=$this->input->post('d');
        $linkd= $this->input->post('alternativa_d_link');
        if (!empty($linkd)){
            $d=$d.'<img src="'.$linkd.'" width="150" class="img-responsive" style="display:inline-block">';
        }

        $e=$this->input->post('e');
        $linke= $this->input->post('alternativa_e_link');
        if(!empty($linke)){
            $e=$e.'<img src="'.$linke.'" width="150" class="img-responsive" style="display:inline-block">';
        }


        $data= [
            'enunciado' => $enunciado,
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'e' => $e,
            'id_assunto_questao'=> $id_assunto,
            'prova' => $prova,
            'ano' => $ano,
            'correta' => $correta,
        ];
        $this->db->insert('questao',$data);
    }

    function getAll(){
        $q = $this->db->get('questao');
        if ($q->num_rows() > 0 ){
            foreach($q->result() as $row){
                $data[] = $row;

            }
            return $data;
        }
    }

    function deleteById($id){

            $this->db->delete('questao', array('id' => $id));

    }




} 