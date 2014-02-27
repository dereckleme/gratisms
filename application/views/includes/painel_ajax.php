
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<div style="float:left;width:320px;">			
									<img src="<?=base_url();?>images/atualizeseus.png"/><br/>
									<div style="float:left;margin-top:7px;">
									<input style="margin:2px 2px 2px 2px;" type="text" value="<?=$dados['nome']?>" class="value_nome_cadastrese" disabled="disabled"/><br/>
									<input style="margin:2px 2px 2px 2px;" type="text" value="<?=$dados['login']?>" class="value_login_cadastrese" disabled="disabled"/><br/>
									<input style="margin:2px 2px 2px 2px;" type="text" value="<?=$dados['estado']?>" class="value_estado_cadastrese" disabled="disabled"/><br/>
									<input style="margin:2px 2px 2px 2px;" type="text" value="<?=$dados['email']?>" class="value_email_cadastrese" disabled="disabled"/><br/>
									
									</div>
									<div style="float:left;margin-top:7px;">
									<input style="margin:2px 2px 2px 2px;" type="text" value="<?=$dados['sobrenome']?>" class="value_sobrenome_cadastrese" disabled="disabled"/><br/>
									<input style="margin:2px 2px 2px 2px;width:127px;" type="password" value="Senha" class="value_senha_cadastrese" disabled="disabled"/><br/>
									<input style="margin:2px 2px 2px 2px;" type="text" value="<?=$dados['cidade']?>" class="value_cidade_cadastrese" disabled="disabled"/><br/>
									<input style="margin:2px 2px 2px 2px;" type="text" value="<?=$dados['telefone']?>" class="value_telefone_cadastrese"disabled="disabled" /><br/>
									<input  type="submit"  value="Atualizar Cadastro" style="width:100%"/>
									</div>
									
									<div style="font-size:14px;margin-top:20px;float:left;">
									<img src="<?=base_url();?>images/tabela.png"/><br/><br/>
									
									Até 1000 SMS	R$ 50,00<br/>
Até 10000 SMS	R$ 400,00<br/>
Até 30000 SMS	R$ 1.050,00<br/>
Até 50000 SMS	R$ 1.500,00<br/>
Até 100000 SMS	R$ 2.000,00<br/>
									</div>
									<div style="font-size:14px;margin-top:20px;float:left;">
									<img src="<?=base_url();?>images/webservice_sub.png"/><br/><br/>
									Se você é um desenvolvedor de software ou profissional da área, oferecemos <br/><br/>
                      também um Gateway para envio de mensagens de SMS (torpedos) via protocolo HTTP,  <br/><br/>
                      que pode ser usado com facilidade em qualquer liguagem de programação, incluindo ASP, ASP.Net, PERL ,PHP entre outras.</div>
					</div>	
				<div style="float:left;">					
									<div style="float:left; width:665px;margin-left:20px;">
									<h2 style="margin-top:0px;">Configurações de Gateway de envio torpedo sms.</h2>
										<b>Numero de KEY para utilização do gateway</b><br/><input disabled="disabled"  value="<?=$dados['key']?>" size="8" type="text"/><br/>
										<b>Total de sms disponíveis em sua conta para envio</b><br/><input disabled="disabled"  value="<?=$dados['sms']?>" size="2" type="text"/> Precisando de crédito? contato@gratisms.com.br<br/><br/>
										<b>Configuração básica do gateway utilizando curl, mais informações acesse o menu DESENVOLVEDOR</b><br/><br/>
										<span style="color:green;font-weight:bold">$texto = "Testando envio de mensagem pelo portal Gratisms";</span> <br/>//Mensagem a ser enviada<br/>
										<span style="color:green;font-weight:bold">$ddd_destinatario = "11"; </span> <br/>//ddd da pessoa que vai receber o sms<br/>
										<span style="color:green;font-weight:bold">$numero_destinatario  = "91111-11111"; </span> <br/>//numero da pessoa que vai receber o sms<br/>
										<span style="color:green;font-weight:bold">$seu_nome = "Gratisms"; </span> <br/>//Seu nome<br/>
										<span style="color:green;font-weight:bold">$seu_ddd = "11";</span>  <br/>//Seu ddd<br/>
										<span style="color:green;font-weight:bold">$seu_numero = "91111-11111"; </span> <br/>//Seu numero de telefone<br/><br/>
										
										<span style="color:green;font-weight:bold">$chave = "<?=$dados['key']?>";</span> <br/>//Chave gerada pelo painel GRÁTISMS<br/><br/>
										
									<span style="color:green;font-weight:bold">	$post = "mensagem=$texto&<br/>ddd_destinatario=$ddd_destinatario&<br/>numero_destinatario=$numero_destinatario&<br/>seu_nome=$seu_nome&seu_ddd=$seu_ddd&seu_numero=$seu_numero";</span>
									<br/>*Set dessa variável tem que ser feita inline
										<br/><br/>
										<span style="color:green;font-weight:bold">$ch = curl_init();  </span>//Iniciando o curl<br/>
										<span style="color:green;font-weight:bold">curl_setopt($ch, CURLOPT_URL, "http://www.gratisms.com.br/webservice/key/$chave");</span> //Deficição de url request<br/>
										<span style="color:green;font-weight:bold">curl_setopt($ch, CURLOPT_POST, 1);</span> //Ativando a passagem de post's<br/>
										<span style="color:green;font-weight:bold">curl_setopt($ch, CURLOPT_POSTFIELDS, $post); </span>//Envio do post<br/>
										<span style="color:green;font-weight:bold">curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);</span>//Retorno para váriavel<br/>
										<span style="color:green;font-weight:bold">$retorno = curl_exec($ch);</span> //Executando o curl.<br/>
										<span style="color:green;font-weight:bold">curl_close($ch);</span><br/>
											<input type="submit" value="Recolher" style="float:right;margin-right:4px;" class="recolher"/>
												<input type="submit" value="Login" style="float:right;margin-right:4px;" class="abrir_login"/>
									</div>
				</div>	
			</body>	
				</html>