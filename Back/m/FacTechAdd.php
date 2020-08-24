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
    <title>Add Teacher Info</title>

    
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
			
		    <div class="col-lg-1"> <a class="btn btn-large btn-success" href="ahome.php">Admin Home </a><br> </div> 
			
			  
			  <div align="center"> 
			  
			  
            <h1> Add information about Teachers !! </h1>
			
			<br>
			<br>
			
			<div class="container" >
			 
	<br><br><center>
	
	<form action="FacTechAddjob.php" method="post" >
	</form>
	
		<form action="FacTechAddjob.php" method="post" enctype="multipart/form-data">
		<table>
		
			<tr>
				<td width="200px" height="50px"><b>Teacher's Name</b></td>
				<td width="200px" height="50px"><input type="text" name="tname" placeholder="Enter Name"></td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Last Degree</b></td>
				<td width="200px" height="50px"><input type="text" name="degree" placeholder="Enter Degree"></td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Select Designation</b></td>
				<td width="250px" height="50px">
					<select name="Desig">
						<option> --- select --- </option>
						<option>Professor </option>
						<option>Assistant Professor </option>
						<option>Lecturer </option>
						

					</select>
				</td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Email</b></td>
				<td width="200px" height="50px"><input type="email" name="email" placeholder="Enter Email"></td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Phone Number </b></td>
				<td width="200px" height="50px"><input type="text" name="phn" placeholder="Enter Phone Number"></td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Building Name </b></td>
				<td width="200px" height="50px"><input type="text" name="build" placeholder="Enter Building Name "></td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Select Building Name</b></td>
				<td width="250px" height="50px">
					<select name="Bname1">
						<option> --- select --- </option>
						<option>Academic 1 </option>
						<option>Academic 2  </option>
						<option>Administrative 1  </option>
						<option>Administrative 2  </option>
						 

					</select>
				</td>
			</tr>
		 
		
			<tr>
				<td width="200px" height="50px"><b>Select Floor Number</b></td>
				<td width="250px" height="50px">
					<select name="floor">
						<option> --- select --- </option>
						<option>Ground Floor </option>
						<option>1st Floor  </option>
						<option>2nd Floor  </option>
						<option>3rd Floor </option>
						<option>4th Floor  </option>
						<option>5th Floor  </option>

					</select>
				</td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Room Number </b></td>
				<td width="200px" height="50px"><input type="text" name="room" placeholder="Enter Room Number"></td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Teacher's Image</b></td>
				<td width="200px" height="50px"><input type="file" name="timg"></td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Gender</b></td>
				
				<td width="200px" height="50px">
				
				<select name="gend">
						<option> --- select --- </option>
						<option>Male </option>
						<option>Female  </option>
		
				</select>
				  
				
				</td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Description </b></td>
				<td width="200px" height="50px"><textarea name="descrip" rows="4" cols="50"></textarea></td>
			</tr>
			
			<tr>
				<td><b><input type="submit" name="sub" value="Add"></b></td>
			</tr>
		</table>
	</form>
	<?php
     if(isset($_POST['sub']))
     {
     	   $name=$_POST['bname'];
     	   $price=$_POST['price'];
     	   $cat=$_POST['cat'];
     	  $image=$_FILES['img']['name'];
          $image_tmp=$_FILES['img']['tmp_name'];
	       move_uploaded_file($image_tmp,"../im/$image");
           if(mysqli_query($link,"insert into book (name,cat,price,img) values('$name','$cat','$price','$image')"))
           {
           	    echo "<script>alert('Data Insert')</script>";
           }
           else
           {
           	      echo "<script>alert('Data Not Insert')</script>";
           }
     }
	?>
	</center>
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
