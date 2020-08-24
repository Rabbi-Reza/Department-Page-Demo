<?php

     $link=mysqli_connect('localhost','root','','gm2019bu');

		   $c=$_GET['id'];
		   
          $q="select * from teacherGM where id like '$c'";
        $run=mysqli_query($link,$q);
        $row=mysqli_fetch_array($run);
        
         $id=$row['Id'];
         $tname=$row['tname'];
         $Desig=$row['Desig'];
		 $dtype=$row['Dtype'];
         $image=$row['timg'];
		 
		    $degree = $row['degree']; 
		    $email = $row['email'];
			$phn = $row['phn'];
			$build = $row['build'];
			$Bname1 = $row['Bname1'];
			$floor = $row['floor'];
			$room = $row['room'];
			$gend = $row['gend'];
			$descrip = $row['descrip'];
			
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
		 
		 <div class="col-lg-1">  </div> 
		    <div class="col-lg-2"> <?php echo "<img class='img-circle'  src='../../../Files/Images/Faculty/$image' width='230' height='230'>"; ?> </div> 
		   
		   <div class="container col-lg-5 ">
			 
             <h3><b> <?php echo "$tname"; ?> </b>  </h3><br>
			 
			   <b> <?php echo "$dtype"; ?> </b><br>
             	 <h3><p> <?php echo "$Desig"; ?>   </p> </h3>
				
				<font>  <b>Last Degree : </b></font> <?php echo "$degree"; ?> 
				
				<p> <i><?php echo "$gend"; ?> </i>  </p> 
				
				<hr>
				 <h2 >Contact Info </h2> 
				 
				<font> <b>Email </b></font> :  <?php echo "$email"; ?>   <?php echo "<a class='btn btn-default' href='mailto:$email'> Send Mail </a>"; ?><br> <br>
				<font> <b>Contact Number : </b> </font>   <?php echo "$phn"; ?>   <?php echo "<a class='btn btn-default' href='tel:$phn'> Call </a>"; ?> <br> <br> 
				<font> <b>Location  :</b> </font> 
				<?php echo "$build"; ?>  
				(  <?php echo "$Bname1"; ?>    ) 
				 - <?php echo "$floor"; ?>    <br>
				<font> <b>Room Number : </b></font>  <?php echo "$room "; ?> <br>
                
				<hr>	
				
				<font>  <b> </b></font> <p> <?php echo "$descrip"; ?>   </p> 
				
	
        </div>
		
		<div class="col-lg-1"> 
		
          <?php echo "<a class='btn btn-default' href='FacultyResearch.php?id=$id'><i> <b>View Research </b> </i>&raquo; </a>"; ?>
		 
		  
		  <br><br> 
		  
		  <?php echo "<a class='btn btn-default' href='FacultyPubliction.php?id=$id'><i> <b>View Publictions </b> </i>&raquo; </a>"; ?>
		  <br><br><br><br><br><br> <br><br><br><br><br><br>
		  <a style="background-color:#c2d1f0;color: black;font-size: 14px;" class='btn btn-default' href='../'>Back to Faculty page </a>
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
