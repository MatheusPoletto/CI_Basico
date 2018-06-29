<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chamado extends CI_Controller 
{
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
	function __construct()
	{
		parent::__construct();
		$this->load->model("Portal_model","portal");
		$this->configuracao = $this->portal->listar_configuracao()[0];

	}
	/* ~~ CONSTRUTOR ~~ */

	/* -- INDEX -- 
	Descricao: Redireciona para a home.
	*/
	public function index()
	{
		redirect('chamado/home');
	}
	/* ~~ INDEX ~~ */

	/* -- HOME -- 
	Descricao: Exibe pagina principal do usuario.
	Valida se o usuario da session nao esta nulo, se verdadeiro exibe a tela, se falso redireciona
	para Portal/Login.
	*/
	public function home()
	{
		if(($usr = $this->session->userdata('USUARIO')) != NULL )
		{
			$dados['titulo'] = 'Home';
            $this->load->view('home.php', $dados);
		}else
		{
			redirect('Portal/Acessar');
        }
	}
	/* ~~ HOME ~~ */

	
}
