<script type='text/javascript'>
	/**  
	 * Função para aplicar máscara em campos de texto
	 * Copyright (c) 2008, Dirceu Bimonti Ivo - http://www.bimonti.net 
	 * All rights reserved. 
	 * @constructor  
	 */ 
	 
	/* Version 0.27 */

	/**  
	  * Função Principal 
	  * @param w - O elemento que será aplicado (normalmente this).
	  * @param e - O evento para capturar a tecla e cancelar o backspace.
	  * @param m - A máscara a ser aplicada.
	  * @param r - Se a máscara deve ser aplicada da direita para a esquerda. Opcional [true|default:false]. Veja Exemplos.
	  * @param a - Objeto com informações para aplicar após a máscara. Use você precisar aplicar alguma informação sempre no começo ou no fim do valor independente da máscara, como exemplo "R$" em campos do tipo monetário. Sintaxe: {[pre:'value'[,pos:'value']]}.
	  * @returns null  
	  */
	function maskIt(w,e,m,r,a){
		
		// Cancela se o evento for Backspace
		if (!e) var e = window.event
		if (e.keyCode) code = e.keyCode;
		else if (e.which) code = e.which;
		
		// Variáveis da função
		var txt  = (!r) ? w.value.replace(/[^\d]+/gi,'') : w.value.replace(/[^\d]+/gi,'').reverse();
		var mask = (!r) ? m : m.reverse();
		var pre  = (a ) ? a.pre : "";
		var pos  = (a ) ? a.pos : "";
		var ret  = "";

		if(code == 9 || code == 8 || txt.length == mask.replace(/[^#]+/g,'').length) return false;

		// Loop na máscara para aplicar os caracteres
		for(var x=0,y=0, z=mask.length;x<z && y<txt.length;){
			if(mask.charAt(x)!='#'){
				ret += mask.charAt(x); x++;
			} else{
				ret += txt.charAt(y); y++; x++;
			}
		}
		
		// Retorno da função
		ret = (!r) ? ret : ret.reverse()        
		w.value = pre+ret+pos;
		
		//Correção sugerida para corrigir falha na validação de números negativos
		if (w.value.match("-")){
			w.value = "-"+ret+pos;
		}else{
			w.value = pre+ret+pos;
		}
	}

	// Novo método para o objeto 'String'
	String.prototype.reverse = function(){
		return this.split('').reverse().join('');
	};
</script>

<!-- Exemplos de uso da função -->
<input type="text" name="cpf" onkeyup="maskIt(this,event,'###.###.###-##')" />
<input type="text" name="fone" onkeyup="maskIt(this,event,'(##)####-####')" />
<input type="text" name="dinheiro" onkeyup="maskIt(this,event,'###.###.###,##',true,{pre:'R$'})
<input type="text" name="graus" onkeyup="maskIt(this,event,'###,#',true,{pre:'',pos:'º'})
