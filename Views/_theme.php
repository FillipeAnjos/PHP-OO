<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?= $title ?></title>

	<link rel="stylesheet" type="text/css" href="<?= url("/Views/assets/css/style.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?= url("/Views/assets/css/menuLateral.css"); ?>">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<style type="text/css">
		.divContent{
			margin-left: 100px;
			margin-right: 100px;
		}
	</style>
</head>
<body>

	<nav>
		<?php if($v->section("sidebar")):
			echo $v->section("sidebar");
		else:
			?>
			<div class="sidebar">


				<div class="container">
				  <div class="row">
				    <div class="col">
				      
				    </div>
				    <div class="col-6">
				      
				    	<a href="<?= url(); ?>" title="" class="sidebarHome">Home</a>
				    	<a href="<?= url("quemSomos"); ?>" title="" class="sidebarQuemSomos">Sobre</a>
						<a href="<?= url("contato"); ?>" title="" class="sidebarContato">Contato</a>
						<a href="<?= url("teste"); ?>" title="" class="sidebarTeste">Teste</a>

				    </div>
				    <div class="col">
				      	
				      	<?php if(isset($_SESSION['ID']) && isset($_SESSION['EMAIL'])): ?>
							<!--<span  style="margin-right: 30px; color: #D8D8D8;">Welcome: <?php // echo $_SESSION['NOME']; ?></span>-->
							<a href="<?= url("logout"); ?>" title="" class="sidebarLogout">Deslogar?</a>
				      	<?php endif; ?>
				    	
				    </div>
				  </div>
				</div>


			</div>
		<?php
		endif; ?>
	</nav>

	<main>
		<!--<div class="divContent">-->
			<?= $v->section("content"); ?>		
		<!--</div>-->
	</main>

	<footer>
		<!--<br/><br/><br/><br/><br/><br/><br/><br/><br/>-->
		<?= FOOTER; ?> - Todos os Direitos Reservados
	</footer>

</body>
</html>