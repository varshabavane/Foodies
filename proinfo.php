<?php
//error_reporting(0);
include("libs/config.php");
if(isset($_REQUEST["view"]) && isset($_REQUEST["view"]) != "")
{
  $value = $_REQUEST["view"];
  $fetch_data="SELECT * from `add_product` WHERE `id`='$value'";
  $run_query=mysqli_query($conn,$fetch_data);
  $row=mysqli_fetch_array($run_query);
  $pname = $row['product name'];
  $pprice=$row['price'];
  $desc=$row['description'];
  $img=$row['image'];
// echo $pname;
}else {
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from new.uouapps.com/takeaway/single-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Aug 2018 04:31:45 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Single-menu</title>
  <!-- Stylesheets -->
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/thumb-slide.css">
  <link rel="stylesheet" href="css/owl.carousel.css">

  <!--[if IE 9]>
	<script src="js/media.match.min.js"></script>
	<![endif]-->

</head>

<body>
  <div id="main-wrapper">
    <header id="header">
      <div class="header-top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
              <div class="header-login">
                <a href="#">Order online</a>
                <a href="#">Login</a>
              </div>
              <!-- end .header-login -->
              <!-- Header Social -->
              <ul class="header-social">
                <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-google-plus-square"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-pinterest-square"></i></a>
                </li>
              </ul>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">
              <p class="call-us">
                Call Us: <a class="font" href="#">+1123 4567</a>
                <span class="open-now"><i class="fa fa-check-square"></i>We are open now(9am-10pm)</span>
                <span class="close-now"><i class="fa fa-square"></i>We are close now(10pm-9am)</span>
              </p>
            </div>
          </div>
          <!-- end .container -->
        </div>
      </div>
      <!-- end .header-top-bar -->

      <div class="header-nav-bar">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">
                <img src="img/header-logo.png" alt="">
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="index.html">Home-1</a></li>
                    <li><a href="index-landingpage.html">Home landing</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle act" data-toggle="dropdown">Menu Card <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="menu(view-1).html">Menu( view-1 )</a></li>
                    <li><a href="menu(view-2).html">Menu( view-2 )</a></li>
                    <li><a href="menu-without-side-panel.html">Menu( grid-view )</a></li>
                    <li><a href="single-menu.html">Single Menu</a></li>
                    <li><a href="menu(2grid-list).html">Menu( 2grid-list-view )</a></li>
                    <li><a href="menu-with-right-checkout.html">Menu( with-checkout )</a></li>
                    <li><a href="dish.html">Dish</a></li>
                    <li><a href="dish-with-no-sidebar.html">Dish ( No Sidebar )</a></li>
                    <li><a href="ShortCodes-2.html">Shortcodes</a></li>
                  </ul>
                </li>
                <li><a href="chef.html">Chef</a>
                </li>
                <li><a href="our-team.html">Team</a>
                </li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="blog-list.html">Blog List</a></li>
                    <li><a href="blog-post.html">Blog Post</a></li> 
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">News & Events <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="news-events.html">News & Events list</a></li>
                    <li><a href="event-page.html">News & Events post</a></li> 
                  </ul>
                </li>
                <li><a href="contact-us.html">Contact us</a>
                </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
        </nav>
      </div>
      <!-- end .header-nav-bar -->

      <div class="small-menu">
        <div class="container">
          <div class="choose-option">
            <ul class="list-unstyled list-inline">
              <li class="active"><a href="#">1. Choose</a>
              </li>
              <li><a href="#">2. Confirm</a>
              </li>
              <li><a href="#">3. Checkout</a>
              </li>
            </ul>
          </div>

          <!-- end .choose-option-->
          <ul class="list-unstyled list-inline">
            <li><a href="index.html">Home</a>
            </li>
            <li><i class="fa fa-chevron-right"></i>
            </li>
            <li><a href="menu-1.html">Menu Card</a>
            </li>
          </ul>
        </div>
        <!-- end .container-->
      </div>
      <!--end .small-menu -->
    </header>
    <!-- end #header -->
    <!-- thumbnail slide section -->

    <div id="page-content">
      <div id="thumbnail-slide">
        <div class="container">
          <div id="thumb-slide">
            <div id="thumb-slide-section" class="owl-carousel">
              <div class="item">
                <a href="#">
                  <img src="img/content/meat-fish.png" alt="meet-fish">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/milk.png" alt="milk">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/neggies.png" alt="viegene">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/fruits.png" alt="fruits">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/fastfood.png" alt="fast-foood">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/meat-fish.png" alt="meet-fish">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/milk.png" alt="milk">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/neggies.png" alt="viegene">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/fruits.png" alt="fruits">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/fastfood.png" alt="fast-foood">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/meat-fish.png" alt="meet-fish">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/milk.png" alt="milk">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/neggies.png" alt="viegene">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/fruits.png" alt="fruits">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/fastfood.png" alt="fast-foood">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/meat-fish.png" alt="meet-fish">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/milk.png" alt="milk">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/neggies.png" alt="viegene">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/fruits.png" alt="fruits">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/fastfood.png" alt="fast-foood">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/meat-fish.png" alt="meet-fish">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/milk.png" alt="milk">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/neggies.png" alt="viegene">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/fruits.png" alt="fruits">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="img/content/fastfood.png" alt="fast-foood">
                </a>
              </div>
            </div>
            <!-- end .thumb-slide-section -->
          </div>
          <!-- end #thumb-slide -->
        </div>
        <!-- end .container -->
      </div>
      <!-- end .thumbnail-slide -->

      <!-- start #main-wrapper -->
      <div class="container">
        <div class="row mt30">
          <div class="col-md-12">
            <ul class="nav nav-tabs" role="tablist">
              <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">All</a>
              </li>
              <li><a href="#tab-2" role="tab" data-toggle="tab">Daily Menu</a>
              </li>
              <li><a href="#tab-3" role="tab" data-toggle="tab">Starters</a>
              </li>
              <li><a href="#tab-3" role="tab" data-toggle="tab">Main Course</a>
              </li>
              <li><a href="#tab-3" role="tab" data-toggle="tab">Dessert</a>
              </li>
              <li><a href="#tab-3" role="tab" data-toggle="tab">Recommended</a>
              </li>
              <li><a href="#tab-3" role="tab" data-toggle="tab">Starters</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active" id="tab-1">
                <div class="all-menu-details">
                  <h5>Daily Menu</h5>
                  <div class="single-menu">
                    <div class="list-image">
                      <!-- <img src="img/content/menu-list-img.jpg" alt=""> -->
                      <?php echo '<a href="assets/img/product/'.$img.'"  target="_blank">';
               echo '<img src="assets/img/product/'.$img.'">';

               echo '</a>';?>
                    </div>
                    <div class="all-details">
                      <div class="visible-option">
                        <div class="details">
                          <h6><a href="dish.html"><?php echo $pname;?></a>
                          </h6>
                          <ul class="share-this list-inline text-right">
                            <li><a href="#">Share</a>
                              <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-pinterest-square"></i></a>
                                </li>
                              </ul>
                            </li>
                          </ul>

                          <p><strong>Description:</strong>
                            <?php echo $desc;?></p>

                          <p><strong>Ingredients:</strong>5 tiger shrimps, garlic, butter, lemon, herbs, 5 tiger shrimps, garlic, butter, lemon, herbs</p>
                        </div> 

                        <div class="price-option">
                          <h4>$ <?php echo $pprice;?></h4>
                          <button class="toggle">Option</button>
                        </div>
                        <!-- end .price-option-->
                        <div class="qty-cart text-center clearfix">
                          <h6>Qty</h6>
                          <form class="">
                            <input type="text" placeholder="1">
                            <button><i class="fa fa-shopping-cart"></i>
                            </button>
                          </form>
                        </div>
                      </div>
                      <!-- end .qty-cart -->

                      <div class="dropdown-option clearfix">
                        <div class="dropdown-details">
                          <form class="default-form">
                            <h5>Please Select Your Option</h5>
                            <h6>Option</h6>
                            <span class="radio-input">
                              <input type="radio" id="rice-1" name="choose">
                              <label for="rice-1">fruits</label>
                            </span>
                            
                            <span class="radio-input">
                              <input type="radio" id="noodles-1" name="choose">
                              <label for="noodles-1">meat</label>
                            </span>
                            
                            <span class="radio-input">
                              <input type="radio" id="bread-1" name="choose">
                              <label for="bread-1">vegetables</label>
                            </span>
                            <span class="radio-input">
                              <input type="radio" id="bread-1" name="choose">
                              <label for="bread-1">desserts</label>
                            </span>
                            <span class="radio-input">
                              <input type="radio" id="bread-1" name="choose">
                              <label for="bread-1">starter</label>
                            </span>
                            <span class="radio-input">
                              <input type="radio" id="bread-1" name="choose">
                              <label for="bread-1">drinks</label>
                            </span>




                            <h6>Extras</h6>
                            <span class="checkbox-input">
                              <input type="checkbox" id="shrimps-1">
                              <label for="shrimps-1">Double Shrimps<i class="fa fa-plus price">$3.00</i>
                              </label>
                            </span>
                        
                            <span class="checkbox-input">
                              <input type="checkbox" id="extra-veggies-1">
                              <label for="extra-veggies-1">Extra Veggies <i class="fa fa-plus price">$3.00</i>
                              </label>
                            </span>
                          
                            <span class="checkbox-input">
                              <input type="checkbox" id="additional-butter-1">
                              <label for="additional-butter-1">Additional Butter <i class="fa fa-plus price">$3.00</i>
                              </label>
                            </span>

                            <h6>Additional Notes</h6>
                            <textarea placeholder="Write here"></textarea>
                            
                            <a class="btn btn-default-red">Confirm</a>
                            <a class="btn btn-default-black">Cancle</a>
                          </form>
                        </div>
                        <!--end .dropdown-details-->
                      </div>
                      <!--end .dropdown-option-->
                    </div>
                    <!-- end .all-details -->
                  </div> <!-- end .single-menu -->
                </div> <!-- end .all-menu-details -->
                
                <!--end all-menu-details-->
                <div class="pagination">
                  <ul class="list-inline  text-right">
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#">6</a>
                    </li>
                  </ul>
                </div>
                <!-- end .pagination -->
              </div> <!-- end .tab-pane -->

           
              <div class="tab-pane fade" id="tab-2">
                <p><strong>Description:</strong><br>Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. Praesent sodales velit quis augue.</p>
              </div> <!-- end .tab-pane  -->
            </div> <!-- end .tab-content -->
          </div>
          <!--end main-grid layout-->
        </div>
        <!-- end .row -->
      </div>
      <!--end .container -->
      <!-- footer begin -->
      <footer id="footer">
        <div class="container">
          <div class="main-footer">
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <img src="img/header-logo.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.
                </p>
              </div>

              <div class="col-sm-6 col-md-3">
                <h5>Quick Links</h5>
                <div class="row">
                  <div class="col-md-6">
                    <ul class="footer-links padd">
                      <li><a href="#">Home</a>
                      </li>
                      <li><a href="#">Menu Card</a>
                      </li>
                      <li><a href="#">reservation</a>
                      </li>
                    </ul>
                  </div>

                  <div class="col-md-6">
                    <ul class="footer-links">
                      <li><a href="#">about us</a>
                      </li>
                      <li><a href="#">news & events</a>
                      </li>
                      <li><a href="#">contact us</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-3">
                <h5>Latest Tweets
                  <span><i class="fa fa-chevron-left"></i>  <i class="fa fa-chevron-right"></i>
                  </span>
                </h5>

                <p><a href="#">takeaway:</a> Take a (Photo) Tour of #Envato's #Melbourne Headquarters (...)<br>
                  <span>7 hours ago</span>
                </p>
              </div>

              <div class="col-sm-6 col-md-3">
                <h5>Newsletter</h5>
                <p>Sign up for our newsletter!</p>
                <div class="footer-subscribe">
                  <form>
                    <input type="Email" placeholder="Email address...">
                    <button type="submit" value=""><i class="fa fa-plus-circle-o"></i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="footer-copyright">
          <div class="container">
            <p>Copyright 2014 © TakeAway. All rights reserved. Powered by <a href="#">UOUapps</a>.</p>

            <ul class="footer-social">
              <li><a href="#"><i class="fa fa-facebook-square"></i></a>
              </li>
              <li><a href="#"><i class="fa fa-twitter-square"></i></a>
              </li>
              <li><a href="#"><i class="fa fa-google-plus-square"></i></a>
              </li>
              <li><a href="#"><i class="fa fa-linkedin-square"></i></a>
              </li>
              <li><a href="#"><i class="fa fa-pinterest-square"></i></a>
              </li>
            </ul>
            <!-- end .footer-social -->
          </div>
        </div>
      </footer>
      <!-- end #footer -->
      
    </div> <!-- end .page-content -->
    </div>
    <!-- end #main-wrapper -->

    <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Local jQuery -->
    <script>
    window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/jquery.ui.map.js"></script>
    <script src="js/scripts.js"></script>

    <script>
    
    var owl = $("#thumb-slide-section");
    owl.owlCarousel({
      itemsCustom: [
        [0, 2],
        [450, 3],
        [600, 4],
        [700, 6],
        [1000, 8],
        [1200, 14],
        [1400, 14],
        [1600, 15]
      ],
      navigation: true
    });

   
    </script>

</body>


<!-- Mirrored from new.uouapps.com/takeaway/single-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Aug 2018 04:31:45 GMT -->
</html>
