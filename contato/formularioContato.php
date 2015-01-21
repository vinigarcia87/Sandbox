<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Contato</title>
		<script>
			var campos_obrigatorios = ['nome','email','assunto'];

			var EfeitoCampo = function(form,el){ el.style.backgroundColor = "red"; }
			
			var RemoveEfeito = function(el){ el.style.backgroundColor = "white"; }
			
			var validarFormulario = function(form){
				var erros = 0;
				
				if(form.submit){
					for(var i = 0; i < campos_obrigatorios.length; i++){
						try{
							var el = document.getElementById(campos_obrigatorios[i]);
							if(el != null && el != undefined){
								if(el.value == ""){
									if(i == 0){
										el.focus();
									}
									EfeitoCampo(form,el);
									erros++;
								}else{
									RemoveEfeito(el);
								}
							}
						}
						catch(e){ alert(e); }
					}
					if(erros > 0){
						return false;
					}else{
						return true;    
					}
				}
			}
		</script>
	</head>
	<body>
	   <div id="colTop">
			<div>
				<h1>Contato</h1> 
				<?php include_once("recursos/funcoesEmail.php"); ?>
				<form id="31928" name="Contato" action=" " class="" method="post" enctype="multipart/form-data" onsubmit="return validarFormulario(this);">
					<input type="hidden" name="form" value="Contato" />
					<input type="hidden" name="enviar_email_para" value="vinigarcia87@gmail.com" />
					<table>
						<tr><td><label>* Nome</label></td><td><input title="Nome" type="text" id="nome" name="nome" style="width:380px" value="" /></td></tr>
						<tr><td><label>* E-mail</label></td><td><input title="E-mail" type="text" id="email" name="email" style="width:380px" value="" /></td></tr>
						<tr><td><label>* Assunto</label></td><td><input title="Assunto" type="text" id="assunto" name="assunto" style="width:380px" value="" /></td></tr>
						<tr><td><label>Descrição</label></td><td><textarea title="Descrição" name="descricao" id="descricao" style="width:380px"></textarea></td></tr>
						
						<tr><td></td><td><center><input type="submit" class="botao" value="Enviar" /></center></td></tr>
					</table>
					<p><i>( * ) Campos de preenchimento obrigatório</i></p>
				</form>
			</div> 
		</div>
	</body>
</html>