<?php
$pass=$_POST['password'];
if($pass=='admin'){
    
    echo "<script> window.location.assign('client_profile.php');</script>";


}
else{
    echo "incorrect password";
}


?>