<?php

//if($connection){
//	echo"<kbd>connected</kbd>";
//	
//}

function direct($location){
	header( "Location: $location" );
	
}


function query($sql){
	global $connection;
	return mysqli_query($connection,$sql);

}

function conferm($result){
	global $connection;
	if(!$result){
		echo "QUERY FAILED ". mysqli_error($connection);
	}
	
}

function escape_string($string){
	global $connection;
	return mysqli_real_escape_string($connection,$string);
	
}

function fetch_array($query){
	return mysqli_fetch_assoc($query);
}

function set_messages($msg){
	if(!empty($msg)){
		$_SESSION['message'] = $msg;
	}else{
		$msg = '';
	}
  }

function display_messages(){
	
	if(isset($_SESSION['message'])){
		echo($_SESSION['message']);
		unset($_SESSION['message']);
		$_SESSION['message']=null;
	}
	
}

//****************************front END functions888888888888888888888888888888888888//






function get_product(){
    $result = query('select * from products');
	conferm($result);
	
	while($row = fetch_array($result)){
		
	$product = "<div class='col-md-3 col-sm-6 hero-feature '>

			<div class='thumbnail'>
                       <a href='item.php?id={$row['product_id']}'>
						<img src='../resources/templates/uploads/{$row['product_image']}' class='img-responsive' alt=''height='100%'>
						<div class='caption'>
						
							<h4 class='pull-right'>&#x20B9; {$row['product_price']} </h4>
							<h4>  {$row['product_title']}</h4>
							
							<i class='fa fa-star' style='color:#bbbf49'></i>
							<i class='fa fa-star' style='color:#bbbf49'></i>
							<i class='fa fa-star' style='color:#bbbf49'></i>
							<i class='fa fa-star' style='color:#bbbf49'></i>
						    <i class='fa fa-star-half' style='color:#bbbf49'></i>
							
							<p>".substr($row['product_description'],0,64)."</p>
						</a>	
							<a href='../resources/cart.php?add={$row['product_id']}' target='_blank' class='btn btn-primary'>Add to cart</a>
						</div>


					</div>


		</div>";
			
		
		echo $product;
	
	}
	
}


       function get_categories(){
					$queryResult = query("Select * from categories");

						conferm($queryResult);
						while($row = fetch_array($queryResult)){ 

							$category = $row['cat_title']; 

		echo "<a href='category.php?id={$row['cat_id']}' class='list-group-item'> $category</a>";

						}	
						
					}


//****************************BACK END functions88888888888888888888888888888888888888888//



function menu_state(){
	
	
	$no_state = "<a class='l' href='login.php'>LOGIN</a><a <a class='l' href='signin.php'>SIGNUP</a>";
	
	
	 
	
	
	if(isset($_SESSION['username'])){
		
		echo "<a class='user' href='users.php'>
			  <i class='fa fa-user fa-lg' style='border:2px solid #298f04;padding:8px;border-radius:50%;'></i> ".substr($_SESSION['username'],0,8)."</a>
                  <a class='l' href='admin/logout.php'>LOGOUT</a>
			    "; 
	}else{
		 echo $no_state;
	}
	
	
}




function get_category_product(){
	$cat_id = escape_string($_GET['id']);
	$query ="select * from products where product_category_id = '$cat_id'";
	$result = query($query);
	conferm($result);
	while($row = fetch_array($result)){
		
	$product = "<div class='col-md-3 col-sm-6 hero-feature '>

			<div class='thumbnail'>
                   <a href='item.php?id={$row['product_id']}'>
						<img src='../resources/templates/uploads/{$row['product_image']}' alt='' style='height:200px;'>
						<div class='caption'>
						
							<h4 class='pull-right'>&#x20B9; {$row['product_price']} </h4>
							<h4>  {$row['product_title']}</h4>
							
							<i class='fa fa-star' style='color:#bbbf49'></i>
							<i class='fa fa-star' style='color:#bbbf49'></i>
							<i class='fa fa-star' style='color:#bbbf49'></i>
							<i class='fa fa-star' style='color:#bbbf49'></i>
						    <i class='fa fa-star-half' style='color:#bbbf49'></i>
							
							<p>".substr($row['product_description'],0,64)."</p>
				    </a>	
							<a href='../resources/cart.php?add={$row['product_id']}' target='_blank' class='btn btn-primary'>Add to cart</a>
						</div>
                  </div>

           </div>";
		echo $product;
		
	}
	
}




