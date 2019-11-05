<!DOCTYPE html>
<?php
include ('header.html');
?>
<html >
<head>
    <title>Life Insurance</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>

    

          <div class = "container">
            <h2>Pay Installment Amount</h2>    
          <form action="deposite.php" method="post">    
              
                  <div class = "form_group">    
                      <label>Client No.</label>    
                      <input type = "number" name = "client_no" value = "" required />    
                  </div> 
                  <div class = "form_group">    
                      <label>Installment Amount:</label>    
                      <input type = "number" name = "Installment_Amount" value = "" required />  
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