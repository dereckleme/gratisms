<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Comentarios');
		$this->load->model('users');
		$data['comentarios'] = $this->Comentarios->lista_comentarios();
		if($this->session->userdata("logged_in"))
		{
			$data['dados'] = $this->users->get();
			$data['definy_user_logged'] = "includes/topo_logado";
		}
		else
		{
			$data['definy_user_logged'] = "includes/topo";
		}
		$this->load->view("home",$data);
	}
	public function listaComents()
	{
		$this->load->model('Comentarios');
		$data['comentarios'] = $this->Comentarios->lista_comentarios();
		$this->load->view("lista_comentarios",$data);
	}
	public function addComents()
	{
		$this->load->model('Comentarios');
		$this->Comentarios->Add();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */