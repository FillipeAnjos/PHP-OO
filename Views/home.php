<?php
//https://www.youtube.com/watch?v=MfZrnQprZ2U&t=1604s

$v->layout("_theme");

include "messages.php";

if(isset($_SESSION['ID']) && isset($_SESSION['EMAIL'])):

	//Usuário logado!
	echo "<br/><center><h3>Controle de Atividades</h3></center>";
	include "loggedUser.php";

else:

	//Uusário deslogado!
	echo "<br/><center><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Controle de Atividades</h3></center>";
	include "logoutUser.php";

endif;

?>









