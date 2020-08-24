<?php
     $id = $_GET['Cpdf'] ;
     $conn=mysqli_connect('localhost','root','');
     mysqli_select_db($conn,"gm2019bu");
	 
	 $query1="SELECT * FROM publication WHERE PuID = $id";
     $result1=mysqli_query($conn,$query1);
	 
	 while ($row=mysqli_fetch_array($result1)) 
	        {
    	       
		 $PuTitle = $row['PuTitle'];
         $PuPdf=$row['PuPdf'];
		 $Pdate = $row['PuDate'];
		
  
		   
             $myFile = "../../../Files/PDF/$PuPdf";
           unlink($myFile) or die("Couldn't delete file");
		    
     	    }
	  
           $PuPd=$_FILES['PuPdf']['name'];
		   
		  $Ppdf_tmp=$_FILES['PuPdf']['tmp_name'];
		  
           $Ppdf = $PuTitle.' '. $PuPd .' '.$Pdate.'.pdf ';
		  
	       move_uploaded_file($Ppdf_tmp,"../../../Files/PDF/$Ppdf");
		  
	 $query="UPDATE publication set PuPdf='$Ppdf' WHERE PuID = $id";
	$result=mysqli_query($conn,$query);
     
	 
         if($result){
	         echo ("<SCRIPT LANGUAGE='JavaScript'>
       
	   window.alert('Pdf file Updated.. You Can update the Publication Data also. ')
        window.location.href='EditPub.php?edit=$id'
        </SCRIPT>");
exit();

         }



?>