function get_shop_product(){
	
	$query ="select * from products";
	$result = query($query);
	conferm($result);
	while($row = fetch_array($result)){
		
	$product = "<div class='col-md-3 col-sm-6 hero-feature '>

			<div class='thumbnail'>
                   <a href='item.php?id={$row['product_id']}'>
						<img src='../resources/templates/uploads/{$row['product_image']}' alt='' style='height:200px;'>
						<div class='caption'>
						
							<h4 class='pull-right'>&#x20B9; {$row['product_price']} </h4>
							<h4>  {$row['product_title']}</h4>
							
							<i class='fa fa-star' style='color:#bbbf49'></i>
							<i class='fa fa-star' style='color:#bbbf49'></i>
							<i class='fa fa-star' style='color:#bbbf49'></i>
							<i class='fa fa-star' style='color:#bbbf49'></i>
						    <i class='fa fa-star-half' style='color:#bbbf49'></i>
							
							<p>".substr($row['product_description'],0,64)."</p>
				    </a>	
							<a href='../resources/cart.php?add={$row['product_id']}' target='_blank' class='btn btn-primary'>Add to cart</a>
						</div>
                  </div>

           </div>";
		echo $product;
		
	}
	
}





function get_search_product(){
	
	if(isset($_POST['search'])){
		
		
		$key = escape_string($_POST['key']);	
		
		if($key!= ''){
			
			$query ="select * from products where product_title like '%$key%'";
	$result = query($query);
	conferm($result);
		
	while($row = fetch_array($result)){
		
	$product = "<div class='col-md-3 col-sm-6 hero-feature '>

			<div class='thumbnail'>
                   <a href='item.php?id={$row['product_id']}'>
						<img src='../resources/templates/uploads/{$row['product_image']}' alt='' style='height:200px;'>
						<div class='caption'>
						
							<h4 class='pull-right'>&#x20B9; {$row['product_price']} </h4>
							<h4>  {$row['product_title']}</h4>
							
							<i class='fa fa-star' style='color:#bbbf49'></i>
							<i class='fa fa-star' style='color:#bbbf49'></i>
							<i class='fa fa-star' style='color:#bbbf49'></i>
							<i class='fa fa-star' style='color:#bbbf49'></i>
						    <i class='fa fa-star-half' style='color:#bbbf49'></i>
							
							<p>".substr($row['product_description'],0,64)."</p>
				    </a>	
							<a href='../resources/cart.php?add={$row['product_id']}' target='_blank' class='btn btn-primary'>Add to cart</a>
						</div>
                  </div>

           </div>";
		
			
			echo $product;
		   
			
		
	    }
		echo "<h1 class='text-conter text-danger'>PLEASE TRY ANOTHER SEARCH KEY</h1>";
			
		}else{
			echo "<h1 class='text-conter text-danger'>NO RESULTS FOUND!</h1>";
			
		}
		
	
	}

	
}





function login_users(){
	if(isset($_POST['submit'])){

		global $connection;
//		$username = escape_string($_POST['username']);
//		$password = escape_string($_POST['password']);
		
		
		$username =	$_POST['username'];
        $password =	$_POST['password'];
	
	
		$username = mysqli_real_escape_string($connection,$username);
		$password = mysqli_real_escape_string($connection,$password);
			

		$result = query("select * from users where user_name = '{$username}'");
		conferm($result);
		while($row = fetch_array($result)){
			$db_username = $row['user_name']; 
			$db_password = $row['user_pass'];
			$db_mode = $row['user_mode'];
			
         }
		
		if($username ==="" || $password === ""){
			set_messages("Please enter your Name and Password");
			direct("login.php");
			
		  }else if($username == $db_username && $password == $db_password){
			
			$_SESSION['username'] = $username;
			$_SESSION['useraddr'] = $db_addr;
			
			
			
			 if($db_mode == 'admin'){
				$_SESSION['user_mode'] = $db_mode;
				direct("admin/index.php");
				
			}else{
				direct("index.php");
			}
			
		}else{
			set_messages("Username or Password is incorrect");
			direct("login.php");

		}
      }
    }


