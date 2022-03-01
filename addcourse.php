<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Course</h2>
    <form class="post-form" action="functions/addcoursedata.php" method="post">
        <div class="form-group">
            <label>Course Name</label>
            <input type="text" name="cname" />
        </div>
        <div class="form-group">
            <label>Course Trainer</label>
            <select name="ctrainer">
                <?php
             
             $db=mysqli_connect("localhost","root","","coaching") or die(mysqli_error());
        $fetch_qurey="select * from trainer";
          $result=mysqli_query($db,$fetch_qurey) or die(mysqli_error());
          while ($trainer=mysqli_fetch_assoc($result)) {
            ?>
                <!-- <option value=""selected disabled>Select Trainer</option> -->
                <option value="<?php echo $trainer['t_id'];?>"><?php echo $trainer['t_name'];?></option>
             <?php  } ?>
            </select>
        
        </div>
        <div class="form-group">
            <label>Course Price</label>
            <input type="number" name="cprice" />
        </div>
         <div class="form-group">
            <label>Course Durations</label>
            <input type="number" name="cduration" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
<?php include 'footer.php'; ?>



