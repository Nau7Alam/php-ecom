    <?php  require_once "../resources/config.php"; ?>
<?php  include("../resources/templates/front/header.php"); ?>

<!-- Navigation -->

<?php  include("../resources/templates/front/navigation.php") ; ?>

    
 
    <!-- Login Page -->
				<div class="container">
                 <h2 class="text-center"><?php display_messages(); ?></h2>
				

					<h1 class="text-center">Please write your review here..</h1>
					<div class="col-sm-6 col-sm-offset-3">
                    <?php comment_write_function(); ?>
                    
                      <script>

				function rate(){
					var rating = document.getElementById("rangeInput").value;
					 document.getElementById("rangeValue").innerHTML = rating + " <i class='fa fa-star'></i>"; 
				}

			</script>
                               	   
                          	    
                     <div class="col-md-12">
                           	
                           	<form action="" class="b" method="post">
                           		
                           		
                           		<div class="form-group">
                           		<input type="emali" name="com_writer" placeholder="Enter your email id" class="a">	
                           		</div>
                           		
                           		<div class="form-group">
                           			<textarea id="" name ="comment" cols="30"  placeholder="Give us your reviews" rows="10" class="a"></textarea>
                           			
                           		</div>
			      		
                           		<div class="form-group text-center">
                           			<h2 id="rangeValue" style="color:#f3d829">Rate out of 5 <i class="fa fa-star"></i></h2>
                           		</div>
                           		  
                           		
                           		
                           		<div class="col-md-6 col-md-offset-3 form-group">
                           			<input type="range" id="rangeInput" name="com_rating" onchange="rate()" value="0"  min='0' max="5" step="0.5">
                           			
                           		</div>
                           		
                           		
                           		<div class="col-md-12">
                           			
                           			<div class=" form-group text-center">
                           			<input type="submit" name="submit" value="Submit" class="bt">
                           		    </div>
                           			
                           		</div>
                           		
                           		
                           	</form>
                   	</div>
                    
					</div>

				</div>
     

        <hr>


       

        

   

<?php include "../resources/templates/front/footer.php";?>

                
                          	
                          	 
                          	  
              