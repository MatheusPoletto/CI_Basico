<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller {

	/* 
	Controller: Chamado
	Descricao: Armazenar as funcoes relacionadas ao processo de registro, consulta e interacoes
	de chamados.

	Legendas do controller:
	   -- = ABERTURA DE FUNCAO 
	   ~~ = FIM DE FUNCAO
	*/
	private $configuracao;

	/* -- CONSTRUTOR --
	Descricao: Constroi a classe, todos os componentes carregados nele afetam o controller como um todo.
	*/
	function __construct(){
		parent::__construct();
		$this->load->model("Portal_model","portal");
		$this->configuracao = $this->portal->listar_configuracao()[0];

	}
	/* ~~ CONSTRUTOR ~~ */

	/* -- INDEX --
	Descricao: Limpa sessao e direciona para Portal/Acessar.
	*/
	public function index()
	{
		$this->session->sess_destroy();
		redirect('acessar');
		//$this->load->view('login', $dados);
	}
	/* ~~ INDEX ~~ */

	/* -- ACESSAR --
	Descricao: Realiza autenticacao de usuarios no sistema
	*/
	public function acessar(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('inputUsuario', 'Usuário', 'trim|required');
		$this->form_validation->set_rules('inputSenha', 'Senha', 'trim|required');

		/*Se submeteu o formulatório*/
		if ($this->form_validation->run() == FALSE)
        {
        	/*Se teve erros nas regras de negócio*/
        	if(validation_errors()){
        		$dados['usuarioIncorreto'] = true;
        	}
        }else{
        	/*Se não teve erros de regra de negócio autentica*/
        	$dados_form = $this->input->post();

    		/*Busca usuário*/
        	$usuario = $this->portal->buscar_usuario($dados_form['inputUsuario']);
        	if($usuario == null){
        		/*Usuário não existe*/
        		$dados['usuarioIncorreto'] = true;
        	}else{
        		if(password_verify($dados_form['inputSenha'] . 'MBSISTEMAS', $usuario['senha'])){
        			/*Usuário e senha corretos*/
					$this->session->set_userdata('USUARIO', $usuario);
					echo $this->session->userdata('USUARIO')['cd_portal_usuario'];				
        			redirect('chamado/home', 'refresh');
        		}else{
        			/*Senha incorreta*/
        			$dados['usuarioIncorreto'] = true;	
        		}
        	}
        }


		$dados['configuracao'] = $this->configuracao;
		$dados['titulo'] =  set_titulo('Login');
		//$dados['usuarios'] = $this->portal->listar__usuarios();
		$this->load->view('login', $dados);
	}
	/* ~~ ACESSAR ~~ */
}
