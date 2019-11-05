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

   

          <div class = "container">
          <h2>Enter the Client Number to Check Balance</h2>    
        <form action="balance.php" method="post">
            
                <div class = "form_group">    
                    <label>Client No.</label>    
                    <input type = "number" name = "client_no" value = "" required />    
                 
                    <button>Submit</button>  
                </div>
				
                
        </form>
    </div>
</body>
</html>
<?php
include ('footer.html');
?>