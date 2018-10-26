  <?php
  //error_reporting(0);
  include("libs/config.php");
  //session_start();
  
  if (isset($_SESSION['user-id'] ) ) {
    $session_id=$_SESSION['user-id'];
    // echo $session_id;

    $fetch_data="SELECT * from `user` WHERE `id`='$session_id'";

    $run_query=mysqli_query($conn,$fetch_data);
                          //echo $run_query;
    $row=mysqli_fetch_array($run_query);

    $em = $row['email']; 
    $name = $row['username']; 
    $loc = $row['location'];  
    $mob=$row['mobno'];
    $birth=$row['DOB'];
    // $abt=$row['About'];
    $img=$row['image'];
// echo $img;


  } 
  else {
  }
  ?>
    <?php include("header.php"); ?>
  <section style="padding: 40px; padding-bottom: 40px;">
    
  </style>
  <div class="container" id="myprofile">
    <div class="row">
        <!-- <div  class="col-md-4 col-xs-4 col-sm-4 col-lg-4 ">
          <img src="assets/images/My-profile-page.jpg" alt="#" style="height: 300px;width: 300px;">
        </div>
      -->
      <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 ">
        <div class="blog-widget mb-10">
           <div class="blog-author mb-20" id="pimg">
                                  
                                   <?php echo '<a href="img/comment-img.jpg"  target="_blank">';
                                   echo '<img src="img/comment-img.jpg'.$img.'">';

                                   echo '</a>';?>
                                  

    
                               </div>
<!-- <img src="img/profilepictures/v4.jpg"> -->

                               <!-- '<img src="img/profilepics/'.$img.'" alt="">';?> -->
          
          <div class="blog-author mb-20">

            <h5><a href="#"><?php echo $name;?></a>
            </h5><span>PHP Developer</span>
          </div>
        </div>
        <div class="recent-post-wrapper mb-30">

          <div class="recent-post-content">
            <h5><a href="#">Location</a></h5>
            <span><?php echo $loc;?></span>
          </div>
        </div>
        <div class="recent-post-wrapper mb-30">
          <div class="recent-post-content">
            <h5><a href="#">MOBILE</a></h5>
            <span><?php echo $mob;?></span>
          </div></div>
          <div class="recent-post-wrapper mb-20">
            <div class="recent-post-img">
              <a href="#"><img src="assets/img/blog/blog-recentpost-2.jpg" alt=""></a>
            </div>          
            <div class="recent-post-content">
              <h5><a href="#">Email-ID</a></h5>
              <span><?php echo $em;?></span>
            </div>
          </div>
          <div class="recent-post-wrapper mb-10">
            <div class="recent-post-content">
              <h4><a href="#">DOB</a></h4>

              <span><?php echo $birth;?></span>

            </div>
          </div>

        </div>    
        <div class="col-md-8 col-xs-8 col-sm-8 col-lg-8" >
          <div class="blog-content">
            <!-- <div class="blog-img mb-0"> -->
              <a href="#">
                <img src="img/content/chef-img.jpg">
              </a>
                                </div> 
                                <!-- <div class="single_slide" style="background-image: url(img/content/blog-post-5.png)"> -->
                                  <h4>Profile Information</h4>
                                  idfselaoaslojsalsjlsjla
                                  <p id="pedit"><?php echo $abt;?> </p>
                                <br><button type="button" class="btn  btn-md "><a href="edit.php?view=<?php echo $em;?>" style="color:red;">Edit Profile</a></button>

                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </section>

<?php include("footer.php"); ?>
	
