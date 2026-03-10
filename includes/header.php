<?php
// includes/header.php
// Shared header for JR Elite Builders site clone template.
// Usage: set $page and $pageTitle before include.
if (!isset($page)) $page = "";
if (!isset($pageTitle)) $pageTitle = "JR Elite Builders";
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, "UTF-8"); ?></title>
  <meta name="author" content="JR Elite Builders">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="robots" content="INDEX,FOLLOW">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" type="image/png" sizes="16x16" href="https://www.jrelitebuilders.com/assets/img/favicon.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="https://www.jrelitebuilders.com/assets/img/favicons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="https://www.jrelitebuilders.com/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.jrelitebuilders.com/assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://www.jrelitebuilders.com/assets/css/magnific-popup.min.css">
  <link rel="stylesheet" href="https://www.jrelitebuilders.com/assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://www.jrelitebuilders.com/assets/css/style.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- cursor (optional theme effect) -->
  <div class="cursor"></div>
  <div class="cursor2"></div>

  <!-- Mobile Menu -->
  <div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
      <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
      <div class="mobile-logo">
        <a href="index.php"><img src="https://www.jrelitebuilders.com/assets/img/logo.png" alt="JR Elite Builders"></a>
      </div>
      <div class="th-mobile-menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li class="menu-item-has-children th-item-has-children">
            <a href="#">Galleries</a>
            <ul class="sub-menu th-submenu" style="display:none;">
              <li><a href="gallery.php?img=concrete-and-stone-work">Concrete And Stone Work</a></li>
              <li><a href="gallery.php?img=framing">Framing</a></li>
              <li><a href="gallery.php?img=hardscape">Hardscape</a></li>
              <li><a href="gallery.php?img=pool-builder">Pool Builder</a></li>
              <li><a href="gallery.php?img=remodeling">Remodeling</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Header -->
  <header class="th-header header-layout1">
    <div class="header-top">
      <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
          <div class="col-auto d-none d-md-block">
            <div class="header-links">
              <ul>
                <li><i class="fa-regular fa-phone"></i><a href="tel:7146047656">(714) 604-7656</a></li>
                <li class="d-none d-xl-inline-block"><i class="fa-sharp fa-regular fa-location-dot"></i><span>California, USA</span></li>
                <li><i class="fa-regular fa-envelope"></i><a href="mailto:jrelitebuilders@gmail.com">jrelitebuilders@gmail.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-auto">
            <div class="social-links">
              <span class="social-title">Follow Us:</span>
              <a href="https://www.facebook.com/jrelitebuilders/" title="facebook" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a>
              <a href="https://www.instagram.com/jrelitebuilders?igsh=NTc4MTIwNjQ2YQ==" title="instagram" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
              <a href="https://yelp.to/CYYBY5c0Ix" title="yelp" target="_blank" rel="noopener"><i class="fab fa-yelp"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="sticky-wrapper">
      <div class="container">
        <div class="menu-area style2">
          <div class="row align-items-center justify-content-between">
            <div class="col-auto">
              <div class="header-logo">
                <a href="index.php"><img src="https://www.jrelitebuilders.com/assets/img/logo.png" alt="JR Elite Builders"></a>
              </div>
            </div>

            <div class="col-auto">
              <nav class="main-menu d-none d-lg-inline-block">
                <ul>
                  <li><a href="index.php"<?php echo $page==="home" ? ' class="active"' : ''; ?>>Home</a></li>
                  <li><a href="about.php"<?php echo $page==="about" ? ' class="active"' : ''; ?>>About</a></li>
                  <li><a href="services.php"<?php echo $page==="services" ? ' class="active"' : ''; ?>>Services</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Galleries</a>
                    <ul class="sub-menu">
                      <li><a href="gallery.php?img=concrete-and-stone-work">Concrete And Stone Work</a></li>
                      <li><a href="gallery.php?img=framing">Framing</a></li>
                      <li><a href="gallery.php?img=hardscape">Hardscape</a></li>
                      <li><a href="gallery.php?img=pool-builder">Pool Builder</a></li>
                      <li><a href="gallery.php?img=remodeling">Remodeling</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.php"<?php echo $page==="contact" ? ' class="active"' : ''; ?>>Contact</a></li>
                </ul>
              </nav>
              <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
            </div>

            <div class="col-auto d-none d-xl-block">
              <div class="header-button">
                <a href="contact.php" class="th-btn th-icon">GET A FREE ESTIMATE<i class="fa-regular fa-arrow-right ms-2"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>
