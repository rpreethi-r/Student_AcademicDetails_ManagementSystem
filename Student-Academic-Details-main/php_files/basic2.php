<html>
<head>
<title>Personal Details</title>
<style>
body
{
margin: 0;
padding: 0;
background-color:#25665b;
font-family: 'Arial';
}
.basic{
width: 382px;
overflow: hidden;
margin: auto;
margin: 20 0 0 450px;
padding: 30px;
background: #57b5a5;
border-radius: 15px ;
}
h2{
text-align: center;
color: white;
padding: 20px;
}
label{
color: #000000;
font-size: 17px;
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
<link rel="stylesheet" type="text/css" href="css/style.css">
</style>
</head>
<?php
if(isset($_POST['submit'])){
$conn = mysqli_connect("localhost","root","","basic_details");
if(! $conn){
die("Couldn't connect".mysqli_connect_error());}
$name = $_POST['name'];
$reg = $_POST['reg'];
$dob = $_POST['dob'];
$sex = $_POST['sex'];
$blood = $_POST['blood'];
$phone = $_POST['phone'];
$community = $_POST['community'];
$host = $_POST['host'];
$cut = $_POST['cut'];
$sql = "INSERT INTO basic_details"."(name, reg_no, blood_grp, dob, phno, community, day_host, cut_off,sex)".
"VALUES('$name',$reg,'$sex','$blood','$dob', $phone, '$community', '$host', $cut)";
$retval = mysqli_query($conn,$sql);
if(! $retval){
die("Couldn't enter details".mysqli_connect_error());}
echo "Data entered successfully";
mysqli_close($conn);
}
?>
<body>
<ul>
<li><a class="active" href="scroll.html">HOME</a></li>
<li><a href="basic.php">BASIC DETAILS</a></li>
<li><a href="address.php">ADDRESS</a></li>
<li><a href="parents.php">PARENTS DETAILS</a></li>
<li><a href="academic.html">ACADEMIC DETAILS</a></li>
</ul>



<center><h2>Basic Details</h2></center>
<div class="basic">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label for="name">Name: </label>
<input type="text" name="name" /><br><br>
<label for="reg">Register No.: </label>
<input type="number" name="reg" /><br><br>
<label for="dob">Date of birth: </label>
<input type="date" name="dob" /><br><br>
<label for="sex">Sex: </label>
<input type="text" name="sex" /><br><br>
<label for="blood">Blood group: </label>
<input type="text" name="blood" /><br><br>
<label for="phone">Phone No.: </label>
<input type="number" name="phone" /><br><br>
<label for="community">Community: </label>
<input type="text" name="community" /><br><br>
<label for="host">Hosteller/day scholar: </label>
<input type="text" name="host" /><br><br><label for="cut">cut off </label>
<input type="number" name="cut" /><br><br>
<input type="submit" name="submit" value="Add"/><br><br>
</form>




</body>
</html>