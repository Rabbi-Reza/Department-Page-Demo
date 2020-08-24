<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="Files/Images/Univ/bu.jpg" type="image/png"/>
    <title>Welcome</title>

    
    <script src="support/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap -->

    <link href="support/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="support/css/myCSS.css" rel="stylesheet" />
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
                    <a  style = "padding:5px 15px;" class=" navbar-brand" href="home.php"><span><img alt ="Logo" class="img-circle"  src="Files/Images/Univ/bu.jpg" height="43" width="42" /></span> 
					<font face="Aharoni" color="black" size="5"> Department of Geology & Mining </font> </a>
                </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
						
                            <li class="active"><a style="background-color:#bfff80;color:red;font-weight: bold;font-size: 18px;" href="home.php">Home</a></li>
							
					<li class="dropdown">
                           
 
					    <a href="#" class="dropdown" > <b>News & Agenda </b> </a>
						   
                              <div class="dropdown-content">
							  
										<center>
										<a href="Pages/News/News" style="font-family: Georgia"><b>News</b></a>
										<a href="Pages/News/Agenda" style="font-family: Georgia"><b>Agenda</b></a>
										</center>
										
					  		  </div>
							
                        </li>
						
							<li><a href="Pages/Education"><b>Education </b></a></li>
							
                            <li><a href="Pages/Faculty"><b>Faculty </b></a></li> 
							
							<li><a href="Pages/Research"><b>Research </b></a></li> 
							
			
						
							
                            <li><a href="Pages/Contact"> <b>Contact </b> </a></li>

                        </ul>

                    </div>

            </div>
        </div> 

		<style>
 
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
        <!--Top Navigation bar End-->
            
               
        <!-- Carousel Start -->

         <div align="center">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" >

            <div class="item active" role="listbox">
              <img src="Files/Images/Mix/Carousel/img1.jpg" alt="..."   width="1200">
              <div class="carousel-caption">
                 <h3>Oscen</h3>
                  <p>This is a picture of oscen.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Visit</a> </p>
              </div>
            </div>

            <div class="item">
              <img src="Files/Images/Mix/Carousel/img2.jpg" alt="..."   width="1200">
              <div class="carousel-caption">
                  <h3>Car</h3>
                  <p>This is a car in field.</p>
              </div>
            </div>
     
               <div class="item">
              <img src="Files/Images/Mix/Carousel/img3.jpg" alt="..."  width="1200">
              <div class="carousel-caption">
                <h3>City</h3>
                  <p>This is beautiful city.</p>
              </div>
            </div>

               <div class="item">
              <img src="Files/Images/Mix/Carousel/img4.jpg" alt="..."  width="1200">
              <div class="carousel-caption">
                <h3>Colors</h3>
                  <p>There are colors.</p>
              </div>
            </div>

               <div class="item">
              <img src="Files/Images/Mix/Carousel/img5.jpg" alt="..."  width="1200" height="900">
              <div class="carousel-caption">
                <h3>Space</h3>
                  <p>This is space.</p>
              </div>
            </div>

  </div>

  <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

</div>

             </div>
        <!-- Carousel End-->

    </div>


        <hr />

             <br />
             <br /> 
        
              <!-- Middle Contents Start -->
           

        <div class="container center">

            <div class="row">

                

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
                    <a href="pages/admin/"> &copy; </a>
                        2018 Department of Geology & Mining 

                      &middot; 
                            <a href="home.php"> Home </a>
                      &middot;
                            <a href="Pages/Education">Education</a>
                      &middot; 
                            <a href="Pages/Faculty">Faculty</a>
                      &middot; 
                            <a href="Pages/Research">Research</a>
					  &middot; 
                            <a href="Pages/News">News & Agenda</a>
                      &middot; 
                            <a href="Pages/Contact">Contact</a>
							

                </p>


             </div>
         </footer>
        <!-- Footer End-->

         

    </form>

 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="support/js/bootstrap.min.js"></script>
</body>
</html>
