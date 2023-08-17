<?php

$con=mysqli_connect("localhost","root","","greengrocer");
if(!$con)
{
  echo"Connection failure";
}

$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

if(isset($_POST['btnInsert']))
 {
   $insSql="insert into user values('$name','$email','$password')";
   
  if(mysqli_query($con,$insSql))
    {
        echo"1 record inserted";
    }
   else
    {
      echo" Not inserted";
    }
 }
else if(isset($_POST['btnmodify']))
 {
   $modSql="update user set  username='$name',email='$email',password='$password' where username='$name'";
   
  if(mysqli_query($con,$modSql))
    {
        echo"Record Updated";
    }
   else
    {
      echo" Not Updated";
    }
 }
else if(isset($_POST['btndel']))
 {
   $delSql="Delete from user where username='$name'";
   
  if(mysqli_query($con,$delSql))
    {
        echo"Record Deleted";
    }
   else
    {
      echo" Not Deleted";
    }
 }

 elseif (isset($_POST['btnShow'])) {
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>Username</th>";
    echo "<th>Email</th>";
    echo "<th>Password</th>";
    echo "</tr>";

    $sql = "SELECT * FROM user";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
}
?>