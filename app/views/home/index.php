<?php
require_once TEMPLATES."header.php";
?>

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
  <div class="owl-banner owl-carousel">
    <div class="banner-item-01">
      <div class="text-content">
        <h4>Best Offer</h4>
        <h2>New Arrivals On Sale</h2>
      </div>
    </div>
    <div class="banner-item-02">
      <div class="text-content">
        <h4>Flash Deals</h4>
        <h2>Get your best products</h2>
      </div>
    </div>
    <div class="banner-item-03">
      <div class="text-content">
        <h4>Last Minute</h4>
        <h2>Grab last minute deals</h2>
      </div>
    </div>
  </div>
</div>
<!-- Banner Ends Here -->

<div class="latest-products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Latest Products</h2>
          <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      
      <!-- Start Products -->
      <?php
        foreach ($data['products'] as $product){
            echo '<div class="col-lg-4 col-md-4 all des">
                    <div class="product-item">
                    <a href="'.URLROOT.'home/product/'.$product[0].'"><img src="'.ASSETS.'main/images/products/'.$product[2].'" alt=""></a>
                    <div class="down-content">
                        <a href="'.URLROOT.'home/product/'.$product[0].'"><h4>'.$product[1].'</h4></a>
                        <h6>$'.$product[6].'</h6>
                        <p>'.$product[3].'</p>
                    </div>
                    </div>
                  </div>';
        }
      ?>
      <!-- End Products -->
    </div>
  </div>
</div>

<div class="best-features">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>About Sixteen Clothing</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="left-content">
          <h4>Looking for the best products?</h4>
          <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
          <ul class="featured-list">
            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
            <li><a href="#">Consectetur an adipisicing elit</a></li>
            <li><a href="#">It aquecorporis nulla aspernatur</a></li>
            <li><a href="#">Corporis, omnis doloremque</a></li>
            <li><a href="#">Non cum id reprehenderit</a></li>
          </ul>
          <a href="about.html" class="filled-button">Read More</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="right-image">
          <img src="assets/images/feature-image.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>


<div class="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-content">
          <div class="row">
            <div class="col-md-8">
              <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
            </div>
            <div class="col-md-4">
              <a href="#" class="filled-button">Purchase Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
require_once TEMPLATES."footer.php";
?>