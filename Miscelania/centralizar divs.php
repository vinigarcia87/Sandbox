<html>
	<head>
<style type='text/css'>
	body {
		margin-top: 40px;
		/* text-align: center; */
		font-size: 13px;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
	}
	.centralizar {
		margin: 0 auto;
	}
	.div_principal {
		background: #CCCCCC;
		width: 900px;
		height: 600px;
	}
	.div_centro {
                width: 50%;
		height: 90%;
                border: 1px solid red;
	}
	.div_centro div {
		width: 100%;
		height: 33.33%;
		
		/* Esse eh o segredo pra alinhar divs */
		float: center;	//left: as tres ficam alinhadas horizontalmente e na ordem (1-2-3)
				//center: as tres ficam alinhadas verticalmente e na ordem
				//right: as tres ficam alinhas horizontalmentee na ordem inversa (3-2-1)
	}
	/* Soh mudo as cores de cada div para melhor visualização */
	.div_centro .div_centro_esquerda {
		background: #CC0000;
	}
	.div_centro .div_centro_meio {
		background: #99CC00;
	}
	.div_centro .div_centro_direita {
		background: #CC3399;
	}

</style>
	</head>
	<body>
		<div class="div_principal centralizar">
			<div class="div_centro centralizar">
				<div class="div_centro_esquerda centralizar">01</div>

				<div class="div_centro_meio centralizar">02</div>

				<div class="div_centro_direita centralizar">03</div>
			</div>
		</div>
	</body>
</html>