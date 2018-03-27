<?php
require_once('dbconn.php');
$sql="SELECT EmpId,fname,lname,DOB,Mobile,Email,Address,joinDate,Salary FROM Employee";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_assoc($result)) {
    echo"<table>";
    echo "<tr><td>".$row["EmpId"]."</td>";
     echo "<td>".$row["fname"]."</td>";
      echo "<td>".$row["lname"]."</td>";
     echo "<td>".$row["DOB"]."</td>";
        echo "<td>".$row["Mobile"]."</td>";
         echo "<td>".$row["Email"]."</td>";
          echo "<td>".$row["Address"]."</td>";
           echo "<td>".$row["joinDate"]."</td>";
       echo "<td>".$row["Salary"]."</td></tr>";
       echo "</table>";
   }
 }
mysqli_close($conn);

?>
