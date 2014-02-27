<?php
require_once 'Xml.Class.php';
require_once 'config.php';

$xml = new Xml();

$erro = 0;
$msgerro = null;

$idproduto = $_GET['id'];

$xml->openTag("response");

	if($idproduto == '')
	{
		$erro = 1;
		$msgerro = 'Codigo invalido!';
	}
	else
	{
		$rs = mysql_query("SELECT * FROM produto WHERE idproduto = $idproduto");
		if(mysql_num_rows($rs) > 0)
		{
			$req = mysql_fetch_object($rs);
			$xml->addTag('nome_produto', $req->nome_produto);
			$xml->addTag('valor', $req->valor);
		}
		else
		{
			$erro = 2;
			$msgerro = 'Produto nao encontrado!';
		}
	}
	
	$xml->addTag('erro', $erro);
	$xml->addTag('msgerro', $msgerro);
	
$xml->closeTag("response");

echo $xml;
?>