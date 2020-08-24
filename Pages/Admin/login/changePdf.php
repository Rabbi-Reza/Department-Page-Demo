 <?php
ob_start();
session_start();
if($_SESSION['name']!='Nirzhor')
{
	header('location: ../../admin');
}
include('connection.php');

      $conf = $_GET['Cpdf'] ;
	  
 $link=mysqli_connect('localhost','root','','gm2019bu');
   
	 $q="select * from publication where PuID = '$conf'";
        $run=mysqli_query($link,$q);
        $row=mysqli_fetch_array($run);
        
         
         $PuTitle = $row['PuTitle'];
         $PuPdf=$row['PuPdf'];
		 $Pdate = $row['PuDate'];


 ?>


 

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="Images/Univ/bu.jpg" type="image/png"/>
    <title>Warning</title>

    
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
                    <a  style = "padding:5px 15px;" class=" navbar-brand" href="../../../home.php"><span><img alt ="Logo" class="img-circle"  src="Images/Univ/bu.jpg" height="43" width="42" /></span> 
					<font face="Aharoni" color="black" size="5"> Department of Geology & Mining </font> </a>
                </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
						
                           
							
							<li ><a href="../../../home.php"><b>Home </b></a></li>
							
							<li><a href="../../../pages/Education"><b>Education </b></a></li>
							
                            <li><a href="../../../pages/Faculty."><b>Faculty </b></a></li> 
							
							<li><a href="../../../pages/Research"><b>Research </b></a></li> 
							
							<li><a href="../../../pages/News"> <b>News & Agenda </b></a></li> 
							
                            <li><a href="../../../pages/Contact"> <b>Contact </b> </a></li>
							
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
			   <div class="col-lg-1"> <a class="btn btn-large btn-success" href="ahome.php">Admin Home </a><br> </div> 
		
			  <div align="center"> 
				     <h1 style="color:red"><b>Warning !!</b></h1>
            <h2> Confirm to Upload new pdf ?? </h2>
			
			  <!-- Table Start -->

            <hr />
			
			  <div  >
             <h3><b> </b><?php echo "$PuTitle"; ?> <br><br>
			  </div >
			
         <div  > <?php echo "<iframe src = '../../../Files/PDF/$PuPdf' width = '35%' height = '460'></iframe>"; ?>  </div> 
		   
		    
			
			  
			  
        <br>
		<form action="changePdfJob.php?Cpdf=<?php echo "$conf";?>" method="post" >
	</form>
	
		<form action="changePdfJob.php?Cpdf=<?php echo "$conf";?>" method="post" enctype="multipart/form-data" >
   <center> <input type="file" name="PuPdf"> </center>
  <br>
   <input style="background-color:#ff4d4d;color: black;font-size: 17px;font-weight: bold;" class="btn btn-success" type="submit" value="Yes , Change the pdf file">
   <br><br>
   <a class="btn btn-large btn-success" href="EditPub.php?edit=<?php echo "$conf"; ?>"><b> Cancel </b></a>
	<br>
   
     </form>

		


             
                   
                 

        
       

            


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
                            <a href="../../../home.php"> Home </a>
                      &middot;
                            <a href="../../Education">Education</a>
                      &middot; 
                            <a href="../../Faculty">Faculty</a>
                      &middot; 
                            <a href="../../Research">Research</a>
					  &middot; 
                            <a href="../../News">News & Agenda</a>
                      &middot; 
                            <a href="../../Contact">Contact</a>
							

                </p>


             </div>
         </footer>
        <!-- Footer End-->

         

    </form>

 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
