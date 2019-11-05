<!DOCTYPE html>
<html >
<head>
    <title>Life Insurance</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>

    <!-- Side navigation --> -->
     <div class="sidenav">
            <a href="client_profile.php" class="active">Client Profiles</a>
            <a href="Update.html">Update Profiles</a>
            <a href="index.html">Log out</a>
          </div>
    
          <div style="margin-left: 400px">
          
        <form action="search_client.php" method="post">
            <input type="number" name="client_no" placeholder="search by client number"  style="margin-left: 800px">
            <button>search</button>
        </form>
        <br><br><br>
    <?php

    require_once 'connection.php';
 if($_POST){
    $client_no = $_POST['client_no'];
  
    $sql ="DELETE FROM profile WHERE client_no=$client_no ";

    if ($conn->query($sql) === TRUE) {
        echo "<script> window.location.assign('client_profile.php');</script>";
    } else {
        
        echo "Error " . $sql. ' ' . $conn->error;
    }

    $conn->close();
}

?>
<br><br><br>
<form action="delete.php" method="post">
            <input type="number" name="client_no" placeholder="deleta data by client number"  style="margin-left: 800px">
            <button>Delete</button>
        </form>
</div>
</body>
</html>

