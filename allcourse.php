<?php
include "header.php";
?>
<div id="main-content">
    <h2>All Course</h2>
    <?php
    $db=mysqli_connect("localhost","root","","coaching") or die(mysqli_error());
        $fetch_qurey="select * from course INNER JOIN trainer ON course.c_trainer=trainer.t_id";
          $result=mysqli_query($db,$fetch_qurey) or die(mysqli_error());
          if (mysqli_num_rows($result)>0) {
       
          ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Course</th>
         <th>Price</th>
         <th>Duration</th>
        <th>Trainer</th>
        </thead>
        <tbody>
            <?php while ($course=mysqli_fetch_assoc($result)) {
                ?>
            <tr>
                <td><?php echo $course['c_id'];?></td>
                <td><?php echo $course['c_name'];?></td>
                <td><?php echo $course['c_price'];?></td>
                <td><?php echo $course['c_durations'];?></td>
                <td><?php echo $course['t_name'];?></td>
            </tr>
        <?php } ?>
        </tbody>
    <?php } ?>
    </table>
</div>
</div>
<?php
include 'footer.php';
?>
