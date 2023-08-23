<?php
if(isset($_POST['Login']))
{
	session_start();
$conn = mysqli_connect("localhost","root","","student_det");
if(! $conn){
die("Couldn't connect".mysqli_connect_error());}
$reg=$_POST['reg'];
$pwd=$_POST['password'];
if($reg!=''&&$pwd!='')
{
$query=mysqli_query($conn,"select * from user_pw where reg_no='$reg' and pword='$pwd'");
$res=mysqli_fetch_row($query);
if($res)
{
$_SESSION['reg']=$reg;
echo "<script>window.open('home.html','_self')</script>";
}
else
{
echo"<script>alert('You entered username or password is incorrect')</script>";
}
}
else
{
echo"<script>alert('Enter both password and username')</script>";
}
}
?>