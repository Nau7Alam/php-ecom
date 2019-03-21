	<div class="col-lg-12">
	   <h1>ADD PRODUCTS</h1>
	   <hr>
	   
	  <h3 class="bg-success"> <?php publish_product(); display_messages(); ?> </h3> 
	   
	   
		 <div class="row">

			   <form action="" class='b' method="post" enctype="multipart/form-data">

			   <div class="col-md-8">

			  <div class="from-group">
				  <label for="product-title">Product Title</label>
				  <input type="text" id="" name="product_title" class="a">
			  </div>  
 
			 <div class="from-group">
				  <label for="product-description">Product Description</label>
				  <textarea id="product-description" name="product_description" cols="50" rows="8" class="a"></textarea>
			  </div>
			  
			  
			   <div class="from-group">
				  <label for="product-price">Product Price</label>
				  <input type="text" id="product-price" name="product_price" class="a">
			   </div>
			 
		 
		   
			   </div> 

			   <div class="col-md-4">

           <input type="submit" id="" name="draft"value="Draft" class=" bt">
           <input type="submit" id="" name="publish"value="Publish" class=" bt">
           
           
           <div class="from-group">
				  <label for="product_category_id">Product Price</label>
				  <select name="product_category_id" id="" class="a">
           	    <option class='a' value="" >Choose Category</option>
           	   <?php get_categories_in_add_product()  ?>
               </select>
			   </div>
          
		  
			  <div class="from-group">
				  <label for="product-quantity">Product Quantity</label>
				  <input type="number" id="product-quantity" name="product_quantity" class="a">
			   </div>
           
           <div class="from-group">
				  <label for="product-image">Select an Image</label>
				  <input type="file" id="product-image" name="product_image" class="a">
			   </div>


			   </div> 

			   </form>

		 </div>
	</div>





    
        
 
