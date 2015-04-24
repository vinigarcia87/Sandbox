<!DOCTYPE html>
<html class="" lang="pt-BR">
    <head>
	<meta charset="UTF-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	</head>
	<body class="">
		<div class="container">
			<div class="column-2"></div>
			<div class="column-1 logo">
				<img alt="Keila &amp; Vinicius" src="http://localhost/KeilaeVinicius/wp-content/themes/storms-keilaevinicius/assets/img/logo/monograma_105w.png">
			</div>
			<div class="column-9"></div>
		</div>
	</body>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		* {
			box-sizing: border-box;
		}
		*::after, *::before {
			box-sizing: border-box;
		}
		body {
			background-color: tomato;
			background-image: url("http://localhost/KeilaeVinicius/wp-content/themes/storms-keilaevinicius/assets/img/pattern.png"), url("http://localhost/KeilaeVinicius/wp-content/themes/storms-keilaevinicius/assets/img/slide/picture3.jpg");
		}
		[class^='column'] {
			float: left;
			height: 100px;
			background-color: rgba(255, 255, 255, 0.8);		
		}
		.column-1 {
		   width: calc(100% / 12);
		   height: 150px;
		   background-color: rgba(255, 255, 255, 0.8);
		}
		.column-2 {
		   width: calc(100% / 12 * 2);
		   background-color: rgba(255, 255, 255, 0.8);
		}
		.column-9 {
		   width: calc(100% / 12 * 9);
		   background-color: rgba(255, 255, 255, 0.8);
		}
		.container {
			height: 100px;
			width: 100%;
		}
		.logo {
			height: 150px;
			padding: 5px 0;
			text-align: center;
			border-radius: 0 0 15px 15px;
		}
	</style>
</html>