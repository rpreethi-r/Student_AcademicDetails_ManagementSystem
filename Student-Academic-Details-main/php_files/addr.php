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
.address{
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
float: left;
width: 75px;
padding-right: 20px;
}
#reg{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#door{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#street{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#area{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#city{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#state{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#pin{
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
<?php
if(isset($_POST['submit'])){
$conn = mysqli_connect("localhost","root","","student_det");
if(! $conn){
die("Couldn't connect".mysqli_connect_error());}
$door = $_POST['door'];
$reg = $_POST['reg'];
$street = $_POST['street'];
$area = $_POST['area'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$sql = "INSERT INTO address"."(reg_no, door_no, st_name, area, city, state, pin)". "VALUES($reg, '$door', '$street', '$area', '$city', '$state', $pin)";
$retval = mysqli_query($conn,$sql);
if(! $retval){
die("Couldn't enter details".mysqli_connect_error());}
echo "Data entered successfully";
mysqli_close($conn);
}
?>
<body>
<ul>
<li><a class="active" href="home.html">HOME</a></li>
<li><a href="basic.php">BASIC DETAILS</a></li>
<li><a href="addr.php">ADDRESS</a></li>
<li><a href="parent1.php">PARENTS DETAILS</a></li>
<li><a href="academic.html">ACADEMIC DETAILS</a></li>
<li><a href="logout.php">LOGOUT</a></li>
</ul>


<center><h2>Address</h2></center>



<div class="address">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label for="reg">Reg no. </label>
<input type="bigint" name="reg" /><br><br>
<label for="door">Door No.: </label>
<input type="varchar" name="door" /><br><br>
<label for="street">Street name: </label>
<input type="varchar" name="street" /><br><br>
<label for="area">Area: </label>
<input type="varchar" name="area" /><br><br>
<label for="city">City: </label>
<input type="varchar" name="city" /><br><br>
<label for="state">State: </label>
<input type="varchar" name="state" /><br><br>
<label for="pin">Pin code: </label>
<input type="bigint" name="pin" /><br><br>
<input type="submit" name="submit" value="Add"/><br><br>



</form>



</body>
</html>