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
		 
		 $query="SELECT * FROM Publication where id like '$c'";
         $result=mysqli_query($link,$query);
		 
		    
				
			
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
		 
		 
		    <div class="col-lg-2"> <?php echo "<img class='img-circle'  src='../../../Files/Images/Faculty/$image' width='200' height='200'>"; ?> </div> 
		   
		   <div class="container col-lg-7 ">
			 
             <h3><b> <?php echo "$tname"; ?> </b>  </h3><br>
			 
			   <b> <?php echo "$dtype"; ?> </b><br>
             	 <h3><p> <?php echo "$Desig"; ?>   </p> </h3>
				
				
                
				<hr>	
						<h3><b>All the publications </b>  </h3>
				<hr>
				
				   <table class="table">

                         <thead>
                             <tr>
							 <center>
                                
                                 <th> <center>Title</center></th>
								 <th> <center>Publish Date</center></th>
								 <th> <center>View Journel</center></th>
								 <th> <center>View Pdf</center></th>

 
                             </tr>

                         </thead>

                            <tbody> 
							
 
							
			<?php 
			
				while ($row=mysqli_fetch_array($result)) {
					
                 $id=$row['Id'];
				$PuID=$row['PuID'];
				$PuJour=$row['PuJour'];
     		echo "<tr> <center>";
			    
				
			    echo "<td><center><b style='color: black;font-size: 17px'>".$row['PuTitle']."</b></center></td>";
     			
                echo "<td><center style='color: black;font-size: 17px'>".$row['PuDate']."</center></td>";
				 
     		    echo "<td> <center>"."<a style='background-color:#f2f2f2;color: black;font-size: 13px;font-weight: bold;' class='btn btn-default 'href='$PuJour'>Go to Journel</a>"." </center></td>";
     			echo "<td><center>"."<a style='background-color:#f2f2f2;color: black;font-size: 13px;font-weight: bold;' class='btn btn-default 'href='FacultyPubView.php?pub=$PuID&id=$id'>View</a>"."</center></td>";
     			
     		echo "</center></tr>";
     	}
     	?>

                 



                          </tbody>

                    </table>
				
				
	
        </div>
		
		<div class="col-lg-1"> 
          
		  <?php echo "<a class='btn btn-default' href='FacultyMember.php?id=$id'><i><b> Back to Profile </b> </i>&raquo; </a>"; ?>
		  
		  <br><br> 
		  
		  
		  <?php echo "<a class='btn btn-default' href='FacultyResearch.php?id=$id'><i> <b>View Reasearch </b> </i>&raquo; </a>"; ?>
		  <br><br><br><br><br><br> <br><br><br><br><br><br>
		  <a style="background-color:#c2d1f0;color: black;font-size: 14px;" class='btn btn-default' href='../'> Back to Faculty page</a>
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
