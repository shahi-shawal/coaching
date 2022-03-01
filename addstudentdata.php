<?php
$student_name=$_POST['sname'];
$student_number=$_POST['snumber'];
$student_course=$_POST['course'];
$db=mysqli_connect("localhost","root","","coaching") or die(mysqli_error());
$fetch_qurey="select * from course WHERE c_id=$student_course";
$result=mysqli_query($db,$fetch_qurey) or die(mysqli_error());
$eachdata= mysqli_fetch_assoc($result);
$student_trainer= $eachdata["c_trainer"];
   $insert_qurey="INSERT INTO student(s_name,s_number,s_course,s_trainer)values ('$student_name',$student_number,$student_course,$student_trainer)";
    mysqli_query($db,$insert_qurey) or die(mysqli_error());

     header('Location:http://localhost/Coaching/home.php');

     mysqli_close($db);

?>