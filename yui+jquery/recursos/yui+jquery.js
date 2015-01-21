
jQuery(function($){
	//Informe o tamanho da imagem original
	var img_w = $(":input#img_w").val();
	var img_h = $(":input#img_h").val();
	//Informe o tamanho que deverá ter o thumbnail
	var thumb_w = $(":input#thumb_w").val();
	var thumb_h = $(":input#thumb_h").val();

	//Instancia o crop de imagens no elemento selecionado
	$("#cropimg_img_original").Jcrop({
		onChange: updatePreview,
		onSelect: updatePreview,
		onRelease:  clearCoords,
		aspectRatio: 1.4444 //Proporção: 1.4444 (( 1024x768 -> 256x192 -> 512x384 ))
	});

	//Atualiza o thumbnail e a exibição de coordenadas
	function updatePreview(c){

		if (parseInt(c.w) > 0){
			var rx = thumb_w / c.w;
			var ry = thumb_h / c.h;

			$("#cropimg_img_preview").css({
				width: Math.round(rx * img_w) + "px",
				height: Math.round(ry * img_h) + "px",
				marginLeft: "-" + Math.round(rx * c.x) + "px",
				marginTop: "-" + Math.round(ry * c.y) + "px"
			});
		}

		//Carrega a exibição de coordenadas
		$("#crop_x").val(c.x);
		$("#crop_y").val(c.y);
		//$("#cropimg_x2").val(c.x2);
		//$("#cropimg_y2").val(c.y2);
		$("#crop_w").val(c.w);
		$("#crop_h").val(c.h);
	};

	//Limpa a exibição de coordenadas
	function clearCoords(){
		$("#cropimg_coords input[type='hidden']").val("");
		$("#crop_h").css({ color:"red" });
		window.setTimeout(function(){ $("#crop_h").css({color:"inherit"}); }, 500);
	};
});
//Verifica se existe uma região selecionada
function checkCoords(){
	if (parseInt($("#crop_w").val())){
		return true;
	}else{
		alert("Selecione o trecho de imagem para criar a miniatura.");
		return false;
	}
};