<style type="text/css">
/* popup_box DIV-Styles*/
#popup_box { 
	display:none; /* Hide the DIV */
	position:fixed;  
	_position:absolute; /* hack for internet explorer 6 */  
	height:300px;  
	width:350px;  
	background:#FFFFFF;  
	left: 750px;
	top: 150px;
	z-index:100; /* Layering ( on-top of others), if you have lots of layers: I just maximized, you can change it yourself */
	
	
	/* additional features, can be omitted */
	border:2px solid #ff0000;  	
	padding:15px;  
	font-size:15px;  
	-moz-box-shadow: 0 0 5px #ff0000;
	-webkit-box-shadow: 0 0 5px #ff0000;
	box-shadow: 0 0 5px #ff0000;
	
}

#container {
	background: #d2d2d2; /*Sample*/
	width:100%;
	height:100%;
}

a{  
cursor: pointer;  
text-decoration:none;  
} 

/* This is for the positioning of the Close Link */
#popupBoxClose {
	font-size:15px;  
	line-height:7px;  
	right:5px;  
	top:5px;  
	position:absolute;  
	color:#6fa5e2;  
	font-weight:500;  	
}
</style>
<script type="text/javascript">
	
	$(document).ready( function() {
	
		// When site loaded, load the Popupbox First
		loadPopupBox();
	
		$('#popupBoxClose').click( function() {			
			unloadPopupBox();
		});
		
		$('#container').click( function() {
			unloadPopupBox();
		});

		function unloadPopupBox() {	// TO Unload the Popupbox
			$('#popup_box').fadeOut("slow");
			$("#container").css({ // this is just for style		
				"opacity": "1"  
			}); 
		}	
		
		function loadPopupBox() {	// To Load the Popupbox
			$('#popup_box').fadeIn("slow");
			$("#container").css({ // this is just for style
				"opacity": "0.3"  
			}); 		
		}
		/**********************************************************/
		
	});
</script>
<div id="popup_box"><a href="<?=base_url();?>gratisms.apk.zip" target="_blank"><img src="<?=base_url();?>bannergratis.jpg"/></a>
	<a id="popupBoxClose">Fechar</a>	
</div>
 <div class="mn_principal_linha">
                           <ul class="mn_principal">
                               <li class="mn_home"><a href="<?=base_url();?>" title="Home" alt="Seu site de envio torpedo SMS">Início</a></li>
                               <li class="mn_sms" id="abrir_menu_ti"><a  href="<?=base_url();?>artigos/tecnologia_da_informacao" title="Desenvolvedor" alt="Conheça como funciona a integração Grátisms">Tecnologia</a>
										<ul class="menu_interno">
										
										
											<li class="menu_itens"><a href="#" class="sub_list_new" rel="dbInfo" style="border-top:0px;margin-right:0px;padding-top: 0px; padding-bottom: 0px;">Banco de Dados</a>
													<ul class="closeFocus" id="dbInfo">
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/banco-de-dados/access" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Access</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/banco-de-dados/mysql" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">MySQL</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/banco-de-dados/postgresql" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">PostgreSQL</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/banco-de-dados/sql_server" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">SQL Server</a></li>
													</ul>
											</li>
											
											<li class="menu_itens"><a href="#" class="sub_list_new"  rel="desenInfo" style="border-top:0px;margin-right:0px;padding-top: 0px; padding-bottom: 0px;">Desenvolvimento</a>
															<ul class="closeFocus" id="desenInfo">
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/desenvolvimento/blogs" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Blogs</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/desenvolvimento/desenvolvimento" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Desenvolvimento</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/desenvolvimento/excel" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Excel</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/desenvolvimento/internet" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Internet</a></li>
													</ul>
											</li>
											<li class="menu_itens"><a href="#" class="sub_list_new"   rel="desiInfo" style="border-top:0px;margin-right:0px;padding-top: 0px; padding-bottom: 0px;">Design</a>
															<ul class="closeFocus" id="desiInfo">
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/design/comunicacao_digital" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Comunicação Digital</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/design/corel_draw" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Corel Draw</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/design/criacao_3d" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Criação 3D</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/design/design" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Design</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/design/fireworks" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">FireWorks</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/design/flash" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Flash</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/design/photoshop" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Photoshop</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/design/usabilidade" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Usabilidade</a></li>
													</ul>
											</li>
											<li class="menu_itens"><a href="#" class="sub_list_new"   rel="negoInfo" style="border-top:0px;margin-right:0px;padding-top: 0px; padding-bottom: 0px;">Negócios</a>
															<ul class="closeFocus" id="negoInfo">
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/negocios/business_intelligence" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Business Intelligence</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/negocios/carreira" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Carreira</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/negocios/ecommerce" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">E-commerce</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/negocios/empreendedorismo" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Empreendedorismo</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/negocios/gerencia1" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Gerência</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/negocios/webmarketing" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Marketing digital</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/negocios/seo" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">SEO</a></li>
													</ul>
											</li>
											<li class="menu_itens"><a href="#" class="sub_list_new"   rel="progInfo" style="border-top:0px;margin-right:0px;padding-top: 0px; padding-bottom: 0px;">Programação</a>
															<ul class="closeFocus" id="progInfo">
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/programacao/asp-net" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">ASP.NET</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/programacao/c__c" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">C / C++</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/programacao/css" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">CSS</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/programacao/html" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">HTML</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/programacao/java" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Java</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/programacao/javascript" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">JavaScript</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/programacao/mobile" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Mobile</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/programacao/php" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">PHP</a></li>
													</ul>
											</li>
											<li class="menu_itens"><a href="#" class="sub_list_new" rel="tecInfo" style="border-top:0px;margin-right:0px;padding-top: 0px; padding-bottom: 0px;">Tecnologia</a>
															<ul class="closeFocus" id="tecInfo">
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/tecnologia/ciencia" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Ciência</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/tecnologia/games" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Games</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/tecnologia/hardware" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Hardware</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/tecnologia/linux" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Linux</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/tecnologia/mac-os" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Mac OSX</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/tecnologia/celulares" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Mobile</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/tecnologia/redes" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Redes</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/tecnologia/seguranca" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Segurança</a></li>
															<li> <a href="<?=base_url();?>artigos/Veja_Mais/tecnologia/windows" style="border-top:0px;margin-right:0px;color:#6B0A93;margin:0px;padding:0px;">Windows</a></li>
													</ul>
											</li>	
											
										</ul>
							   </li>
								
							   
                               <li class="mn_desenvolvedor"><a href="<?=base_url();?>desenvolvedor" title="Desenvolvedor" alt="Conheça como funciona a integração Grátisms">desenvolvedor</a></li>
                               <li class="mn_contato"><a href="<?=base_url();?>contato" title="Contato" alt="Entre em contato conosco">contato</a></li>
                           </ul>                          
</div>
					
					<?
					// <li class="mn_sms"><a href="" title="SMS">sms</a></li>
					//<li class="mn_precos"><a href="" title="Preços">preços</a></li>
					?>