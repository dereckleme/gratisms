<?
	mysql_connect("mysql02-farm31.uni5.net","gratisms","852conde");
	mysql_select_db("gratisms");
	$sql = mysql_query("SELECT * FROM send_sms LIMIT 1");
	while($dados = mysql_fetch_array($sql))
	{
		$array[] = $dados;
	}
if(count($array) >= 1)
{
	print json_encode($array);
}
$id = $array[0][id];
mysql_query("DELETE FROM send_sms WHERE id = '$id'");
?>