function send_message(){
	if(isset($_POST['submit'])){
		
		$to = "wizardshad@gmail.com";
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['body'];
		$headerValue = "{$name} {$email}";
		
		$result = mail($to,$subject,$message,$headerValue);
		
		if(!$result){
			echo "FAILED TO SEND MESSAGE.";
		}else{
			echo "MESSAGE SENT.";
		}

	}
	
}



   function show_order(){

     $result = query("select * from orders");
		conferm($result);
		 while($row = fetch_array($result)) {
		 $id=$row['order_id'];	
	      echo "<tr><td>{$row['order_id']}</td>
				<td>{$row['order_amount']}</td>
				<td>{$row['order_status']}</td>
				<td>{$row['order_tx']}</td>
				<td>{$row['order_cc']}</td>
				<td><a class='btn btn-danger' href='../../resources/templates/back/delete_order.php?id=$id'>DELETER</a></td></tr>";
				

			 
		 } 
	
	   }

    function show_products(){

     $product = query("select * from products");
		conferm($product);
		 while($row = fetch_array($product)) {
		 $id=$row['product_id'];
		$cat_title = get_cetegory_for_products_page($row['product_category_id']);
			 
	      echo "<tr><td>{$row['product_id']}</td>
		            <td><a href='index.php?edit_product&id=$id'><img src='../../resources/templates/uploads/{$row['product_image']}' width='50'></a></td>
					<td>{$row['product_title']}</td>
					<td>{$row['product_price']}</td>
					<td>{$row['product_quantity']}</td>
					<td>{$cat_title}</td>
					<td><a class='btn btn-danger' href='../../resources/templates/back/delete_product.php?id=$id'>DELETE</a></td>
					</tr>";
				

			 
		 } 
	
	   }



function publish_product(){
	
	if(isset($_POST['publish'])){
		
		$product_title          = escape_string($_POST['product_title']);	
		$product_price          = escape_string($_POST['product_price']);	
		$product_description    = escape_string($_POST['product_description']);	
		$product_category_id    = escape_string($_POST['product_category_id']);	
		$product_quantity       = escape_string($_POST['product_quantity']);	
		$product_image          = escape_string($_FILES['product_image']['name']);	
		$tmp_image              = $_FILES['product_image']['tmp_name'];	
	
		
		
		$moved = move_uploaded_file($tmp_image,"../../resources/templates/uploads/$product_image");
		
		if($moved){
			
		$result = query("insert into products (product_title,product_price,product_description,product_category_id,product_quantity,product_image) values('$product_title','$product_price','$product_description','$product_category_id','$product_quantity','$product_image')");
		
		conferm($result);
		set_messages("A new product is added");
			direct("index.php?products");
			
		}else{
			
			echo"File could not be moved";
		}
		
		
		
	}
	
	
}


   
  function get_categories_in_add_product(){
					$queryResult = query("Select * from categories");

						conferm($queryResult);
						while($row = fetch_array($queryResult)){ 

							$category = $row['cat_title']; 

							echo "<option class='a' value='{$row['cat_id']}'>$category</option>  ";

						}	
						
					}


  function get_cetegory_for_products_page($product_category_id){
  	
	  $result = query("select cat_title from categories where cat_id = '{$product_category_id}'");
	  conferm($result);
	  while($category = fetch_array($result)){
	  	
		 return $category['cat_title'];
	  }
	  
	  
	  
  }



///*****************************Update products**********************************************//


