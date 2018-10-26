<?php include("header.php") ?>
<br>
<section style="">
  <div class="container" style="">
    <div class="col-lg-6 offset-lg-6" style="margin-right: 220px; margin-left:220px;">
    <!-- <div class="col-lg-10 offset-lg-2"> -->

    <!-- <div class="col-12" id="form"> -->
      
  <!-- <h2 style="color:grey;"><center><b>Login!</b></center></h2> -->
  <form class="form-horizontal" action="/action_page.php" style="padding: 40px;
  border: 1px solid #ddd;">
  
  <!-- <center><img src="img/landing-logo.png"></center>
     --><div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color:red">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control input-lg" id="email" placeholder="email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" style="color:red">password</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control input-lg" id="pwd" placeholder="password" name="pwd">
      </div>
    </div>
    <div class="form-group"> 
    <div class="row">       
      <!-- <div class="col-sm-offset-2 col-sm-10"> -->
        <!-- <div class="checkbox"> -->
          <input type="checkbox" name="remember"><a href=""> Remember me</a>
          <a href="" style="float: right" >foget password</a><br><br>
          <button class="btn-md default-btn btn-centered form-control btn btn-danger" class=""><a href="login.htm">
            Login</a></button>
            <center>dont have an account?<a href="register.php">register</a></center>
            

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

<?php include("footer.php") ?>