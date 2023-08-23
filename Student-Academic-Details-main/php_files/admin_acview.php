<!doctype html>
<head><title>Semester 1</title></head>
<body bgcolor="#38a693">
<style>
table, th, td {
border: 1px solid black;
}
th, td {
font-weight: bold;
font-size: 20px;
padding: 8px;
}
.button {background-color: #555555;
padding: 8px 20px;
font-size: 18px;
color: white;
border-radius: 20%;} 
</style><h1><center><u>Student Academic Details</u></center></h1>
<center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<h2>
<label for="reg">Reg no. </label>
<input type="number" name="reg" value="Register number" /><br><br>
<label for="sem">Semester </label>
<input type="number" name="sem" value="semester" /><br><br>

<input class="button" type="submit" name="submit" value="View"/><br><br></h2>
</form></center>
<?php
if(isset($_POST['submit'])){
$link = mysqli_connect("localhost", "root","",'student_det');
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$reg = $_POST['reg'];
$sem = $_POST['sem'];
if($sem==1){
$table = 'sem_1';
}
elseif($sem==2){
$table = 'sem_2';
}
elseif($sem==3){
$table = 'sem_3';
}
elseif($sem==4){
$table = 'sem_4';
}
elseif($sem==5){
$table = 'sem_5';
}
elseif($sem==6){
$table = 'sem_6';
}
elseif($sem==7){
$table = 'sem_7';
}
elseif($sem==8){
$table = 'sem_8';
}
$sql = " select * from $table where reg_no = '$reg'";
$result = mysqli_query($link,$sql);
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
echo "<center><table>";
echo "<tr>";
echo "<th>Reg No.</th>";
echo "<th>Subject Name</th>";
echo "<th>Subject Code</th>";
echo "<th>Internals </th>";
echo "<th>Grade</th>";
echo "<th>Attendance</th>";
echo "</tr>";
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['reg_no'] . "</td>";
echo "<td>" . $row['sub_name'] . "</td>";
echo "<td>" . $row['sub_code'] . "</td>";
echo "<td>" . $row['internal_mark'] . "</td>";
echo "<td>" . $row['grade'] . "</td>";
echo "<td>" . $row['attendance'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_free_result($result);
} else{
echo "<h2><center>No records matching your query were found.</h2></center>";
}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
}
?>
</body>
</html>