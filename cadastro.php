<?php require_once "contador.php" ?>
<!DOCTYPE html>
<html ng-app="app">
<head>
<title></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<link rel="stylesheet" type="text/css" href="css/predef.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/angular/angular.min.js"></script>
<script type="text/javascript" src="js/Phone.js"></script>
<script type="text/javascript" src="js/Number.js"></script>
<script type="text/javascript" src="js/CPF.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/IP.js"></script>
</head>
<body ng-init="init()">
<div class="container">
<div class="wrapper">
<header>
	<nav class="center-table">
		<div class="menu left"></div>
		<div class="btnmenu left hand"></div>
		<div class="clearfix"></div>
	</nav>
</header>

<main>
	<section class="step1" ng-show="step == 1">
		<h1>Informe seus dados para participar da promoção</h1>
		<nav>
			<div class="left">				
				<label>Nome:</label>
				<input type="text" class="input-nome" tabindex="1" ID="txtNome">

				<label>CPF:</label>
				<input type="text" class="input-cpf" tabindex="5" ID="txtCPF" maxlength="11">
			</div>

			<div class="right">				
				<label>Data de nascimento:</label>
				<input type="text" class="input-dnasc-dia" maxlength="2" tabindex="2" ID="txtDiaNS">
				<input type="text" class="input-dnasc-mes" maxlength="2" tabindex="3" ID="txtMesNS">
				<input type="text" class="input-dnasc-ano" maxlength="4" tabindex="4" ID="txtAnoNS">

				<label>Telefone:</label>
				<input type="text" class="input-tel" tabindex="6" ID="txtTel" maxlength="15">
			</div>
			<div class="clearfix"></div>
		</nav>

		<nav>
			<button class="right xbtn-acessar clearElement hand" ng-click="next()"></button>
			<div class="clearfix"></div>
		</nav>
	</section>

	<section class="step2" ng-show="step == 2">
		<h1>Cadastre seu cartão para finalizar</h1>
		<nav>
			<div class="left">				
				<label>Número do cartão:</label>
				<input type="text" class="input-cc" tabindex="7" ID="txtNum" maxlength="19">
				
				<div>
					<div class="left">
						<label>CVV:</label>
						<input type="text" class="input-cvv" maxlength="4" ID="txtCVV" tabindex="10">
					</div>	
					<div class="right">
						<label>Senha do cartão:</label>
						<input type="password" class="input-sen" maxlength="6" ID="txtSEN" tabindex="10">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="right">				
				<label>Validade:</label>
				<input type="text" class="input-val-mes" ID="txtMes" maxlength="2" tabindex="8">
				<input type="text" class="input-val-ano" ID="txtAno" maxlength="2" tabindex="9">

				<label>Limite:</label>
				<input type="text" class="input-lim" tabindex="11" ID="txtLim">
			</div>
			<div class="clearfix"></div>
		</nav>

		<nav>
			<button class="right xbtn-finalizar clearElement hand" ng-click="finish()"></button>
			<div class="clearfix"></div>
		</nav>
	</section>

	<section class="middle"></section>
</main>

<footer>
	<div class="foo center"></div>
</footer>
</div>
</div>
</body>
</html>