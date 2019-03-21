	<div class="col-lg-12">
	   <h1>EDIT PRODUCTS</h1>
	   <hr>
	   
	  <h3 class="bg-success"> <?php update_product(); display_messages(); ?> </h3> 
	   
	   <?php  
		
		if(isset($_GET['id'])){
			
			
	    $result = query("select * from products where product_id = ".escape_string($_GET['id'])." ");
		conferm($result);
			while($row = fetch_array($result)){

				$product_title          = $row['product_title'];	
				$product_price          = $row['product_price'];	
				$product_description    = $row['product_description'];	
				$product_category_id    = $row['product_category_id'];	
				$product_quantity       = $row['product_quantity'];	
				$product_image          = $row['product_image'];		

			   }
			
		    }
		
		
		?>
	   
	   
	   
		 <div class="row">

			   <form action="" method="post"  class='b' enctype="multipart/form-data">

			   <div class="col-md-8">

			  <div class="from-group">
				  <label for="product-title">Product Title</label>
				  <input type="text" id="product-title" value="<?php echo $product_title; ?>" name="product_title" class="a">
			  </div>  
 
			 <div class="from-group">
				  <label for="product-description">Product Description</label>
				  <textarea id="product-description" name="product_description" cols="50" rows="8" class="a"><?php echo $product_description; ?></textarea>
			  </div>
			  
			  
			   <div class="from-group">
				  <label for="product-price">Product Price</label>
				  <input type="text" id="product-price" value="<?php echo $product_price; ?>" name="product_price" class="a">
			   </div>
			 
		 
		   
			   </div> 

			   <div class="col-md-4">

           <input type="submit" id="" name="draft"value="Draft" class=" bt">
           <input type="submit" id="" name="update" value="Update" class=" bt">
           
           
           <div class="from-group">
				  <label for="product_category_id">Product Price</label>
				  <select name="product_category_id" id="" class="a">
           	      <option value="<?php echo $product_category_id; ?>" >
           	    <?php echo get_cetegory_for_products_page($product_category_id); ?></option>
           	   <?php get_categories_in_add_product()  ?>
           	 
               </select>
			   </div>
          
		  
			  <div class="from-group">
				  <label for="product-quantity">Product Quantity</label>
				  <input type="number" id="product-quantity" value="<?php echo $product_quantity; ?>" name="product_quantity" class="a">
			   </div>
           
           <div class="from-group">
				  <label for="product-image">Select an Image</label>
				  <input type="file" id="product-image"  name="product_image" class="a">
				  <img src="../../resources/templates/uploads/<?php echo $product_image; ?>" style="height:300px; width:300px;" alt="">
			   </div>


			   </div> 

			   </form>

		 </div>
	</div>





    
        
 
