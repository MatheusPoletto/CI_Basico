<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal_model extends CI_Model {

    public function listar__usuarios(){
        $query = $this -> db ->select('NM_PORTAL_USUARIO');
        $query = $this -> db -> get('PORTAL_USUARIO');
        return $query->result_array();
    }

    public function listar_configuracao(){
        $query = $this -> db ->select('*');
        $query = $this -> db -> get('CONFIGURACAO');
        return $query->result_array();
    }

    public function buscar_usuario($usuario){
    	$query = $this->db->select('*');
    	$query = $this->db->where("cd_portal_usuario", $usuario);
    	$query = $this -> db -> limit(1);
    	$query = $this->db->get('PORTAL_USUARIO');

    	return $query->num_rows() >= 1 ? $query->result_array()[0]: null;

    }
        

}
