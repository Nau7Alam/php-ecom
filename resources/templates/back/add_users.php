	<div class="col-lg-12">
	   <h1 class='text-center'>ADD USERS</h1>
	   <hr>
	   
	  <h3 class="bg-success"> <?php admin_add_users(); display_messages(); ?> </h3> 
	   
	   
		 <div class="row">

			   <form action="" method="post" class='b' enctype="multipart/form-data">
			  
			   <div class="col-md-6 col-md-offset-3">
			   
			    <div class="from-group">
				  <label for="user_image">Select Image</label>
				  <input type="file" id="" name="user_image" class="a">
			  </div> 

			  <div class="from-group">
				  <label for="user_name">User Name</label>
				  <input type="text" id="" name="user_name" class="a">
			  </div> 
			   
              <div class="from-group">
				  <label for="user_pass">User Password</label>
				  <input type="text" id="" name="user_pass" class="a">
			  </div>
			
			   <div class="from-group">
				  <label for="user_email">User Email</label>
				  <input type="text" id="user_email" name="user_email" class="a">
			   </div>
			   
			   <div class="from-group">
				  <label for="user_num">User Number</label>
				  <input type="text" id="user_num" name="user_num" class="a">
			   </div>
			   <div class="from-group">
				  <label for="user_addr">User Address</label>
				  <input type="text" id="user_addr" name="user_addr" class="a">
			   </div>
			   
		          <br>
				  
				  
				  <div class="from-group text-center" style='padding-bottom:100px;'>
				  <input type="submit" id="" value="Add User" name="add_user" class="bt">
			   </div>
			  
		   
			   </div> 

			
			   </form>

		 </div>
	</div>





    
        
 
