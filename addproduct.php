 <?php 
            include("libs/config.php");
            error_reporting(0);
            if (isset($_POST['btn_submit'])) {

              $name = $_POST['name'];
              $price = $_POST['price'];
              $desc = $_POST['desc'];
              $image = $_POST['image'];
              $category = $_POST['category'];
              date_default_timezone_set('Asia/Kolkata');
              $date = date('d-m-y');
              $time = date('h:i:s');
              $status = "0";

              $target = "assets/img/product/" .basename($_FILES['image']['name']);

               $image = $_FILES['image']['name'];

                // $db = "insert into `add product` (`prod_nm`,`prod_price`,`description`,`image`,`date`,`time`,`status`) values ('$name','$price','$desc','$image','$date','$time','$status')";
               $db="INSERT INTO `add_product` ( `product name`, `price`,`category`, `description`, `image`,`date`, `time`, `status`) VALUES ('$name', '$price','$category', '$desc', '$image', '$date', '$time', '@staus')";
                 $dbsup = mysqli_query($conn,$db);
                if ($dbsup) { 
                  move_uploaded_file($_FILES['image']['tmp_name'],$target);
                  echo"<script type=\"text/javascript\">
                  window.location='menu(view-1).php';
                  </script>";
                  // header('Location:shop-right-sidebar.php');
                }
                else {
                  echo "sorry unable to register your data";
                }

              }
            
            ?>
<?php include("header.php") ?>
<br>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4" id="form">
        <form action="" method="post" enctype="multipart/form-data" id="form">
         <!--  <center><img src="assets/imgs/f1.png"></center> -->
          
          <input type="text" placeholder=" product name" class="form-control form1" name="name"><br>

          <input type="TEXT" placeholder="product price" class="form-control form1" name="price"><br>
          <input type="text" placeholder="product info" class="form-control form1" name="desc"><br>

          <input type="file" placeholder="product image" class="form-control form1" name="image"><br>

          


          <select name="category" placeholder="category" class="form-control form1">
             <option value=" "></option> 
    <option value="fruits">fruits</option> 
    <option value="fish">fish</option> 
    <option value="poultry">poultry</option> 
    <option value="vegetables">vegetables</option> 
    <option value="drinks">drinks</option> 
    <option value="desserts">desserts</option> 
</select> 

          <br>
          <button class="btn-md default-btn btn-centered form-control" name="btn_submit" value="add">add product</button>
            
           
            </form>
          </div>

        </section>
        <br>
        <br>

        <!-- end of form page -->


<br>
<?php include("footer.php") ?>