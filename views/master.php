<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="<?php echo HOME_URI;?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo HOME_URI;?>/assets/js/libs/modernizr-2.8.3.min.js">

	<title><?php echo $this->title; ?></title>
</head>

<body>
	<div class="main-page">
		<nav class="menu clearfix">
			<ul>
				<li><a href="<?php echo HOME_URI;?>">Home</a></li>
				<li><a href="<?php echo HOME_URI;?>/medicos">Médicos</a></li>
				<li><a href="<?php echo HOME_URI;?>/consultas">Consultas</a></li>
				<li><a href="<?php echo HOME_URI;?>/pacientes">Pacientes</a></li>
			</ul>
		</nav>

        <?php
        	if(isset($this->templatePage)) {
        		$path = $this->templatePage . '.php';
        		require_once($path);
        	}
        ?>

	</div> <!-- .main-page (header.php) -->


	<script src="<?php echo HOME_URI;?>/assets/js/libs/jquery-3.2.1.min.js"></script>
	<script src="<?php echo HOME_URI;?>/assets/js/main.js"></script>
</body>
</html>