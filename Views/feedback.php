<?php
//https://www.youtube.com/watch?v=MfZrnQprZ2U&t=1604s

$v->layout("_theme");

include "messages.php";

  //If referente a apenas os usuários logado!!!
  if(!isset($_SESSION['ID'])):
      $p = explode("//localhost", url());
      header('Location: '.$p[1]);
    die();
  endif;

?>

<div class="container">
  <div class="row">
    <div class="col-sm">
      
         <?php include "menuLateral.php"; ?>

    </div>
    <div class="col-7">
      <br/>

        <center>
          <h4>Mande-nos uma mensagem!</h4>
        </center>

        <br/>

        <form method="POST" action="<?= url(); ?>/criandoFeedback">

          <input type="hidden" name="idUsuario" value="<?= $_SESSION['ID']; ?>">

          <label>Nome:</label>
          <input type="text" name="nome" value="<?= $_SESSION['NOME']; ?>" class="form-control" readonly>
          <br/>

          <label>E-mail:</label>
          <input type="text" name="email" value="<?= $_SESSION['EMAIL']; ?>" class="form-control" readonly>
          <br/>

          <label>Assunto:</label>
          <input type="text" name="assunto" class="form-control" placeholder="Informe o assunto da sua mensagem.">
          <br/>

          <label>Mensagem:</label>
          <textarea name="mensagem" rows="8" cols="50" class="form-control" placeholder="Conte-nos o que deseja."></textarea>
          <br/>

          <input type="submit" name="enviarMensagem" value="Enviar mensagem" class="btn btn-primary">

        </form>

    </div>
  <!--
    <div class="col-sm">

      One of three columns
      
    </div>
  -->
  </div>
</div>
















