<?php
// get name and email
$name = $_POST['name'];
$email= $_POST['email'];

// set up connection
$con = mysqli_connect('localhost','root','human01','hoc');

if (mysqli_connect_errno()) {
  echo 'Could not connect: ' . mysqli_connect_error();
}
$sql =  "INSERT INTO Newsletter(Name, Email)VALUES('" . $name . "','" . $email . "')";

//execute query
mysqli_query($con, $sql); 

//close connection
mysqli_close($con);

//echo 'success';
?>
