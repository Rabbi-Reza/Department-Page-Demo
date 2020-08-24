 <?php
ob_start();
session_start();
if($_SESSION['name']!='Nirzhor')
{
header('location: ../../admin');
}
include('connection.php');

	
	$link=mysqli_connect('localhost','root','','gm2019bu');
	

   $id = $_GET['id'];
   

		
	

	
     if(isset($_POST['Psub']))
     {
		 
		 if ( !$_POST['Ptitle'] | !$_POST['Pdate'] | !$_POST['Pjour']  )
 {
	 	
	 
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You did not complete all of the required fields')
        window.location.href='FacTechAPub.php?id=$id'
        </SCRIPT>");
exit();

 }
    

	 
     	   $Ptitle = $_POST['Ptitle'];
		   
		    $Pdate = $_POST['Pdate'];
		   
     	   $Pjour = $_POST['Pjour'];
		   
     	   
     	   $Ppdf=$_FILES['Ppdf']['name'];
		   
           $Ppdf_tmp=$_FILES['Ppdf']['tmp_name'];
		  
           $Ppdf = $Ptitle.'-'. $Ppdf .'-'.$Pdate.'.pdf ';
		  
	       move_uploaded_file($Ppdf_tmp,"../../../Files/PDF/$Ppdf");
		   
if( mysqli_query($link,"insert into publication (Id,PuTitle,PuDate,PuJour,PuPdf) values('$id','$Ptitle ','$Pdate','$Pjour','$Ppdf')"))
           {

				echo ("<SCRIPT LANGUAGE='JavaScript'>
       
	   window.alert('Data Inserted .. You Can See now. ')
       window.location.href='FacTechPub.php?Pub=$id'
        </SCRIPT>");
exit();
           }
		   
           else
           {
			   echo ("<SCRIPT LANGUAGE='JavaScript'>
       
	   window.alert('Data Not Inserted')
        window.location.href='FacTechAPub.php?id=$id'
        </SCRIPT>");
exit();

           	     
           }
     }
	?>