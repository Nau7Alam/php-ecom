<?php include_once("../../config.php"); ?>


	<?php
          if(isset($_GET['id'])){
          	
			  $query = query("DELETE from products where product_id=".escape_string($_GET['id'])." ");
			  conferm($query);
			  
			  set_messages("PRODUCT WAS DELEATED!");
			  direct("../../../public/admin/index.php?products");
			  
			  
			  
          }else
			   direct("../../../public/admin/index.php?products");



	?>