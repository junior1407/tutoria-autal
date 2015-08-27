<?php
/**
 * Created by PhpStorm.
 * User: junior
 * Date: 06/07/2015
 * Time: 20:29
 */

class Assunto_model extends CI_Model{

    function getAll(){
        $q=$this->db->get('assunto');
        if ($q->num_rows() > 0 ){
            foreach($q->result() as $row){
                $data[] = $row;

            }
            return $data;
        }



    }

    function getNomeAssuntoById($id){

        $this->db->where('idassunto',$id);
        //$this->db->select('nome');
        $q=$this->db->get('assunto');
        echo $q->result()[0]->nome;

    }

    function processar(){
         $nome= $this->input->post("nome");
        $descricao= $this->input->post("descricao");
        echo $nome;
        echo $descricao;



    }





}