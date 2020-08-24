<?php
     $id = $_GET['delete'] ;
     $conn=mysqli_connect('localhost','root','');
     mysqli_select_db($conn,"gm2019bu");
	 
	 $query1="SELECT * FROM publication WHERE PuID= $id";
     $result1=mysqli_query($conn,$query1);
	 
	 while ($row=mysqli_fetch_array($result1)) 
	        {
    	
        
		   $PuPdf=$row['PuPdf'];
		   
             $myFile = "../../../Files/PDF/$PuPdf";
           unlink($myFile) or die("Couldn't delete file");
		    
     	    }
	  
     $query="DELETE FROM publication where PuID=$id";
	 
     $result=mysqli_query($conn,$query);
	 
	 
         if($result){
	          header('location:FacTechSE.php');

         }



?>
