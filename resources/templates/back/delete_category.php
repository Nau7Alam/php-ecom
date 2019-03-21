<?php include_once("../../config.php"); ?>


	<?php
          if(isset($_GET['id'])){
          	
			  $query = query("DELETE from categories where cat_id=".escape_string($_GET['id'])." ");
			  conferm($query);
			  
			  set_messages("CATEGORY WAS DELEATED!");
			  direct("../../../public/admin/index.php?categories");
			  
			  
			  
          }else{
          	
			  set_messages("CATEGORY WAS DELEATED!");
			  direct("../../../public/admin/index.php?categories");
          }
			   



	?>