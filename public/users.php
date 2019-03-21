<?php  require_once "../resources/config.php"; ?>
<?php  include("../resources/templates/front/header.php"); ?>

<!-- Navigation -->

<?php  include("../resources/templates/front/navigation.php") ; ?>

   <style>
	   .usr-body{
		padding: 10px;
		font-family: verdana;
	   	border: 1px solid #68bf3f;
		background-color: rgba( 134, 137, 45, 0.478 );
	   }
	   .usr-body li{
	   	list-style: none;
	   }
	   .usr{
	   	padding:80px 15px 15px 15px;
	   }
	   .title{
	   	padding: 10px 0 0 0;
		font-size: 140%;
	   }
	   
	   .value{
	   	color: #aca48a;
		padding: 0px 0px 280px 0px;
		font-size: 200%;
		font-family: monospace;
		}
	   
	   
   </style>
   
   <?php 
	if(!isset($_SESSION['username'])){

		direct('index.php');
	
	}else if(isset($_SESSION['username'])){
	   	 $user = $_SESSION['username'];
		
		
		$result = query("select * from users where user_name = '{$user}'");
		conferm($result);
		while($row = fetch_array($result)){
			$db_username = $row['user_name']; 
			$db_mode = $row['user_mode'];
			$db_addr = $row['user_addr'];
			$db_num = $row['user_num'];
			$db_email = $row['user_email'];
         }
		
	   }

   ?>
		
	 
 
    <!-- Login Page -->
				<div class="container">
                
                <div class="col-md-8 col-md-offset-2 usr-body">
 
                	
                	<div class="text-center">
                		<img src="images/users.png" height="160" alt="">
                		
                		
                		
                	</div>
                	 <div class="col-md-12 usr">
                	 <ul>
                	 	<li class="title">Name </li>
                	 	<span class="value"><?php echo $db_username ; ?></span>
                	 	
                	 	<li class="title">Email id</li>
                	 	<span class="value"><?php echo $db_email; ?></span>
                	 	
                	 	<li class="title">Contact Number</li>
                	 	<span class="value"><?php echo $db_num; ?></span>
                	 	
                	 	<li class="title">Address</li>
                	 	<span class="value"><?php echo $db_addr; ?></span>
                	 	
                	 	<li class="title">User Permissions</li>
                	 	<span class="value"><?php echo $db_mode; ?></span>
                	 </ul>
                	 	
                	 	<h6 class="">USERS PROFILE</h6>
                	 </div>
                	
                	
                	
                </div>
                
				 

				

				

				</div>
     

        <hr>


       

        

   

<?php include "../resources/templates/front/footer.php";?>
