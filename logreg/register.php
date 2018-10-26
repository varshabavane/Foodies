<?php include("header.php"); ?>
<!-- s -->	<!-- <center><img src="img/landing-logo.png"></center>

     -->
     <br>
     <section style="padding:40px;">
  <div class="container" style="">
    <div class="col-lg-6 offset-lg-6" style="margin-right: 220px; margin-left:220px;">
    <!-- <div class="col-lg-10 offset-lg-2"> -->

    <!-- <div class="col-12" id="form"> -->
      
  <!-- <h2 style="color:grey;"><center><b>Login!</b></center></h2> -->
  <form class="form-horizontal" action="/action_page.php" style="padding: 40px;
  border: 1px solid #ddd;">
   <?php 
          include("libs/config.php");
          error_reporting(0);
          if (isset($_POST['regtr_btn'])) {

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            date_default_timezone_set('Asia/Kolkata');
            $date = date('d-m-y');
            $time = date('h:i:s');

            $status = "0";

            if (empty($username)) {
              $error_1 = " *username cnt be empty";
            }
            elseif (empty($email)) {
              $error_2 = " *email cnt be empty";
            }
            elseif (empty($password)) {
              $error_3 = " *Password cnt be empty";
            }
            elseif (empty($cpassword)) {
              $error_4 = " *please confirm password";
            }
            elseif ($password != $cpassword) {
              $error_5 = " *password doesnt match";
            }
            else{
                           $db = "insert into `user` (`username`,`email`,`password`,`cpassword`,`date`,`time`,`status`) values ('$username','$email','$password','$cpassword','$date','$time','$status')";
                           $dbsup = mysqli_query($conn,$db);
                           if ($dbsup) {
                            echo '<script>
                alert("Data saved successfully");
                            </script>';
                            header('Location:login.php');
                           }
                           else {
                            echo "sorry unable to register your data";
                           }

            }
          }

          ?>
  
  <!-- <center><img src="img/landing-logo.png"></center>

     --><div class="form-group">
      <label class="control-label col-sm-2" for="username" style="color:red">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control regtr input-lg" id="username" placeholder="username" name="username" autofocus="" tabindex="1" value="<?php if(isset($username)) { echo $username;}?>">
        <p style="color:red;" class="text-center"><?php echo $error_1;?> </p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color:red">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control regtr input-lg" id="email" placeholder="email" name="email" tabindex="2" value="<?php if(isset($email)){ echo $email;}?>">
        <p style="color:red;" class="text-center"><?php echo $error_2;?> </p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" style="color:red">password</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control regtr input-lg" id="pwd" placeholder="password" name="password" tabindex="3" >
        <p style="color:red;" class="text-center"><?php echo $error_3;?> </p>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" style="color:red">Confirm password</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control regtr input-lg" id="pwd" placeholder=" Confirm password" name="cpassword" tabindex="4">
         <p style="color:red;" class="text-center"><?php echo $error_4;?> </p>
          <p style="color:red;" class="text-center"><?php echo $error_5;?> </p>
        
      </div>
    </div>
   
    <div class="form-group">   
    <div class="row">
      
    </div>     
      <!-- <div class="col-sm-offset-2 col-sm-10"> -->
        <div class="checkbox">
          <center><input type="checkbox" name="remember"><a href="">I angree terms and conditions</a></center>
          
          <button class="btn-md default-btn btn-centered form-control btn btn-danger"  name="regtr_btn" id="rbtn">
            Register</button>
            <center>allready have an account?<a href=register.php">Login</a></center>
            

         <!-- <label align="right"><a href="register.php">Don't have an account?Register</a></label> --> 
     </div>
      </div>
    </div>
   <!--  <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
         <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
 -->
    
  </form>
</div>

</section>

<br>

</section>
<br>

<?php include("footer.php") ?>