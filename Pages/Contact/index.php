 <?php

		$link=mysqli_connect('localhost','root','','gm2019bu');
		
		  $c="ContactMap1";
		   
          $q="select * from ContactGM where ContactMap like '$c'";
		  
        $run=mysqli_query($link,$q);
		
        while($row=mysqli_fetch_array($run))
        {
         
		 $id=$row['Id'];
		 
         $locationMap = $row['locationMap'];
		 	 
		 $offBuild = $row['offBuild'];
		 $offFloor = $row['offFloor'];
		 $offRoom = $row['offRoom'];
		 
		 $offPhn1 = $row['offPhn1'];
		 $offFax1 = $row['offFax1'];
		 
		 $offPhn2 = $row['offPhn2'];
		  $offFax2 = $row['offFax2'];
		  
		  
		 $offMail = $row['offMail'];
		 $offWork = $row['offWork'];
		 $offWNoti = $row['offWNoti'];
		 $offLun = $row['offLun'];

	     $UnivAddr = $row['UnivAddr'];
		 $UnivPhn = $row['UnivPhn'];
		 $UnivFax = $row['UnivFax'];
		 $UnivEmail = $row['UnivEmail'];
		 $UnivWeb1 = $row['UnivWeb1'];
		 $UnivWeb2 = $row['UnivWeb2'];		 
		}
         
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="../../Files/Images/Univ/bu.jpg" type="image/png"/>
    <title>Contact</title>

    
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
							
                            <li ><a href="../../Pages/Faculty"><b>Faculty </b></a></li> 
							
							<li><a href="../../Pages/Research"><b>Research </b></a></li> 
							
							<li><a href="../../Pages/News"> <b>News & Agenda </b></a></li> 
							
                            <li class="active"><a style="background-color:#bfff80;color:red;font-weight: bold;font-size: 18px;" href="../../Pages/Contact"> Contact  </a></li>

                        </ul>

                    </div>

            </div>
        </div> 

        <!--Top Navigation bar End-->
        
               
         

    </div>


        <hr />

             
        
              <!-- Middle Contents Start -->
			  
            <div class="container">
			
			  <h2> Contact Us </h2>
			  <br>
			    <hr />
			  <h2> University Address </h2>
			  
			  <b> <?php echo "$UnivAddr "; ?> </b><br>
               <b>Phone:</b> <?php echo " <a href='tel:$UnivPhn'> $UnivPhn </a>"; ?><br>
              <b> Fax:</b> <?php echo " <a href='fax:$UnivFax'>$UnivFax </a> "; ?> <br>
			  <b> Email:</b> <?php echo " <a href='mailto:$UnivEmail'>$UnivEmail </a> "; ?> <br>
			  
              <b> WebSite 1:   </b> <?php echo "  <a href='$UnivWeb1'> $UnivWeb1</a>"; ?> <br>
              <b> WebSite 2:</b> <?php echo "  <a href='$UnivWeb2'> $UnivWeb2</a> "; ?> <br>
             
			 <br> 
			 
			 
			 <h2> Office Room </h2>
			 
			 <?php echo "$offBuild "; ?> <br>
              <?php echo "$offFloor "; ?> <br>
			 Room No : <?php echo "$offRoom "; ?> <br><br>
			 
			  <b> Phone: </b><?php echo " <a href='tel:$offPhn1'> $offPhn1 </a>"; ?>, <?php echo " <a href='tel:$offPhn2'> $offPhn2 </a>"; ?><br>
              <b> Fax: </b> <?php echo " <a href='fax:$offFax1'> $offFax1 </a> "; ?>, <?php echo " <a href='fax:$offFax2'> $offFax2 </a> "; ?> <br>
			  <b> Email: </b> <?php echo " <a href='mailto:$offMail'> $offMail</a>"; ?><br><br>
			  
			 <font color="green">  <b>Working hour :  </b> <?php echo "$offWork"; ?> </font>
			 <i><?php echo "$offWNoti"; ?> </i> <br>
			 
			 <b><p id="CurTime" style=""></p></b>  
			 
             <font color="red">  <b>Lunch hour :  </b> <?php echo "$offLun"; ?> </font><br>
			 
   
 
  
   
     
  <script>
var myVar = setInterval(myTimer, 10);

function myTimer() {
    var d = new Date();
    document.getElementById("CurTime").innerHTML = d.toLocaleTimeString();
}
</script>
			<hr>
                 <h2> Location on Map</h2>
			
				 <center>
         <?php echo "<iframe src='$locationMap'  width='600' height='450' frameborder='2' style='border:6' allowfullscreen></iframe>"; ?> 
                 </center>
       
	             <div>

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
