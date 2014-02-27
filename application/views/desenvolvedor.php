<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Envio de Torpedo SMS grátis - Envio de torpedo SMS em sua empresa</title>
<meta name="description" content="Se você é um desenvolvedor de software ou profissional da área, oferecemos também um Gateway para envio de mensagens de SMS (torpedos) via protocolo HTTP, que pode ser usado com facilidade em qualquer liguagem de programação, incluindo ASP, ASP.Net, PERL e PHP." /> 
<meta name="keywords" content="mensagem gratis,sms,sms gratis, envio de sms, gratisms, gratis sms, webservice sms, webservicesms, tim, vivo, claro, tim sms, vivo sms, claro sms, sms rapido, de graça, sms de graça" /> 
<meta name="REVISIT-AFTER" content="1 DAYS" /> 
<meta http-equiv="EXPIRES" content="0" /> 
<meta name="RESOURCE-TYPE" content="DOCUMENT" /> 
<meta name="DISTRIBUTION" content="GLOBAL" /> 
<meta name="AUTHOR" content="Gratisms"/> 
<meta name="COPYRIGHT" content="Todos do direitos reservados à Gratisms"/> 
<meta name="RATING" content="GENERAL"/> 
<meta http-equiv="Refresh" content="3600"/> 
<meta name="Robots" content="INDEX,FOLLOW"/> 
<script type="text/javascript" src="<?=base_url();?>js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/envio.js.php"></script>
<link type="text/css" rel="stylesheet" href="<?=base_url();?>css/style_teste.css" />
<link href="<?=base_url();?>css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37218202-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>

<div id="header">
<!---------------------TOPO CINZA------------------------>         
              <?
						$this->load->view($definy_user_logged);
					?>
               
<!---------------------MENU PRINCIPAL------------------------> 

               <div id="linha"> </div>
                     <?
						$this->load->view("includes/menu");
					?>
                    
                  <div id="conteudo_central">
							<div id="esquerdo_central">
							
			   
							 <div id="form_sms"  style="margin-top:20px;">
				 <span style="font-size:12px;font-family:Verdana, Geneva, sans-serif">
				 <a href="<?=base_url();?>desenvolvedor/java"><h2 class="form_subtitulo" style=" border-top:4px solid #E34203; background:url(<?=base_url();?>images/exemplo.jpg) no-repeat left;">Dúvida como postar com curl em php?</h2></a>
                              <h2 class="form_subtitulo" style=" border-top:4px solid #E34203; background:url(<?=base_url();?>images/titulo_desen.png) no-repeat left;">Olá desenvolvedor, atraves dessa pagina vou ajudar você a utilizar nosso sistema de torpedo sms.</h2>
                              Nosso Gateway é muito simples e eficiente, usando uma requisição simples http é possível passar alguns valores para essa url e assim concluir o envio do sms.<br/><br/>
							   
							<h2 class="form_subtitulo" style=" border-top:4px solid #E34203; background:url(<?=base_url();?>images/curl.png) no-repeat left;">Dúvida como postar com curl em php?</h2>
							 Cedo ou tarde, você passará por um certo problema em seu script: como obter conteúdo de outros sites. Há muitos métodos para isto, e o mais simples, provavelmente, é usar a função fopen() (quando habilitada), porém sem muitas opções de uso.  É onde entra a Biblioteca Curl. Esta biblioteca permite o acesso a outras páginas e também disponibiliza diversas opções de uso.
Neste exemplo, iremos saber como ela funciona e explorar algumas de suas opções, mas primeiro vamos começar com alguns comandos básicos da Curl.<br/><Br/>

							   <span style="color:green;font-weight:bold"> $ch = curl_init(); </span>
								<br/>
								<br/>
								//Agora que criamos, é possível acessarmos uma URL. Temos que informar a URL desejada usando a função curl_setopt().
								<br/>
								<br/>

// informar URL e outras funções ao CURL<br/>
 <span style="color:green;font-weight:bold">curl_setopt($ch, CURLOPT_URL, "http://www.google.com/");</span>
<br/>
								<br/>

Depois, para acessarmos a página, chamaremos a função curl_exec que irá executar os comandos e automaticamente imprimir a página.
<br/>
								<br/>

// Acessar a URL e enviá-la ao browser<br/>
 <span style="color:green;font-weight:bold">curl_exec($ch);</span><br/><br/>

Finalmente, encerraremos esse recurso Curl para liberarmos o sistema. Isto pode ser feito com a função curl_close():<br/><br/>


// liberar o sistema<br/>
 <span style="color:green;font-weight:bold">curl_close($ch);</span><br/><br/>

O único problema é que a saída da página é imediatamente impressa. Mas e se quisermos usar esta saída de uma outra forma? Não há problemas, pois existe uma opção chamada “CURLOPT_RETURNTRANSFER” que, quando definida como TRUE, é responsável por retornar a saída ao invés de imprimir. Veja o exemplo:<br/><br/>


 <span style="color:green;font-weight:bold">$ch = curl_init();</span><br/>
// informar URL e outras funções ao CURL<br/>
 <span style="color:green;font-weight:bold">curl_setopt($ch, CURLOPT_URL, "http://www.google.nl/");</span><br/>
 <span style="color:green;font-weight:bold">curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);</span><br/>
// Acessar a URL e retornar a saída<br/>
 <span style="color:green;font-weight:bold">$output = curl_exec($ch);</span><br/>
// liberar<br/>
 <span style="color:green;font-weight:bold">curl_close($ch);</span><br/>
