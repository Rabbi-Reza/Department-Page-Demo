
<?php


ob_start();
session_start();
if($_SESSION['name']!='Nirzhor')
{
	header('location: ../../admin');
}
include('connection.php');


	$id= 1;
	

	
	       $UnivAddr = $_POST['UnivAddr'];
		   
     	   $UnivPhn = $_POST['UnivPhn'];
		   
		   $UnivFax = $_POST['UnivFax'];
		   
     	   $UnivEmail = $_POST['UnivEmail'];
		   
		   $UnivWeb1 = $_POST['UnivWeb1'];
		   
     	   $UnivWeb2 = $_POST['UnivWeb2'];
		   

	$conn=mysqli_connect("localhost","root", "") or die("Not connectd");
	mysqli_select_db($conn,"gm2019bu");
	
	$query="UPDATE contactgm set UnivAddr='$UnivAddr'
	, UnivPhn='$UnivPhn', UnivFax='$UnivFax', UnivEmail='$UnivEmail', UnivWeb1='$UnivWeb1',UnivWeb2='$UnivWeb2'
	WHERE Id=$id";
	
	$result=mysqli_query($conn,$query);
	if($result){
				echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('University Contact data Updated Successfully.')
        window.location.href='ahome.php'
        </SCRIPT>");
	}
	
?>