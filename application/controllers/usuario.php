<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

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
		$verify = $this->input->post();
		$error = 0;
		if(!is_array($verify)) $verify = array();
		if(count($verify) == 0) $error++;
		foreach($verify AS $campo)
		{
			if(empty($campo))
			{
				$error++;
			}
		}
		
		if($error == 0)
		{
			$this->load->model("users");
			if($this->users->Inserir($verify))
			{
				$this->load->view("includes/topo_logado_ajax");
			}
			else
			{
				$this->load->view("erros/fatal_error");
			}
		}
		else
		{
			$this->load->view("erros/fatal_error");
		}
	}
	public function sair()
	{
		$this->session->sess_destroy();
		redirect('', 'location', 301);

	}
	public function logar()
	{
		$login = $this->input->post("login");
		$password = $this->input->post("password");
		if(!empty($login) && !empty($password))
		{
			$this->load->model("users");
			$result = $this->users->login();
			if($result['verify'])
			{
				$newdata = array(
				   'id' => $result['id'],
                   'login'  => $result['value_nome_cadastrese'],
                   'logged_in' => TRUE
					);
				$this->session->set_userdata($newdata);
				$this->load->view("includes/topo_logado_ajax");
			}
			else
			{
				print "2";
			}
		}
		else
		{
			print "2";
		}
	}
	public function verificaLogin()
	{
		$this->load->model("users");
		$result = $this->users->verifyLogin($this->input->post("login"));
		if($result >= 1)
		{
			print "1";
		}
		else
		{
			print "2";
		}
	}
	public function verificaEmail()
	{
		$this->load->model("users");
		$result = $this->users->verifyEmail($this->input->post("email"));
		if($result >= 1)
		{
			print "1";
		}
		else
		{
			print "2";
		}
	}
	public function abrirPainel()
	{
		$this->load->model("users");
		$data['dados'] = $this->users->get();
		$this->load->view("includes/painel_ajax",$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */