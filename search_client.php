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

   
        
    <?php

require_once 'connection.php';
 
    
    if($_POST){
        $client_no= $_POST['client_no'];
         $sql = "SELECT * FROM profile where client_no='$client_no'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
        echo "<table border=\"1\" style=\"border-collapse: collapse;\" >";
            echo "<tr>";
                echo "<th>ID &nbsp; &nbsp; &nbsp; &nbsp;  </th>";
                echo "<th>Client No. &nbsp; &nbsp; &nbsp; &nbsp;</th>";
                echo "<th>Name &nbsp; &nbsp; &nbsp; &nbsp;</th>";
                echo "<th>Age &nbsp; &nbsp; &nbsp; &nbsp;</th>";
                echo "<th>Gender &nbsp; &nbsp; &nbsp; &nbsp;</th>";
                echo "<th>Address &nbsp; &nbsp; &nbsp; &nbsp;</th>";
                echo "<th>Contact &nbsp; &nbsp; &nbsp; &nbsp;</th>";
                echo "<th>CNIC &nbsp; &nbsp; &nbsp; &nbsp;</th>";
                echo "<th>Ploicy Type &nbsp; &nbsp; &nbsp; &nbsp;</th>";
                echo "<th>Paid Amount &nbsp; &nbsp; &nbsp; &nbsp;</th>";
            echo "</tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['client_no'] . "</td>";
                echo "<td>" . $row['First_Name'] . "</td>";
                echo "<td>" . $row['Age'] . "</td>";
                echo "<td>" . $row['Gender'] . "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['Contact'] . "</td>";
                echo "<td>" . $row['CNIC'] . "</td>";
                echo "<td>" . $row['Policy_type'] . "</td>";
                echo "<td>" . $row['Installment_Amount'] . "</td>";
            echo "</tr>";
            
        }
        echo "</table>";
    } else {
        echo "0 results";
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