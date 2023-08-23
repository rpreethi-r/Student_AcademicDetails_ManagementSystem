<!doctype html>
<head><title>Basic View</title></head>
<body bgcolor="C0C0C0">
<style>
table, th, td {
border: 1px solid black;
}
body{
background:	#38a693;
}
th, td {
font-weight: bold;
}
</style><h1><center><u>Address </u></center></h1>
<?php
session_start();
$link = mysqli_connect("localhost", "root","",'student_det');
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$reg = $_SESSION['reg'];
$sql = " select * from address where reg_no = '$reg'";
$result = mysqli_query($link,$sql);





if($result = mysqli_query($link, $sql))
{
if(mysqli_num_rows($result) > 0)
{
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
}
while($row = mysqli_fetch_array($result))
{
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
}





mysqli_close($link);






?>
</body>
</html>