<html>
<body>
<?php
require_once('dbconn.php');/*
$server='localhost';
$user='root';
$password='aissel123';
$database='Company';

$conn=mysqli_connect($server,$user,$password,$database);
if(!conn)
{
  die("connection failed".mysql_connection_error());

}*/
?>

<form action="insert.php" method="post">
  <table>
  <tr>
      <td>Employee id</td><td><input type="text" name="eid"></td></tr>
    <td>First Name</td><td><input type="text" name="ffname"></td></tr>
      <td>Last Name Name</td><td><input type="text" name="llname"></td></tr>
        <td>DOB</td><td><input type="text" name="ddob"></td></tr>
          <td>Mobile</td><td><input type="text" name="mob"></td></tr>
            <td>Email Id</td><td><input type="text" name="eemail"></td></tr>
              <td>Adresss</td><td><input type="text" name="addr"></td></tr>
                <td>Join date</td><td><input type="text" name="jdate"></td></tr>
                  <td>salary</td><td><input type="text" name="sly"></td></tr>
                </table>
                <input type="submit" name="submit">
              </form>
<?php
/*session_start();
if(isset($_POST[]))*/
// Escape user inputs for security
$employid = mysqli_real_escape_string($conn, $_POST['eid']);
$firstname = mysqli_real_escape_string($conn, $_POST['ffname']);

$lastname = mysqli_real_escape_string($conn, $_POST['llname']);

$dob = mysqli_real_escape_string($conn, $_POST['ddob']);
$mobile = mysqli_real_escape_string($conn, $_POST['mob']);
$emailid = mysqli_real_escape_string($conn, $_POST['eemail']);
$address = mysqli_real_escape_string($conn, $_POST['addr']);
$joindate = mysqli_real_escape_string($conn, $_POST['jdate']);
$salary= mysqli_real_escape_string($conn, $_POST['sly']);


$sql="INSERT INTO  Employee (EmpId,Fname,Lname,DOB,Mobile,Email,Address,joinDate,Salary)VALUES('$employid','$firstname','$lastname','$dob','$mobile','$emailid','$address','$joindate','$salary') ";
if(mysqli_query($conn, $sql)){

    echo "Records added successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

}

 ?>
</body>
</html>
<!-- references
https://www.tutorialrepublic.com/php-tutorial/
w3school.com
-->
