<html>
<script type="text/javascript">
function phone()
{
var m=document.getElementById("mn").value;
var str=/^[0-9]{10}$/;
 if(str.test(m)==false)
   alert("Invalid mobile number");
}
</script>
<style>
body{
    background-color: #8bdbff;
}
h1 {
    color: red;
    text-decoration: underline;
}
</style>
<body align="center">
<h1>COVAXIN</h1>
<form method="post" action="insert.php">
Name : <input type="text" name="name"><br><br>
Age : <input type="number" name="age"><br><br>
Address : <textarea name="add"></textarea><br><br>
Phone No.: <input type="number" name="phno" id="mn" onchange="phone()"><br><br>
<input type="submit" value="Submit" name="submit">&emsp;<input type="reset">
</form><br><br><br>
<a href="view.php">View Users</a>
</body>
</html>