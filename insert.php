<?php

// get name and email

$name = $_POST['name'];
$email= $_POST['email'];

// set up connection
$con = mysql_connect('localhost','root','human01');

if (!$con) {
  die('Could not connect: ' . mysql_error($con));
}

// connect to database
mysql_select_db("hoc",$con);

$sql = "INSERT INTO Newsletter(Name, Email) VALUES(" . $name . ',' . $email . ")"; 
$result = mysql_query($sql, $cxn);

mysql_close($con);

// setup our response "object"
$resp = new Class();
$resp->success = false;
if($result) {
    $resp->success = true;
}

print json_encode($resp);

?>
