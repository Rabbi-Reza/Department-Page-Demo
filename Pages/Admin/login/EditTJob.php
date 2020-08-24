
<?php


ob_start();
session_start();
if($_SESSION['name']!='Nirzhor')
{
	header('location: ../../admin');
}
include('connection.php');


	$id= $_GET['editvalue'];
	

	
	       $tname = $_POST['tname'];
		   
     	   $degree = $_POST['degree'];
		   
		   $Desig = $_POST['Desig'];
		   
     	   $dtype  = $_POST['dtype'];
		   
		   $email = $_POST['email'];
		   
     	   $phn = $_POST['phn'];
		   
     	   $build = $_POST['build'];
		   
		   $Bname1 = $_POST['Bname1'];
		   
     	   $floor = $_POST['floor'];
		   
     	   $room = $_POST['room'];
		   
		   $gend = $_POST['gend'];
		   
		   $tblood = $_POST['tblood'];

	$conn=mysqli_connect("localhost","root", "") or die("Not connectd");
	mysqli_select_db($conn,"gm2019bu");
	
	$query="UPDATE teachergm set tname='$tname'
	, degree='$degree', Desig='$Desig', Dtype='$dtype', email='$email',phn='$phn', build='$build',Bname1='$Bname1', floor='$floor',room='$room',gend='$gend',tblood='$tblood'
	WHERE id=$id";
	$result=mysqli_query($conn,$query);
	if($result){
	 header('location:FacTechSE.php');
	}
	
?>