<!doctype html>
<head><title>Semester 1</title></head>
<body bgcolor="#bdbac2">
<style>



table {
border-collapse: collapse;
width: 100%;
}



th, td {
text-align: left;
padding: 8px;
}



tr:nth-child(even){background-color: #f2f2f2}



th {
background-color: #bdbac2;
color: white;
}
</style><h1><center><u>Student Details</u></center></h1>
<?php
session_start();
$link = mysqli_connect("localhost", "root","",'student_det');
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$reg = $_SESSION['reg'];
$sql = " select * from sem_1 where reg_no = '$reg'";
$result = mysqli_query($link,$sql);
$sum = 0;
$weight = 0;
$count = 0;
if($result = mysqli_query($link, $sql))
{
if(mysqli_num_rows($result) > 0)
{
echo "<center><table>";
echo "<tr>";
echo "<th>Reg No.</th>";
echo "<th>Subject</th>";
echo "<th>Credits</th>";
echo "<th>Internals </th>";
echo "<th>Externals </th>";
echo "<th>Total</th>";
echo "<th>Grade</th>";
echo "<th>Attendance</th>";
echo "</tr>";
}
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['reg_no'] . "</td>";
echo "<td>" . $row['sub_name'] . "</td>";
echo "<td>" . $row['credits'] . "</td>";
echo "<td>" . $row['internal_mark'] . "</td>";
echo "<td>" . $row['external_mark'] . "</td>";
echo "<td>" . $row['total'] . "</td>";
echo "<td>" . $row['grade'] . "</td>";
echo "<td>" . $row['attendance'] . "</td>";
echo "</tr>";
if($row['grade']=="O"){
$weight = 10;
}
elseif($row['grade']=="A+"){
$weight = 9;
}
elseif($row['grade']=="A"){
$weight = 8;
}
elseif($row['grade']=="B+"){
$weight = 7;
}
elseif($row['grade']=="B"){
$weight = 6;
}
$count = $count+$row['credits'];
$sum = $sum+($row['credits']*($weight));
}
echo "</table>";
$sgpa = $sum/$count;
mysqli_free_result($result);
}
mysqli_close($link);
$link = mysqli_connect("localhost", "root","",'student_det');
$sql = "INSERT INTO sem_gpa"."(reg_no,semester,sgpa)". "VALUES($reg,'1','$sgpa')";
$retval = mysqli_query($link,$sql);
mysqli_close($link);
?>
</body>
</html>