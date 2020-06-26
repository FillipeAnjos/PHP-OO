<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?= $title ?></title>

	<link rel="stylesheet" type="text/css" href="<?= url("/Views/assets/css/style.css"); ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

	<nav>
		<?php if($v->section("sidebar")):
			echo $v->section("sidebar");
		else:
			?>
			<div class="sidebar">
				<a href="<?= url(); ?>" title="" class="sidebarHome">Home</a>
				<a href="<?= url("contato"); ?>" title="" class="sidebarContato">Contato</a>
				<a href="<?= url("teste"); ?>" title="" class="sidebarTeste">Teste</a>
			</div>
		<?php
		endif; ?>
	</nav>

	<main>
		<?= $v->section("content"); ?>
	</main>

	<footer>
		<!--<br/><br/><br/><br/><br/><br/><br/><br/><br/>-->
		<?= FOOTER; ?> - Todos os Direitos Reservados
	</footer>

</body>
</html>