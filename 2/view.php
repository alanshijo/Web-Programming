<html>
<style>
    body{
        background-color: #000000;
    }
table, td, th {
  border: 1px solid white;
  color: white;
}
table {
  width: 70%;
  border-collapse: collapse;
}
h1{
    color: white;
    text-decoration: underline;
}
a{
    color: white;
}
</style>
</style>
</html>

<?php
include 'conn.php';
if (mysqli_connect())
{
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn,$sql);
echo "<h1><center>User details</center></h1>";
echo "<table cellpadding='10' align='center'>
<tr>
<th>Name</th>
<th>Age</th>
<th>Address</th>
<th>Phone Number</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "</tr>";
}
echo "</table>";
}
echo "<br><br>";
echo '<center><a href="index.php">back</a></center>';
?>