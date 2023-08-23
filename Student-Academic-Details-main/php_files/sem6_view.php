<!doctype html>
<head><title>Semester 6</title></head>
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
padding: 8px;
}
</style><h1><center><u>Student Details</u></center></h1>
<?php
session_start();
$link = mysqli_connect("localhost", "root","",'student_det');
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$reg = $_SESSION['reg'];
$sql = " select reg_no,sub_name,sub_code,credits,internal_mark,grade,attendance from sem_6 where reg_no = '$reg'";
$result = mysqli_query($link,$sql);
$sum = 0;
$weight = 0;
$count = 0;
if($result = mysqli_query($link, $sql))
{
	echo "<center><h2>Register no: ".$reg."</h2></center>";
if(mysqli_num_rows($result) > 0)
{
echo "<center><table>";
echo "<tr>";
echo "<th>Subject Name</th>";
echo "<th>Subject Code</th>";
echo "<th>Credits</th>";
echo "<th>Internals </th>";
echo "<th>Grade</th>";
echo "<th>Attendance</th>";
echo "</tr>";
}
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['sub_name'] . "</td>";
echo "<td>" . $row['sub_code'] . "</td>";
echo "<td>" . $row['credits'] . "</td>";
echo "<td>" . $row['internal_mark'] . "</td>";
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
echo "<br><br><h2>Your SGPA for semester 6 is: ".$sgpa."</h2>";
mysqli_close($link);
$link = mysqli_connect("localhost", "root","",'student_det');
$sql = " select * from sem_gpa where reg_no = '$reg' and semester=3";
$retval = mysqli_query($link,$sql);
if(mysqli_num_rows ( $retval )==0){
$link1 = mysqli_connect("localhost", "root","",'student_det');
$sql1 = "INSERT INTO sem_gpa"."(reg_no,semester,sgpa)". "VALUES($reg,'6','$sgpa')";
$retval = mysqli_query($link1,$sql1);
mysqli_close($link1);
}

mysqli_close($link);
$link = mysqli_connect("localhost", "root","",'student_det');
$sql = " select sgpa from sem_gpa where reg_no = '$reg'";
$retval = mysqli_query($link,$sql);
$s = 0;
$c = mysqli_num_rows ( $retval );
while($row = mysqli_fetch_array($retval))
{
$s+=$row['sgpa'];
}

$cgpa = $s/$c;
echo "<br><h2>Your CGPA is: ".$cgpa."</h2>";
mysqli_close($link);
?>
</body>
</html>