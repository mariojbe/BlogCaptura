<?php
	$captcha = $_POST['g-recaptcha-response'];

	/*if($captcha == ''){
		echo "Você não Selecionou o Recaptcha! (Não Sou Robô)";
	}*/
	if($captcha != ''){
		
		$secreto = '6Lf8RWEUAAAAAETlyi0gfki3hF_EuAPShun9O72W';
		$ip = $_SERVER['REMOTE_ADDR'];
		$var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secreto&response=$captcha&remoteip=$ip");
		$resposta = json_decode($var, true);
		
		if($resposta['success']){
			date_default_timezone_set('America/Bahia');
			//Recupera os dados enviados pelo formulário
			$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);

			//Variáveis locais
			$Erro = true;
			$Nome = $GetPost['name'];
			$Email = $GetPost['email'];
			$Fone = $GetPost['fone'];	

			//Incluir a classe PHPMailer
			include_once 'PHPMailer/class.smtp.php';
			include_once 'PHPMailer/class.phpmailer.php';

			//Enviando o e-mail utilizando a classe PHPMail
			$Mailer = new PHPMailer;
			$Mailer->CharSet = "utf8";
			//$Mailer->SMTPDebug = 3;
			$Mailer->IsSMTP();
			$Mailer->Host = "smtp.gmail.com";
			$Mailer->SMTPAuth = true;
			$Mailer->Username = "equipeliderempreendedor@gmail.com";
			$Mailer->Password = "16marioe";
			$Mailer->SMTPSecure = "tls";
			$Mailer->Port = 587;
			$Mailer->FromName = "{$Nome}";
			$Mailer->From = "equipeliderempreendedor@gmail.com";
			$Mailer->AddAddress("equipeliderempreendedor@gmail.com");
			$Mailer->IsHTML(true);
			$Mailer->Subject = "Novo contato - {$Nome} - ".date("H:i")." - ".date("d/m/Y");
			$Mailer->Body = "E-mail enviado por {$Nome}"." - "."{$Email}"." - "."{$Fone}";
			//Verificação
			if($Mailer->Send()){
				$Erro = false;
			}
			var_dump($Erro);	
		}else{			
			echo "Você não Selecionou o Recaptcha! (Não Sou Robô)";			
		}
	}