function update_product(){
	
	if(isset($_POST['update'])){
		
		$product_title          = escape_string($_POST['product_title']);	
		$product_price          = escape_string($_POST['product_price']);	
		$product_description    = escape_string($_POST['product_description']);	
		$product_category_id    = escape_string($_POST['product_category_id']);	
		$product_quantity       = escape_string($_POST['product_quantity']);	
		$product_image          = escape_string($_FILES['product_image']['name']);	
		$tmp_image              = $_FILES['product_image']['tmp_name'];	
	
		if(empty($product_image)){
			
			$result = query("select product_image from products where product_id =".escape_string($_GET['id'])." ");
			conferm($result);
			while($row = fetch_array($result)){
			      $product_image = $row['product_image'];	
			}
			
			
		}
		
		move_uploaded_file($tmp_image,"../../resources/templates/uploads/$product_image");
		
		
		$query =" update products set product_title = '{$product_title}' , product_price = '{$product_price}', product_description ='{$product_description}', product_category_id = '{$product_category_id}', product_quantity ='{$product_quantity}',product_image ='{$product_image}' where product_id =".escape_string($_GET['id'])." ";
			
			
		$result = query($query);
		
		conferm($result);
		set_messages("The product was Updated");
	    direct("index.php?products");
			
		
		
	}
	
	
}


////***************************************Show Categories ************************************////


function show_categories(){

     $result = query("select * from categories");
		conferm($result);
		 while($row = fetch_array($result)) {
		 $id=$row['cat_id'];	
	      echo "<tr><td>{$row['cat_id']}</td>
				<td>{$row['cat_title']}</td>
				<td><a class='btn btn-danger' href='../../resources/templates/back/delete_category.php?id=$id'><i class='fa fa-close' ></i></a></td></tr>";
				

			 
		 } 
	
	   }



   
function add_category(){
	
	if(isset($_POST['submit_cat'])){
		
		$cat_title  = escape_string($_POST['new_cat']);	
		
		$result = query("insert into categories (cat_title) values ('$cat_title')");
		conferm($result);
		set_messages("New category is added");
	
		
		
		
	}
	
	
}



//****************************************SHOW USERS ****************************************//


 function show_users(){

     $product = query("select * from users");
		conferm($product);
		 while($row = fetch_array($product)) {
		 $id=$row['user_id'];
		
			 
	      echo "<tr><td>{$row['user_id']}</td>
		           <td>{$row['user_name']}</td>
					<td>{$row['user_pass']}</td>
					<td>{$row['user_email']}</td>
					
					<td><a class='btn btn-danger' href='../../resources/templates/back/delete_user.php?id=$id'>DELETE</a></td>
					</tr>";
				

			 
		 } 
	
	   }


   function admin_add_users(){

		if(isset($_POST['add_user'])){

			$user_name     = escape_string($_POST['user_name']);	
			$user_pass     = escape_string($_POST['user_pass']);	
			$user_email    = escape_string($_POST['user_email']);	
			$user_addr     = escape_string($_POST['user_addr']);	
			$user_num      = escape_string($_POST['user_num']);	
			$user_image    = escape_string($_FILES['user_image']['name']);	
			$tmp_image     = $_FILES['user_image']['tmp_name'];	

			$moved = move_uploaded_file($tmp_image,"../../resources/templates/uploads/$user_image");

			$result = query("insert into users (user_name,user_pass,user_email,user_image,user_num,user_addr,user_mode) values('$user_name','$user_pass','$user_email','$user_image','$user_num','$user_addr','admin')");

			conferm($result);
			set_messages("A new user is added");
				direct("index.php?users");


			 }

	
}


   function normal_add_users(){

		if(isset($_POST['signin'])){

			$user_name     = escape_string($_POST['user_name']);	
			$user_pass     = escape_string($_POST['user_pass']);	
			$user_email    = escape_string($_POST['user_email']);	
			$user_addr     = escape_string($_POST['user_addr']);	
			$user_num      = escape_string($_POST['user_num']);	
			

			$result = query("insert into users (user_name,user_pass,user_email,user_num,user_addr,user_mode) values('$user_name','$user_pass','$user_email','$user_num','$user_addr','normal')");

			conferm($result);
			set_messages("You Signed in Successfully!");
			direct("signin.php");
				


			 }

	
}





        function show_reports(){

     $report = query("select * from reports");
		conferm($report);
		 while($row = fetch_array($report)) {
		 $id=$row['report_id'];
			 
	      echo "<tr><td>{$row['report_id']}</td>
	                <td>{$row['product_id']}</td>
		            <td>{$row['product_title']}</td>
					<td>{$row['product_price']}</td>
					<td>{$row['product_quantity']}</td>
					<td><a class='btn btn-danger' href='../../resources/templates/back/delete_reports.php?id=$id'>DELETE</a></td>
					</tr>";
				

			 
		 } 
	
	   }





