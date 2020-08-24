<?php
ob_start();
session_start();
if($_SESSION['name']!='Nirzhor')
{
header('location: ../../admin');
}
include('connection.php');

     $link=mysqli_connect('localhost','root','','gm2019bu');

		   $c=$_GET['Pub'];
		   
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
    <title>Publications of <?php echo "$tname"; ?></title>

    
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
							
                            <li ><a href="../../../Pages/Faculty"><b>Faculty</b> </a></li> 
							
							<li><a href="../../../Pages/Research"><b>Research </b></a></li> 
							
							<li><a href="../../../Pages/News"> <b>News & Agenda </b></a></li> 
							
                            <li><a href="../../../Pages/Contact"> <b>Contact </b> </a></li>
							
							<li ><a href="logout.php"><b><i>Logout</i></b></a></li>
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

		   <div class="container col-lg-1 ">
		   </div>
		   
		   <div class="container col-lg-10 ">
			 
             <h3><b> <?php echo "$tname"; ?> </b>  <a class="btn btn-large btn-success" href="FacTechSE.php"><b> Back to Previous </b></a></h3><br>
			 
			  
                
				<hr>	
						<h4><b>Detail </b>  </h4>
				<hr>
				
				   <table class="table">

                         <thead>
                             <tr>
							 <center>
                                
                                 <th> <center>Title</center></th>
								 <th> <center>Publish Date</center></th>
								 <th> <center>View Journel</center></th>
								 <th> <center>View Pdf</center></th>

								 <th> <center>Edit</center></th>
								 <th> <center>Delete</center></th>
                             </tr>

                         </thead>

                            <tbody> 
							
 
							
			<?php 
			
				while ($row=mysqli_fetch_array($result)) {
					
                 $id=$row['Id'];
				$PuID=$row['PuID'];
				$PuJour=$row['PuJour'];
				$PuPdf=$row['PuPdf'];
				 
				 
     		echo "<tr> <center>";
			    
				
			    echo "<td><center><b style='color: black;font-size: 17px'>".$row['PuTitle']."</b></center></td>";
     			
                echo "<td><center style='color: black;font-size: 17px'>".$row['PuDate']."</center></td>";
				 
     		    echo "<td> <center>"."$PuJour"." </center></td>";
				echo "<td> <center>"."$PuPdf"." </center></td>";
     			 
     			echo "<td>"."<a class='btn btn-default 'href='EditPub.php?edit=$PuID'>Edit</a>"."</td>";
     			echo "<td>"."<a class='btn btn-default 'href='ConfirmPdel.php?delete=$PuID'>Delete</a>"."</td>";
     		echo "</center></tr>";
     	}
     	?>

                 



                          </tbody>

                    </table>
					<hr>
				<?php echo "<a style='background-color:#ff4d4d;color: black;font-size: 17px;font-weight: bold;' class='btn btn-large btn-success' href='FacTechAPub.php?id=$c'> Add More Publication </a><br>"; ?> 
				
				<br>
	
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
