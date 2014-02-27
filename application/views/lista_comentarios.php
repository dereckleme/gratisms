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