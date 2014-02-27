<?
class Comentarios extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	function lista_comentarios()
	{
		$this->db->select("comentario,nome");
		$this->db->from("comentario");
		$this->db->limit(3);
		$this->db->order_by("rand()");
		$sql = $this->db->get();
		return $sql->result_array();
	}
	function Add()
	{
		$data = array('comentario '=> $this->input->post('comentario'),
					  'nome '=> $this->input->post('nome'));
					$this->db->insert('comentario', $data); 	
	}
}
?>	