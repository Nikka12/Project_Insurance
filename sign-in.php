<?php

require_once 'connection.php';

if($_POST) 
{


    $Name=$_POST['name'];
    $Password=$_POST['password'];
    
    $sql="SELECT * FROM login WHERE name = '$Name' and password='$Password' ";
   //$result = $conn->query($sql);
    
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   //$active = $row['active'];
   
   $count = mysqli_num_rows($result);
   
   // If result matched $myusername and $mypassword, table row must be 1 row
     
   if($count == 1) {
    //   session_register("Name");
    //   $_SESSION['login_user'] = $Name;
      echo "<script> window.location.assign('profiles.php');</script>";
   }
//  if ($result==TRUE ){
//      for($i=0; $i<$count; $i++)
//  {
//      $r = "mysql_query (SELECT name FROM data WHERE Name='$Name' and password='$Password' )";
//  } 
//      if($r>=0) 
//      {
//          echo "<script> window.location.assign('client.html');</script>";
//       }
 
      
//      }
     else 
    {
        echo "incorect password or username " ;
    }

     
    

    $conn->close();

   
}

?>

