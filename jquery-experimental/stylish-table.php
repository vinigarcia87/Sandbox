<meta charset="utf-8">

	<link type="text/css" href="recursos/css/jquery-themes/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
	<script type="text/javascript" src="recursos/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="recursos/js/ui/jquery-ui-1.8.20.custom.min.js"></script>
	
	<style>
		body { font-size: 62.5%; }
		h1 { font-size: 1.2em; margin: .6em 0; }
		div#users-contain { width: 350px; margin: 20px 0; }
		div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
		div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; white-space:nowrap; }
		
		.button-icon {
			display: block;

			height: 16px;
			width: 16px;
		}
		.button-view {
			background-image: url("recursos/icons/16x16_eye_inv.png");
		}
		.button-edit {
			background-image: url("recursos/icons/16x16_edit.png");
		}
		.button-remove {
			background-image: url("recursos/icons/16x16_trash.png");
		}
	</style>
	
	<script>
		$(function() {
			$( "button" ).button();
			$( "button" ).click(function() {
				alert("Botão clicado!\n"+$(this).attr("id")+" : "+$(this).attr("value"));
				return false;
			});
		});
	</script>
	
	<div>
		<div id="users-contain" class="ui-widget">
			<h1>Administradores cadastrados</h1>
			<table id="users" class="ui-widget ui-widget-content">
				<thead>
					<tr class="ui-widget-header">
						<th>Nome</th>
						<th>E-mail</th>
						<th>Senha</th>
						<th colspan=3>Ações</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Vinicius Garcia</td>
						<td>vinicius.garcia@example.com</td>
						<td>vinigarcia87</td>
						<td><button id="view" value="1"><span class="button-icon button-view"></span></button></td>
						<td><button id="edit" value="1"><span class="button-icon button-edit"></span></button></td>
						<td><button id="remove" value="1"><span class="button-icon button-remove"></span></button></td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td>Paola Garcia</td>
						<td>paola.garcia@example.com</td>
						<td>paolagarcia90</td>
						<td><button id="view" value="2"><span class="button-icon button-view"></span></button></td>
						<td><button id="edit" value="2"><span class="button-icon button-edit"></span></button></td>
						<td><button id="remove" value="2"><span class="button-icon button-remove"></span></button></td>
					</tr>
					<tr>
						<td>Keila Nara</td>
						<td>keila.nara@example.com</td>
						<td>keilanara</td>
						<td><button id="view" value="3"><span class="button-icon button-view"></span></button></td>
						<td><button id="edit" value="3"><span class="button-icon button-edit"></span></button></td>
						<td><button id="remove" value="3"><span class="button-icon button-remove"></span></button></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>