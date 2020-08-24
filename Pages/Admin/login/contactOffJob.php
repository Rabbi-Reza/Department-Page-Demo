
<?php


ob_start();
session_start();
if($_SESSION['name']!='Nirzhor')
{
	header('location: ../../admin');
}
include('connection.php');


	$id= 1;
	

	
	       $offBuild = $_POST['offBuild'];
		   
     	   $offFloor = $_POST['offFloor'];
		   
		   $offRoom = $_POST['offRoom'];
		   
     	   $offPhn1  = $_POST['offPhn1'];
		   
		   $offPhn2 = $_POST['offPhn2'];
		   
     	   $offFax1 = $_POST['offFax1'];
		   
     	   $offFax2 = $_POST['offFax2'];
		   
		   $offMail = $_POST['offMail'];
		   
     	   $offWork = $_POST['offWork'];
		   
     	   $offWNoti = $_POST['offWNoti'];
		   
		   $offLun = $_POST['offLun'];
		   
		

	$conn=mysqli_connect("localhost","root", "") or die("Not connectd");
	mysqli_select_db($conn,"gm2019bu");
	
	$query="UPDATE contactgm set offBuild='$offBuild'
	, offFloor='$offFloor', offRoom='$offRoom', offPhn1='$offPhn1', offPhn2='$offPhn2',offFax1='$offFax1',offFax2='$offFax2',offMail='$offMail', offWork='$offWork',offWNoti='$offWNoti',offLun='$offLun'
	WHERE Id=$id";
	$result=mysqli_query($conn,$query);
	if($result){
		
		echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Office Contact data Upadated Successfully.')
        window.location.href='ahome.php'
        </SCRIPT>");
exit();
	 
	}
	
?>