<?php 
$host = "localhost";   //always localhost
$dbuser = "afm";       //database username
$dbpass = "afm";       // database password
$dbname = "developer"; // database name

$conn = mysqli_connect($host,$dbuser,$dbpass,$dbname);


$fname = $_REQUEST["name"];      // $fname is a variable and "name" is from html form
$uname = $_REQUEST["username"];  // $uname is a variable and "username" is from html form
$Pwd = $_REQUEST["password"];   // $Pwd is a variable and "password" is from html form
$email = $_REQUEST["email"];    // $email is a variable and "email" is from html form

// Now we will insert form data using below method to database
$insertQuery = "INSERT INTO member (fname,uname,Pwd,email) VALUES ('$fname','$uname','$Pwd','$email')";
$runQuery = mysqli_query($conn,$insertQuery);


// This condition is for data insert successfull check

if($insertQuery==true){
  echo "Data Inserted";
}else{
  echo "error";
}

?>