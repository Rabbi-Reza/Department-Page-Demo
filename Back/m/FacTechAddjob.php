 <?php
ob_start();
session_start();
if($_SESSION['name']!='Nirzhor')
{
	header('location: index.php');
}
include('connection.php');
?>

	<?php
	
	$link=mysqli_connect('localhost','root','','gm2019bu');
	
	
	
     if(isset($_POST['sub']))
     {
		 
		 if (!$_POST['tname'] | !$_POST['degree'] | !$_POST['email'] | !$_POST['phn'] | !$_POST['build']  | !$_POST['room']  )
 {
	 	 if ($_POST['Desig'] =='--- select ---' | $_POST['Bname1'] =='--- select ---'  | $_POST['floor'] =='--- select ---' | $_POST['gend'] =='--- select ---'  )
 {
	 
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You did not complete all of the required fields')
        window.location.href='FacTechAdd.php'
        </SCRIPT>");
exit();

 }
     }

	 
     	   $tname = $_POST['tname'];
		   
     	   $degree = $_POST['degree'];
		   
     	   $Desig = $_POST['Desig'];
		   
		   $email = $_POST['email'];
		   
     	   $phn = $_POST['phn'];
		   
     	   $build = $_POST['build'];
		   
		   $Bname1 = $_POST['Bname1'];
		   
     	   $floor = $_POST['floor'];
		   
     	   $room = $_POST['room'];
		   
		   $gend = $_POST['gend'];
		   
		   $descrip = $_POST['descrip'];
		   
     	    
		   
     	   $image=$_FILES['timg']['name'];
		   
           $image_tmp=$_FILES['timg']['tmp_name'];
		  
           
		  
	       move_uploaded_file($image_tmp,"../Images/Faculty/$image");
		   
           if( mysqli_query($link,"insert into teacherGM (tname,degree,Desig,email,phn,build,Bname1,floor,room,gend,descrip,timg) values('$tname','$degree','$Desig','$email','$phn','$build','$Bname1','$floor','$room','$gend','$descrip','$image')"))
           {
           	    echo "<script>alert('Data Inserted')</script>";
				
				header('location: ahome.php');
           }
		   
           else
           {
           	      echo "<script>alert('Data Not Inserted')</script>";
				  
				  header('location: FacTechAdd.php');
           }
     }
	?>