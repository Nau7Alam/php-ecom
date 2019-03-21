<?php  require_once "config.php"; ?>


<?php 

    if(isset($_GET['add'])){
		 
		$result = query("select * from products where product_id = " . escape_string($_GET['add']) ." ");
    	conferm($result);
		
		while($row = fetch_array($result)){
			
			if($row['product_quantity']  != $_SESSION['product_'.$_GET['add']] ){
			        $_SESSION['product_'.$_GET['add']]++ ;
				$_SESSION['total_items']++;
				   	direct("../public/checkout.php");
			  	
			}else{
				set_messages(" We only have ". $row['product_quantity'] ." items of ". $row['product_title']);
				direct("../public/checkout.php");
			}
			
		}	
    }

	  if(isset($_GET['remove'])){
		  $_SESSION['product_'.$_GET['remove']]--;
		  $_SESSION['total_items']--;
		  
		if($_SESSION['product_'.$_GET['remove']] < 1 ){
             $_SESSION['product_'.$_GET['remove']] = '0';
			unset($_SESSION['total_items']);
			unset($_SESSION['total_amount']);
			direct('../public/checkout.php');
		}else{
			direct('../public/checkout.php');
		}

	  }

	  

	 if(isset($_GET['delete'])){
		  $_SESSION['product_'.$_GET['delete']] = '0';
		    unset($_SESSION['total_items']);
			unset($_SESSION['total_amount']);
           direct('../public/checkout.php');
	  }



    /////////////       Funtion to display products in cart
  function get_cart(){
	  $total = 0;
	  $total_items = 0;
	  
	    $item_name = 1;
		$item_number = 1;
		$amount = 1;
		$quantity = 1;
	  
	  foreach($_SESSION as $name => $value){
		  
		  
		  if($value > 0 ){
		  	
			if(substr($name,0,8)== 'product_'){
		  	
			 $length = strlen($name);
			 $id =substr($name,8,$length);
				
			  $result = query("select * from products where product_id = ".escape_string($id)." ");
			  conferm($result);
			 while($row = fetch_array($result)){
			  
			  $sub_total = $row['product_price']* $value;
			  $total_items += $value;
			  $product = <<<DON
               
		<tr>
			<td>{$row['product_title']}
			 <img src="../resources/templates/uploads/{$row['product_image']}" width="70"></td>
			<td>&#x20B9; {$row['product_price']}</td>
			<td>{$value}</td>
			<td>&#x20B9; $sub_total</td>
			<td>
				<a class="btn btn-warning" href="../resources/cart.php?remove={$row['product_id']}"><span class= "glyphicon glyphicon-minus"></span></a>
				<a class="btn btn-success" href="../resources/cart.php?add={$row['product_id']}"><span class= "glyphicon glyphicon-plus"></span></a>
				<a class="btn btn-danger" href="../resources/cart.php?delete={$row['product_id']}"><span class= "glyphicon glyphicon-remove"></span></a>
			</td>
			  <input type="hidden" name="item_name_{$item_name}" value="{$row['product_title']}">
			  <input type="hidden" name="item_number_{$item_number}" value="{$row['product_id']}">
			  <input type="hidden" name="amount_{$amount}" value="{$row['product_price']}">
			  <input type="hidden" name="quantity_{$quantity}" value="{$value}">
		</tr>

DON;
		  
		echo $product;  
		$item_name++;
		$item_number++;
		$amount++;
		$quantity++;  
			  
		      }
				
			$_SESSION['total_amount'] = $total += $sub_total; 	
			$_SESSION['total_items'] = $total_items; 	
		  
	     }  
			  
			  
		  }
		  
		 
  	
	  }
	  
  }


  function get_button(){
  	
	  
if(isset($_SESSION['total_items']) && $_SESSION['total_items'] > 0){
	
	$buyButton = <<<BUT
	
	<div class='text-center'>
	<input type="submit" value="Buy Now" class="btn btn-success btn-lg">
	</div>
BUT;
	
	echo $buyButton;
	
}



	  
  }



   /////////////       Funtion to display products in cart
  function get_reports(){
	  $total = 0;
	  $total_items = 0;
	  
	  if(isset($_GET['tx']) && isset($_GET['amt']) && isset($_GET['st']) && isset($_GET['cc'])){
		  
		  
		    $amount = $_GET['amt'];
			$status = $_GET['st'];
			$transection_id = $_GET['tx'];
			$currency = $_GET['cc'];


			$insert_orders = query("insert into orders (order_amount,order_status,order_tx,order_cc)
			values('{$amount}','{$status}','{$transection_id}','{$currency}')");

			conferm($insert_orders);
	  
	  

		 foreach($_SESSION as $name => $value){


		   if($value > 0 ){

			  if(substr($name,0,8)== 'product_'){

				
		
				
		  	
			 $length = strlen($name);
			 $id =substr($name,8,$length);
				
			  $result = query("select * from products where product_id = ".escape_string($id)." ");
			  conferm($result);
			  while($row = fetch_array($result)){
				 $product_title = $row['product_title']; 
			  
			  $sub_total = $row['product_price']* $value;
			  $total_items += $value;
				  
			  $insert_report = query("insert into reports (product_id,product_title,product_price,product_quantity)
			     values('{$id}','{$product_title}','{$sub_total}','{$value}')");
			  conferm($insert_report);
		 
			  
		      }
				
			 $total += $sub_total; 	
			 $total_items; 
				  
				  echo $total_items; 
		  
	     }  
			  
			  
		  }
		  
		 
  	    }
		  
		  
		   foreach($_SESSION as $name => $value){


		   if($value > 0 ){

			  if(substr($name,0,8)== 'product_'){
           
		      $value = null;
		  	//session_destroy();
			  }}}
	  }else {
	  	direct("index.php");
	  }
	  
  }














?>