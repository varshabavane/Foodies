<?php
include ("header.php");
?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 col-md-offset-4" id="form">

        <form action="" method="post" enctype="multipart/form-data">
         <?php
error_reporting(0);
include("libs/config.php");

if(isset($_REQUEST["id"]) && isset($_REQUEST["id"]) != "")
{
$value = $_REQUEST["id"];
$fetch_data="SELECT * from `add_product` WHERE `id`='$value'";
$run_query=mysqli_query($conn,$fetch_data);
$row=mysqli_fetch_array($run_query);
$productname = $row['product name'];
$price=$row['price'];
$desc=$row['description'];
$category=$row['category'];

// $abt=$row['About'];
$img=$row['image'];

if(isset($_POST['btn_submit'])){
date_default_timezone_set('Asia/kolkata');
$date = date("d-m-y");
$time= date("h:i:s");
$status="0";
$productname = $_POST['productname'];
$price= $_POST['price'];
$desc=$_POST['desc'];

  $cat=$_POST['category'];

//$dateob=$_POST['dob'];
//$mobile=$_POST['mobno'];
// $abot=$_POST['about'];
$img=$_POST['image'];

$target = "assets/img/product/" .basename($_FILES['image']['name']);

 $image = $_FILES['image']['name'];

$insert = "UPDATE `add_product` SET `product name`='$productname',`price`='$price',`description`='$desc',`category`='$cat',`image`='$img',`date`='$date',`time`='$time',`status`='$status' WHERE `id`='$value'";
$run_query = mysqli_query($conn, $insert);
if ($run_query) {
move_uploaded_file($_FILES['image']['tmp_name'],$target);
echo'<script>window.location="menu(view-1).php";</script>';
}
else{
$h = 'szgrsgzb';
}
}
}
else {
}
?>
          <form action="" method="post" id="frm">
                            
                            <!--Social Buttons--> 
                            <div class="form-group" sty>
                                <label class="control-label">Productname</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="productname" type="text" class="form-control" name="productname" placeholder="ProductName" value="<?php echo $productname;?>">
                                </div>

                            </div>
                             <div class="form-group">
                                <label class="control-label">price</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                                    <input id="email" type="text" class="form-control" name="price" placeholder="Price" value="<?php echo $price;?>">
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="control-label">description</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input id="pass" type="text" class="form-control" name="desc" placeholder="description" value="<?php echo $desc;?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">product Image</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-camera"></i></span>
                                    <input id="image" type="file" class="form-control" name="image" placeholder="product image" value="<?php echo $img;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- <div class="dropdown"> -->
   Select Category<select name="category" value="<?php echo $cat;?>"> 
    <option value="<?php echo $cat;?>"></option> 
    <option value="fruits">fruits</option> 
    <option value="fish">fish</option> 
    <option value="poultry">poultry</option> 
    <option value="vegetables">vegetables</option> 
    <option value="drinks">drinks</option> 
    <option value="desserts">desserts</option> 
</select> 
<div class="form-group">
                                <input id="" type="checkbox"><label class="control-label">I agree terms and condition</label>
                                                            </div>
                            
                            
                            <div>
                                <!-- <input value="Submit" type="submit" name="btn_submit"> -->
                                 <button class="btn btn-base pull-right form-control" name="btn_submit" value="submit">Update product</button>
                            </div>
                        </form>
      </div>
    </div>

  </div>

</section>
<br><br>
<!-- End of form -->
<?php
include ("footer.php");
?>
