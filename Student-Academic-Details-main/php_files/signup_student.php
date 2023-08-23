<?php







if(isset($_POST['signup'])){







$conn = mysqli_connect("localhost","root","","student_det");







if(! $conn){







die("Couldn't connect".mysqli_connect_error());}





$ad = $_POST['ad'];



$email = $_POST['mail'];



$pw = $_POST['password'];






$sql = "INSERT INTO user_pw"."(reg_no,pword,email)". "VALUES('$ad','$pw','$email')";



$retval = mysqli_query($conn,$sql);



if(! $retval){



die("Couldn't enter details".mysqli_connect_error());}




echo "<script>alert('Data entered successfully')</script>";




mysqli_close($conn);




}



?>