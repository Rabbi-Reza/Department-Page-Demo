 <?php
ob_start();
session_start();
if($_SESSION['name']!='Nirzhor')
{
	header('location: ../../admin');
}
include('connection.php');


     $conn=mysqli_connect("localhost","root","") ;
     mysqli_select_db($conn,"gm2019bu");
     $query="SELECT * FROM teachergm";
     $result=mysqli_query($conn,$query);

 ?>


 

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="Images/Univ/bu.jpg" type="image/png"/>
    <title>Show & Edit Teacher</title>

    
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
			  
            <h1> All the Inserted Data of teacher !! </h1>
			
			  <!-- Table Start -->

            <hr />

         <div class="panel panel-default">

             <!-- Default panel contents -->
             <div class="panel-heading"></div>

             
                     <table class="table">

                         <thead>
                             <tr>
							 <center>
                                 <th># </th>
                                 <th> <center>Teacher's Name </center></th>
                                 <th> <center>Last Degree</center></th>
								 <th> <center>Designation</center></th>
								 <th> <center>Desig Type</center></th>
                                 <th> <center>Email</center></th>
                                 <th> <center>Phone</center></th>
								 <th> <center>Building</center></th>
                                 <th> <center>BuildingName</center></th>
                                 <th> <center>Floor</center></th>
								 <th> <center>Room</center></th>

                                 <th> <center>Gender</center></th>
								 <th> <center>BloodGrp</center></th>
								 <th>Image</th>
								 <th>Description</th>
                                 <th>Research</th>
                                 <th>Publiction</th>
								 <th>Edit</th>
                                 <th>Delete</th>
 
                             </tr>

                         </thead>

                            <tbody> 
							
			<?php 
			
				while ($row=mysqli_fetch_array($result)) {
					
                $id=$row['Id'];
				
     		echo "<tr> <center>";
			
			    echo "<td>".$row['Id']."</td>";
     			echo "<td>".$row['tname']."</td>";
     			echo "<td>".$row['degree']."</td>";
     			echo "<td>".$row['Desig']."</td>";
				echo "<td>".$row['Dtype']."</td>";
     			echo "<td>".$row['email']."</td>";
     			echo "<td>".$row['phn']."</td>";
				echo "<td>".$row['build']."</td>";
     			echo "<td>".$row['Bname1']."</td>";
     			echo "<td>".$row['floor']."</td>";
     			echo "<td>".$row['room']."</td>";
     			echo "<td>".$row['gend']."</td>";
				echo "<td>".$row['tblood']."</td>";
				
				echo "<td>"."<a href='changeImg.php?Cimg=$id'>Change</a>"."</td>";
				echo "<td>"."<a href='FacTechDes.php?des=$id'><center>View</center></a>"."</td>";
				echo "<td>"."<a href='changeImg.php?Cimg=$id'><center>View</center></a>"."</td>";
				echo "<td>"."<a href='FacTechPub.php?Pub=$id'><center>View</center></a>"."</td>";
				
     			echo "<td>"."<a class='btn btn-default 'href='EditTech.php?edit=$id'>Edit</a>"."</td>";
     			echo "<td>"."<a class='btn btn-default 'href='ConfirmTdel.php?delete=$id'>Delete</a>"."</td>";
     			
     		echo "</center></tr>";
     	}
     	?>

                 



                          </tbody>

                    </table>
         
                 

        
          </div>    

               <!-- Table End --> 


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
