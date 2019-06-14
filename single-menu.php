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
<?php include("header.php"); ?>
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
              <div class="tab-pane fade in active" id="tabone">
                <div class="all-menu-details">
                  <h5>Daily Menu</h5>
                  <div class="single-menu">
                    <div class="list-image">
                     <!--  <img src="img/content/menu-list-img.jpg" alt=""> -->
                      <?php echo '<a href="assets/img/product/'.$img.'"  target="_blank">';
               echo '<img src="assets/img/product/'.$img.'">';

               echo '</a>';?>
             </div>
           </div>
         </div>
       </div>
              
                    </div>
                  </div>
                </div>
              </div>
            </div>

                    <div class="all-details">
                      <div class="visible-option">
                        <div class="details">
                          <h2><?php echo $pname;?></h2> 
                                        <p>Reference: demo_10</p>                          
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

                          <p><strong id="product_description_short">Description:</strong>
                            <p><?php echo $desc;?></p> </p>

                          <p><strong>Ingredients:</strong>5 tiger shrimps, garlic, butter, lemon, herbs, 5 tiger shrimps, garlic, butter, lemon, herbs</p>
                        </div> 

                        <div class="price-option">
                          <span><i class="fa fa-inr"></i><?php echo $pprice;?></span>
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
                              <label for="rice-1">Rice</label>
                            </span>
                            
                            <span class="radio-input">
                              <input type="radio" id="noodles-1" name="choose">
                              <label for="noodles-1">Noodles</label>
                            </span>
                            
                            <span class="radio-input">
                              <input type="radio" id="bread-1" name="choose">
                              <label for="bread-1">Bread</label>
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
                            <a class="btn btn-default-black">addToCart</a>
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

<button><i class="fa fa-shopping-cart"></i>
                            </button>
   
              </div> <!-- end .tab-pane  -->
            </div> <!-- end .tab-content -->
          </div>
          <!--end main-grid layout-->
        </div>
        <!-- end .row -->
      </div>
      <button class="toggle"><i class="fa fa-shopping-cart"></i>Option</button>
      <!--end .container -->
      <!-- footer begin -->
      <?php include("footer.php"); ?>
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
