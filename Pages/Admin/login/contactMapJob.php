
<?php


ob_start();
session_start();
if($_SESSION['name']!='Nirzhor')
{
	header('location: ../../admin');
}
include('connection.php');


	$id= 1;
	

		   $locationMap = $_POST['locationMap'];

	$conn=mysqli_connect("localhost","root", "") or die("Not connected");
	mysqli_select_db($conn,"gm2019bu");
	
	$query="UPDATE contactgm set locationMap='$locationMap' WHERE Id = $id";
	$result=mysqli_query($conn,$query);
	if($result){

		
	 header('location:contactMap.php');
	}
	
?>