function get_category_index_product($cat_id){
	
	$query ="select * from products where product_category_id = '$cat_id' limit 4";
	$result = query($query);
	conferm($result);
	while($row = fetch_array($result)){
		
	$product = "<div class='col-md-3 col-sm-6 col-sm-6 hero-feature '>

			<div class='thumbnail'>
                   <a href='item.php?id={$row['product_id']}'>
						<img src='../resources/templates/uploads/{$row['product_image']}' alt='' style='height:200px;'>
						<div class='caption'>
						
							<h4 class='pull-right'>&#x20B9; {$row['product_price']} </h4>
							<h4>  {$row['product_title']}</h4>
							<i class='fa fa-star' style='color:#bbbf49'></i>
							<i class='fa fa-star' style='color:#bbbf49'></i>
							<i class='fa fa-star' style='color:#bbbf49'></i>
							<i class='fa fa-star' style='color:#bbbf49'></i>
						    <i class='fa fa-star-half' style='color:#bbbf49'></i>
							
							<p>".substr($row['product_description'],0,64)."</p>
							
                           </a>	
							<a href='../resources/cart.php?add={$row['product_id']}' target='_blank' class='btn btn-primary'>Add to cart</a>
							
							
							
							
							
							
						</div>
                  </div>

           </div>";
		
		
		

		echo $product;
		
	}
	
}





function get_index_categories(){
	  $queryResult = query("Select * from categories");

			conferm($queryResult);
			while($row = fetch_array($queryResult)){ 

				$category = $row['cat_title'];
				$id= $row['cat_id'];
				
				
			
				
          echo "<div class='index_cat'><h2 style='font-weight:bold'> $category </h2>";
		 
		  echo " <div class='row'>".get_category_index_product($id)."</div>
					<a href='category.php?id={$row['cat_id']}' class='moreLink'> 
					View more</a></div>";


						}	


            }



      function comment_show_function(){
		  
      	if(isset($_GET['id'])){
			
			$item_id = $_GET['id'];
      		
			$comments = query("select * from comments where com_product_id = ".escape_string($item_id)." ORDER by com_id DESC ");
		  conferm($comments);
		  while($row = fetch_array($comments)){
		  	
			  $displayComment = "<div class='row itemComment'>
                                    <div class='col-md-2 text-center'> <i class='fa fa-user fa-3x itemIcon'></i> </div>
										<div class='col-md-8'>
										   <h3>{$row['com_writer']}</h3>
										    <h4 style='color:gold'> {$row['com_rating']} <i class='fa fa-star' ></i> stars</h4>
											   <small>{$row['com_date']}</small>
											  <p style='font-size:120%;'>{$row['comment']}</p>
                                        </div>
                                  </div>";
			  
			  
			  echo $displayComment;
		  }
		  
			
			
      	}
		  
		  
      }


        function comment_write_function(){
		  
			if(isset($_GET['id'])){

				if(isset($_POST['submit'])){


				$item_id = escape_string($_GET['id']);

				$comment   = $_POST['comment'];
				$com_writer = $_POST['com_writer'];
				$com_rating = $_POST['com_rating'];

				$comments = query("insert into comments (comment,com_product_id,com_writer,com_date,com_rating) values ('$comment','$item_id','$com_writer',now(),'$com_rating') ");

				   conferm($comments);
				  direct("item.php?id=$item_id");

						 }


				   }



		}

    




?>