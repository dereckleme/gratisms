<?
	header('Content-type: text/javascript');
?>

jQuery(function($) {
		
		$("#abrir_menu_ti").hover(function(){
			$('.closeFocus').css("display","none");
			$('.menu_interno').slideToggle("fast");
		},function(){
			$('.menu_interno').css("display","none");
		})
		
		$(".menu_itens").hover(function(){
			var value = "#"+$(".sub_list_new",this).attr("rel");
			$(value).css("display","block");
		},function(){
		var value = "#"+$(".sub_list_new",this).attr("rel");
			$(value).css("display","none");
		
		});
		
		function update_coments()
		{
			$.ajax({
								url: "home/listaComents",	
								type: "post",								
								success: function(data){
										$(".lista_comentarios").html(data);
										
				 }})
		}
		
		$(".btn_mais_comentarios").click(function(){
				 update_coments();
				 return false;
		});
		 $(".botao_cadastrar_jq" )
			  .button()
			  .click(function() {

					var msg="";
					var value_nome_cadastrese = $(".value_nome_cadastrese").val();
					var value_sobrenome_cadastrese = $(".value_sobrenome_cadastrese").val();
					var value_login_cadastrese = $(".value_login_cadastrese").val();
					var value_senha_cadastrese = $(".value_senha_cadastrese").val();
					var value_estado_cadastrese = $(".value_estado_cadastrese").val();
					var value_cidade_cadastrese = $(".value_cidade_cadastrese").val();
					var value_email_cadastrese = $(".value_email_cadastrese").val();
					var value_telefone_cadastrese = $(".value_telefone_cadastrese").val();
						
					if(value_login_cadastrese != "Login" || value_login_cadastrese != "")
						{					
								$.ajax({
								url: "usuario/verificaLogin",
								type: "post",
								async: false,
								data: {login:value_login_cadastrese},				
								success: function(data){
										if(data == "1")
										{	
											msg = msg+"\n - Login já está registrado em nosso sistema.";
										}	
									}
								})	
						}
					if(value_email_cadastrese != "Email" || value_email_cadastrese != "")
						{
								$.ajax({
								url: "usuario/verificaEmail",
								type: "post",
								async: false,
								data: {email:value_email_cadastrese},				
								success: function(data){
										if(data == "1")
										{	
											msg = msg+"\n - E-mail já está registrado em nosso sistema.";
										}	
									}
								})
						}
					if(value_nome_cadastrese == "Nome" || value_nome_cadastrese == "") msg = msg+"\n - Campo nome está em branco ou inválido.";
					if(value_sobrenome_cadastrese == "Sobrenome" || value_sobrenome_cadastrese == "") msg = msg+"\n - Digite seu sobrenome completo.";
					if(value_login_cadastrese == "Login" || value_login_cadastrese == "") msg = msg+"\n - É necessário um login para concluir o cadastro.";
					if(value_senha_cadastrese == "Senha" || value_senha_cadastrese == "") msg = msg+"\n - Para avançar no cadastro grátisms é necessário você ter uma senha de no mínimo 6 dígitos.";
					if(value_estado_cadastrese == "Estado" || value_estado_cadastrese == "") msg = msg+"\n - Nos enforme o estado onde você está localizado.";
					if(value_cidade_cadastrese == "Cidade" || value_cidade_cadastrese == "") msg = msg+"\n - Nos enforme a cidade onde você está localizado.";
					if(value_email_cadastrese == "Email" || value_email_cadastrese == "") msg = msg+"\n - Qual o seu E-mail?";
					if(value_telefone_cadastrese == "Telefone" || value_telefone_cadastrese == "") msg = msg+"\n - Nos enforme seu telefone para contato.";	
						if(msg != "")
						{
							//alert("Encontramos alguns erros abaixo referente ao seu cadastro.\n\n"+msg);
						}
						else
						{
							$.ajax({
								url: "usuario",
								type: "post",
								async: false,
								data: {value_nome_cadastrese:value_nome_cadastrese,
								value_sobrenome_cadastrese:value_sobrenome_cadastrese,
								value_login_cadastrese:value_login_cadastrese,
								value_senha_cadastrese:value_senha_cadastrese,
								value_estado_cadastrese:value_estado_cadastrese,
								value_cidade_cadastrese:value_cidade_cadastrese,
								value_email_cadastrese:value_email_cadastrese,
								value_telefone_cadastrese:value_telefone_cadastrese},				
								success: function(data){
											$(".box_cadastrese").slideUp("slow",function(){
												$(".mn_topo").fadeOut(function(){
													$(this).html(data);
													$.ajax({
															url: "usuario/abrirPainel",
															async: false,			
															success: function(data){
																	$(".box_cadastrese").html(data);	
																}
															})	
													$(this).fadeIn();
												});
											});
											
									}
								})
						}
					return false;
				});
		$(".recolher").on("click",function(){
				$(".box_cadastrese").slideUp("slow");
				$(".box_login").slideUp("slow");
			return false;
		})
		$(".abrir_login").on("click",function(){
				$(".box_cadastrese").slideUp("slow",function(){
					$(".box_login").slideToggle("slow");
				});
				
			return false;
		})
		$(".abrir_cadastre").on("click",function(){
				$(".box_login").slideUp("slow",function(){
					$(".box_cadastrese").slideToggle("slow");
				});
			return false;
		})
		$(".abrir_comentario").click(function(){
				$("#comentario").toggle("slow");
			return false;
		})
		$("#postar_comentario").click(function(){
			if(($("#nome_comentario").val() != "" && $("#nome_comentario").val() != "Seu Nome") && ($("#dados_comentario").val() != "" && $("#dados_comentario").val() != "Digite seu Comentário") )
			{
				var nome = $("#nome_comentario").val();
				var comentario = $("#dados_comentario").val();
			
								$.ajax({
								url: "home/addComents",
								type: "post",
								data: {nome:nome,comentario:comentario},				
								success: function(data){update_coments();}
								})
			}
			
			$("#comentario").toggle("slow");
			return false;
		})
		$("#contrato_text").val("SITE: é a empresa proprietária da empresa tspinatel informática me.\n\n\
\
Gratisms.com.br: é o portal cujo endereço é http://www.gratisms.com.br, com todos os recursos e ferramentas relacionadas a este.\n\n\
\
USUÁRIO(S): são as pessoas que acessam o Gratisms.\n\
DESTINATARIO(S): são os receptores das mensagens sms enviadas pelo USUÁRIO(S)\n\n\
\
ANUNCIANTE(S): são as pessoas ou empresas que veiculam seus anúncios ou publicidade no Gratisms.\n\n\
\
Este documento visa informar as responsabilidades, deveres e obrigações que todo USUÁRIO assume ao acessar o Gratisms.\n\
\
O USUÁRIO deve ler com atenção os termos abaixo antes de acessar ou usar o Gratisms, pois o acesso ou uso deste implica em concordância com tais termos. O SITEe os demais participantes deste portal somente fornecerão ao USUÁRIO informações e serviços mediante expressa concordância aos termos, condições e informações aqui contidas, assim como aos demais documentos incorporados ao mesmo por referência. O uso do Gratisms significa a total concordância com tais termos, condições e informações.\n\
O Gratisms atua como envio de sms por dispositivo próprio sendo prestador de serviços para o USUÁRIO(S).\n\
Dessa forma, o SITE não assume responsabilidade por nenhuma conseqüência que possa advir de qualquer relação entre o USUÁRIO(S) e o(s) DESTINATÁRIO(S), seja ela direta ou indireta. Assim, o SITE não é responsável por qualquer ação ou omissão do USUÁRIO. \n\n\
O SITE envida seus melhores esforços para manter o GRATISMS sempre atualizado, preciso e completo, mas não se responsabiliza por imprecisão, erro, fraude, inexatidão ou divergência nos dados.\n\n\
Por isto, nos casos em que um ou mais USUÁRIOS ou algum terceiro inicie qualquer tipo de reclamação ou ação legal contra um ou mais DESTINÁTARIO(S), todos os envolvidos nas reclamações ou ações devem eximir de toda responsabilidade o SITE e seus funcionários, agentes, operários, representantes e procuradores.\n\n\
O SITE também não se responsabiliza pelas obrigações tributárias que recaiam nas atividades entre USUÁRIO e DESTINATÁRIO(S) do GRATISMS.\n\n\
Recomenda-se que na Internet toda transação seja realizada com cautela e bom senso redobrados. O USUÁRIO deverá avaliar os riscos das negociações, levando em consideração que pode estar, eventualmente, lidando com menores de idade ou pessoas valendo-se de falsas identidades.\n\n\
O SITE Se reserva o direito de manter um banco de dados com todos os números envioados pelos USUÁRIO(S), sendo de propriedade do SITE as informações e dados, podendo ser vendido ou repassado a terceiros sem nenhum aviso ou necessidade de comunicação com o USUÁRIO(S) e ou DESTINATÁRIO(S).\n\n\
O SITE não é responsável por envios de propagandas ou qualquer tipo de comercio eletrônico envido por SMS, sendo um serviço gratuito para USUÁRIO(S).\n\n\
Ao Aceitar o contrato o USUÁRIO(S) esta aceitando todos os termos de uso, se responsabilizando pela mensagem e informando seu telefone e nome para utilização em campanhas ou envios de propagandas.");
		var contrato = 0;
		
		$("input[type='text'],input[type='password'],textarea").click(function(){
			$(this).val("");
		})
		$(".enviar_sms").click(function(){
			var ddd_destinatario;
			var numero_destinatario;
			var mensagem;
			var seu_nome;
			var seu_ddd;
			var seu_numero;
			var erros = 0;
			
			//////////////-//////////////
				$("input,textarea,select").each(function(){
					var tipo = $(this).attr("rel");
					
					if(tipo == "status_ddd") 
					{
						if($(this).val() == "0") 
						{
							$(this).css({'background-color':'#F00','color':'#FFF'});
							erros++;
						}
						else
						{
							$(this).css({'background-color':'#FFF','color':'#016972'});
						}
						ddd_destinatario = $(this).val();
					}
					if(tipo == "form_num_destino") 
					{
						if($(this).val() == "Número do destinatário") 
						{
							$(this).css({'background-color':'#F00','color':'#FFF'});
							erros++;
						}
						else
						{
							$(this).css({'background-color':'#FFF','color':'#016972'});
						}
						numero_destinatario = $(this).val();
					}
					if(tipo == "texto") 
					{
						if($(this).val() == "Escreva sua mensagem") 
						{
							$(this).css({'background-color':'#F00','color':'#FFF'});
							erros++;
						}
						else
						{
							$(this).css({'background-color':'#FFF','color':'#016972'});
						}
						mensagem = $(this).val();
					}
					////infomações do userAgent
					if(tipo == "seu_nome") 
					{
						if($(this).val() == "Seu nome") 
						{
							$(this).css({'background-color':'#F00','color':'#fff'});
							erros++;

						}
						else
						{
							$(this).css({'background-color':'#FFF','color':'#016972'});
						}
						seu_nome = $(this).val();
					}
					if(tipo == "seu_ddd") 
					{
						if($(this).val() == "0") 
						{
							$(this).css({'background-color':'#F00','color':'#FFF'});
							erros++;
						}
						else
						{
							$(this).css({'background-color':'#FFF','color':'#016972'});
						}
					    seu_ddd = $(this).val();
					}
					if(tipo == "seu_numero") 
					{
						if($(this).val() == "Seu número") 
						{
							$(this).css({'background-color':'#F00','color':'#FFF'});
							erros++;
						}
						else
						{
							$(this).css({'background-color':'#FFF','color':'#016972'});
						}
						seu_numero = $(this).val();
					}
				})
				if(numero_destinatario == "Gratisms") numero_destinatario = "958766424";
				if(erros == 0)
				{
						
						$("#contrato").dialog({
										autoOpen: false,
										title:"Termo de utilização:",
										width: 750,
										buttons: [
											{
												text: "Confirmo",
												click: function() {
														$.ajax({
																			url: "webservice/sendSms",
																			type: "post",
																			data: {ddd_destinatario:ddd_destinatario,numero_destinatario:numero_destinatario,mensagem:mensagem,seu_nome:seu_nome,seu_ddd:seu_ddd,seu_numero:seu_numero},
																			Complete: function(){
																				
																			},					
																			beforeSend: function(){
																				$(".enviar_sms").text("Enviando...");
																			},				
																			success: function(data){
																				if(data == "2") 
																				{
																					$("#contrato").dialog("close");
																				//alert("Atenção: Numero bloqueado para envio de sms.");
																				}
																				else
																				{
																					$("#contrato").dialog("close");
																					//alert("Mensagem Enviada com sucesso!!!");
																				}
																				$("#mensagem").val("");
																				$(".enviar_sms").text("Continue enviando");
																			},
																			error: function(){
																				//alert("Mensagem não enviada, Tente mais tarde.");
																			}
																			});
												}
											},
											{
												text: "Cancelar",
												click: function() {
													$("#contrato").dialog( "close" );
												}
											}
										]
									});
									
						$( "#contrato" ).dialog( "open" );
				}
			return false;
		})
		$("#submit_logar").click(function(){
		
			var login = $("#login_logar").val();
			var password = $("#password_logar").val();
			var msg="";
			if(login == "") msg = msg+"\n - Campo login está em branco ou inválido.";
			if(password == "") msg = msg+"\n - Campo senha está em branco ou inválido.";
			if(msg != "")
				{
					//alert("Encontramos alguns erros abaixo referente a sua tentativa de logar em nosso painel.\n\n"+msg);
				}
				else
				{
							$.ajax({
								url: "usuario/logar",
								type: "post",
								data: {login:login,password:password},				
								success: function(data){
											if(data == "2")
											{
												msg = msg+"\n - Usuário ou senha está inválido.";
												alert("Encontramos alguns erros abaixo referente a sua tentativa de logar em nosso painel.\n\n"+msg);
											}
											else
											{
												$(".box_login").slideUp("slow");
												$(".mn_topo").fadeOut(function(){
													$(this).html(data);
													$.ajax({
															url: "usuario/abrirPainel",			
															success: function(data){
																	$(".box_cadastrese").html(data);	
																}
															})
													$(this).fadeIn();
												});
											}
									}
								})	
				}				
			return false;
		})
	})
function limitaTextarea(valor) {
	quantidade = 250;
	total = valor.length;

	if(total <= quantidade) {
		resto = quantidade- total;
		document.getElementById('contador').innerHTML = resto;
	} else {
		document.getElementById('texto').value = valor.substr(0, quantidade);
	}
}
	