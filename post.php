<?
$retornadox = $_POST['numero_destinatario'];
											$fp = fopen("noticias.txt", "a");
											$escreve = fwrite($fp, "$retornadox");
											fclose($fp);
											
?>