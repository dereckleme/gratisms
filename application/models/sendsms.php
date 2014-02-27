<?
class Sendsms extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	function Inserir($gateway = false, $id_user_gateway = false,$sends = false)
    {
		
		if($gateway == true && $sends <= 0)
		{
			print "2";
			die();
		}
		
		$this->db->select('COUNT(id) AS total, id');
		$this->db->from('bloqueio');
		$this->db->where('numero', $_POST['numero_destinatario']);
		$query = $this->db->get()->result();
		if($query[0]->total == 0)
		{
				//
				$this->db->select('COUNT(id) AS total, id');
				$this->db->from('dados_usuarios');
				$this->db->where('nome', $_POST['seu_nome']);
				$this->db->where('telefone', $_POST['seu_ddd'].$_POST['seu_numero']);

				$query = $this->db->get()->result();
				
				//
				if($query[0]->total == 0)
				{
					
					$data = array(
					   'nome' => $_POST['seu_nome'] ,
					   'telefone' => $_POST['seu_ddd'].$_POST['seu_numero']);
					$this->db->insert('dados_usuarios', $data); 
					$id_pessoa = $this->db->insert_id();
					
				
				}	
				else
				{
					$id_pessoa = $query[0]->id;
				}
				$data = array(
					  'texto'=>str_replace("\n", " ", $_POST['mensagem']),
					  'telefone'=>$_POST['ddd_destinatario'].$_POST['numero_destinatario'],
					  'id_pessoa'=>$id_pessoa
					);
					
					$this->db->insert('send_sms', $data); 	
					$this->db->insert('log', $data); 
				if($gateway == true && $sends >= 1)
				{
					$data = array('sms' => $sends-1);

					$this->db->where('id', $id_user_gateway);
					$this->db->update('users', $data); 
				}
						
				print "1";	
		}
			else
			{
				print "2";	
			}
    }
	function reform_text_new_espaco($nome)
	{

	$info = $nome;
	$info = trim($info);
	  $info = str_replace("&aacute;", "A", $info);
	  $info = str_replace("&aacute;", "a", $info);
	  $info = str_replace("Ã", "A", $info);
	  $info = str_replace("ã", "a", $info);	  
	  $info = str_replace("À", "A", $info);
	  $info = str_replace("à", "a", $info);
	  $info = str_replace("&atilde;", "a", $info);
	  $info = str_replace("Á", "a", $info);
	  $info = str_replace("&atilde;", "a", $info);
	  $info = str_replace("á", "a", $info);	  
	  $info = str_replace("â", "a", $info);
	  $info = str_replace("Â", "A", $info);
	  $info = str_replace("Ä", "A", $info);
	  $info = str_replace("ä", "a", $info);
	  $info = str_replace("&eacute;", "e", $info);
	  $info = str_replace("É", "e", $info);
	  $info = str_replace("&eacute;", "e", $info);
	  $info = str_replace("é", "e", $info);	  	  
	  $info = str_replace("è", "e", $info);
	  $info = str_replace("ê", "e", $info);
	  $info = str_replace("Ê", "E", $info);
	  $info = str_replace("Ë", "E", $info);
	  $info = str_replace("ë", "e", $info);
	  $info = str_replace("Í", "I", $info);
	  $info = str_replace("í", "i", $info);
	  $info = str_replace("Ï", "I", $info);
	  $info = str_replace("ï", "i", $info);
	  $info = str_replace("î", "i", $info);
	  $info = str_replace("&oacute;", "o", $info);
	  $info = str_replace("Ó", "o", $info);
	  $info = str_replace("&oacute;", "o", $info);
	  $info = str_replace("ó", "o", $info);
	  $info = str_replace("Õ", "O", $info);
	  $info = str_replace("õ", "o", $info);
	  $info = str_replace("ô", "o", $info);
	  $info = str_replace("Ô", "O", $info);
	  $info = str_replace("Ö", "O", $info);
	  $info = str_replace("o", "o", $info);
	  $info = str_replace("Ú", "U", $info);
	  $info = str_replace("ú", "u", $info);
	  $info = str_replace("ü", "u", $info);
	  $info = str_replace("Ü", "u", $info);
	  $info = str_replace("ç", "c", $info);
	  $info = str_replace("Ç", "C", $info);
	  $info = str_replace("!", "", $info);
	  $info = str_replace("@", "", $info);
	  $info = str_replace("&", "", $info);
	  $info = str_replace("&", "", $info);
	  $info = str_replace("(", "", $info);
	  $info = str_replace(")", "", $info);
	  $info = str_replace("/", "-", $info);
	  $info = str_replace("\\", "", $info);
	  $info = str_replace(":", "", $info);
	  $info = str_replace(",", "", $info);
	  $info = str_replace("$", "", $info);
	  $info = str_replace("%", "", $info);
	  $info = str_replace("?", "", $info);
	  $info = str_replace("#", "", $info);	
	  $info = str_replace("ª", "", $info);	
	  $info = str_replace("º", "", $info);		  
	  $info = str_replace(".", ".", $info);
	  $info = str_replace(";", "", $info);
	  $info = str_replace("'", "", $info);
	  $info = str_replace("’", "", $info);
	  $info = str_replace("`", "", $info);
	  $info = str_replace("´", "", $info);
	  $info = str_replace("-----", "-", $info);	  
	  $info = str_replace("----", "-", $info);
	  $info = str_replace("---", "-", $info);	  
	  $info = str_replace("--", "-", $info);	  	  
	  $info = str_replace("_____", "-", $info);
	  $info = str_replace("____", "-", $info);
	  $info = str_replace("___", "-", $info);
	  $info = str_replace("__", "-", $info);
	  $info = str_replace("ª", "", $info);
	  $info = str_replace("°", "", $info);
	  $info = str_replace("º", "", $info);
	  $info = str_replace("_-_", "-", $info);
	  $info = str_replace('"', '', $info);
	  $info = str_replace("<", "", $info);
	  $info = str_replace(">", "", $info);
	  $info = str_replace("“", "", $info);
	  $info = str_replace("”", "", $info);
	  $info = str_replace("_", "-", $info);		  
	  $info = str_replace('"', "", $info);
  	  $info = strtr($info, "ÀÁÂÃÄÅÃáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-_", "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn---");	  
	  $info = strtolower($info); 
	  $info = str_replace("-----", "-", $info);	  
	  $info = str_replace("----", "-", $info);
	  $info = str_replace("---", "-", $info);	  
	  $info = str_replace("--", "-", $info);	  	  
	  $info = str_replace("_____", "-", $info);
	  $info = str_replace("____", "-", $info);
	  $info = str_replace("___", "-", $info);
	  $info = str_replace("__", "-", $info);
	  $info= str_replace("%","-",$info);
	  $info= str_replace("/","-",$info);
	  $info= str_replace("[","",$info);
	  $info= str_replace("]","",$info);
	  $info= str_replace(")","",$info);
	  $info= str_replace("(","",$info);
	  $info= str_replace("º","",$info);
	  $info= str_replace("¨","",$info);
	  $info= str_replace("^","",$info);
	  $info= str_replace("~","",$info);
	  $info= str_replace("ª","",$info);
	  $info= str_replace("*","",$info);
	  $info= str_replace("£","",$info);
	  $info= str_replace("¬","",$info);
	  $info= str_replace("§","",$info);
	  
	  //replace de caracteres ascii
	  //$info= htmlentities($info,null,'UTF-8')
	  //$info= str_replace("&uml;","",$info);
return $info;
	
	}

	function Enviar()
	{
		$this->db->select('send_sms.telefone,send_sms.texto,dados_usuarios.nome,dados_usuarios.telefone AS telefone_pessoa, send_sms.id AS id_exclusao');
		$this->db->from('send_sms');
		$this->db->join('dados_usuarios', 'send_sms.id_pessoa = dados_usuarios.id');
		$this->db->limit(30);
		//$this->db->limit(3);
		$query = $this->db->get();
		//949089609
		foreach ($query->result() as $row)
			{
				
				if(!empty($row->telefone))
					{
							$telefone = $row->telefone;
							$texto = $row->texto;
								@unlink("./cmd/master.bat");
								$fp = fopen("./cmd/master.bat", "a");
								$content = '
								cd..
								cd..
								cd..
								cd..
								cd Arquivos de programas
								cd DeskNotifier
								cd adb
								adb shell am startservice -a sendsms -n it.elaware.shellsms/.sms -e phonenumber '.$telefone.' -e smsbody "Http://www.gratisms.com.br, Mensagem enviada por: '.$this->reform_text_new_espaco($row->nome).':'.$this->reform_text_new_espaco($row->telefone_pessoa).', '.$this->reform_text_new_espaco($texto).'" -e password 123456
							    ';
								$escreve = fwrite($fp, "$content");
								fclose($fp);
								exec("C:/xampp/htdocs/gratisms/cmd/master.bat");
								$this->db->delete('send_sms', array('id' => $row->id_exclusao)); 
					}	
			}
	}
	function verifyKey($key)
	{
		$this->db->select('count(id) AS total');
		$this->db->from('users');
		$this->db->where("key",$key);
		return $this->db->count_all_results();
	}
}
?>