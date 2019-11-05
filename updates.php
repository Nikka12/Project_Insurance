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

          </div>

          <div class = "container">
          <h2>Update Client Registration</h2>    
       <form action="update.php" method="post">  
           <?php
           require_once 'connection.php';
           
           $client_no=$_POST['client_no'];
           $sql_query="SELECT * FROM profile Where client_no='$client_no'";
           $filled=$conn->query( $sql_query);
           $result=$filled->fetch_assoc();

           
           ?>
            
        <!-- <div class = "form_group">    
            <label>Client No:</label>     -->
            <input type = "hidden" name = "client_no" value = "<?php echo $client_no  ?>" required />    
        <!-- </div>  -->
                    <div class = "form_group">    
                    <label>First Name:</label>    
                    <input type = "text" name = "First_Name" value = "<?php echo $result['First_Name'];  ?>" required />    
                </div>    
                <div class = "form_group">    
                    <label>Middle Name:</label>    
                    <input type = "text" name = "Middle_Name" value = "<?php echo $result['Middle_Name'];  ?>" required />    
                </div>    
                <div class = "form_group">    
                    <label>Last Name:</label>    
                    <input type = "text" name = "Last_Name" value = "<?php echo $result['Last_Name'];  ?>" required />    
                </div>  
				<div class = "form_group">    
                    <label>Gender:	</label><input type = "radio" name = "Gender" value = "Male" required />Male
                    <input type = "radio" name = "Gender" value = "Female" required />Female
                </div>
                <div class = "form_group">    
                    <label> Policy type:</label> <select name="Policy_type" id="slct"  required > 
                             <option>Undefined</option> 
                             <option value="Life Insurance">Life Insurance</option>
                             <option value="Health Insurance">Health Insurance</option> 
                          </select>   
                 </div>      
                <div class = "form_group">    
                        <label>Age:</label>    
                        <input type = "number" name = "age" value = "<?php echo $result['Age'];  ?>" required />    
                    </div>
				<div class = "form_group">    
                    <label>Date of Birth:	</label><input type = "date" name = "DOB" value = "<?php echo $result['DOB'];  ?>" required />
                </div>
                <div class = "form_group">    
                        <label>City:</label>    
                        <input type = "text" name = "city" value = "<?php echo $result['City'];  ?>" required />    
                    </div>
                    <div class = "form_group">    
                            <label>Religion:</label>    
                            <input type = "text" name = "religion" value = "<?php echo $result['Religion'];  ?>" required />    
                        </div>
				<div class = "form_group">    
                    <label>Address:</label>    
                    <input type = "text" name = "Address" value = "<?php echo $result['Address'];  ?>" required />    
                </div>
				
				<div class = "form_group">    
                    <label>CNIC: </label>    
                    <input type = "number" name = "cnic" value = "<?php echo $result['CNIC'];  ?>"  required />    
                </div>
				<div class = "form_group">    
                    <label>Contact: </label>    
                    <input type = "number" name = "Contact" value = "<?php echo $result['Contact'];  ?>"  required pattern="[0-9]{10}" />    
                </div>
                <div class = "form_group">    
                        <label>Email: </label>    
                        <input type = "email" name = "email" value = "<?php echo $result['Email'];  ?>"   />    
                    </div>
				<div class = "form_group">    
                    <label>Marital Status: </label>    
                    <input type = "radio" name = "Marital_Status" value = "Single" required />Single
                    <input type = "radio" name = "Marital_Status" value = "Male" required/>Married    
                </div>
                
				<div class = "form_group">    
                    <button  style="margin-left:500px; padding:10px;">Submit</button>  
                </div>
				
                
        </form>
    </div>
</body>
</html>
<?php
include ('footer.html');
?>