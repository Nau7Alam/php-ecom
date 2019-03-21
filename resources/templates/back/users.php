          <div class="col-lg-12 " style="margin-bottom:100px;">
                       <h1>USERS</h1>

        <h3 class="bg-success  text-center"><?php display_messages(); ?></h3>
                
                <table class="table table-hover table-bordered table-striped">
                	<thead>
                		<tr>
                			<th>User ID</th>
                			<th>User Name</th>
                			<th>User Password</th>
                			<th>User Email</th>
                			<th>Delete</th>
                		</tr>
                	</thead>
                	<tbody>
                		
                	<?php
	
				   show_users();

		            ?>	
		          
                		
                	</tbody>
                </table>
                    
                    <a href="index.php?add_users" class="bt" >Add Users</a>
                    
                </div>

  