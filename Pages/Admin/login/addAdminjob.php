 <?php
ob_start();
session_start();
if($_SESSION['name']!='Nirzhor')
{
header('location: ../../admin');
}
include('connection.php');
?>

	<?php
	
	$link=mysqli_connect('localhost','root','','gm2019bu');
	
	
	
     if(isset($_POST['Adsub']))
     {
		 
		 if (!$_POST['adName'] | !$_POST['adUser'] | !$_POST['adEmail'] | !$_POST['adphn'] | !$_POST['adPass']  | !$_POST['adagPass'] | !$_POST['Adgend'] )
 {
	 	 
	 
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You did not complete all of the required fields')
        window.location.href='addAdmin.php'
        </SCRIPT>");
exit();

 }
     

	 
     	   $adName = $_POST['adName'];
		   
     	   $adUser = $_POST['adUser'];
		   
     	   $adEmail = $_POST['adEmail'];
		   
		   $adphn = $_POST['adphn'];
		   
     	   $adPass = $_POST['adPass'];
		   
     	   $adagPass = $_POST['adagPass'];
		   
		   $Adgend = $_POST['Adgend'];
		   
		   $AdType = $_POST['AdType'];
		   
		 if ( $adPass != $adagPass )
 {
	 	 
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Password don't match')
       
        </SCRIPT>");
		
		header('location: addAdmin.php');
exit();

 }

		   
           if( mysqli_query($link,"insert into admingm (adName,un,adEmail,adphn,ps,adagPass,Adgend,type) values('$adName','$adUser','$adEmail','$adphn','$adPass','$adagPass','$Adgend','$AdType')"))
           {
			  
		
           	    echo "<script>window.alert('Data Inserted')
				window.location.href='ahome.php'</script>";
				
			
           }
		   
           else
           {
           	      echo "<script>window.alert('Data Not Inserted')</script>";
				  
				  header('location: addAdmin.php');
           }
     }
	?>