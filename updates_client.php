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


          <div class = "container">
          <h2>Client Registration</h2>    
       <form action="updates.php" method="post">  
            
                
       <div class = "form_group">    
            <label>Client No:</label>    
            <input type = "number" name = "client_no" value = "" required />    
        </div> 
                
				  
                    <button style="margin-left:500px; padding:10px;" >Submit</button>  
                
				<br><br>
                
        </form>
    </div>
</body>
</html>
<?php
include ('footer.html');
?>