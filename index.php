
<?php
include_once 'db.php';
include 'add_task.php';


$conn=mysqli_connect($host,$user,$password,$dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    
</head>
    
<body>


<main>


    <form method="POST" action="add_task.php">
    <content>
    <div class="left">
    <h1>Todo List</h1>
    <br>
    <p>New task</p>
</div>

    <div class="right">
        <div class="list">
        <h1>  New Task</h1>     
            <input type="text" name="task_name" placeholder=" task" required><br>
            <button type="submit">Add Task</button>

            <h1>Task List</h1>
        <?php 

            
                        
            
        
            $ctr=1;
            $sqls="Select * from tasks";
                $results = mysqli_query($conn,$sqls);	
                                
                                    while($rows=mysqli_fetch_array($results)){
                                        $ctr++;
                                        extract($rows);
                                                                   
                                        echo"

                                            <table style='border: solid lightgray 1px;border-radius:5px;background-color:white;height:30px;width:99%;padding:4px'>
                                            <td style='width:90%'>$task_name</td>	
                                            <td style='background-color:green;padding:3px;border:solid black 1px;'><a href='complete_task.php?complete=$id'  style='text-decoration:none;text-align:center;color:white;'>complete</a></td>		
                                            <td style='background-color:red;padding:3px;border:solid black 1px;'><a href='delete_task.php?delete=$id'  style='text-decoration:none;color:white;text-align:center'>delete</a></td>		
                                            </table>

                                        ";	 																						
                                    }
                                

            
        
        ?>


        <h1>complete tasks</h1>
            <?php 

            
                        
            
        
        $ctr=1;
        $sqls="Select * from completed where is_completed='1'";
            $results = mysqli_query($conn,$sqls);	
                            

                                while($rows=mysqli_fetch_array($results)){
                                    $ctr++;
                                    extract($rows);


                                                                
                                    echo"
                                    
                                      <table style='border: solid lightgray 1px;border-radius:5px;background-color:white;height:30px;width:99%;padding:4px'>
                                            <td><del>$task_name</del></td>	
                                            </table>
                                    ";																							
                                }
                                    

            
        
        ?>
        </div>
    </div>

    </content> 

</form>


    </main>

</body>

</html>