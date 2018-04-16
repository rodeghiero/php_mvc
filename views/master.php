<!doctype html>
<html class="no-js" lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $this->title; ?></title>
    <meta name="description" content="">
    <link rel="apple-touch-icon" href="<?php echo HOME_URI;?>/icon.png">

	<link rel="stylesheet" href="<?php echo HOME_URI;?>/assets/css/normalize.css">
	<link rel="stylesheet" href="<?php echo HOME_URI;?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo HOME_URI;?>/assets/js/libs/modernizr-2.8.3.min.js">
    <script>var urlSite = '<?php echo HOME_URI; ?>';</script>
</head>
<body class="pg_<?php echo $this->templatePage; ?>">

	<div class="page">
		<header>
			<nav class="menu">
				<div class="wrapper">
					<ul class="clearfix">
						<li class="home"><a href="<?php echo HOME_URI;?>">Home</a></li>
						<li class="consultas"><a href="<?php echo HOME_URI;?>/consultas">Consultas</a></li>
						<li class="medicos"><a href="<?php echo HOME_URI;?>/medicos">Médicos</a></li>
						<li class="pacientes"><a href="<?php echo HOME_URI;?>/pacientes">Pacientes</a></li>
					</ul>
				</div>
			</nav>
		</header>

		<div class="contents">
	        <?php
	        	if(isset($this->templatePage)) {
	        		$path = $this->templatePage . '.php';
	        		require_once($path);
	        	}
	        ?>
		</div>

		<footer>
			<div class="wrapper">
				<nav class="menu fl clearfix">
					<ul class="clearfix">
						<li><a href="<?php echo HOME_URI;?>">Home</a></li>
						<li><a href="<?php echo HOME_URI;?>/medicos">Médicos</a></li>
						<li><a href="<?php echo HOME_URI;?>/consultas">Consultas</a></li>
						<li><a href="<?php echo HOME_URI;?>/pacientes">Pacientes</a></li>
					</ul>
				</nav>
				<p class="copy fr">Direitos Reservados</p>
			</div>
		</footer>
	</div>

	<script src="<?php echo HOME_URI;?>/assets/js/libs/jquery-3.2.1.min.js"></script>
	<script src="<?php echo HOME_URI;?>/assets/js/libs/jquery.maskedinput.1.4.1.min.js"></script>
	<script src="<?php echo HOME_URI;?>/assets/js/main.js?v=9"></script>
</body>
</html>