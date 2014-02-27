<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artigos extends CI_Controller {

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
		$this->load->view("artigos",$data);
	}
	public function tecnologia_da_informacao($paginacao = null)
	{
		$this->load->model('Comentarios');
		$this->load->model('users');
		$this->load->model('Noticias');
		$total = $this->Noticias->get();
		$config['base_url'] = base_url()."artigos/tecnologia_da_informacao/";
		$config['total_rows'] = $total;
		$config['per_page'] = 10; 
		$this->pagination->initialize($config);
		
		$data['noticias'] = $this->Noticias->getContent($config['per_page'],$paginacao);
		$data['paginacao'] = $this->pagination->create_links();
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
		$this->load->view("artigos",$data);
	}
	public function Veja_Mais($categoria = null, $subcategoria = null,$paginacao = null)
	{
		$this->load->model('Comentarios');
		$this->load->model('users');
		$this->load->model('Noticias');
		$total = $this->Noticias->get($categoria,$subcategoria);
		$config['base_url'] = base_url()."artigos/Veja_Mais/$categoria/$subcategoria";
		$config['total_rows'] = $total;
		$config['uri_segment'] = 5;
		$config['num_links'] = 4;
		$config['per_page'] = 10; 
		
		$this->pagination->initialize($config);
		
		$data['noticias'] = $this->Noticias->getContent($config['per_page'],$paginacao,$categoria,$subcategoria);
		$data['paginacao'] = $this->pagination->create_links();
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
		$this->load->view("artigos",$data);
	}
	public function Abrir_artigo($categoria = null, $subcategoria = null, $code = null)
	{
		$this->load->model('Comentarios');
		$this->load->model('users');
		$this->load->model('Noticias');
		$data['conteudo'] = $this->Noticias->get_code($categoria, $subcategoria, $code);
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
		$this->load->view("abrir_artigo",$data);	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */