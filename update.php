<html>
<body>
<?php
require_once('dbconn.php');
    ?>
<form method = "post" action = "update.php">
                  <table width = "400" border =" 0" cellspacing = "1"
                     cellpadding = "2">

                     <tr>
                        <td width = "100">Employee ID</td>
                        <td><input name = "emp_id" type = "text"></td>
                     </tr>

                     <tr>
                        <td width = "100">Employee Salary</td>
                        <td><input name = "emp_salary" type = "text"></td>
                     </tr>

                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>

                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "submit" type = "submit" value = "Update">
                        </td>
                     </tr>

                  </table>
               </form>
  <?php $emp_id = $_POST['emp_id'];
         $emp_salary = $_POST['emp_salary'];

         $sql = "UPDATE Employee SET Salary = '$emp_salary' WHERE EmpId = '$emp_id'" ;

         $retval = mysqli_query($conn, $sql );

         if(! $retval )
         {
            die('Could not update data: ' . mysql_error());
         }
         mysql_close($conn);

  ?>
             </body>
             </html>
