<?php
include ('header.html');
?>
<!DOCTYPE html>
<html >
<head>
    <title>Life Insurance</title>
    
</head>
<body>

   
    

    
          <div style="margin-left: 400px">
          <?php

require_once 'connection.php';
 
if($_POST) 
{


    $Policy_type = $_POST['Policy_type'];
    $client_no= $_POST['client_no'];
    
    $sql_query = "UPDATE profile SET  Policy_type='$Policy_type' Where client_no='$client_no' "; 
    
    
    if($conn->query($sql_query) === TRUE)
    {
        echo"Your Insurance Data is submitted";
    
    } 
    else 
    {
        echo "Error " . $sql_query . ' ' . $conn->error;
    }

    $conn->close();

   
}

?>
</div>
</body>
</html>

<?php
include ('footer.html');
?>