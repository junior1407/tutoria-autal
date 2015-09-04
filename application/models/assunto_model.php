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


    function getById($id)
    {
        $q = $this->db->get_where('assunto', array('idassunto' => $id));

        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;

            }
            return $data;
        }}

    function getNomeAssuntoById($id){

        $this->db->where('idassunto',$id);
        //$this->db->select('nome');
        $q=$this->db->get('assunto');
        echo $q->result()[0]->nome;

    }

    function processar(){
         $nome= $this->input->post("nome");
        $descricao= $this->input->post("descricao");

        $data= [
            'nome' => $nome,
            'descricao' => $descricao,
        ];
        $this->db->insert('assunto',$data);



    }

    function atualizar(){

            $idassunto= $this->input->post('idassunto');
            $nome= $this->input->post('nome');
            $descricao=$this->input->post('descricao');






            $data= [
                'idassunto' => $idassunto,
                'nome' => $nome,
                'descricao' => $descricao,

            ];
            $this->db->where('idassunto',$idassunto);
            $this->db->update('assunto', $data);



    }

    function deleteById($id){

        $this->db->delete('assunto', array('idassunto' => $id));

    }





}