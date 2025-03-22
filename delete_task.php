<?php
require 'db.php';

if(isset($_REQUEST["delete"])){
	$tid1=$_REQUEST['delete'];
	$sqldel="delete from tasks where id=$tid1";
	
	if(mysqli_query($conn,$sqldel)){
		
		
        echo"<script>alert('Successfully delete!)</script>";
		echo"<script>window.location='index.php'</script>";
		
		
	}
}
?>

<?php
require 'db.php';

if(isset($_REQUEST["delete"])){
	$tid1=$_REQUEST['delete'];
	$sqldel="delete from completed where id=$tid1";
	
	if(mysqli_query($conn,$sqldel)){
		
		
        echo"<script>alert('Successfully delete!)</script>";
		echo"<script>window.location='index.php'</script>";
		
		
	}
}
?>