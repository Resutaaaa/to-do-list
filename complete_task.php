<?php
require 'db.php';

if(isset($_REQUEST["complete"])){
	$tid1=$_REQUEST['complete'];
	$sqldel="update completed set is_completed=1 WHERE id=$tid1";
	
	if(mysqli_query($conn,$sqldel)){
		
		
        echo"<script>alert('Successfully delete!)</script>";
		echo"<script>window.location='index.php'</script>";
		
		
	}
}
?>


<?php
require 'db.php';

if(isset($_REQUEST["complete"])){
	$tid1=$_REQUEST['complete'];
	$sqldel="delete from tasks where id=$tid1";
	
	if(mysqli_query($conn,$sqldel)){
		
		
        echo"<script>alert('Successfully delete!)</script>";
		echo"<script>window.location='index.php'</script>";
		
		
	}
}
?>