 <?php
ob_start();
session_start();
if($_SESSION['name']!='Nirzhor')
{
	header('location: ../../admin');
}
include('connection.php');

     $id=$_GET['edit']; 
	 
     $conn=mysqli_connect("localhost","root","") ;
     mysqli_select_db($conn,"gm2019bu");
     $query="SELECT * FROM teachergm WHERE id= $id";
     $result=mysqli_query($conn,$query);
	 
	 while ($row=mysqli_fetch_array($result)) {
    	
          $tname = $row['tname'];
		   
     	   $degree =$row['degree'];
		   
     	   $Desig = $row['Desig'];
		   
		   $dtype = $row['Dtype'];
			
		   $email = $row['email'];
		   
     	   $phn = $row['phn'];
		   
     	   $build = $row['build'];
		   
		   $Bname1 = $row['Bname1'];
		   
     	   $floor = $row['floor'];
		   
     	   $room = $row['room'];
		   
		   $gend = $row['gend'];
		   
		    $tblood = $row['tblood'];
		   
		   $descrip = $row['descrip'];
  }

 ?>


 

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="Images/Univ/bu.jpg" type="image/png"/>
    <title>Edit Data</title>

    
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
			  

			<h2>  Update The data of <b><?php echo "$tname"; ?> </b>  ??</h2>
			
			<div class="container" >
	<br><br><center>
	
	<form action="EditTJob.php" method="post" >
	</form>
	
		<form action="EditTJob.php?editvalue=<?php echo $id?>" method="post">
		<table>
		
			<tr>
				<td width="200px" height="50px"><b>Teacher's Name</b></td>
				<td width="200px" height="50px"><input type="text" name="tname" value="<?php echo $tname ?>"></td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Last Degree</b></td>
				<td width="200px" height="50px"><input type="text" name="degree" value="<?php echo $degree ?>"></td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Select Designation</b></td>
				<td width="250px" height="50px">
					<select name="Desig">
					
								   <option <?php echo ($Desig == 'Professor')?"selected":"" ?> >Professor</option>
								   <option <?php echo ($Desig== 'Assistant Professor')?"selected":"" ?> >Assistant Professor</option>
								   <option <?php echo ($Desig == 'Lecturer')?"selected":"" ?> >Lecturer</option>
								   <option <?php echo ($Desig == 'Professor ( On leave )')?"selected":"" ?> >Professor ( On leave )</option>
								   <option <?php echo ($Desig== 'Assistant Professor  ( On leave )')?"selected":"" ?> >Assistant Professor  ( On leave )</option>
								   <option <?php echo ($Desig == 'Lecturer  ( On leave )')?"selected":"" ?> >Lecturer  ( On leave )</option>
						

					</select>
				</td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Select Designation type</b></td>
				<td width="250px" height="50px">
					<select name="dtype">
					
								   <option <?php echo ($dtype == 'Chairman')?"selected":"" ?> >Chairman</option>
								   <option <?php echo ($dtype== 'Chairman ( Acting )')?"selected":"" ?> >Chairman ( Acting )</option>
								   <option <?php echo ($dtype == 'Member')?"selected":"" ?> >Member</option> 
								   <option <?php echo ($dtype == 'Student Advisor')?"selected":"" ?> > Student Advisor</option>

						

					</select>
				</td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Email</b></td>
				<td width="200px" height="50px"><input type="email" name="email" value="<?php echo $email ?>"></td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Phone Number </b></td>
				<td width="200px" height="50px"><input type="text" name="phn" value="<?php echo $phn ?>"></td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Building Name </b></td>
				<td width="200px" height="50px"><input type="text" name="build" value="<?php echo $build?>"></td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Select Building Name</b></td>
				<td width="250px" height="50px">
					
						
						<select name="Bname1">
								   <option <?php echo ($Bname1 == 'Academic 1')?"selected":"" ?> >Academic 1</option>
								   <option <?php echo ($Bname1 == 'Academic 2')?"selected":"" ?> >Academic 2</option>
								   <option <?php echo ($Bname1 == 'Administrative 1')?"selected":"" ?> >Administrative 1</option>
								   <option <?php echo ($Bname1 == 'Administrative 2')?"selected":"" ?> >Administrative 2</option>
						</select> 

			 
				</td>
			</tr>
		 
		
			<tr>
				<td width="200px" height="50px"><b>Select Floor Number</b></td>
				<td width="250px" height="50px">
					<select name="floor">
		
								   <option <?php echo ($floor == 'Ground Floor')?"selected":"" ?> >Ground Floor</option>
								   <option <?php echo ($floor == '1st Floor')?"selected":"" ?> >1st Floor</option>
								   <option <?php echo ($floor == '2nd Floor')?"selected":"" ?> >2nd Floor</option>
								   <option <?php echo ($floor == '3rd Floor')?"selected":"" ?> >3rd Floor</option>
								   <option <?php echo ($floor == '4th Floor ')?"selected":"" ?> >4th Floor </option>
								   <option <?php echo ($floor == '5th Floor')?"selected":"" ?> >5th Floor</option>
						</select> 
				</td>
			</tr>
			
						<tr>
				<td width="200px" height="50px"><b>Select Blood Group</b></td>
				<td width="250px" height="50px">
					<select name="tblood">
		
								   <option <?php echo ($tblood == 'A+')?"selected":"" ?> >A+</option>
								   <option <?php echo ($tblood == 'A-')?"selected":"" ?> >A-</option>
								   <option <?php echo ($tblood == 'B+')?"selected":"" ?> >B+</option>
								   <option <?php echo ($tblood == 'B-')?"selected":"" ?> >B-</option>
								   <option <?php echo ($tblood == 'AB+')?"selected":"" ?> >AB+ </option>
								   <option <?php echo ($tblood == 'AB-')?"selected":"" ?> >AB-</option>
								   <option <?php echo ($tblood == 'O+')?"selected":"" ?> >O+</option>
								   <option <?php echo ($tblood == 'O-')?"selected":"" ?> >O-</option>
						</select> 
				</td>
			</tr>
			
			<tr>
				<td width="200px" height="50px"><b>Room Number </b></td>
				<td width="200px" height="50px"><input type="text" name="room" value="<?php echo $room ?>"></td>
			</tr>
			

			
			<tr>
				<td width="200px" height="50px"><b>Gender</b></td>
				
				<td width="200px" height="50px">
				
				<select name="gend">
				
								   <option <?php echo ($gend== 'Male')?"selected":"" ?> >Male</option>
								   <option <?php echo ($gend == 'Female')?"selected":"" ?> >Female</option>
 
		
				</select>
				  
				
				</td>
			</tr>
			
		
			<tr>
			<hr>
				<td><b><input type="submit" name="sub" value="Update"></b>  <a class="btn" href="FacTechSE.php"><b> Cancel </b></a></td>
			</tr>
			
		</table>
	</form>
	 
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
