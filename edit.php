<?php
//error_reporting(0);
include("libs/config.php");
if(isset($_REQUEST["view"]) && isset($_REQUEST["view"]) != "")
{
$value = $_REQUEST["view"];
$fetch_data="SELECT * from `user` WHERE `email`='$value'";
$run_query=mysqli_query($conn,$fetch_data);
$row=mysqli_fetch_array($run_query);
$name = $row['name'];
$em=$row['email'];
$loc=$row['location'];
$mob=$row['mobno'];
$birth=$row['DOB'];
//$abt=$row['About'];
$img=$row['image'];

if(isset($_POST['btn_submit'])){
date_default_timezone_set('Asia/kolkata');
$date = date("d-m-y");
$time= date("h:i:s");
$status="0";
$name = $_POST['name'];
$email= $_POST['email'];
$location=$_POST['location'];
$mobile=$_POST['mobile'];
$dateob=$_POST['dob'];
$abot=$_POST['about'];
$image=$_POST['image'];

$target = "assets/img/product/" .basename($_FILES['image']['name']);

 $image = $_FILES['image']['name'];

$insert = "UPDATE `user` SET `name`='$name',`email`='$email',`location`='$location',`mobno`='$mobile',
`DOB`='$dateob',`image`='$image',`date`='$date',`time`='$time',`status`='$status' WHERE `email`='$email'";
$run_query = mysqli_query($conn, $insert);
if ($run_query) {
move_uploaded_file($_FILES['image']['tmp_name'],$target);
echo'<script>window.location="myprofile.php";</script>';
}
else{
$h = 'szgrsgzb';
}
}
}
else {
}
?>
<?php include("header.php"); ?>
<section style="padding:40px;>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4" id="form">
        <form action="" method="post" id="frm">
          <!-- <center><img src="assets/imgs/f1.png"></center> -->
          <input type="text" placeholder="username" class="form-control form1" name="username" value="<?php echo $name;?>"><br>

          <input type="email" placeholder="Email" class="form-control form1" name="email"  value="<?php echo $em;?>"><br>
          <input type="mobile" placeholder="Mobile NO." class="form-control form1" name="mobile" value="<?php echo $mob;?>"><br>

          <input type="text" placeholder="Location" class="form-control form1" name="location" value="<?php echo $loc;?>"><br>
 <input type="date" placeholder="DOB" class="form-control form1" name="dob" value="<?php echo $birth;?>"><br>
  <input type="file" placeholder="upload profile" class="form-control form1" name="image" value="<?php echo $img;?>"><br>
   <textarea form="frm" name="about" rows="5" cols="" value="" class="form-control form1"><?php echo $abt;?></textarea><br>
<input type="checkbox" id="rememberme">I agree terms and conditions


          <!-- <select name="gender" placeholder="gender">
            <option value="volvo">Male</option>
            <option value="saab">Female</option>
          </select><br>
 -->
          <br>
          
          	<button class="btn-md default-btn btn-centered btn-lg form-control" value="Submit" name="btn_submit">Edit</a></button>
          
          </div>
            
            </form>
          </div>

        </section>
        <br>
        <br>

        <!-- end of form page -->

<?php include("footer.php"); ?>