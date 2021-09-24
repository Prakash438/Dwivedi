<?php

$server_name="localhost";

$username="root";

$password="";

$database_name="rimar";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{die("Connection Failed:" . mysqli_connect_error());}
if(isset($_POST['save']))
{	
	 $name = $_POST['name'];
	 $email= $_POST['email'];
	 $subject = $_POST['subject'];
	 $phone = $_POST['phone'];
	 $message = $_POST['message'];
	
	 $sql_query = "INSERT INTO contact(name,email,subject,phone,message)
	 VALUES ('$name','$email','$subject', '$phone','$message')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "We Back Very soon!";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>