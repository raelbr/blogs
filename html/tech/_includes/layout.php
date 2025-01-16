<?php function get_head()
{ ?>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>RobotShack</title>
  <meta name="lang" content="en">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="Rael B. Riolino">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['root']; ?>/_css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="<?php echo $GLOBALS['root']; ?>/_css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="<?php echo $GLOBALS['root']; ?>/_css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="<?php echo $GLOBALS['root']; ?>/_css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo $GLOBALS['root']; ?>/_css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen">
<?php } ?>
<?php function get_body_header()
{ ?>
  <!-- header section start -->
  <div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <div class="logo">
          <a role="brand" href="<?php echo $GLOBALS['root']; ?>/">
            <img src="../_assets/svg/logo.svg" />
            <span><b>robot</b>shack</span>
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $GLOBALS["root"]; ?>"><?php translate("Home"); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $GLOBALS["root"]; ?>/articles"><?php translate("Articles"); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $GLOBALS["root"]; ?>/products"><?php translate("Product Scope"); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $GLOBALS["root"]; ?>/contact"><?php translate("Contact"); ?></a>
            </li>
          </ul>
          <div class="nav-item search">
            <img src="<?php echo $GLOBALS["root"]; ?>/_assets/svg/search.svg" />
            <input placeholder="<?php translate("Search"); ?>" />
          </div>
        </div>
      </div>
    </nav>
  </div>
  <!-- header section end -->
<?php } ?>
<?php function get_carousel_header()
{ ?>
  <!-- banner section start -->
  <div class="banner_section layout_padding">
    <div class="container">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <h1 class="video_text">Video games</h1>
                <h1 class="controller_text">controller</h1>
                <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words which don't look even
                  slightly believable</p>
                <div class="shop_bt"><a href="#">Shop Now</a></div>
              </div>
              <div class="col-md-6">
                <div class="image_1"><img src="images/img-1.png"></div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <h1 class="video_text">Video games</h1>
                <h1 class="controller_text">controller</h1>
                <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words which don't look even
                  slightly believable</p>
                <div class="shop_bt"><a href="#">Shop Now</a></div>
              </div>
              <div class="col-md-6">
                <div class="image_1"><img src="images/img-1.png"></div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <h1 class="video_text">Video games</h1>
                <h1 class="controller_text">controller</h1>
                <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or randomised words which don't look even
                  slightly believable</p>
                <div class="shop_bt"><a href="#">Shop Now</a></div>
              </div>
              <div class="col-md-6">
                <div class="image_1"><img src="images/img-1.png"></div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- banner section end -->
<?php } ?>
<?php function get_body_footer()
{ ?>
  <!-- footer section start -->
  <footer class="section_footer ">
    <div class="container">
      <div class="footer_section_2">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-3 footer-top-list">
            <h2 class="account_text"><?php translate("Top Categories"); ?></h2>
            <ul>
              <?php foreach (get_footer_categories() as $category) { ?>
                <li>
                  <a href="<?php echo $GLOBALS["root"] ?>/category/<?php echo $category["slug"] ?>">
                    <?php echo $category["name"] ?>
                  </a>
                </li>
              <?php } ?>
            </ul>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 footer-top-list">
            <h2 class="account_text"><?php translate("Top Post Tags"); ?></h2>
            <ul>
              <?php foreach (get_footer_tags() as $tag) { ?>
                <li>
                  <a href="<?php echo $GLOBALS["root"] ?>/tag/<?php echo $tag["slug"] ?>">
                    <?php echo $tag["name"] ?>
                  </a>
                </li>
              <?php } ?>
            </ul>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="account_text"><?php translate("Our Partners"); ?></h2>
            <p><a href="<?php $GLOBALS["root"]; ?>/contact"><?php translate("Contact Us to become a partner!"); ?></a></p>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="account_text">Newsletter</h2>
            <input type="" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
            <button class="subscribr_bt">SUBSCRIBE</button>
          </div>
        </div>
      </div>
      <div class="social_icon">
        <ul>
          <li><a href="#"><img src="images/fb-icon.png"></a></li>
          <li><a href="#"><img src="images/twitter-icon.png"></a></li>
          <li><a href="#"><img src="images/linkdin-icon.png"></a></li>
          <li><a href="#"><img src="images/instagram-icon.png"></a></li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- footer section end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <span>
        Copyright RobotShack 2025 All Right Reserved
      </span>
    </div>
  </div>
  <!-- copyright section end -->
<?php } ?>
<?php function get_js_scripts()
{ ?>
  <!-- Javascript files-->
  <script src="<?php echo $GLOBALS['root']; ?>/_js/jquery.min.js"></script>
  <script src="<?php echo $GLOBALS['root']; ?>/_js/popper.min.js"></script>
  <script src="<?php echo $GLOBALS['root']; ?>/_js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $GLOBALS['root']; ?>/_js/jquery-3.0.0.min.js"></script>
  <script src="<?php echo $GLOBALS['root']; ?>/_js/plugin.js"></script>
  <!-- sidebar -->
  <script src="<?php echo $GLOBALS['root']; ?>/_js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="<?php echo $GLOBALS['root']; ?>/_js/custom.js"></script>
  <!-- javascript -->
  <script src="<?php echo $GLOBALS['root']; ?>/_js/owl.carousel.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script>
    $(document).ready(function () {
      $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
      });
  </script>
<?php } ?>