<?php
include ('admin_header.html');
?>
<!DOCTYPE html>
<html >
<head>
    <title>Life Insurance</title>
    <link rel="stylesheet" href="profile.css">
    <style>
        .flex{
            display:flex;
            flex-flow:nowrap;
        }
      .client{
        margin-top:5%;
        margin-left:2px;
        font-size:25px;
        border: solid;
        margin-bottom:8%;
      }
    </style>
</head>
<body>
<div class="flex">
    <!-- Side navigation --> 

    <div class="client">
          <?php
          require_once 'connection.php';
            $sql_query = "SELECT count(client_no) as TotalClients FROM profile";
            $result = $conn->query($sql_query);
            echo "&nbsp &nbspTotal Clients  <br>&nbsp &nbsp &nbsp&nbsp&nbsp" .  $result->fetch_object()->TotalClients ;

          ?>
          </div>
          <div class="client">
          <?php
          require_once 'connection.php';
            $sql_query = "SELECT SUM(Installment_Amount) as CollectedAmount FROM profile";
            $result = $conn->query($sql_query);
            echo "&nbsp &nbspCollected Amount  <br>&nbsp &nbsp &nbsp&nbsp&nbsp" .  $result->fetch_object()->CollectedAmount ;

          ?>
          </div>

          <div style="margin-left: 9px">
          
        <form action="search_client.php" method="post">
            <input type="number" name="client_no" placeholder="search by client number"  style="margin-left: 800px">
            <button>search</button>
        </form>
        <br><br><br>
    <?php

    require_once 'connection.php';
 

    $sql = "SELECT * FROM profile";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table border=\"2\" style=\"border-collapse: collapse;\" >";
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
        
    }    


    $conn->close();


?>
<br><br><br>
<form action="delete.php" method="post">
            <input type="number" name="client_no" placeholder="deleta data by client number"  style="margin-left: 800px">
            <button>Delete</button>
        </form>
</div>
</div>
</body>
</html>

<?php
include ('footer.html');
?>