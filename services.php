<?php
$page = "services";
$pageTitle = "Services | JR Elite Builders";
require __DIR__ . "/includes/header.php";
?>

<!-- Page Hero -->
<section class="th-hero-wrapper hero-1" style="min-height: 420px;">
  <div class="th-hero-bg background-image" style="background-image:url('https://www.jrelitebuilders.com/assets/img/hero/hero_bg_2_1.jpg'); min-height: 420px;">
    <div class="container">
      <div class="hero-style1" style="padding-top: 130px;">
        <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">What We Offer</span>
        <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Our Services</h1>
        <p class="hero-text" data-ani="slideinup" data-ani-delay="0.5s">
          Remodeling, hardscape, landscaping, pools, and more—built with care and managed professionally.
        </p>
        <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
          <a href="contact.php" class="th-btn th-icon">Get a Free Estimate<i class="fa-regular fa-arrow-right ms-2"></i></a>
          <a href="gallery.php" class="th-btn style2 th-icon">View Our Work<i class="fa-regular fa-arrow-right ms-2"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Grid -->
<section class="space overflow-hidden">
  <div class="container">
    <div class="title-area text-center mb-40">
      <span class="sub-title">Services</span>
      <h2 class="sec-title">Built for Real-Life Use</h2>
      <p class="sec-text mb-0">Select a category below—then contact us for a detailed quote and timeline.</p>
    </div>

    <div class="row gy-4">
      <?php
        $items = [
          ["Additions", "https://www.jrelitebuilders.com/assets/img/services/bg/1.jpg", "Expand your home with additions that match your layout and finishes."],
          ["ADUs", "https://www.jrelitebuilders.com/assets/img/services/bg/2.jpg", "Accessory dwelling units for guests, rentals, or multi-generation living."],
          ["Remodeling", "https://www.jrelitebuilders.com/assets/img/services/bg/3.jpg", "Kitchen, bath, and full interior remodels with clean workmanship."],
          ["Hardscape", "https://www.jrelitebuilders.com/assets/img/services/bg/4.jpg", "Patios, pavers, retaining walls, and outdoor living improvements."],
          ["Landscaping", "https://www.jrelitebuilders.com/assets/img/services/bg/5.jpg", "Functional, attractive landscaping upgrades to boost curb appeal."],
          ["Pools", "https://www.jrelitebuilders.com/assets/img/services/bg/6.jpg", "Custom pool builds and upgrades to transform your backyard."],
          ["Flooring", "https://www.jrelitebuilders.com/assets/img/services/bg/2.jpg", "Hardwood and other flooring installs with careful prep and finish."],
          ["Roofing", "https://www.jrelitebuilders.com/assets/img/services/bg/1.jpg", "Repairs and replacements to protect your property and improve value."],
        ];
        foreach($items as $it):
      ?>
      <div class="col-md-6 col-lg-4">
        <div class="service-box background-image" style="background-image:url('<?php echo $it[1]; ?>');">
          <div class="service-content">
            <div class="service-box_icon"><img src="https://www.jrelitebuilders.com/assets/img/icon/ser_icon_1.svg" alt="icon"></div>
          </div>
          <h3 class="box-title"><a href="contact.php"><?php echo htmlspecialchars($it[0], ENT_QUOTES, "UTF-8"); ?></a></h3>
          <p class="service-box_text"><?php echo htmlspecialchars($it[2], ENT_QUOTES, "UTF-8"); ?></p>
          <a class="line-btn" href="contact.php">Get Quote <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-sec bg-title">
  <div class="container">
    <div class="row gy-5 align-items-center justify-content-center">
      <div class="col-lg-7">
        <div class="title-area mb-20">
          <h2 class="sec-title text-white">Not sure where to start?</h2>
        </div>
        <div class="project-cta_wrapper">
          <div class="project-cta"><p class="project-text">Tell us your goals—we’ll recommend the best options and send a clear estimate.</p></div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="cta-content">
          <div class="cta-wrapper">
            <div class="cta-icon"><a href="tel:+17146047656"><img src="https://www.jrelitebuilders.com/assets/img/icon/call.svg" alt=""></a></div>
            <div class="media-body">
              <span class="header-info_label">Call Now</span>
              <p class="header-info_link"><a href="tel:7146047656">(714) 604-7656</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . "/includes/footer.php"; ?>
