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
          <h2>Select Policy Type</h2>    
        <form action="policy.php" method="post">
            
                <div class = "form_group">    
                    <label>Client No.</label>    
                    <input type = "number" name = "client_no" value = "" required />    
                </div> 
                <div class = "form_group">    
                       <label> Policy type:</label> <select name="Policy_type" id="slct" required > 
                                <option>Undefined</option> 
                                <option value="Life Insurance">Life Insurance</option> 
                                <option value="Health Insurance">Health Insurance</option> 
                             </select>   
                    </div>      
				<div class = "form_group">    
                    <button>Submit</button>  
                </div>
				
                
        </form>
    </div>
</body>
</html>
<?php
include ('footer.html');
?>