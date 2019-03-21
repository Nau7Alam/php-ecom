<?php  require_once "../resources/config.php"; ?>
<?php  include("../resources/templates/front/header.php"); ?>

<!-- Navigation -->

<?php  include("../resources/templates/front/navigation.php") ; ?>

    
 
    <!-- Login Page -->
				<div class="container">
                 <h2 class="text-center"><?php display_messages(); ?></h2>
				  <header>

					<h1 class="text-center">SingIn</h1>
					<div class="col-sm-6 col-sm-offset-3">
                    <?php normal_add_users(); ?>
                    
                    
					<form action="" class="b" method="post">
						<div class="from-group">
							<label for=""> Your Name</label>
							 <input type="text" name="user_name" class='a'>
						</div>

						<div class="from-group">
						
							<label for=""> Your Password</label>
							<input type="password" name="user_pass" class='a'>

						</div>
						
							<div class="from-group">
							<label for=""> Your Email</label>
							 <input type="text" name="user_email" class='a'>
						</div>

						<div class="from-group">
						<label for=""> Your Number</label>
							 <input type="password" name="user_num" class='a'>

						</div>
						
							<div class="from-group">
							<label for=""> Your Address</label>
							 <input type="text" name="user_addr" class='a'>
						</div>

						
						
						<div class="from-group text-center" style="margin:15px;">
							<input type="submit" name="signin"  value="Sign In" class='bt'>
						</div>

					</form>	
                    
					</div>

				  </header>

				</div>
     

        <hr>


       

        

   

<?php include "../resources/templates/front/footer.php";?>
