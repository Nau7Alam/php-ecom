<?php  require_once "../resources/config.php"; ?>
<?php  include("../resources/templates/front/header.php"); ?>

<!-- Navigation -->

<?php  include("../resources/templates/front/navigation.php") ; ?>

   
		
	 
 
    <!-- Login Page -->
				<div class="container">
                 <h2 class="text-center"><?php display_messages(); ?></h2>
				 

					<h1 class="text-center">Login</h1>
					<div class="col-sm-6 col-sm-offset-3">

					<form action="" class="b" method="post">
						<div class="from-group">
						     <label for=""> Your Name</label>
							 <input type="text" name="username" class='a'>
						</div>
                          
						  <div class="from-group">
							<label for=""> Your Password</label>
							<input type="password" name="password" class='a'>
                           </div>
							
							<div class="from-group text-center" style="margin:15px;">
							<input type="submit" name="submit"  class='bt btn-block'>
						    </div>
					</form>	
                    <?php login_users(); ?>
					</div>

				

				</div>
     

        <hr>


       

        

   

<?php include "../resources/templates/front/footer.php";?>
