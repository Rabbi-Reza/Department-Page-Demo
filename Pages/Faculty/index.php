<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="../../Files/Images/Univ/bu.jpg" type="image/png"/>
    <title>Faculty</title>

    
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
							
                            <li class="active"><a style="background-color:#bfff80;color:red;font-weight: bold; ;font-size: 18px;" href="../../Pages/Faculty">Faculty </a></li> 
							
							<li><a href="../../Pages/Research"><b>Research </b></a></li> 
							
							<li><a href="../../Pages/News"> <b>News & Agenda </b></a></li> 
							
                            <li><a href="../../Pages/Contact"><b> Contact </b> </a></li>

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
		
		
		 <div class="row">


                 <h2 style="margin-left: 50px">Chairman</h2>
				 <hr>
				 
		<?php
		
		$link=mysqli_connect('localhost','root','','gm2019bu');
		
		  $c="Chairman";
		   
          $q="select * from teacherGM where dtype like '$c%'";
		  
        $run=mysqli_query($link,$q);
		
        while($row=mysqli_fetch_array($run))
        {
         
		 $id=$row['Id'];
         $tname=$row['tname'];
         $Desig=$row['Desig'];
         $image=$row['timg'];
		?>
		<div class="col-lg-4"><div style="background-color:#b3ffd9"><center><?php echo "<br><img class='img-circle' src='../../Files/Images/Faculty/$image' width='140' height='140'>"; ?></center>
		
		 <h2><?php echo "$tname"; ?></h2>
                        
		<p> <b><?php echo "$Desig"; ?>  </b> </p>
    
	<?php echo "<a class='btn btn-default' href='FacultyMember/FacultyMember.php?id=$id'><i> View Profile </i>&raquo; </a><br>"; ?>

		<br>
	 </div>
	 <br>
        </div>
		
		<?php
	     }
		?>

            </div>
			
		 <hr>	
			
		
		 <div class="row">


                 <h2 style="margin-left: 50px">Professor</h2>
				 <hr>
				 
		<?php
		
		$link=mysqli_connect('localhost','root','','gm2019bu');
		
		  $c="Professor";
		   
          $q="select * from teacherGM where Desig like '$c%'";
		  
        $run=mysqli_query($link,$q);
		
        while($row=mysqli_fetch_array($run))
        {
         
		 $id=$row['Id'];
         $tname=$row['tname'];
         $Desig=$row['Desig'];
         $image=$row['timg'];
		?>
		<div class="col-lg-4"><div style="background-color:#e0ebeb"><center><?php echo "<br><img class='img-circle' src='../../Files/Images/Faculty/$image' width='140' height='140'>"; ?></center>
		
		 <h2><?php echo "$tname"; ?></h2>
                        
		<p> <b><?php echo "$Desig"; ?>  </b> </p>
    
	<?php echo "<a class='btn btn-default' href='FacultyMember/FacultyMember.php?id=$id'><i> View Profile </i>&raquo; </a><br>"; ?>

		<br>
	 </div>
	 <br>
        </div>
		
		<?php
	     }
		?>

            </div>
 <hr>
			<div class="row">


                 <h2 style="margin-left: 50px">Assistant Professor</h2>
				 <hr>
				 
		<?php
		
		$link=mysqli_connect('localhost','root','','gm2019bu');
		
		  $c="Assistant Professor";
		   
          $q="select * from teacherGM where Desig like '$c%'";
		  
        $run=mysqli_query($link,$q);
		
        while($row=mysqli_fetch_array($run))
        {
         
		 $id=$row['Id'];
         $tname=$row['tname'];
         $Desig=$row['Desig'];
         $image=$row['timg'];
		?>
		<div class="col-lg-4"><div style="background-color:#e0ebeb"><center><?php echo "<br><img class='img-circle' src='../../Files/Images/Faculty/$image' width='140' height='140'>"; ?></center>
		
		 <h2><?php echo "$tname"; ?></h2>
                        
		<p> <b><?php echo "$Desig"; ?>  </b> </p>
    
	<?php echo "<a class='btn btn-default' href='FacultyMember/FacultyMember.php?id=$id'><i> View Profile </i>&raquo; </a><br>"; ?>

	<br>
	 </div>
	 <br>
        </div>
		
		<?php
	     }
		?>

            </div>
			
			 <hr>
            <div class="row">


                 <h2 style="margin-left: 50px">Lecturer</h2>
				 <hr>
				 
		<?php
		
		$link=mysqli_connect('localhost','root','','gm2019bu');
		
		  $c="Lecturer";
		   
          $q="select * from teacherGM where Desig like '$c%'";
		  
        $run=mysqli_query($link,$q);
		
        while($row=mysqli_fetch_array($run))
        {
         
		 $id=$row['Id'];
         $tname=$row['tname'];
         $Desig=$row['Desig'];
         $image=$row['timg'];
		?>
		<div  class="col-lg-4"> <div style="background-color:#e0ebeb"><center> <?php echo "<br><img class='img-circle' src='../../Files/Images/Faculty/$image' width='140' height='140'>"; ?></center>
		
		 <h2><?php echo "$tname"; ?></h2>
                        
		<p> <b><?php echo "$Desig"; ?>  </b> </p>
    
	<?php echo "<a class='btn btn-default' href='FacultyMember/FacultyMember.php?id=$id'><i> View Profile </i>&raquo; </a><br>"; ?>
	   
        	<br>
	 </div>
	 <br>
	
        </div>
		
		<?php
	     }
		?>
 <br>
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
                            <a href="../../home.php"> Home </a>
                      &middot;
                            <a href="../../Pages/Education">Education</a>
                      &middot; 
                            <a href="../../Pages/Faculty">Faculty</a>
                      &middot; 
                            <a href="../../Pages/Research">Research</a>
					  &middot; 
                            <a href="../../Pages/News">News & Agenda</a>
                      &middot; 
                            <a href="../../Pages/Contact">Contact</a>
							

                </p>


             </div>
         </footer>
        <!-- Footer End-->

         

    </form>

 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../support/js/bootstrap.min.js"></script>
</body>
</html>
