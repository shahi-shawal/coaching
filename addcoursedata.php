<?php
$course_name=$_POST['cname'];
$course_trainer=$_POST['ctrainer'];
$course_price=$_POST['cprice'];
$course_Durations=$_POST['cduration'];

$db=mysqli_connect("localhost","root","","coaching") or die(mysqli_error());
                $insert_qurey="INSERT INTO course(c_name,c_price,c_durations,c_trainer)values ('$course_name',$course_price,$course_Durations,$course_trainer)";
                mysqli_query($db,$insert_qurey) or die(mysqli_error());

     header('Location:http://localhost/Coaching/allcourse.php');

     mysqli_close($db);

?>