<html>
<body>
<?php
require_once('dbconn.php');
?>
<form action="delete.php" method="post">
  <table>
    <tr>
      <td>Enter Employee Id:</td>
      <td><input type="text" name="eid" /></td>
    </tr>
  </table>
  <input type="submit" name="submit">
</form>
<?php
$empid=mysqli_real_escape_string($conn, $_POST['eid']);
$result=mysqli_query($conn,"DELETE FROM Employee WHERE EmpId=$empid");

/*else {
  echo"successfully deleted";
}*/
 ?>
</body>
</html>
