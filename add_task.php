<?php
require 'db.php';



if($_REQUEST){
		
		
    $task_name=$_REQUEST['task_name'];

    
    
$sqlr="Insert into tasks (task_name) VALUES
    ('$task_name')";
    

	
    if(mysqli_query($conn,$sqlr)){
		
		echo"<script>alert('Successfully add!)</script>";
		echo"<script>window.location='index.php'</script>";
	}
	else{
		
		echo"error" . $sqlr."<br>".mysqli_error($conn);
		
	}
	mysqli_close($conn);

}




?>
<?php
require 'db.php';

if($_REQUEST){
		
		
    $task_name=$_REQUEST['task_name'];

    
    
$sqlr1="Insert into completed (task_name) VALUES
    ('$task_name')";
    

	
    if(mysqli_query($conn,$sqlr1)){
		
		echo"<script>alert('Successfully add!)</script>";
		echo"<script>window.location='index.php'</script>";
	}
	else{
		
		echo"error" . $sqlr1."<br>".mysqli_error($conn);
		
	}
	mysqli_close($conn);

}

?>
