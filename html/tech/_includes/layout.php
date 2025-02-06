<?php function get_head($title = "", $keywords = "", $description = "")
{ ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <title><?php echo $title != "" ? $title . ' - ' : ''; ?>TechDrops.net</title>
  <meta name="lang"
    content="<?php echo isset($GLOBALS["lang_dictionary"][get_lang()]) ? $GLOBALS["lang_dictionary"][get_lang()] : 'en'; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="author" content="Rael B. Riolino">
  <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.8.2/lightgallery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/lightgallery@2.8.2/css/lightgallery.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['root']; ?>/_css/style.css">
  <link rel="stylesheet" href="<?php echo $GLOBALS['root']; ?>/_css/responsive.css">
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <link rel="stylesheet" href="<?php echo $GLOBALS['root']; ?>/_css/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="<?php echo $GLOBALS['root']; ?>/_css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo $GLOBALS['root']; ?>/_css/owl.theme.default.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen"> -->
  <link rel="alternate" hreflang="en-us" href="<?php echo $GLOBALS['en_url']; ?>" />
  <link rel="alternate" hreflang="en" href="<?php echo $GLOBALS['en_url']; ?>" />
  <link rel="alternate" hreflang="es" href="<?php echo $GLOBALS['es_url']; ?>" />
  <link rel="alternate" hreflang="fr" href="<?php echo $GLOBALS['fr_url']; ?>" />
  <link rel="alternate" hreflang="pt" href="<?php echo $GLOBALS['pt_url']; ?>" />
  <link rel="alternate" hreflang="pt-br" href="<?php echo $GLOBALS['pt_url']; ?>" />
<?php } ?>
<?php function get_body_header()
{ ?>
  <div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <div class="logo">
          <a role="brand" href="<?php echo $GLOBALS['root']; ?>/home">
            <span><b>tech</b>drops<i>.net</i></span>
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $GLOBALS["root"]; ?>/home"><?php translate("Home"); ?></a>
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
<?php } ?>
<?php function get_carousel_header()
{ ?>
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
<?php } ?>
<?php function get_body_footer()
{ ?>
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
      <section class="social_icons">
        <ul>
          <li><a href="#"><img width="24px" height="24px" alt="Facebook"
                src="<?php echo $GLOBALS["root"]; ?>/_assets/svg/facebook.svg"></a></li>
          <li><a href="#"><img width="24px" height="24px" alt="Instagram"
                src="<?php echo $GLOBALS["root"]; ?>/_assets/svg/instagram.svg"></a></li>
          <li><a href="#"><img width="24px" height="24px" alt="Tiktok"
                src="<?php echo $GLOBALS["root"]; ?>/_assets/svg/tiktok.svg"></a></li>
          <li><a href="#"><img width="24px" height="24px" alt="X (Twitter)"
                src="<?php echo $GLOBALS["root"]; ?>/_assets/svg/x-twitter.svg"></a></li>
        </ul>
      </section>
    </div>
  </footer>
  <div class="copyright_section">
    <div class="container">
      <span>
        Copyright techdrops.net 2025 All Right Reserved
      </span>
      <span class="language-list">
        <?php if (get_lang() != 1) { ?><a lang="en" hreflang="en" href="http://www.techdrops.net">EN</a><?php } ?>
        <?php if (get_lang() != 2) { ?><a lang="es" hreflang="es" href="http://es.techdrops.net">ES</a><?php } ?>
        <?php if (get_lang() != 3) { ?><a lang="fr" hreflang="fr" href="http://fr.techdrops.net">FR</a><?php } ?>
        <?php if (get_lang() != 4) { ?><a lang="pt" hreflang="pt" href="http://pt.techdrops.net">PT/BR</a><?php } ?>
      </span>
    </div>
  </div>
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