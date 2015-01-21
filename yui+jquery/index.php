<?php
	$endereco_imagem = "imagens/Lighthouse.jpg";
	if($endereco_imagem != ""){
		list($img_w, $img_h) = getimagesize($endereco_imagem);
		list($thumb_w, $thumb_h) = array(215, 138); //Trocou? Troque no css, no arquivo de upload e no js...
	}
?>
<!DOCTYPE html>
<html lang="en" class="yui3-loading">
	<head>
		<meta charset="utf-8">
		<title>.: Laboratório :.</title>

		<link rel="stylesheet" href="recursos/yui+jquery.css" type="text/css"/>
		<link rel="stylesheet" href="recursos/jcrop/jquery.Jcrop.css" type="text/css"/>
		<link rel="stylesheet" href="http://yui.yahooapis.com/combo?3.4.1/build/cssreset/reset-min.css&amp;3.4.1/build/cssfonts/fonts-min.css&amp;3.4.1/build/cssbase/base-min.css">

		<script type="text/javascript" src="http://yui.yahooapis.com/3.4.1/build/yui/yui-min.js"></script>
		<script type="text/javascript" src="recursos/jquery/jquery-1.5.2.min.js"></script>
		<script type="text/javascript" src="recursos/jcrop/jquery.Jcrop.min.js"></script>
		<script type="text/javascript" src="recursos/yui+jquery.js"></script>
	</head>
	<body class="yui3-skin-sam">
		<div class="yui3-u-1">
			<div id="corpo">
				<center>
					<h1>.: Editar imagem - Crop com Yui e jQuery :.</h1>

					<input type="button" id="editar_imagem" value="Editar imagem">
					<br/><br/>
					<h4>Imagem original</h4>
					<br/>
					<input class="borda_img" type="image" name="imagem_fonte" src="<?php echo $endereco_imagem; ?>" />
					<br/><br/>
					<h4>Imagem editada</h4>
					<br/>
					<input class="borda_img" type="image" id="imagem_thumb" src="" />
				</center>
			</div>
			
			<div id="panelEdicaoImagem">
				<div class="yui3-widget-bd">
					<div id="EditorImagens">
						<form id="cropimg_coords" method="post" enctype="multipart/form-data" onsubmit="checkCoords(); return false;">
							<input type="hidden" id="crop_x" name="crop_x" />
							<input type="hidden" id="crop_y" name="crop_y" />
							<input type="hidden" id="crop_w"  name="crop_w" />
							<input type="hidden" id="crop_h"  name="crop_h" />
							<input type="hidden" id="imagem_original"  name="imagem_original" value="<?php echo $endereco_imagem; ?>" />

							<?php /* Informe o tamanho da imagem original */ ?>
							<input type="hidden" id="img_w"	  name="img_w"   value="<?php echo $img_w; ?>"/>
							<input type="hidden" id="img_h"	  name="img_h"   value="<?php echo $img_h; ?>"/>
							<?php /* Informe o tamanho que deverá ter o thumbnail */ ?>
							<input type="hidden" id="thumb_w" name="thumb_w" value="<?php echo $thumb_w; ?>"/>
							<input type="hidden" id="thumb_h" name="thumb_h" value="<?php echo $thumb_h; ?>"/>
							<input type="hidden" id="end_imagem" name="end_imagem" value="<?php echo $endereco_imagem; ?>"/>
							
							<table>
								<tr>
									<td><div class="borda_img"><input class="borda_img" type="image" id="cropimg_img_original" src="<?php echo $endereco_imagem; ?>" /></div></td>
									<td><div class="borda_img div_thumbnail"><input type="image" id="cropimg_img_preview" src="<?php echo $endereco_imagem; ?>" /></div></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
			
			<div id="nestedPanel"></div>
		</div>
		
		<script type="text/javascript">
			YUI().use("panel", function(Y){

				//Create the main modal form
				var panel = new Y.Panel({
					srcNode: "#panelEdicaoImagem",
					width: <?php echo $img_w + $thumb_w + 100; ?>,
					centered: true,
					visible: false,
					modal: true,
					zIndex: 5,
					headerContent: "Editar imagem selecionada",
					plugins: [Y.Plugin.Drag]
				}),

				addRowBtn = Y.one("#editar_imagem"),
				nestedPanel;

				//Add the footer buttons to the modal form
				panel.addButton({
					value: "Editar",
					action: function(e){ 
						e.preventDefault();
						editarImg();
					},
					section: Y.WidgetStdMod.FOOTER
				});
				panel.addButton({
					value: "Cancelar",
					action: function(e){
						e.preventDefault();
						panel.hide();
					},
					section: Y.WidgetStdMod.FOOTER
				});

				//Render the modal form
				panel.render();

				//When the addRowBtn is pressed, show the modal form
				addRowBtn.on("click", function(e){ panel.show(); });

				//Define the addItem function - this will be called 
				//when "Add Item" is pressed on the modal form
				var editarImg = function(){
					
					$.ajax({
						type: "POST",
						url: "upload_imagem.php",
						data: $("#cropimg_coords").serialize(),
						success:
							function(data){
								alert("Imagem editada:\n"+data);
								$("#imagem_thumb").attr("src", data);
							}
					});
					
					panel.hide();
				};
			});
		</script>
	</body>
</html>