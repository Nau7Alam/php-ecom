<?php  require_once "../resources/config.php"; ?>
<?php  include("../resources/templates/front/header.php"); ?>

<!-- Navigation -->

<?php  include("../resources/templates/front/navigation.php") ; ?>

    
    <!-- Login Page -->
				<div class="container">
                 <h2 class="text-center bg-danger"> <?php display_messages(); ?> </h2>
				
				
				
				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" style='min-height:300px;' method="post">
				  <input type="hidden" name="cmd" value="_cart">
				  <input type="hidden" name="business" value="wizardshad@gmail.com">
				  <input type="hidden" name="currency_code" value="INR">
				
					<table class="table table-responsive table-stripped ">
						<thead>
							<tr>
								<th>Product</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Sub-tatal</th>
								<th>Modify Product</th>
								
							</tr>
						</thead>
						<tbody>
						    <?php  get_cart(); ?>
							
							
							
						</tbody>
						
					
					</table>
					
			         <?php	get_button(); ?>
					
				</form>
				<div class="col-sm-12  col-lg-4 col-lg-offset-8">
					
				
				
				<table class="table table-stripped table-responsive table-bordered ">
					<thead>
						<tr>
						<th>Total Items</th>	
						<td>
							
							<?php 
							
							if(isset($_SESSION['total_items'])){
								echo $_SESSION['total_items'];
							}else{
								$_SESSION['total_items'] = "0";
								echo "0";
							}
							
							?> Items</td>	
						</tr>
						
						<tr>
						<th>Shipping Charges</th>	
						<td>Free Shipping</td>	
						</tr>
						
						<tr>
						<th>Total Amount</th>	
						<td style="font-weight:bold;">
							
							&#x20B9; <?php 
							
							if(isset($_SESSION['total_amount'])){
								echo $_SESSION['total_amount'];
							}else{
								$_SESSION['total_amount'] = "0";
								echo "0";
							}
							
							?>
							
						</td>	
						</tr>
						
					</thead>
				</table>	
					
				</div>
				
				
				
				

				</div>
     

        <hr>



<?php include "../resources/templates/front/footer.php"; ?>
