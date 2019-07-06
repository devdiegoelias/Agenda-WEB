<!DOCTYPE html>
<html lang="pt-BR">
<head>

	<title>Agenda Telef�nica</title>

	<?php header('Content-Type: text/html; charset=iso-8859-1'); ?>
	
	<meta charset="UTF-8">
	<meta name="description" content="Estrutura"/>
	<meta name="author" content="Diego Elias"/>
	<meta name="keywords" content="Palavra, chave"/>


	<!--orienta os buscadores a indexar o conteúdo da página e seguir todos os links para descobrir novas páginas-->
	<meta name="robots" content="index, follow">
	<!--orienta os buscadores a não indexar o conteúdo da página e impede-a de seguir os links para descobrir novas páginas-->
	<!--<meta name="robots" content="noindex, nofollow">-->

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
	<!--<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">-->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/styles.css">
	
</head>
<body>

	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
  			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<a class="navbar-brand" href="#">
					<img src="<?php echo BASE_URL.'assets/image/logo.jpeg'?>" alt="" height="50">
				</a>
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo BASE_URL; ?>">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo BASE_URL; ?>relatorio/geral">Relat�rio</a>
					</li>
				</ul>
  			</div>
		</nav>
	</div>

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>

	<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.mask.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/script.js"></script>
</body>
</html>