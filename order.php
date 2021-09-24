<?php

$server_name="localhost";

$username="root";

$password="";

$database_name="order";

$conn = mysqli_connect($server_name,$username,$password,$database_name);

//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
	
}
if(isset($_POST['submit']))
{	
	
	 $fname = $_POST['fname'];
	 $selectp = $_POST['selectp'];
     $product = $_POST['product'];
	 $email = $_POST['email'];
	 $phno = $_POST['phno'];
	 $address = $_POST['address'];
     $pin = $_POST['pin'];
	 
	
	 $sql_query = "INSERT INTO ordernow(fname,selectp,product,email,phno,address,pin)
	 VALUES ('$fname','$selectp','$product','$email','$phno','$address','$pin')";
	 

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "<script> alert('ordered Successfully') </script>";
	 } 
	 
	 else
     {
		echo "<script> alert('Not Placed') </script>";
	 }
	 mysqli_close($conn);
}
?>