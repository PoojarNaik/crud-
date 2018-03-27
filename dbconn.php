<?php
$server='localhost';
$user='root';
$password='aissel123';
$database='Company';

$conn=mysqli_connect($server,$user,$password,$database);
if(!conn)
{
  die("connection failed".mysql_connection_error());

}
?>
