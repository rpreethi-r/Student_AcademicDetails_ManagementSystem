<html>
<head>
<title>Parent details</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



<style media="screen">
*,
*:before,
*:after{
padding: 0;
margin: 0;
box-sizing: border-box;
}
body{
background-color: #25665b;
}
a:link, a:visited {
background-color: white;
color: black;
padding: 14px 25px;
border-radius: 10px;
text-align: center;
text-decoration: none;
display: inline-block;
}



a:hover, a:active {
background-color: gray;
}



.background{
width: 430px;
height: 520px;
position: absolute;
transform: translate(-50%,-50%);
left: 50%;
top: 50%;
}
.background .shape{
height: 200px;
width: 200px;
position: absolute;
border-radius: 50%;
}
.shape:first-child{
background: linear-gradient(
#1845ad,
#23a2f6
);
left: -80px;
top: -80px;
}
.shape:last-child{
background: linear-gradient(
to right,
#ff512f,
#f09819
);
right: -30px;
bottom: -80px;
}
form{
height: 520px;
width: 400px;
background-color: rgba(255,255,255,0.13);
position: absolute;
transform: translate(-50%,-50%);
top: 50%;
left: 50%;
border-radius: 10px;
backdrop-filter: blur(10px);
border: 2px solid rgba(255,255,255,0.1);
box-shadow: 0 0 40px rgba(8,7,16,0.6);
padding: 50px 35px;
}
form *{
font-family: 'Poppins',sans-serif;
color: #ffffff;
letter-spacing: 0.5px;
outline: none;
border: none;
}
form h3{
font-size: 32px;
font-weight: 500;
line-height: 42px;
text-align: center;
}



label{
display: block;
margin-top: 30px;
font-size: 16px;
font-weight: 500;
}
input{
display: block;
height: 50px;
width: 100%;
background-color: rgba(255,255,255,0.07);
border-radius: 3px;
padding: 5 10px;
margin-top: 8px;
font-size: 14px;
font-weight: 300;
}
::placeholder{
color: #e5e5e5;
}
button{
margin-top: 50px;
width: 100%;
background-color: #ffffff;
color: #080710;
padding: 20px 0;
font-size: 18px;
font-weight: 600;
border-radius: 5px;
cursor: pointer;
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
<body bgcolor="EBEDEF">
<center><h2>Parent Details</h2></center>
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