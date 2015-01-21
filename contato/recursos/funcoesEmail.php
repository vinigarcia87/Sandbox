<?php
	//error_reporting(E_ERROR | E_WARNING);
	error_reporting(0);
	
	if($_POST){
		$destino = $_POST['enviar_email_para'];

		if($destino == '' && !is_array($destino)){
			echo '<div style="border:1px solid red;">Nenhum email de destino foi configurado!</div>';
		}else{
			$titulo 	= $_POST['form'];
			$nome 		= $_POST['nome'];
			$email 		= $_POST['email'];
			$assunto 	= $_POST['assunto'];
			$descricao 	= $_POST['descricao'];
			
			$conteudo  = '<div style="border:1px dashed red; padding:10px 10px 10px 10px; margin:10px 0px 10px 0px;">';
			$conteudo .= '	<h1>'.$titulo.' - '.$assunto.'</h1>';
			$conteudo .= '	<i>'.$nome.' ('.$email.')</i><br/><br/>';
			$conteudo .= '	<p>'.$descricao.'</p><br/>';
			$conteudo .= '</div>';
			
			require_once('PHPMailer_v5.1/class.phpmailer.php');

			$mail = new PHPMailer();  			// create a new object
			$mail->IsSMTP(); 					// enable SMTP
			$mail->SMTPDebug = 1;  				// debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true;  			// authentication enabled
			$mail->SMTPSecure = 'ssl'; 			// secure transfer enabled REQUIRED for GMail
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 465; 
			$mail->Username = "storms@storms.com.br";
			$mail->Password = "ViNeJe14*2012";
			
			$mail->SetFrom("storms@storms.com.br","Contato Storms Websolutions");

			$mail->AddAddress($destino, $destino);
			$mail->AddReplyTo($destino, $destino);

			$mail->WordWrap = 50; 							// set word wrap
			$mail->IsHTML(true); 							// send as HTML
			$mail->Subject = $titulo;
			$mail->Body = $conteudo;

			if(!$mail->Send()){
				echo "Ops! " . $mail->ErrorInfo;
			}else{
				echo '<script>alert("O formulário foi enviado com sucesso!")</script>';
			}
		}
	}
?> 