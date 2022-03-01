<?php
include "header.php";
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
$db=mysqli_connect("localhost","root","","coaching") or die(mysqli_error());
$fetch_qurey="select * from trainer";
$result=mysqli_query($db,$fetch_qurey) or die(mysqli_error());
if (mysqli_num_rows($result)>0) {
    
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
         <th>Number</th>
        <th>Address</th>
        <th>DOB</th>
        </thead>
        <tbody>
            <?php
             while ($trainer=mysqli_fetch_assoc($result)) {

            ?>
            <tr>
                <td><?php echo $trainer['t_id'];?></td>
                <td><?php echo $trainer['t_name'];?></td>
                <td><?php echo $trainer['t_number'];?></td>
                <td><?php echo $trainer['t_address'];?></td>
                <td><?php echo $trainer['t_dob'];?></td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
<?php  } ?>
</div>
</div>
<?php
include 'footer.php';
?>
