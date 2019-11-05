<?php
include ('admin_header.html');
?>
<!DOCTYPE html>
<html >
<head>
    <title>Life Insurance</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>

    
    
          <div style="margin-left: 400px">
          <?php

require_once 'connection.php';
 
if($_POST) 
{

    $First_Name = $_POST['First_Name'];
    $Middle_Name = $_POST['Middle_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Gender = $_POST['Gender'];
    $Age = $_POST['age'];
    $DOB = $_POST['DOB'];
    $City = $_POST['city'];
    $Religion = $_POST['religion'];
    $Address = $_POST['Address'];
    $CNIC = $_POST['cnic'];
    $Contact = $_POST['Contact'];
    $Email = $_POST['email'];
    $Marital_Status = $_POST['Marital_Status'];
    $Policy_type = $_POST['Policy_type'];
    $client_no= $_POST['client_no'];
    
    $sql_query = "UPDATE profile SET  Policy_type='$Policy_type' , First_Name='$First_Name' , Middle_Name='$Middle_Name', Last_Name='$Last_Name',
    Gender='$Gender', age='$Age' , DOB='$DOB' ,city='$City', religion='$Religion', Address='$Address', cnic='$CNIC', Contact='$Contact', email='$Email',
    Marital_Status='$Marital_Status'
    Where client_no='$client_no' "; 
    
    
    if($conn->query($sql_query) === TRUE)
    {
        echo"Your Insurance Data is updated";
    
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