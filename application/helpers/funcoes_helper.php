<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

if(!function_exists('set_titulo')){
    function set_titulo($titulo){
        $CI = get_instance();
        $CI->load->model("Portal_model","portal");
        $configuracao = $CI->portal->listar_configuracao()[0];
        return $configuracao['nm_sistema'] . ' - ' . $titulo;
    }
}

if(!function_exists('set_msg')){
	function set_msg($msg = NULL){
		$ci = & get_instance();
		$ci->session->set_userdata('aviso', $msg);
	}
}

if(!function_exists('get_msg')){
	function get_msg($destroy = TRUE){
		$ci = & get_instance();
		$retorno = $ci->session->userdata('aviso');
		if($destroy) $ci->session->unset_userdata('aviso');
		return $retorno;
	}
}

if(!function_exists('set_modulo_to_session')){
	function set_modulo_to_session($msg = NULL){
		$ci = & get_instance();
		$ci->session->set_userdata('modulo_session', $msg);
	}
}


if(!function_exists('get_modulo_in_session')){
	function get_modulo_in_session($destroy = FALSE){
		$ci = & get_instance();
		$retorno = $ci->session->userdata('modulo_session');
		if($destroy) $ci->session->unset_userdata('modulo_session');
		return $retorno;
	}
}

if(!function_exists('read_clob')){
	function read_clob($field) {
	    return $field->read($field->size());
	}
}

if(!function_exists('get_mes_br')){
	function get_mes_br($mesNumero) {
		$mes = null;
		switch ($mesNumero) {
            case "01":
                $mes = "jan";
                break;
            case "02":
                $mes = "fev";
                break;
            case "03":
                $mes = "mar";
                break;
            case "04":
                $mes = "abr";
                break;
            case "05":
                $mes = "mai";
                break;
            case "06":
                $mes = "jun";
                break;
            case "07":
                $mes = "jul";
                break;
            case "08":
                $mes = "ago";
                break;
            case "09":
                $mes = "set";
                break;
            case "10":
                $mes = "out";
                break;
            case "11":
                $mes = "nov";
                break;
            case "12":
                $mes = "dez";
                break;
            default:
                $mes = $mesNumero;

                break;
        }

        return $mes;
	}
}










