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
       <form action="profile.php" method="post">  
            
                <div class = "form_group">    
                    <label>First Name:</label>    
                    <input type = "text" name = "First_Name" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>Middle Name:</label>    
                    <input type = "text" name = "Middle_Name" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>Last Name:</label>    
                    <input type = "text" name = "Last_Name" value = "" required />    
                </div>  
				<div class = "form_group">    
                    <label>Gender:	</label><input type = "radio" name = "Gender" value = "M" required />Male<input type = "radio" name = "Gender" value = "F" required />Female
                </div>
                <div class = "form_group">    
                        <label>Age:</label>    
                        <input type = "number" name = "age" value = "" required />    
                    </div>
				<div class = "form_group">    
                    <label>Date of Birth:	</label><input type = "date" name = "DOB" value = "" required />
                </div>
                <div class = "form_group">    
                        <label>City:</label>    
                        <input type = "text" name = "city" value = "" required />    
                    </div>
                    <div class = "form_group">    
                            <label>Religion:</label>    
                            <input type = "text" name = "religion" value = "" required />    
                        </div>
				<div class = "form_group">    
                    <label>Address:</label>    
                    <input type = "text" name = "Address" value = "" required />    
                </div>
				
				<div class = "form_group">    
                    <label>CNIC: </label>    
                    <input type = "number" name = "cnic" value = ""  required />    
                </div>
				<div class = "form_group">    
                    <label>Contact: </label>    
                    <input type = "number" name = "Contact" value = ""  required pattern="[0-9]{10}" />    
                </div>
                <div class = "form_group">    
                        <label>Email: </label>    
                        <input type = "email" name = "email" value = ""   />    
                    </div>
				<div class = "form_group">    
                    <label>Marital Status: </label>    
                    <input type = "radio" name = "Marital_Status" value = "Single" required />Single	    <input type = "radio" name = "Marital_Status" value = "Male" required/>Married    
                </div>
                <br><br>
				  
                    <button style="margin-left:500px; padding:10px;" >Submit</button>  
                
				<br><br>
                
        </form>
    </div>
</body>
</html>
<?php
include ('footer.html');
?>