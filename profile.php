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

    
          <div style="margin-left: 400px">
          <?php

require_once 'connection.php';
 //$client_no=rand(1010,100000);
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
    
    $client_no=rand(1010,100000);
    $sql_query = "INSERT INTO profile (First_Name, Middle_Name, Last_Name,Gender,age,DOB,city,religion,Address,cnic,Contact,email,Marital_Status,client_no)
     VALUES ('$First_Name', '$Middle_Name', '$Last_Name','$Gender','$Age','$DOB','$City','$Religion','$Address','$CNIC','$Contact','$Email','$Marital_Status','$client_no')";
    
    
    //$sql_query="INSERT INTO profile (client_no)VALUES('$client_no')";
    if($conn->query($sql_query) === TRUE)
    {
        echo"This is your Client number";
        echo "$client_no";
    
        
        
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