// Substituir ‘Google’ por ‘PHP Curl’<br/>
 <span style="color:green;font-weight:bold">$output = str_replace(‘Google’, ‘PHP Curl’, $output);</span><br/>
// Imprimir a saída<br/>
 <span style="color:green;font-weight:bold">echo $output;</span><br/>

					<h2 class="form_subtitulo" style=" border-top:4px solid #E34203; background:url(<?=base_url();?>images/implementando.png) no-repeat left;">Dúvida como postar com curl em php?</h2>
<span style="color:green;font-weight:bold">$texto = "Testando envio de mensagem pelo portal Gratisms";</span> <br/>//Mensagem a ser enviada<br/>
										<span style="color:green;font-weight:bold">$ddd_destinatario = "11"; </span> <br/>//ddd da pessoa que vai receber o sms<br/>
										<span style="color:green;font-weight:bold">$numero_destinatario  = "91111-11111"; </span> <br/>//numero da pessoa que vai receber o sms<br/>
										<span style="color:green;font-weight:bold">$seu_nome = "Gratisms"; </span> <br/>//Seu nome<br/>
										<span style="color:green;font-weight:bold">$seu_ddd = "11";</span>  <br/>//Seu ddd<br/>
										<span style="color:green;font-weight:bold">$seu_numero = "91111-11111"; </span> <br/>//Seu numero de telefone<br/><br/>
										
										<span style="color:green;font-weight:bold">$chave = "chave-de-ativacao";</span> <br/>//Todas informações para gerar uma chave de ativação, se cadastre-se e clique em Meu Painel<br/><br/>
										
									<span style="color:green;font-weight:bold">	$post = "mensagem=$texto&<br/>ddd_destinatario=$ddd_destinatario&<br/>numero_destinatario=$numero_destinatario&<br/>seu_nome=$seu_nome&seu_ddd=$seu_ddd&seu_numero=$seu_numero";</span>
							
										<br/><br/>
											<span style="color:green;font-weight:bold">$ch = curl_init();  </span>//Iniciando o curl<br/>
										<span style="color:green;font-weight:bold">curl_setopt($ch, CURLOPT_URL, "http://www.gratisms.com.br/webservice/key/$chave");</span> //Deficição de url request<br/>
										<span style="color:green;font-weight:bold">curl_setopt($ch, CURLOPT_POST, 1);</span> //Ativando a passagem de post's<br/>
										<span style="color:green;font-weight:bold">curl_setopt($ch, CURLOPT_POSTFIELDS, $post); </span>//Envio do post<br/>
										<span style="color:green;font-weight:bold">curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);</span>//Retorno para váriavel<br/>
										<span style="color:green;font-weight:bold">$retorno = curl_exec($ch);</span> //Executando o curl.<br/>
										<span style="color:green;font-weight:bold">curl_close($ch);</span><br/>
								<h2 class="form_subtitulo" style=" border-top:4px solid #E34203; background:url(<?=base_url();?>images/conclusao.png) no-repeat left;">Conclusão final de como usar curl.</h2>
									Fonte de explicação curl, <a href="http://imasters.com.br/artigo/4140/php/usando-a-biblioteca-curl-do-php/">Créditos</a><br/><br/>
							</span>
							
							
							</div> 	 		


							
							</div>
							<div id="direito_central">
                 <div class="publicidade_300x250">
                     <h2 class="pub_subtitulo">publicidade</h2>
					  <div style="padding:5px 5px 5px 5px;border:solid ;border:solid #CCC 1px">
					  <center>
                    <script type="text/javascript"><!--
google_ad_client = "ca-pub-5137373170696897";
/* bloco */
google_ad_slot = "4241061965";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
					 </center>
                      
					</div>  

                                      
                 </div> 
				 <!------------------------FACEBOOK------------------------------------------------------>                                            
                <div id="facebook">
                    <h2 class="face_subtitulo">Ajude nosso site.Curta nossa página</h2>
                    <iframe src="http://www.facebook.com/plugins/like.php?href=http://www.gratisms.com.br/&layout=standard&show_faces=false&width=380&action=like&colorscheme=light&height=25" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:30px; " allowtransparency="true"></iframe>
               </div>    
                <div id="comentarios">
                    <h2 class="comente_subtitulo">o que está achando do site?</h2>
                    <p class="btn_comente"><a href="#" class="abrir_comentario" title="Clique aqui e comente">clique aqui e comente</a></p>
					<div style="width:100%;clear:both;padding-left:70px;display:none" id="comentario">
									  <input class="status_num_destino" type="text" size="9" value="Seu Nome" id="nome_comentario"/>
									  <textarea class="status_msg" style="width:160px;" id="dados_comentario">Digite seu Comentário</textarea><br/>
									   <button type="submit" style="background-color:#FFF"  title="Enviar mensagem" id="postar_comentario">Postar</button>
					</div>
					<div class="lista_comentarios">
					<?
						foreach($comentarios AS $linha)
						{
					?>
						 <div class="comentarios_conteudo">
							 <span class="comente_usuario"><?=$linha['nome']?></span>
							 <span class="comente_texto"><?=$linha['comentario']?></span>
						 </div>
					<?
						}
					?>	 
					</div> 
					 
                     <a href="" title="Veja todos os comentários" class="btn_mais_comentarios">Veja mais comentários</a>
                </div>
               
							</div>
				  </div>
</div>

<?
	$this->load->view("includes/rodape");
?>
<div id="contrato" style="display:none">
	<textarea style=" width:95%;height:200px;" id="contrato_text">
			

	</textarea>
</div>





</body>
</html>
