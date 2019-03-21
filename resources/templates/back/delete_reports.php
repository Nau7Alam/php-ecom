<?php include_once("../../config.php"); ?>


	<?php
          if(isset($_GET['id'])){
          	
			  $query = query("DELETE from reports where report_id=".escape_string($_GET['id'])." ");
			  conferm($query);
			  
			  set_messages("REPORT WAS DELEATED!");
			  direct("../../../public/admin/index.php?reports");
			  
			  
			  
          }else
			   direct("../../../public/admin/index.php?reports");



	?>