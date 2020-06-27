<?php 

	if(isset($message)){
		if($statusMessage == "success"){
			echo '<div class="alert alert-success" role="alert">
				   '.$message.'
				 </div>';
		}else{
			echo '<div class="alert alert-danger" role="alert">
				   '.$message.'
				 </div>';
		}
	}

?>