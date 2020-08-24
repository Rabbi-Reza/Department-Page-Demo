 <?php
ob_start();
session_start();
if($_SESSION['name']!='Nirzhor')
{
	header('location: index.php');
}
include('connection.php');
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="Images/Univ/bu.jpg" type="image/png"/>
    <title>Admin Home</title>

    
    <script src="js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/myCSS.css" rel="stylesheet" />
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
                    <a  style = "padding:5px 15px;" class=" navbar-brand" href="../home.php"><span><img alt ="Logo" class="img-circle"  src="Images/Univ/bu.jpg" height="43" width="42" /></span> 
					<font face="Aharoni" color="black" size="5"> Department of Geology & Mining </font> </a>
                </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
						
                           
							
							<li ><a href="../home.php"><b>Home </b></a></li>
							
							<li><a href="../Education.php"><b>Education </b></a></li>
							
                            <li><a href="../Faculty.php"><b>Faculty </b></a></li> 
							
							<li><a href="../Research.php"><b>Research </b></a></li> 
							
							<li><a href="../News.php"> <b>News & Agenda </b></a></li> 
							
                            <li><a href="../Contact.php"> <b>Contact </b> </a></li>
							
							<li ><a href="logout.php"><b><i>Logout</i></b></a></li>

                        </ul>

                    </div>

            </div>
        </div> 

        <!--Top Navigation bar End-->
        
               
         

    </div>


        <hr />

             <br />
            
              <!-- Middle Contents Start -->
			  
			  <div align="center"> 
			  
            <h1> Welcome to Admin Page !! </h1>
			
			<br>
			<br>
			<hr>
			
			<b>About Teacher Data </b><br><br>
			
			<a class="btn btn-large btn-success" href="FacTechAdd.php">Add Teacher Data</a>
			
			<a class="btn btn-large btn-success" href="FacTechSE.php">Show & Edit Teacher Data</a>
			
			<br>
			
			 <hr>
			
			<b>About Contact page Data </b><br><br>
			
			<a class="btn btn-large btn-success" href="contactUniv.php">About University Address</a>
			
			<a class="btn btn-large btn-success" href="contactOff.php">About Office Room</a>
			
			<a class="btn btn-large btn-success" href="contactMap.php">About Map Location</a>

  </div>
            
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
                            <a href="#"> Home </a>
                      &middot;
                            <a href="../Education.php">Education</a>
                      &middot; 
                            <a href="../Faculty.php">Faculty</a>
                      &middot; 
                            <a href="../Research.php">Research</a>
					  &middot; 
                            <a href="../News.php">News & Agenda</a>
                      &middot; 
                            <a href="../Contact.php">Contact</a>
							

                </p>


             </div>
         </footer>
        <!-- Footer End-->

         

    </form>

 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
