<?php include_once("../../config.php"); ?>


	<?php
          if(isset($_GET['id'])){
          	
			  $query = query("DELETE from users where user_id=".escape_string($_GET['id'])." ");
			  conferm($query);
			  
			  set_messages("USER WAS DELEATED!");
			  direct("../../../public/admin/index.php?users");
			  
			  
			  
          }else{
          	
			  set_messages("USER WAS NOT DELEATED!");
			  direct("../../../public/admin/index.php?users");
          }
			   



	?>