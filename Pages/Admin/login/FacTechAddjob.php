 <?php
ob_start();
session_start();
if($_SESSION['name']!='Nirzhor')
{
header('location: ../../admin');
}
include('connection.php');

	
	$link=mysqli_connect('localhost','root','','gm2019bu');
	
	
	
     if(isset($_POST['sub']))
     {
		 
		 if (!$_POST['tname'] | !$_POST['tcard'] | !$_POST['degree'] | !$_POST['email'] | !$_POST['phn'] | !$_POST['build']  | !$_POST['room']  )
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
		   
		    $tcard = $_POST['tcard'];
		   
     	   $degree = $_POST['degree'];
		   
     	   $Desig = $_POST['Desig'];
		   
		   $dtype = $_POST['dtype'];
		   
		   $email = $_POST['email'];
		   
     	   $phn = $_POST['phn'];
		   
     	   $build = $_POST['build'];
		   
		   $Bname1 = $_POST['Bname1'];
		   
     	   $floor = $_POST['floor'];
		   
     	   $room = $_POST['room'];
		   
		   $gend = $_POST['gend'];
		   
		   $tblood = $_POST['tblood'];
		   
		   $descrip = $_POST['descrip'];
		   
     	    
		   
     	   $image=$_FILES['timg']['name'];
		   
           $image_tmp=$_FILES['timg']['tmp_name'];
		  
           $image = $image.'-'.$tcard;
		  
	       move_uploaded_file($image_tmp,"../../../Files/Images/Faculty/$image");
		   
           if( mysqli_query($link,"insert into teacherGM (tname,tcard,degree,Dtype,Desig,email,phn,build,Bname1,floor,room,gend,tblood,descrip,timg) values('$tname','$tcard ','$degree','$dtype','$Desig','$email','$phn','$build','$Bname1','$floor','$room','$gend','$tblood','$descrip','$image')"))
           {

				echo ("<SCRIPT LANGUAGE='JavaScript'>
       
	   window.alert('Data Inserted .. You Can Add other Data also. ')
        window.location.href='FacTechAddMore.php?tc=$tcard'
        </SCRIPT>");
exit();
           }
		   
           else
           {
			   echo ("<SCRIPT LANGUAGE='JavaScript'>
       
	   window.alert('Data Not Inserted')
        window.location.href='FacTechAdd.php'
        </SCRIPT>");
exit();

           	     
           }
     }
	?>