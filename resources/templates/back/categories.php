       <?php    add_category();   ?>
                     
                        
                           
           <div class="col-lg-12">
                      <h1>CATEGORIES</h1>
                       <h3><?php    display_messages();   ?></h3>
                 <div class="col-sm-4">
                       	
                       	<form action="" class='b text-center' method="post">
                       		<label for="new-category">New category</label>
                       		<input type="text" id="new-category" name ="new_cat" class = "a"><br>
                       		<input type="submit" name ="submit_cat" value="Add New Category" class = "bt">
                       		
                       	</form>
                       	
                       	   	   	
			   </div>
			   <div class="col-sm-8">

                       	<h3 class="bg-success text-center"><?php display_messages(); ?></h3>
                
                <table class="table table-hover table-bordered table-striped">
                	<thead>
                		<tr>
                			<th>Category ID</th>
                			<th>Category Title</th>
                			<th>DELETE</th>
                			
                		</tr>
                	</thead>
                	<tbody>
                		
                	<?php show_categories(); ?>	
		          
                			
                		
                	</tbody>
                </table>
                       	
                       </div>

        
                    
                </div>

  

           

        
    
        
 
