<?php
include ('header.html');
?>
<!DOCTYPE html>
<html >
<head>
    <title>Life Insurance</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>

   
          <?php

require_once 'connection.php';
 
if($_POST) 
{


    $Installment_Amount = $_POST['Installment_Amount'];
    $client_no= $_POST['client_no'];
    
    // $sql_query = "INSERT INTO profile SET installment='$Installment_Amount' Where  client_no='$client_no' ";
    $sql_query = "UPDATE profile SET  Installment_Amount='$Installment_Amount' Where client_no='$client_no' "; 
    
    if($conn->query($sql_query) === TRUE)
    {
        echo"Your Installment Data is submitted";
    
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
