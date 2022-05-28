
<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "Praregi";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
if(isset($_POST['save']))
{	  
	 $fname = $_POST['fname'];
	 $lname = $_POST['lname'];
	 $email = $_POST['email'];
	 $dob = $_POST['dob'];
	  $pass = $_POST['pass'];
      $mbno = $_POST['mobno'];
	 $sql = "INSERT INTO studentinfo (fname,email,lname,pass,dob,mobno)
	 VALUES ('$fname','$email','$lname','$pass','$dob','$mbno')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record inserted successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
