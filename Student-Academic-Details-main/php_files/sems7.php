<html>
<head>
<title>Add sem 7</title>
<style>
body
{
margin: 0;
padding: 0;
background-color:#25665b;
font-family: 'Arial';
}
.basic{
width: 280px;
overflow: hidden;
margin: auto;
margin: 20 0 0 450px;
padding: 90px;
background: #57b5a5;
border-radius: 15px ;
}
h2{
text-align: center;
color: white;
padding: 20px;
}


label {
display: block;
text-indent: -2em;
float: left;
width: 75px;
padding-right: 20px;
}


#name{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#reg{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#dob{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#sex{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#blood{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#phone{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#community{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#host{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#add{
width: 300px;
height: 30px;
border: none;
border-radius: 17px;
padding-left: 7px;
color: #000000;
}







span{
color: white;
font-size: 17px;
}
ul {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: #333;
}







li {
float: left;
}







li a {
display: block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}







li a:hover {
background-color: #111;
}
</style>
</head>
<body>
<ul>
<li><a href = "home.html">HOME</a></li>
<li><a class="active" href="sems1.php">Semester 1</a></li>
<li><a href="sems2.php">Semester 2</a></li>
<li><a href="sems3.php">Semester 3</a></li>
<li><a href="sems4.php">Semester 4</a></li>
<li><a href="sems5.php">Semester 5</a></li>
<li><a href="sems6.php">Semester 6</a></li>
<li><a href="sems7.php">Semester 7</a></li>
<li><a href="sems8.php">Semester 8</a></li>
<li><a href="logout.php">LOGOUT</a></li>
</ul>
<div class="basic">
<center><h2>Semester 7 Details</h2></center>
<?php
if(isset($_POST['submit'])){$conn = mysqli_connect("localhost","root","","student_det");
if(! $conn){die("Couldn't connect".mysqli_connect_error());}
$reg = $_POST['reg'];
$sub = $_POST['sub'];
$subcode = $_POST['subcode'];
$credits = $_POST['credits'];
$internal = $_POST['internal'];
$grade = $_POST['grade'];
$att = $_POST['att'];
$sql = "INSERT INTO sem_7"."(reg_no,sub_name,sub_code,credits,internal_mark,grade,attendance)". "VALUES('$reg','$sub','$subcode','$credits','$internal','$grade','$att')";
$retval = mysqli_query($conn,$sql);
if(! $retval){
die("Couldn't enter details".mysqli_connect_error());
}
echo 'Data entered successfully';
mysqli_close($conn);}?><form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">







<label for="reg">Reg no. </label>
<input type="number" name="reg" value="Register number" /><br><br>
<label for="sub">Subject Name </label>
<input type="text" name="sub" /><br><br>
<label for="subcode">Subject Code </label>
<input type="text" name="subcode" /><br><br>
<label for="credits">Credits </label>
<input type="number" name="credits" /><br><br>
<label for="internal">Internal mark </label>
<input type="number" name="internal" /><br><br>
<label for="grade">Grade </label>
<input type="text" name="grade" /><br><br>
<label for="att">Attendance</label>
<input type="text" name="att"/><br><br>
<input type="submit" name="submit" value="Add"/><br><br>
</form>
</body>
</html>