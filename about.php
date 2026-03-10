<?php
$page = "about";
$pageTitle = "About | JR Elite Builders";
require __DIR__ . "/includes/header.php";
?>

<!-- Page Hero -->
<section class="th-hero-wrapper hero-1" style="min-height: 420px;">
  <div class="th-hero-bg background-image" style="background-image:url('https://www.jrelitebuilders.com/assets/img/hero/hero_bg_1_1.jpg'); min-height: 420px;">
    <div class="container">
      <div class="hero-style1" style="padding-top: 130px;">
        <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">License #1135623</span>
        <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">About JR Elite Builders</h1>
        <p class="hero-text" data-ani="slideinup" data-ani-delay="0.5s">
          Built on experience, accountability, and clean results—serving homes and businesses across California.
        </p>
        <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
          <a href="services.php" class="th-btn th-icon">Explore Services<i class="fa-regular fa-arrow-right ms-2"></i></a>
          <a href="contact.php" class="th-btn style2 th-icon">Get a Free Estimate<i class="fa-regular fa-arrow-right ms-2"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Content -->
<div class="overflow-hidden space" id="about-sec">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-6">
        <div class="img-box1">
          <div class="img1"><img src="https://www.jrelitebuilders.com/assets/img/normal/about_1.jpg" alt="About"></div>
          <div class="about-shape-1"></div>
          <div class="img2 th-anim"><img src="https://www.jrelitebuilders.com/assets/img/normal/about_2.jpg" alt="About"></div>
          <div class="th-experience dance">
            <div class="th-experience_content">
              <h2 class="experience-year"><span class="counter-number">30</span></h2>
              <p class="experience-text">Years of experience</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-6">
        <div class="title-area mb-20 pe-xl-5 me-xl-5">
          <span class="sub-title style1">Welcome to</span>
          <h2 class="sec-title mb-20">JR Elite Builders</h2>
        </div>

        <p class="sec-text mb-30">
          Our team brings decades of experience in residential and commercial improvements—from interior remodels to exterior upgrades.
          We focus on planning, safety, and craftsmanship so the final result looks great and performs for years.
        </p>

        <p class="sec-text mb-30">
          We believe the best projects start with clear communication. You'll get a detailed estimate, transparent scope, and a realistic
          timeline—then a crew that treats your property with respect.
        </p>

        <p class="sec-text mb-30">
          Whether you’re refreshing one space or improving an entire property, we’ll help you choose the right materials, finishes, and
          build approach based on your goals and budget.
        </p>

        <div class="btn-group">
          <a href="contact.php" class="th-btn th-icon">Request an Estimate<i class="fa-regular fa-arrow-right ms-2"></i></a>
          <a href="gallery.php" class="th-btn style2 th-icon">View Our Work<i class="fa-regular fa-arrow-right ms-2"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Values / Who We Are -->
<div class="faq-area position-relative overflow-hidden" id="faq-sec">
  <div class="container th-container2">
    <div class="row">
      <div class="col-xl-6">
        <div class="faq-img1">
          <div class="img1 th-anim"><img src="https://www.jrelitebuilders.com/assets/img/normal/faq_img.png" alt="faq"></div>
        </div>
      </div>

      <div class="col-xl-6">
        <div class="ps-xl-5 ms-xl-4">
          <div class="title-area mb-30">
            <span class="sub-title style1">Our Approach</span>
            <h2 class="sec-title">How We Work</h2>
            <p class="sec-text mb-30">
              We keep projects organized from day one: confirm scope, align on materials, set clear milestones, and stay in touch throughout
              the build.
            </p>
            <p class="sec-text mb-30">
              Our crews are selected for skill and professionalism. We aim for clean sites, careful finishes, and quality control checks
              before closeout.
            </p>
            <p class="sec-text mb-30">
              Want a simple path to the finish line? Tell us the outcome you want—we’ll guide the process and handle the details.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CTA -->
<section class="cta-sec bg-title">
  <div class="container">
    <div class="row gy-5 align-items-center justify-content-center">
      <div class="col-lg-7">
        <div class="title-area mb-20">
          <h2 class="sec-title text-white">Ready to start your project?</h2>
        </div>
        <div class="project-cta_wrapper">
          <div class="project-cta"><p class="project-text">Get a free estimate and a clear plan for your build.</p></div>
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
