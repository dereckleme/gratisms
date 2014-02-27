  <div id="topo_cinza">
                         <div class="mn_topo_cinza">
                            <ul class="mn_topo">
                                <li class="mn_login"><a href="#" >Seja bem vindo <?=$this->session->userdata("login")?></a></li>
								<li class="mn_cadastrese"><a href="#" class="abrir_cadastre">Meu Painel</a></li>
								<li class="mn_cadastrese"><a href="<?=base_url()?>usuario/sair" >Sair</a></li>
                            </ul>
                          </div>  
						  <div class="mn_topo_cinza">
								<div class="box_login">
									<div style="float:left;">
									<img src="<?=base_url();?>images/usuario.png" style="float:left;"/><input style="margin:2px 2px 2px 2px;float:left;" type="text" id="login_logar"/>
									</div>
									<div style="float:left;">
									<img src="<?=base_url();?>images/senha.png" style="float:left;"/><input style="margin:2px 2px 2px 2px;float:left;" type="password"  id="password_logar"/>
									</div>
									<div style="float:left;">
									<input style="margin:2px 2px 2px 2px;" type="submit" value="Logar" id="submit_logar"/>
									
									</div>
									
								</div>
								<div class="box_cadastrese">
									<?
										$this->load->view("includes/painel_ajax");
									?>
								</div>
								<div style="clear:both"></div>
						  </div>		  
               </div>
            
<!---------------------LOGO------------------------>               
               
               <div id="logo_gratisms">
                    <div class="logo">
                        <h1><a href="<?=base_url();?>" title="Envio de torpedo sms grátis para todo o Brasil" alt="Envio de torpedo sms grátis para todo o Brasil">Grátisms</a></h1>
                    </div>                    
               </div>