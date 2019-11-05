 <?php

require_once 'connection.php';
 
if($_POST) 
{


    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Password=$_POST['password'];
    
    $sql_query = "INSERT INTO login (name, password, email)
     VALUES ('$Name', '$Password', '$Email')";
    
   
    
    if($conn->query($sql_query) === TRUE)
    {
        echo "<script>window.location.assign('profiles.php');</script>";  
      
    } 
    else 
    {
        echo "Error " . $sql_query . ' ' . $conn->error;
    }

    $conn->close();

   
}

?>

