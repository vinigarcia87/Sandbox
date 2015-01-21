<script type='text/javascript'>
		/* Trunca um texto sem cortar palavras */
		function truncar(texto, limite){
			if(texto.length > limite){
				do{
					limite--;
					last = texto.substr(limite - 1, 1);
				}while(last != ' ' && limite > 0);

				last = texto.substr(limite - 2, 1);
				if(last == ',' || last == ';'  || last == ':'){
					 texto = texto.substr(0, limite - 2) + '...';
				} else if(last == '.' || last == '?' || last == '!'){
					 texto = texto.substr(0, limite - 1);
				} else {
					 texto = texto.substr(0, limite - 1) + '...';
				}
			}
			return texto;
		}
</script>