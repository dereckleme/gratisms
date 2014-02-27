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
                              <h2 class="form_subtitulo" style=" border-top:4px solid #E34203; background:url(<?=base_url();?>images/titulo_desen.png) no-repeat left;">Olá desenvolvedor, atraves dessa pagina vou ajudar você a utilizar nosso sistema de torpedo sms.</h2>
                              Nosso Gateway é muito simples e eficiente, usando uma requisição simples http é possível passar alguns valores para essa url e assim concluir o envio do sms.<br/><br/>
							   
							<h2 class="form_subtitulo" style=" border-top:4px solid #E34203; background:url(<?=base_url();?>images/java.jpg) no-repeat left;">Segue exemplo  em java para o envio do sms</h2>

							/**<br/>
 * @author Agradecemos ao Diego Pereira Grassato pela contribuição e desenvolvimento da aplicação.<br/>
 *<br/>
 */<br/>
							
import java.io.IOException;<br/>
import java.util.ArrayList;<br/>
import java.util.List;<br/><br/>

import org.apache.http.HttpResponse;<br/>
import org.apache.http.NameValuePair;<br/>
import org.apache.http.client.ClientProtocolException;<br/>
import org.apache.http.client.HttpClient;<br/>
import org.apache.http.client.entity.UrlEncodedFormEntity;<br/>
import org.apache.http.client.methods.HttpPost;<br/>
import org.apache.http.impl.client.DefaultHttpClient;<br/>
import org.apache.http.message.BasicNameValuePair;<br/>

public class Main {<br/>

/**<br/>
 * @author Diego Pereira Grassato<br/>
 * @param args<br/>
 */<br/>
public static void main(String[] args) {<br/>
// Mensagem a ser enviada<br/>
 String texto = "Testandoo....";<br/>
// ddd da pessoa que vai receber o sms<br/>
String ddd_destinatario = "17";<br/>
 // numero da pessoa que vai receber o sms<br/>
String numero_destinatario = "1111-1111";<br/>
// Seu nome<br/>
 String seu_nome = "Joao";<br/>
// Seu ddd<br/>
String seu_ddd = "17";<br/>
 // Seu numero de telefone<br/>
String seu_numero = "1111-1111";<br/><br/>

// Chave gerada pelo painel GRÁTISMS<br/>
 String chave = "GRátisms";<br/>
// Link concatenado com a chave de acesso<br/>
String download = "http://www.gratisms.com.br/webservice/key/" + chave;<br/>

HttpClient httpclient = new DefaultHttpClient();<br/>
HttpPost httpPost = new HttpPost(download);<br/>

List<NameValuePair> formparams = new ArrayList<NameValuePair>();<br/>
formparams.add(new BasicNameValuePair("mensagem", texto));<br/>
 formparams.add(new BasicNameValuePair("ddd_destinatario",<br/>
ddd_destinatario));<br/>
formparams.add(new BasicNameValuePair("numero_destinatario",<br/>
 numero_destinatario));<br/>
formparams.add(new BasicNameValuePair("seu_nome", seu_nome));<br/>
formparams.add(new BasicNameValuePair("seu_ddd", seu_ddd));<br/>
 formparams.add(new BasicNameValuePair("seu_numero", seu_numero));<br/>
try {<br/>
UrlEncodedFormEntity entity = new UrlEncodedFormEntity(formparams,<br/>
 "UTF-8");<br/>
httpPost.setEntity(entity);<br/><br/>

System.out.println("executing request " + httpPost.getURI());<br/>
 HttpResponse response = httpclient.execute(httpPost);<br/>
System.out.println("----------------------------------------");<br/>
 System.out.println(response.getStatusLine());<br/>
System.out.println("----------------------------------------");<br/>
<br/>
} catch (ClientProtocolException ex) {<br/>
System.err.println(ex.getMessage());<br/>
} catch (IOException ex) {<br/>
 System.err.println(ex.getMessage());<br/>
} catch (Exception ex) {<br/>
System.err.println(ex.getMessage());<br/>
 }<br/>
<br/>
}<br/>
<br/>
}<br/>

							
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
