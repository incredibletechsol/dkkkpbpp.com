<?php
include('conn.php');//para sa connection sang database

if (isset($_POST['submit'])) 
{
	$UserName=$_POST['username'];
	$Password=$_POST['password'];
	$result=mysql_query("select * from tbl_login where UserName='$UserName' and Password='$Password'")or die (mysql_error()); 
			
	$count=mysql_num_rows($result);
	$row=mysql_fetch_array($result);
			
			if ($count > 0)
				{
				session_start();
				$_SESSION['member_id']=$row['member_id'];
				$_SESSION['username']=$row['UserName'];
				$_SESSION['firstname']=$row['FirstName'];
				$_SESSION['lastname']=$row['LastName'];
				$_SESSION['flag']=$row['flag'];		
				$name=$_SESSION['firstname']."  ".$_SESSION['lastname'];
				date_default_timezone_set('Asia/Kolkata'); 
				$dateandtime=date('D, d M Y H:i:s T');
				if($row['flag']=="Y")
					header('location:faculty.php');
				else
					header('location:generaldownloads.php');
				}	
			else
				{
				header('location:index.php?msg=failed');
				}
}
?>

