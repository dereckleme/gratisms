<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Envio de Torpedo SMS grátis - <?=$conteudo['titulo']?></title>
<meta name="description" content="<?=$conteudo['description']?>,envio de torpedo sms" /> 
<meta name="keywords" content="sms,<?=$conteudo['keywords']?>,torpedo,gratis" /> 
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
							 <div id="form_sms">
                               <h2 class="form_subtitulo">formulário de envio de mensagens via sms</h2>
							   
                               <div class="formulario_sms">
							   
                                  <div class="formulario_sms_destino">
                                        <p class="inf_destino"> Informações do destinatário</p>
                                        <form>
                                              <select  class="status_ddd" rel="status_ddd" >
                                                <option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="24">24</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="31">31</option>
												<option value="32">32</option>
												<option value="33">33</option>
												<option value="34">34</option>
												<option value="35">35</option>
												<option value="37">37</option>
												<option value="38">38</option>
												<option value="41">41</option>
												<option value="42">42</option>
												<option value="43">43</option>
												<option value="44">44</option>
												<option value="45">45</option>
												<option value="46">46</option>
												<option value="47">47</option>
												<option value="48">48</option>
												<option value="49">49</option>
												<option value="51">51</option>
												<option value="53">53</option>
												<option value="54">54</option>
												<option value="55">55</option>
												<option value="61">61</option>
												<option value="62">62</option>
												<option value="63">63</option>
												<option value="64">64</option>
												<option value="65">65</option>
												<option value="66">66</option>
												<option value="67">67</option>
												<option value="68">68</option>
												<option value="69">69</option>
												<option value="71">71</option>
												<option value="73">73</option>
												<option value="74">74</option>
												<option value="75">75</option>
												<option value="77">77</option>
												<option value="79">79</option>
												<option value="81">81</option>
												<option value="82">82</option>
												<option value="83">83</option>
												<option value="84">84</option>
												<option value="85">85</option>
												<option value="86">86</option>
												<option value="87">87</option>
												<option value="88">88</option>
												<option value="89">89</option>
												<option value="91">91</option>
												<option value="92">92</option>
												<option value="93">93</option>
												<option value="94">94</option>
												<option value="95">95</option>
												<option value="96">96</option>
												<option value="97">97</option>
												<option value="98">98</option>
												<option value="99">99</option>
                                            </select> 
                                            <input class="status_num_destino" type="text" size="9" value="Número do destinatário" rel="form_num_destino"/>
                                            <br class="clear" />
                                            <label class="status_msg">Restam <span id="contador">250</span> letras</label>
                                             <br class="clear" />
                                            <textarea onkeyup="limitaTextarea(this.value)" rel="texto" class="status_msg" id="mensagem">Escreva sua mensagem</textarea>
                                         </form>                                          
                                    </div>  
                                    
                                    <div class="formulario_suas_inf">
                                        <p class="suas_inf">Suas informações</p>
                                        <form>
                                            <input class="status_seu_nome" type="text" size="25" value="Seu nome" rel="seu_nome"/>
                                            <br class="clear" />
                                            <select  class="status_ddd" rel="seu_ddd" >
                                                 <option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="24">24</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="31">31</option>
				<option value="32">32</option>
				<option value="33">33</option>
				<option value="34">34</option>
				<option value="35">35</option>
				<option value="37">37</option>
				<option value="38">38</option>
				<option value="41">41</option>
				<option value="42">42</option>
				<option value="43">43</option>
				<option value="44">44</option>
				<option value="45">45</option>
				<option value="46">46</option>
				<option value="47">47</option>
				<option value="48">48</option>
				<option value="49">49</option>
				<option value="51">51</option>
				<option value="53">53</option>
				<option value="54">54</option>
				<option value="55">55</option>
				<option value="61">61</option>
				<option value="62">62</option>
				<option value="63">63</option>
				<option value="64">64</option>
				<option value="65">65</option>
				<option value="66">66</option>
				<option value="67">67</option>
				<option value="68">68</option>
				<option value="69">69</option>
				<option value="71">71</option>
				<option value="73">73</option>
				<option value="74">74</option>
				<option value="75">75</option>
				<option value="77">77</option>
				<option value="79">79</option>
				<option value="81">81</option>
				<option value="82">82</option>
				<option value="83">83</option>
				<option value="84">84</option>
				<option value="85">85</option>
				<option value="86">86</option>
				<option value="87">87</option>
				<option value="88">88</option>
				<option value="89">89</option>
				<option value="91">91</option>
				<option value="92">92</option>
				<option value="93">93</option>
				<option value="94">94</option>
				<option value="95">95</option>
				<option value="96">96</option>
				<option value="97">97</option>
				<option value="98">98</option>
				<option value="99">99</option>
                                            </select> 
                                            <input class="status_seu_num" type="text" size="9" value="Seu número" rel="seu_numero"/>
                                            <br class="clear" />
                                            <button type="submit" class="enviar_sms" title="Enviar mensagem">enviar mensagem</button>
                                            
                                       </form>                                      
                                    </div> 
                                  <div class="atencao_form">
                                        <img src="<?=base_url();?>images/atencao_icon.png" class="attention" alt="Atenção" title="Atenção" />
                                       <p class="at_form">Não nos responsabilizamos por mensagens enviadas por esse portal.</p>
                                  </div>
                                                                    
                               </div>                                 
                    </div> 	 
					
							<h1 style="float:left;margin-top:10px;"><?=$conteudo['titulo']?></h1>
							<?=str_replace('<img src="http://bs.serving-sys.com/BurstingPipe/adServer.bs?cn=bsr&FlightID=5619831&Page=&PluID=0&Pos=9648" border=0 width=300 height=250>',' ',$conteudo['conteudo'])?>
							
							
							
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
	<textarea style="width:708px;height:200px;margin-bottom:5px;" id="contrato_text">
			

	</textarea>
	<div style="clear:both;"><script type="text/javascript"><!--
google_ad_client = "ca-pub-5137373170696897";
/* novo */
google_ad_slot = "4813347969";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
</div>
<div id="capcha" style="display:none">
	
</div>






</body>
</html>
