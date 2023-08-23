<!doctype html>
<head><title>Basic View</title></head>
<body bgcolor="#38a693">
<style>
table, th, td {
border: 1px solid black;
}
th, td {
font-weight: bold;
font-size: 20px;
}
.button {background-color: #555555;
padding: 8px 20px;
font-size: 18px;
color: white;
border-radius: 20%;} 
</style><h1><center><u> Address </u></center></h1><br>
<center><h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label for="reg">Reg no. </label>
<input type="number" name="reg" value="Register number" /><br><br>
<input class = "button" type="submit" name="submit" value="View"/><br><br>
</form></h2></center>
<?php
if(isset($_POST['submit'])){
$link = mysqli_connect("localhost", "root","",'student_det');
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$reg = $_POST['reg'];
$sql = " select * from address where reg_no = '$reg'";
$result = mysqli_query($link,$sql);
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
echo "<center><table>";
echo "<tr>";

echo "<th>Register No.</th>";
echo "<th>Door no.</th>";
echo "<th>Street name </th>";
echo "<th>Area </th>";
echo "<th>City</th>";
echo "<th>State</th>";
echo "<th>Pin</th>";
echo "</tr>";
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['reg_no'] . "</td>";
echo "<td>" . $row['door_no'] . "</td>";
echo "<td>" . $row['st_name'] . "</td>";
echo "<td>" . $row['area'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['pin'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_free_result($result);
} else{
echo "No records matching your query were found.";
}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
}
?>
</body>
</html>