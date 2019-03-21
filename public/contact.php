<?php  require_once "../resources/config.php"; ?>
<?php  include("../resources/templates/front/header.php"); ?>

<!-- Navigation -->

<?php  include("../resources/templates/front/navigation.php") ; ?>

<!-- Navigation -->
 
         <?php send_message(); ?>
 
 
 
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1 class="text-secondary">Contact Us</h1>
                    <form role="form" class="b" action="" method="post" autocomplete="off">
                     
                    <div class="form-group">
						<label for="name" class="sr-only">Name</label>
						<input type="text" name="name" id="name" class="a" placeholder="Enter Name">
					</div>
                      
                    <div class="form-group">
						<label for="email" class="sr-only">Email</label>
						<input type="email" name="email" id="email" class="a" placeholder="Enter your Email">
					</div>

					<div class="form-group">
						<label for="subject" class="sr-only">Your Subject</label>
						<input type="text" name="subject" id="subject" class="a" placeholder="Enter your Subject">
					</div>
					 <div class="form-group">

					   <textarea class="a" name="body" id="body" cols="50" rows="6"></textarea>
					</div>
					
					<div class="form-group text-center">

					   <input type="submit" name="submit" id="btn-login" class="bt" value="Submit">
					</div>

					
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>




<?php include "../resources/templates/front/footer.php";?>
