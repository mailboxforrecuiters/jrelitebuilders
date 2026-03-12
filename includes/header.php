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

  <style id="jr-header-svg-icon-fix">
    .header-links ul li .header-inline-icon {
      width: 18px;
      height: 18px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin-right: 8px;
      color: inherit;
      vertical-align: middle;
      transform: translateY(-1px);
    }

    .header-links ul li .header-inline-icon svg {
      width: 18px;
      height: 18px;
      display: block;
      stroke: currentColor;
      fill: none;
      stroke-width: 2;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .social-links {
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
    }

    .social-links .social-title {
      margin-right: 4px;
    }

    .social-links a {
      width: 22px;
      height: 22px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: inherit;
      text-decoration: none;
    }

    .social-links a svg {
      width: 18px;
      height: 18px;
      display: block;
    }

    .social-links a .social-fill {
      fill: currentColor;
    }

    .social-links a .social-stroke {
      fill: none;
      stroke: currentColor;
      stroke-width: 2;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .th-menu-toggle .menu-toggle-icon {
      width: 28px;
      height: 28px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    .th-menu-toggle .menu-toggle-icon svg {
      width: 28px;
      height: 28px;
      display: block;
      stroke: currentColor;
      fill: none;
      stroke-width: 2.25;
      stroke-linecap: round;
      stroke-linejoin: round;
    }
  </style>
  <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17807260901"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-17807260901'); </script> 
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
      <button class="th-menu-toggle" type="button" aria-label="Close menu">
        <span class="menu-toggle-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 6L6 18"></path>
            <path d="M6 6L18 18"></path>
          </svg>
        </span>
      </button>

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
                <li>
                  <span class="header-inline-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M22 16.92v2a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 11.19 17.8A19.5 19.5 0 0 1 5.2 11.81 19.86 19.86 0 0 1 3.09 4.09 2 2 0 0 1 5.08 1.91h2a2 2 0 0 1 2 1.72c.12.9.34 1.79.65 2.63a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.54-1.19a2 2 0 0 1 2.11-.45c.84.31 1.73.53 2.63.65A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                  </span>
                  <a href="tel:7146047656">(714) 604-7656</a>
                </li>

                <li class="d-none d-xl-inline-block">
                  <span class="header-inline-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 1 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                  </span>
                  <span>Fullerton, CA</span>
                </li>

                <li>
                  <span class="header-inline-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4 4h16v16H4z"></path>
                      <path d="M22 6l-10 7L2 6"></path>
                    </svg>
                  </span>
                  <a href="mailto:jrelitebuilders@gmail.com">jrelitebuilders@gmail.com</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-auto">
            <div class="social-links">
              <span class="social-title">Follow Us:</span>

              <a href="https://www.facebook.com/jrelitebuilders/" title="facebook" aria-label="Facebook" target="_blank" rel="noopener">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path class="social-fill" d="M13.5 22v-8h2.7l.4-3.1h-3.1V8.9c0-.9.2-1.5 1.5-1.5H16V4.6c-.2 0-1-.1-1.9-.1-2.8 0-4.6 1.7-4.6 4.8v1.6H7v3.1h2.6v8h3.9z"></path>
                </svg>
              </a>

              <a href="https://www.instagram.com/jrelitebuilders?igsh=NTc4MTIwNjQ2YQ==" title="instagram" aria-label="Instagram" target="_blank" rel="noopener">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <rect class="social-stroke" x="3.5" y="3.5" width="17" height="17" rx="4.5"></rect>
                  <circle class="social-stroke" cx="12" cy="12" r="4"></circle>
                  <circle class="social-fill" cx="17.4" cy="6.6" r="1.2"></circle>
                </svg>
              </a>

              <a href="https://yelp.to/CYYBY5c0Ix" title="yelp" aria-label="Yelp" target="_blank" rel="noopener">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path class="social-fill" d="M11.75 2.2c.75 0 1.33.55 1.42 1.29l.44 3.72c.06.47-.17.93-.58 1.16-.41.24-.92.21-1.31-.07l-3.02-2.13a1.42 1.42 0 0 1-.45-1.74 1.4 1.4 0 0 1 1.44-.85l2.06.15zm5.22 3.94c.38-.02.74.12.99.41.47.54.45 1.36-.05 1.88l-2.48 2.55c-.31.32-.79.44-1.22.31a1.3 1.3 0 0 1-.88-.9l-.97-3.34c-.19-.66.24-1.34.92-1.46l3.69-.64zm.77 6.16c.61.43.8 1.25.44 1.9l-1.71 3.05c-.22.39-.62.64-1.06.67-.45.03-.88-.18-1.16-.55l-2.13-2.86c-.42-.56-.27-1.36.33-1.73l3.25-2c.61-.37 1.4-.25 1.84.29l.2.24zm-5.45 3.25c.49.48.53 1.25.09 1.78l-2.06 2.5c-.28.34-.7.53-1.14.5a1.4 1.4 0 0 1-1.09-.63L6.33 16.8c-.36-.58-.2-1.34.36-1.72l3.03-2.04c.59-.4 1.38-.3 1.85.23l.72.78zm-4.91-5.1c.67.08 1.17.66 1.16 1.34l-.03 3.27c0 .43-.21.83-.58 1.08-.36.25-.83.31-1.24.15L3.72 15.2a1.42 1.42 0 0 1-.78-1.62c.14-.68.74-1.15 1.43-1.12l3.01.09z"></path>
                </svg>
              </a>
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

              <button type="button" class="th-menu-toggle d-block d-lg-none" aria-label="Open menu">
                <span class="menu-toggle-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 6h18"></path>
                    <path d="M3 12h18"></path>
                    <path d="M3 18h18"></path>
                  </svg>
                </span>
              </button>
            </div>

            <div class="col-auto d-none d-xl-block">
              <div class="header-button">
                <a href="contact.php" class="th-btn th-icon">
  <span>GET A FREE ESTIMATE</span>
  <span class="btn-inline-icon" aria-hidden="true">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M7 17L17 7"></path>
      <path d="M8 7h9v9"></path>
    </svg>
  </span>
</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>