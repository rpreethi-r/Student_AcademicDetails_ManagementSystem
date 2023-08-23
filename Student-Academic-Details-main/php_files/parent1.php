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
.parents{
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
text-indent: -5em;
float: left;
width: 75px;
padding-right: 20px;
}

#fname{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#focc{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#fincome{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#mname{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#mocc{
width: 300px;
height: 30px;
border: none;
border-radius: 3px;
padding-left: 8px;
}
#mincome{
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
$reg = $_POST['reg'];
$fname = $_POST['fname'];
$focc = $_POST['focc'];
$fincome = $_POST['fincome'];
$mname = $_POST['mname'];
$mocc = $_POST['mocc'];
$mincome = $_POST['mincome'];
$sql = "INSERT INTO parent_details"."(reg_no, father_name, father_occ, father_income, mother_name, mother_occ, mother_income)". "VALUES($reg, '$fname', '$focc', $fincome, '$mname', '$mocc', $mincome)";
$retval = mysqli_query($conn,$sql);
if(! $retval){
die("Couldn't enter details".mysqli_connect_error());}
echo "Data entered successfully";
mysqli_close($conn);
}
?>
<ul>
<li><a class="active" href="home.html">HOME</a></li>
<li><a href="basic.php">BASIC DETAILS</a></li>
<li><a href="addr.php">ADDRESS</a></li>
<li><a href="parent1.php">PARENTS DETAILS</a></li>
<li><a href="academic.html">ACADEMIC DETAILS</a></li>
<li><a href="logout.php">LOGOUT</a></li>
</ul>


<center><h2>Parent Details</h2></center>
<div class="parents">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label for="reg">Reg no. </label>
<input type="number" name="reg" value="Register number" /><br><br>
<label for="fname">Father's Name </label>
<input type="text" name="fname" /><br><br>
<label for="focc">Father's Occupation </label>
<input type="text" name="focc" /><br><br>
<label for="fincome">Father's Income </label>
<input type="number" name="fincome" /><br><br>
<label for="mname">Mother's name </label>
<input type="text" name="mname" /><br><br>
<label for="mocc">Mother's Occupation</label>
<input type="text" name="mocc"/><br><br>
<label for="mincome">Mother's income</label>
<input type="number" name="mincome" value="mincome" /><br><br>
<input type="submit" name="submit" value="Add"/><br><br>
</form>




</body>
</html>