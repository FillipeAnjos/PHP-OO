<?php $v->layout('_theme'); ?>


<center>
	<br/>
	<h3>Criar conta</h3>
	<h6>Favor preencher todos os campos abaixo para criar o seu cadastro, <br/>obtendo assim acesso a todo o nosso conteúdo!</h6>
</center>

<br/>

<form action="<?= url("criandoConta"); ?>" method="POST">

	<div class="container">
	  <div class="row">
	    <div class="col-sm">

	    	<h3 id="h3Information">Dados</h3>
	      
	      	<label>Nome</label>
	      	<input type="text" class="form-control" name="nome" id="inputsCreateAccount" maxlength="80" required>
	      	<label>Sobre nome</label>
	      	<input type="text" class="form-control" name="sobreNome" id="inputsCreateAccount" maxlength="80" required>
	      	<label>Idade</label>
	      	<input type="text" class="form-control" name="idade" id="inputsCreateAccount" maxlength="3" required>

	      	<label>Sexo</label>
	      	<br/>
	      	<input type="radio" id="male" name="sexo" value="m" required>
		  	<label for="masculino" id="inputsCreateAccount">Masculino</label>
		  	<input type="radio" id="female" name="sexo" value="f">
		  	<label for="feminino" id="inputsCreateAccount">Feminino</label>

		  	<br/>

	      	<label>Telefone</label>
	      	<input type="text" class="form-control" name="telefone" id="inputsCreateAccount" placeholder="21 9 9999-9999" required>

	    </div>
	    <div class="col-sm">

	    	<h3 id="h3Information">Endereço</h3>
	      
	    	<label>Rua</label>
	      	<input type="text" class="form-control" name="rua" id="inputsCreateAccount" maxlength="80" required>
	    	<label>Bairro</label>
	      	<input type="text" class="form-control" name="bairro" id="inputsCreateAccount" maxlength="80" required>
	    	<label>Cidade</label>
	      	<input type="text" class="form-control" name="cidade" id="inputsCreateAccount" maxlength="80" required>
	    	<label>Estado</label>
	      	<input type="text" class="form-control" name="estado" id="inputsCreateAccount" maxlength="2" placeholder="RJ" required>

	    </div>
	    <div class="col-sm">

	    	<h3 id="h3Information">Conta</h3>
	      
	    	<label>Email</label>
	      	<input type="email" class="form-control" name="email" id="inputsCreateAccount" placeholder="joao@hotmail.com" maxlength="100" required >
	    	<label>Senha</label>
	      	<input type="password" class="form-control" name="senha" id="inputsCreateAccount" maxlength="50" required>
	    	<label>Confirme a senha</label>
	      	<input type="password" class="form-control" name="confirmeSenha" id="inputsCreateAccount" maxlength="50" required>
	    	
	      	<input type="submit" class="btn btn-success" name="createUser" id="createUser" value="Criar Conta" title="As informações estão certas?">

	    </div>
	  </div>
	</div>

</form>