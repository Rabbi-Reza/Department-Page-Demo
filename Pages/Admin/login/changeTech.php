<?php
     $id = $_GET['Cimg'] ;
     $conn=mysqli_connect('localhost','root','');
     mysqli_select_db($conn,"gm2019bu");
	 
	 $query1="SELECT * FROM teachergm WHERE id= $id";
     $result1=mysqli_query($conn,$query1);
	 
	 while ($row=mysqli_fetch_array($result1)) 
	        {
    	
             $image = $row['timg'];
		   
             $myFile = "../../../Files/Images/Faculty/$image";
           unlink($myFile) or die("Couldn't delete file");
		    
     	    }
	  
      $image_tmp=$_FILES['timg']['tmp_name'];
		  
           
		  
	       move_uploaded_file($image_tmp,"../../../Files/Images/Faculty/$image");
	 
     
	 
         if($result1){
	          header('location:FacTechSE.php');

         }



?>