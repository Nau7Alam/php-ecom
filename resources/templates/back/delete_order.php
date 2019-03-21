<?php include_once("../../config.php"); ?>


	<?php
          if(isset($_GET['id'])){
          	
			  $query = query("DELETE from orders where order_id=".escape_string($_GET['id'])." ");
			  conferm($query);
			  
			  set_messages("ORDER WAS DELEATED!");
			  direct("../../../public/admin/index.php?orders");
			  
			  
			  
          }else
			   direct("../../../public/admin/index.php?orders");



	?>