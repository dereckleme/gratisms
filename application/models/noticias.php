<?
class Noticias extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	function get($categoria = null,$subcategoria = null)
	{
		if($categoria == null && $subcategoria == null)
		{
		$this->db->select("id ,	categoria ,	subcategoria ,	titulo, 	subtitulo ,	code ,	conteudo ");
		$sql = $this->db->get("artigos");
		return $sql->num_rows();
		}
		else
		{
		$this->db->select("id ,	categoria ,	subcategoria ,	titulo, 	subtitulo ,	code ,	conteudo ");
		$sql = $this->db->where("categoria",$categoria);
		$sql = $this->db->where("subcategoria",$subcategoria);
		$sql = $this->db->get("artigos");
		return $sql->num_rows();
		}
	}
	function get_code($categoria = null,$subcategoria = null,$code = null)
	{
		$this->db->select("id ,	categoria ,	subcategoria ,	titulo, 	subtitulo ,	code,conteudo,description	,keywords");
		$sql = $this->db->where("categoria",$categoria);
		$sql = $this->db->where("subcategoria",$subcategoria);
		$sql = $this->db->where("code",$code);
		$sql = $this->db->get("artigos");	
		return $sql->row_array();
	}
	function getContent($total = null, $pagination = null,$categoria = null, $subcategoria = null)
	{
		
		$this->db->select("id ,	categoria ,	subcategoria ,	titulo, 	subtitulo ,	code");
		if($pagination == null && $categoria == null && $subcategoria == null)
		{
		$this->db->order_by("id", "desc");
		$sql = $this->db->get("artigos",$total);
		}
		else if($pagination != null && $categoria == null && $subcategoria == null)
		{
		
			print "dsa";
		$this->db->order_by("id", "desc");
		$sql = $this->db->get("artigos",$total,$pagination);	
		}
		else if($pagination == null && $categoria != null && $subcategoria != null)
		{
	
		$sql = $this->db->where("categoria",$categoria);
		$sql = $this->db->where("subcategoria",$subcategoria);
		$this->db->order_by("id", "desc");
		$sql = $this->db->get("artigos",$total);
		}
		else if($pagination != null && $categoria != null && $subcategoria != null)
		{
		$sql = $this->db->where("categoria",$categoria);
		$sql = $this->db->where("subcategoria",$subcategoria);
		$this->db->order_by("id", "desc");
		$sql = $this->db->get("artigos",$total,$pagination);	
		}
		return $sql->result_array();
	}
}
?>