<?
class Users extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	function Inserir($array)
    {
		//Array ( [value_nome_cadastrese] => 321 [value_sobrenome_cadastrese] => 32132 [value_login_cadastrese] => 21321 [value_senha_cadastrese] => 21321 [value_estado_cadastrese] => 32132131 [value_cidade_cadastrese] => 321 [value_ddd_cadastrese] => 321321321321 [value_telefone_cadastrese] => 3213 )
		$erro = 0;
		foreach($array AS $item)
		{
			if(empty($item) || !isset($item)) $erro++;
		}
		
		if($erro == 0)
		{
			$key = substr(md5(time()),0,10);
			$data = array('login'=> $array['value_login_cadastrese'],
						  'password'=> md5($array['value_senha_cadastrese']),
						  'nome'=> $array['value_nome_cadastrese'],
						  'sobrenome'=> $array['value_sobrenome_cadastrese'],
						  'estado'=> $array['value_estado_cadastrese'],
						  'cidade'=> $array['value_cidade_cadastrese'],
						  'email'=> $array['value_email_cadastrese'],
						  'telefone'=> $array['value_telefone_cadastrese'],
						  'sms' => 20,
						  'key'=>$key
						  );
			if($this->db->insert('users', $data))
			{
				$newdata = array(
				   'id' => $this->db->insert_id(),
                   'login'  => $array['value_nome_cadastrese'],
                   'logged_in' => TRUE
					);
				$this->session->set_userdata($newdata);


				return true;
			}
			else
			{
				return false;
			}
		}
	}
	function get()
	{
		$this->db->select("*");
		$this->db->where("id", $this->session->userdata("id"));
		$result = $this->db->get("users");
		return $result->row_array();
	}
	function keyGet($key)
	{
		$this->db->select("*");
		$this->db->where("key", $key);
		$result = $this->db->get("users");
		return $result->row_array();
	}
	function login()
	{
		$this->db->select("*");
		$this->db->where("login",$this->input->post("login"));
		$this->db->where("password",md5($this->input->post("password")));
		$query = $this->db->get("users");
		if($query->num_rows() >= 1)
		{
			$result = $query->row_array();
			return array("verify" => true, "value_nome_cadastrese" => $result['nome'],"id" => $result['id']);
		}
		else
		{
			return array("verify" => false);
		}
	}
	function verifyLogin($login)
	{
		$this->db->select("*");
		$this->db->where("login",$login);
		$query = $this->db->get("users");
		return $query->num_rows();
	}
	function verifyEmail($password)
	{
		$this->db->select("*");
		$this->db->where("email",$password);
		$query = $this->db->get("users");
		return $query->num_rows();
	}
}
?>