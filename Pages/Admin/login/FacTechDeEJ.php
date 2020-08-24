
<?php


ob_start();
session_start();
if($_SESSION['name']!='Nirzhor')
{
	header('location: ../../admin');
}
include('connection.php');


	$id= $_GET['editvalue'];
	

	
	     
		   
		   $des = $_POST['descrip'];

	$conn=mysqli_connect("localhost","root", "") or die("Not connectd");
	mysqli_select_db($conn,"gm2019bu");
	
	$query="UPDATE teachergm set descrip='$des' WHERE id=$id";
	$result=mysqli_query($conn,$query);
	if($result){
		
		echo ("<SCRIPT LANGUAGE='JavaScript'>
       
	  
       window.location.href='FacTechDes.php?des=$id'
        </SCRIPT>");
exit();
		
	 header('location:FacTechSE.php');
	 
	 
	}
	
?>