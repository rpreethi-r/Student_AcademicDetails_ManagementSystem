<!doctype html>
<head><title>Parents details</title></head>
<body bgcolor="C0C0C0">
<style>
table, th ,td {
border: 1px solid black;
}
body{
background:	#38a693;
}
td, th{
font-weight: bold;
font-size: 20px;
}
</style><h1><center><u>Parents Details</u></center></h1>
<?php
session_start();
$link = mysqli_connect("localhost", "root","",'student_det');
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$reg = $_SESSION['reg'];
$sql = " select * from parent_details where reg_no = '$reg'";
$result = mysqli_query($link,$sql);

if($result = mysqli_query($link, $sql))
{
if(mysqli_num_rows($result) > 0)
{
echo "<center><table>";
echo "<tr>";

echo "<th>Register No.</th>";
echo "<th>Father Name</th>";
echo "<th>Father occ </th>";
echo "<th>Father income </th>";
echo "<th>Mother name</th>";
echo "<th>Mother occ</th>";
echo "<th>Mother income</th>";
echo "</tr>";
}
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['reg_no'] . "</td>";
echo "<td>" . $row['father_name'] . "</td>";
echo "<td>" . $row['father_occ'] . "</td>";
echo "<td>" . $row['father_income'] . "</td>";
echo "<td>" . $row['mother_name'] . "</td>";
echo "<td>" . $row['mother_occ'] . "</td>";
echo "<td>" . $row['mother_income'] . "</td>";
echo "</tr>";


}
echo "</table>";


mysqli_free_result($result);
}

mysqli_close($link);


?>
</body>
</html>