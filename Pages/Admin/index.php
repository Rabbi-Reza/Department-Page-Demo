   

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="../../Files/Images/Univ/bu.jpg" type="image/png"/>
    <title>Admin login</title>

    
    <script src="../../support/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap -->

    <link href="../../support/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../../support/css/myCSS.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <form id="form1"  >
    <div>
       <!--Top Navigation bar Start-->

        <div style="background-color:powderblue;" class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                         </button>
                    <a  style = "padding:5px 15px;" class=" navbar-brand" href="../../home.php"><span><img alt ="Logo" class="img-circle"  src="../../Files/Images/Univ/bu.jpg" height="43" width="42" /></span>  
					<font face="Aharoni" color="black" size="5"> Department of Geology & Mining </font> </a>
                </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
						
                           
							
							<li><a href="../../home.php"><b>Home</b></a></li>
							
							<li><a href="../../Pages/Education"><b>Education </b></a></li>
							
                            <li ><a href="../../Pages/Faculty"><b>Faculty</b> </a></li> 
							
							<li><a href="../../Pages/Research"><b>Research </b></a></li> 
							
							<li><a href="../../Pages/News"> <b>News & Agenda </b></a></li> 
							
                            <li><a href="../../Pages/Contact"><b> Contact </b> </a></li>
							
							 <li class="active"><a style="background-color:#bfff80;color:red;font-weight: bold;;font-size: 18px;" href="index.php">Login</a></li>

                        </ul>

                    </div>

            </div>
        </div> 

        <!--Top Navigation bar End-->
        
               
         

    </div>


        <hr />

             <br />
             <br /> 
        
              <!-- Middle Contents Start -->
           

        <div class="container center">

                <!---Log in part------>



        

		
		<form action="login" method="post">
		

		

	 
		</form>

				<form action="login.php" method="post">
	

		 <?php
		if (isset($error_message)){
			echo"<div class=error>".$error_message."</div>";
		}
    	?>
				
				
				
		 <table>
		 
		<h1>Login </h1>
		  <hr />
		 
		 	<tr>
		 		<td width="200" height="50">   <span id="Label1" class="col-md-5 control-label" style="font-family:Bauhaus 93;font-size:Large;font-weight:bold;">Username</span> </td>
		 		<td width="200" height="50"><input style="width: 200px;height: 30px;" type="text" name="uname" placeholder="Enter Username"></td>
		 	</tr>
		 	<tr>
		 		<td width="200" height="50"><span id="Label2" class="col-md-5 control-label" style="font-family:Bauhaus 93;font-size:Large;font-weight:bold;">Password</span></td>
		 		<td width="200" height="50"><input style="width: 200px;height: 30px;" type="password" name="pass" placeholder="Enter Password"></td>
		 	</tr>
		 	<tr>
			
		
		 		<td>
				
					<br>
				<div class="col-md-6">
				<input type="submit" name="submit" value="Login" id="Button1" class="btn btn-default" style="color:#000066;background-color:#009933;font-family:Arial Black;font-weight:bold;" />
				</div>
				
				</td>
				
		 	</tr>
		 </table>
		</form>
		
		
		
                
                       

                     

 
          

     

    </div>
        <!---Log in part------>

            
        </div>

        <!-- Middle Contents End -->
		
		 
		

        <hr />

         <!-- Footer Start-->

            

         <footer>
             <div class="container">

                     <p class="pull-right">
                          <a href="#">Back to Top</a>
                     </p>

                 <p>
                     &copy; 
                        2018 Department of Geology & Mining 

                      &middot; 
                            <a href="../../home.php"> Home </a>
                      &middot;
                            <a href="../Education">Education</a>
                      &middot; 
                            <a href="../Faculty">Faculty</a>
                      &middot; 
                            <a href="../Research">Research</a>
					  &middot; 
                            <a href="../News">News & Agenda</a>
                      &middot; 
                            <a href="../Contact">Contact</a>
							

                </p>


             </div>
         </footer>
        <!-- Footer End-->

         

    </form>

 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="../../support/js/bootstrap.min.js"></script>
</body>
</html>
