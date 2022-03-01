<?php 
$trainer_name=$_POST['tname'];
$trainer_number=$_POST['tnumber'];
$trainer_dob=$_POST['tdob'];
$trainer_address=$_POST['taddress'];

$db=mysqli_connect("localhost","root","","coaching") or die(mysqli_error());

$insert_qurey="INSERT INTO trainer(t_name,t_number,t_dob,t_address)
values('$trainer_name',$trainer_number,'$trainer_dob','$trainer_address')";
mysqli_query($db,$insert_qurey)	or die(mysqli_error());

header("Location:http://localhost/Coaching/alltrainer.php");
mysqli_close($db);

 ?>