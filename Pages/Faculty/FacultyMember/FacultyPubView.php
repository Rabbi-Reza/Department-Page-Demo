<?php

     $link=mysqli_connect('localhost','root','','gm2019bu');

		   $c = $_GET['id'];
		   $PuID = $_GET['pub'];
		   
          $q="select * from teacherGM where id = '$c'";
		  
        $run=mysqli_query($link,$q);
        
			 $row=mysqli_fetch_array($run);
        
         $id=$row['Id'];
         $tname=$row['tname'];
         $Desig=$row['Desig'];
		  
         $image=$row['timg'];
		 
		  $query="SELECT * FROM Publication where PuID = '$PuID'";
         $result=mysqli_query($link,$query);  

		 $Pdf =mysqli_fetch_array($result);
		 
		 $PuPdf =$Pdf['PuPdf'];
		 
		 $PuTitle =$Pdf['PuTitle'];
		 $PuDate =$Pdf['PuDate'];
		 	
			
			
		?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="../../../Files/Images/Univ/bu.jpg" type="image/png"/>
    <title><?php echo "$tname"; ?></title>

    
    <script src="../../../support/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap -->

    <link href="../../../support/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../../../support/css/myCSS.css" rel="stylesheet" />
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
                    <a  style = "padding:5px 15px;" class=" navbar-brand" href="../../../home.php"><span><img alt ="Logo" class="img-circle"  src="../../../Files/Images/Univ/bu.jpg" height="43" width="42" /></span> 
					<font face="Aharoni" color="black" size="5"> Department of Geology & Mining </font> </a>
                </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
						
                            <li><a href="../../../home.php"><b>Home</b></a></li>
							
							<li><a href="../../../Pages/Education"><b>Education </b></a></li>
							
                            <li class="active"><a style="background-color:#bfff80;color:red;font-weight: bold;" href="../../../Pages/Faculty">Faculty </a></li> 
							
							<li><a href="../../../Pages/Research"><b>Research </b></a></li> 
							
							<li><a href="../../../Pages/News"> <b>News & Agenda </b></a></li> 
							
                            <li><a href="../../../Pages/Contact"> <b>Contact </b> </a></li>

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
         
		
		 <div class="row">
		 
		 <div class="col-lg-1">
		 </div>
		 
		    <div class="col-lg-2"> <?php echo "<img class='img-circle'  src='../../../Files/Images/Faculty/$image' width='200' height='200'>"; ?> </div> 
		   
		   <div class="container col-lg-7 ">
			 
             <h3><b> <?php echo "$tname"; ?> </b>  </h3><br>
			 
			   
             	 <h3><p> <?php echo "$Desig"; ?>   </p> </h3>
				
				
                
				<hr>	
						<h3><b><?php echo "$PuTitle"; ?></b>  </h3>
						<h5><?php echo "$PuDate"; ?>  </h5>
				<hr>
			
			 
				<?php echo "<iframe src = '../../../Files/PDF/$PuPdf' width = '100%' height = '1000'></iframe>"; ?> 
				
				
						
        </div>
		
		<div class="col-lg-2"> 
          
		  <?php echo "<a class='btn btn-default' href='FacultyMember.php?id=$id'><i><b> Back to Profile </b> </i>&raquo; </a>"; ?>
		  
		  <br><br> 
		  
		  
		  <?php echo "<a class='btn btn-default' href='FacultyResearch.php?id=$id'><i> <b>View Reasearch </b> </i>&raquo; </a>"; ?>
		  <br><br><br><br><br><br> <br><br><br><br><br><br>
		  
		  <?php echo "<a style='background-color:#c2d1f0;color: black;font-size: 14px;' class='btn btn-default' href='FacultyPubliction.php?id=$id'>  Back to previous page   </a>"; ?>
		  
		  
		</div> 
		
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
                            <a href="../../../Pages/home.php"> Home </a>
                      &middot;
                            <a href="../../../Pages/Education">Education</a>
                      &middot; 
                            <a href="../../../Pages/Faculty">Faculty</a>
                      &middot; 
                            <a href="../../../Pages/Research">Research</a>
					  &middot; 
                            <a href="../../../Pages/News">News & Agenda</a>
                      &middot; 
                            <a href="../../../Pages/Contact">Contact</a>
							

                </p>


             </div>
         </footer>
        <!-- Footer End-->

         

    </form>

 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../support/js/bootstrap.min.js"></script>
</body>
</html>
