<!DOCTYPE html>
<html>
	<head>
		<title>Conexão com Banco de Dados MySQL</title>
		
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body>
		<?php

			require_once ('conf/config.php');
			require_once ('conf/imagens.php');
			require_once ('conf/mensagens.php');

			//Desabilita os erros...
			error_reporting(0);

			try {
		    	$link = new PDO('mysql:host='. HOST, USUARIO, PWFBD);
		    	$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    	imprimeMensagemStatusConexao(HOST,1);
		    	$imagem = IMG_SUCESSO;
			} catch (PDOException $e) {
				$imagem = IMG_ERRO;
		    	imprimeMensagemStatusConexao(HOST,0);
		    	echo '<div class="exception-erro-conexao">' .$e->getMessage().'</div>';
			}
		?>
		
		<div class="imagem">
			<img src="<?php echo $imagem; ?>" alt="Sucesso">
		</div>
		
		<div class="icons-copyleft">
			Icons made by <a href="http://www.flaticon.com/authors/madebyoliver" title="Madebyoliver">
			Madebyoliver</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
		</div>
	</body>
</html>

