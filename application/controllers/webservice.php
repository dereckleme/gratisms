<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webservice extends CI_Controller {

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
	public function sendSms()
	{
		$this->load->model('SendSMS');
		$this->SendSMS->Inserir();
	}
	public function startSend()
	{
		$this->load->model('SendSMS');
		$this->SendSMS->Enviar();
	}
	public function TestSMS()
	{
		$this->load->model('SendSMS');
		$_POST['seu_nome'] = "DERECK";
		$_POST['seu_ddd'] = "11";
		$_POST['seu_numero'] = "958766424";
		
		$_POST['ddd_destinatario'] = "11";
		$_POST['numero_destinatario'] = "958766424";
		$_POST['mensagem'] = "SMS ONLINE TEST ".date("Y-m-d H-i-s");
		$this->SendSMS->Inserir();
	}
	public function key($key)
	{
		$this->load->model('SendSMS');
		$this->load->model('users');
		if($this->SendSMS->verifyKey($key) != 0)
		{
			$info = $this->users->keyGet($key);
			$this->SendSMS->Inserir(true,$info['id'],$info['sms']);
		}
		else
		{
			print "0";
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */