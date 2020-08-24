
<?php


ob_start();
session_start();
if($_SESSION['name']!='Nirzhor')
{
	header('location: ../../admin');
}
include('connection.php');


	$id= $_GET['editval'];
	

	
	       $PuTitle = $_POST['PuTitle'];
		   
     	   $PuDate = $_POST['PuDate'];
		   
		   $PuJour = $_POST['PuJour'];
		   
     	   

	$conn=mysqli_connect("localhost","root", "") or die("Not connectd");
	mysqli_select_db($conn,"gm2019bu");
	
	$query="UPDATE publication set PuTitle='$PuTitle' , PuDate='$PuDate', PuJour='$PuJour'
	WHERE PuID = $id";
	$result=mysqli_query($conn,$query);
	if($result){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
       
	   window.alert('Data Updated.. You Can update the pdf also. ')
        window.location.href='EditPub.php?edit=$id'
        </SCRIPT>");
exit();
		
	 
	}
	
?>