<?php
//https://www.youtube.com/watch?v=MfZrnQprZ2U&t=1604s

$v->layout("_theme");

?>

<div class="container">
  <div class="row">
    <div class="col-sm">
      
    </div>
    <div class="col-sm">

    	<br/><br/>
      
    	<form method="POST" action="<?= url("login") ?>">
			<div class="cashierHome">
				<legend class="legendCashierHome">Entre com seu login:</legend>

			    <label for="emailHome">Email:</label>
			    <input type="text" id="emailHome" name="emailHome" class="form-control"><br>
			    <label for="passwordHome">Senha:</label>
			    <input type="password" id="passwordHome" name="passwordHome" class="form-control"><br>

			    <input type="submit" value="Entrar" class="btn btn btn-primary">
				
				<center>
					<a href="<?= url("criarConta") ?>" class="notHavenLogin" >Não possui conta?</a>
				</center>

			  </div>

		</form>
	
    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>







