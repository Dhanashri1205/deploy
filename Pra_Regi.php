<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "Praregi";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>
<html>
    <head>
        <title>College Dashboard</title>
        <link rel="stylesheet" type="text/css" href="Pra_reg.css">
    </head>
    <body>
       
            <div class="body">
                <div class="regform">
                    <h1> Student Registration Form </h1>
                
                <form action="Pra_reg_proc.php" method="post">
                    <p>First Name:</p>
                    <input type="text" name="fname" placeholder="First name">
                    <p>Last Name:</p>
                    <input type="text" name="lname" placeholder="Last name">
                    <p>Email:</p>
                    <input type="email" name="email" placeholder="email">
                    <p>Password:</p>
                    <input type="password" name="pass" placeholder="password">
                    <p>DOB:</p>
                    <input type="date" name="dob" placeholder="DOB">
                    <p>Mobile no:</p>
                    <input type="number" name="mobno" placeholder="Mobile no">
                    <button type="submit" name="save" value="submits">Registration</button>
                    <button type="submit">Cancel</button>
        
                </form>
               </div>
               
        
                
                
            </div>

        </div>

    </body>
</html>


