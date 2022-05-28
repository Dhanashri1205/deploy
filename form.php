
<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "Praregi";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?><html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <form style="border: 1px solid; margin-left:30%; margin-right:30%" action="Pra_reg_proc.php" method="post">
            <center>
                <h1>Registration form</h1><br><br>
                <label>First name: <input type="text" name="fname" placeholder="Enter first name"></label><br><br>
                <label>Last name: <input type="text" name="lname"  placeholder="Enter last name"></label><br><br>
                <label>Email: <input type="email" name="email"  placeholder="Enter email"></label><br><br>
                <label>DOB: <input type="date" name="dob"  placeholder="Enter DOB"></label><br><br>
                <label>Password: <input type="password" name="pass"  placeholder="Enter DOB"></label><br><br>
                <label>Mobile no: <input type="number" name="mobno"  placeholder="Enter mobile no"></label><br><br>
                <button type="submit" name="save">Registration</button><br>
            </center>

        </form>
    </body>
</html>s