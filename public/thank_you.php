<?php  require_once "../resources/config.php"; ?>
<?php  include("../resources/templates/front/header.php"); ?>

<!-- Navigation -->

<?php  include("../resources/templates/front/navigation.php") ; ?>

    
    <!-- Login Page -->
				<div class="container">
                 <div class="col-md-8 col-md-offset-2 b">
				   <?php

						 get_reports();

					?>

					<h1 class="text-center bg-success">YOU ORDER IS PLACED</h1>
					<h1 class="text-center bg-success">THANK YOU FOR SHOPPING!</h1>
					   <?php

						if(isset($_SESSION['username'])){
							echo "<h1 class='text-center bg-primary'> On the name of {$_SESSION['username']}</h1>";

						}



						?>
				
				  </div>

				</div>
     

        <hr>


     
   

<?php include "../resources/templates/front/footer.php";?>
