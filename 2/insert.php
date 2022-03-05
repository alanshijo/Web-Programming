<?php
include "conn.php";
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$age = $_POST['age'];
$add = $_POST['add'];
$ph = $_POST['phno'];
$conn=mysqli_connect("localhost","root","","covax");
$sql = "INSERT INTO `users`(`name`, `age`, `address`, `phone`) VALUES ('$name','$age','$add','$ph')";
$q=mysqli_query($conn,$sql);
echo'<script> alert ("Data inserted successfully");</script>';
echo'<script>window.location.href="index.php";</script>';

}
?>