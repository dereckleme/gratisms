<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Envio de Torpedo SMS grátis - Seu portal de envio de sms grátis para todo Brasil</title>
<meta name="description" content="Envio de sms gratis, enviar sms gratis, enviar mensagens gratuitamente, enviar mensagem para celular gratis, servidor de envio de sms, servidor de envio de sms gratis, sms gratis, brasil sms gratis, envio de sms pela tim, envio de sms gratis pela vivo, envio de sms gratis para nextel" /> 
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
							<h2 class="form_subtitulo" style="margin-top:20px; ;border-top:0px solid #E34203; background:url(<?=base_url();?>images/noticias.png) no-repeat left;">Notícias de tecnologia da informação.</h2>
							<ul class="lista_posts_geral" style="margin-top:20px;float:left;">
						<div class="paginacao_art">
							<?=$paginacao?>
						<div>			
									<?
										foreach($noticias AS $info)
										{
									?>
									<li>
									<span class="lista_img">
<img alt="Dicas básicas de SEO que todos devem saber" src="<?=base_url()?>images/imagemnoticia.png">
</span>
<h2>
<a href="<?=base_url()?>artigos/abrir_artigo/<?=$info['categoria']?>/<?=$info['subcategoria']?>/<?=$info['code']?>"><?=$info['titulo']?></a>
</h2>
<p><?=$info['subtitulo']?></p>
									</li>
									<?
											}
									?>
							</ul>
					
<div class="paginacao_art">
							<?=$paginacao?>
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
		
	 <h2 class="face_subtitulo">Ajude nosso site.Curta nossa página</h2>
                    <iframe src="http://www.facebook.com/plugins/like.php?href=http://www.gratisms.com.br/&layout=standard&show_faces=false&width=380&action=like&colorscheme=light&height=25" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:30px; " allowtransparency="true"></iframe>
</div>





</body>
</html>
