  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php" style="font-family:arial;background-color:#68bf3f; color:black; font-size:200%">HOME SITE</a>
            </div>
            <!-- Top Menu Items -->
            
            
            <ul class="nav navbar-right top-nav text-center">

             
             	
             	
             	
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" style="background-color:#68bf3f; color:black; font-size:170%" data-toggle="dropdown"><i class="fa fa-user fa-lg" >
                  <?php
						
				 echo $_SESSION['username'];
				
				 ?>
                </i> </a>
                   
                    <ul class="dropdown-menu">
                        <li>
                           
                           
                           
                            <a href="../users.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
       
