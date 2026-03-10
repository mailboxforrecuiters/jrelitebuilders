<?php
$page = "home";
$pageTitle = "JR Elite Builders";
require __DIR__ . "/includes/header.php";
?>

<!-- Hero -->
<div class="th-hero-wrapper hero-1" id="hero">
  <div class="swiper th-slider hero-slider-1" id="heroSlide1" data-slider-options='{"effect":"fade"}'>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="hero-inner">
          <div class="th-hero-bg background-image" style="background-image:url('https://www.jrelitebuilders.com/assets/img/hero/hero_bg_1_1.jpg');">
            <div class="hero-shape-1" data-ani="slideinleft" data-ani-delay="0.7s"><img src="https://www.jrelitebuilders.com/assets/img/hero/hero_shape_1.png" alt=""></div>
            <div class="hero-shape-2" data-ani="slideinleft" data-ani-delay="0.8s"><img src="https://www.jrelitebuilders.com/assets/img/hero/hero_shape_2.png" alt=""></div>
            <div class="hero-shape-3" data-ani="slideinup" data-ani-delay="0.9s"><img src="https://www.jrelitebuilders.com/assets/img/hero/hero_shape_3.png" alt=""></div>
          </div>
          <div class="container">
            <div class="hero-style1">
              <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">License #1135623</span>
              <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">High Quality Workmanship</h1>
              <p class="hero-text" data-ani="slideinup" data-ani-delay="0.5s"></p>
              <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                <a href="about.php" class="th-btn th-icon">About Us<i class="fa-regular fa-arrow-right ms-2"></i></a>
                <a href="services.php" class="th-btn style2 th-icon">Our Services<i class="fa-regular fa-arrow-right ms-2"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="hero-inner">
          <div class="th-hero-bg background-image" style="background-image:url('https://www.jrelitebuilders.com/assets/img/hero/hero_bg_2_1.jpg');">
            <div class="hero-shape-1" data-ani="slideinleft" data-ani-delay="0.7s"><img src="https://www.jrelitebuilders.com/assets/img/hero/hero_shape_1.png" alt=""></div>
            <div class="hero-shape-2" data-ani="slideinleft" data-ani-delay="0.8s"><img src="https://www.jrelitebuilders.com/assets/img/hero/hero_shape_2.png" alt=""></div>
            <div class="hero-shape-3" data-ani="slideinup" data-ani-delay="0.9s"><img src="https://www.jrelitebuilders.com/assets/img/hero/hero_shape_3.png" alt=""></div>
          </div>
          <div class="container">
            <div class="hero-style1">
              <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">License #1135623</span>
              <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Satisfaction Guaranteed</h1>
              <p class="hero-text" data-ani="slideinup" data-ani-delay="0.5s"></p>
              <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                <a href="contact.php" class="th-btn th-icon">Contact Us<i class="fa-regular fa-arrow-right ms-2"></i></a>
                <a href="services.php" class="th-btn style2 th-icon">What We Offer<i class="fa-regular fa-arrow-right ms-2"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
    <button data-slider-next="#heroSlide1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
  </div>
</div>

<!-- About -->
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
          We help homeowners and businesses across California upgrade, restore, and build with confidence. Our team combines experience,
          reliable scheduling, and clean workmanship to deliver results you can be proud of.
        </p>
        <p class="sec-text mb-30">
          From floors and kitchens to exterior upgrades and roofing, we plan each project carefully—then execute with the same attention
          to detail from demo through finish work.
        </p>
        <p class="sec-text mb-30">
          Tell us what you're trying to accomplish. We'll help you pick the best approach, materials, and timeline—and provide a clear,
          detailed estimate.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Services (tabs + sliders) -->
<section class="service-area overflow-hidden space background-image arrow-wrap" id="service-sec" style="background-image:url('https://www.jrelitebuilders.com/assets/img/bg/service_bg_1.jpg');">
  <div class="container">
    <div class="row">
      <div class="title-area mb-0 text-center">
        <span class="sub-title">Our Services</span>
        <h2 class="sec-title" style="color:#8b95be!important">The Best Service For You</h2>
      </div>
    </div>

    <div class="nav nav-tabs service-tabs" id="nav-tab" role="tablist">
      <button class="nav-link th-btn active" id="nav-step1-tab" data-bs-toggle="tab" data-bs-target="#nav-step1" type="button">
        <img src="https://www.jrelitebuilders.com/assets/img/icon/ser_icon_1.svg" alt="">Remodeling
      </button>
      <button class="nav-link th-btn" id="nav-step2-tab" data-bs-toggle="tab" data-bs-target="#nav-step2" type="button">
        <img src="https://www.jrelitebuilders.com/assets/img/icon/ser_icon_2.svg" alt="">Hardscape &amp; Landscaping
      </button>
      <button class="nav-link th-btn" id="nav-step3-tab" data-bs-toggle="tab" data-bs-target="#nav-step3" type="button">
        <img src="https://www.jrelitebuilders.com/assets/img/icon/ser_icon_3.svg" alt="">Pools
      </button>
    </div>

    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-step1" role="tabpanel">
        <div class="slider-area">
          <div class="swiper th-slider has-shadow" id="serviceSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="service-box background-image" style="background-image:url('https://www.jrelitebuilders.com/assets/img/services/bg/1.jpg');">
                  <div class="service-content"><div class="service-box_icon"><img src="https://www.jrelitebuilders.com/assets/img/services/1.jpg" alt="icon"></div></div>
                  <h3 class="box-title"><a href="services.php">Additions</a></h3>
                  <p class="service-box_text">Expand your living space with additions designed to match your home’s layout and style.</p>
                  <a class="line-btn" href="services.php">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="service-box background-image" style="background-image:url('https://www.jrelitebuilders.com/assets/img/services/bg/2.jpg');">
                  <div class="service-content"><div class="service-box_icon"><img src="https://www.jrelitebuilders.com/assets/img/services/2.jpg" alt="icon"></div></div>
                  <h3 class="box-title"><a href="services.php">ADUs</a></h3>
                  <p class="service-box_text">Add a rental, guest suite, or family unit with an expertly built accessory dwelling unit.</p>
                  <a class="line-btn" href="services.php">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="service-box background-image" style="background-image:url('https://www.jrelitebuilders.com/assets/img/services/bg/3.jpg');">
                  <div class="service-content"><div class="service-box_icon"><img src="https://www.jrelitebuilders.com/assets/img/services/3.jpg" alt="icon"></div></div>
                  <h3 class="box-title"><a href="services.php">Remodeling</a></h3>
                  <p class="service-box_text">Kitchens, bathrooms, and full interior remodels—planned, permitted, and finished right.</p>
                  <a class="line-btn" href="services.php">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
              </div>
            </div>
          </div>
          <button data-slider-prev="#serviceSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
          <button data-slider-next="#serviceSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
      </div>

      <div class="tab-pane fade" id="nav-step2" role="tabpanel">
        <div class="slider-area">
          <div class="swiper th-slider has-shadow" id="serviceSlider2" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="service-box background-image" style="background-image:url('https://www.jrelitebuilders.com/assets/img/services/bg/4.jpg');">
                  <div class="service-content"><div class="service-box_icon"><img src="https://www.jrelitebuilders.com/assets/img/services/4.jpg" alt="icon"></div></div>
                  <h3 class="box-title"><a href="services.php">Hardscape</a></h3>
                  <p class="service-box_text">Patios, walkways, retaining walls, and outdoor features built to last.</p>
                  <a class="line-btn" href="services.php">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="service-box background-image" style="background-image:url('https://www.jrelitebuilders.com/assets/img/services/bg/5.jpg');">
                  <div class="service-content"><div class="service-box_icon"><img src="https://www.jrelitebuilders.com/assets/img/services/5.jpg" alt="icon"></div></div>
                  <h3 class="box-title"><a href="services.php">Landscaping</a></h3>
                  <p class="service-box_text">Refresh your curb appeal with clean, functional landscaping and upgrades.</p>
                  <a class="line-btn" href="services.php">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
              </div>
            </div>
          </div>
          <button data-slider-prev="#serviceSlider2" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
          <button data-slider-next="#serviceSlider2" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
      </div>

      <div class="tab-pane fade" id="nav-step3" role="tabpanel">
        <div class="slider-area">
          <div class="swiper th-slider has-shadow" id="serviceSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="service-box background-image" style="background-image:url('https://www.jrelitebuilders.com/assets/img/services/bg/6.jpg');">
                  <div class="service-content"><div class="service-box_icon"><img src="https://www.jrelitebuilders.com/assets/img/services/6.jpg" alt="icon"></div></div>
                  <h3 class="box-title"><a href="services.php">Pools</a></h3>
                  <p class="service-box_text">Custom pool builds and upgrades that turn backyards into year-round retreats.</p>
                  <a class="line-btn" href="services.php">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
              </div>
            </div>
          </div>
          <button data-slider-prev="#serviceSlider3" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
          <button data-slider-next="#serviceSlider3" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Projects -->
<section class="project-area overflow-hidden space arrow-wrap shape-mockup-wrap" style="margin-top:-356px;">
  <div class="container th-container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-xxl-6 offset-xxl-3">
        <div class="title-area text-center">
          <span class="sub-title">Latest Projects</span>
          <h2 class="sec-title">Serving Families and Businesses with Quality and Care</h2>
        </div>
      </div>
    </div>

    <div class="slider-area">
      <div class="swiper th-slider has-shadow project-slider" id="projectSlider1" data-slider-options='{"centeredSlides":true,"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"3"}}}'>
        <div class="swiper-wrapper">
          <?php for($i=1;$i<=8;$i++): ?>
          <div class="swiper-slide">
            <div class="project-card">
              <div class="project-img"><img src="https://www.jrelitebuilders.com/assets/img/project/<?php echo $i; ?>.jpg" alt="project image"></div>
              <div class="project-content">
                <p class="project-subtitle">JR Elite Builders</p>
                <h3 class="box-title"><a href="gallery.php">Latest Projects</a></h3>
              </div>
            </div>
          </div>
          <?php endfor; ?>
        </div>
        <div class="slider-pagination"></div>
      </div>
      <button data-slider-prev="#projectSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
      <button data-slider-next="#projectSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
    </div>
  </div>

  <div class="shape-mockup d-none d-xl-block" style="top:15%; left:0%;"><img src="https://www.jrelitebuilders.com/assets/img/shape/shape_1.png" alt="shape"></div>
  <div class="shape-mockup movingX d-none d-xxl-block" style="top:20%; right:0%;"><img src="https://www.jrelitebuilders.com/assets/img/shape/shape_2.png" alt="shape"></div>
</section>

<!-- Who We Are -->
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
            <span class="sub-title style1">JR Elite Builders</span>
            <h2 class="sec-title">Who We Are</h2>
            <p class="sec-text mb-30">
              We’re a California contractor focused on high-standard remodeling and construction. With decades of hands-on experience,
              we bring practical planning and strong craftsmanship to every job.
            </p>
            <p class="sec-text mb-30">
              Our work spans flooring, kitchens and baths, roofing repairs and replacements, and outdoor improvements—built with
              quality materials and careful execution.
            </p>
            <p class="sec-text mb-30">
              You’ll get straightforward communication, professional jobsite habits, and results designed to last.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Testimonials -->
<section class="testi-area bg-smoke overflow-hidden space background-image arrow-wrap" id="testi-sec" style="background-image:url('https://www.jrelitebuilders.com/assets/img/bg/shape_bg_3.png');">
  <di<!-- Elfsight Google Reviews | Jr Elite Builders -->
<script src="https://elfsightcdn.com/platform.js" async></script>
<div class="elfsight-app-e3d822bb-0e89-45ef-b57f-561e378493c8" data-elfsight-app-lazy></div>
</section>

<!-- CTA -->
<section class="cta-sec bg-title">
  <div class="container">
    <div class="row gy-5 align-items-center justify-content-center">
      <div class="col-lg-7">
        <div class="title-area mb-20">
          <h2 class="sec-title text-white">Building California Homes with Elite Craftsmanship</h2>
        </div>
        <div class="project-cta_wrapper">
          <div class="project-cta">
            <p class="project-text">Your Trusted Partner for Roofing, Remodeling, and Flooring</p>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="cta-content">
          <div class="cta-wrapper">
            <div class="cta-icon">
              <a href="tel:+17146047656"><img src="https://www.jrelitebuilders.com/assets/img/icon/call.svg" alt=""></a>
            </div>
            <div class="media-body">
              <span class="header-info_label">Contact Us Now</span>
              <p class="header-info_link"><a href="tel:7146047656">(714) 604-7656</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Teaser -->
<div class="space overflow-hidden">
  <div class="container">
    <div class="row gy-5">
      <div class="col-lg-6">
        <div class="title-area mb-30">
          <span class="sub-title style1">Get In Touch</span>
          <h2 class="sec-title">Have An Upcoming Project? Let’s Talk!</h2>
          <p class="sec-text mb-30">Call or email to get a free estimate—tell us your goals, timeline, and location in California.</p>
          <a href="contact.php" class="th-btn th-icon">Get a Free Estimate<i class="fa-regular fa-arrow-right ms-2"></i></a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="contact-image">
          <img src="https://www.jrelitebuilders.com/assets/img/normal/contact-image.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<?php require __DIR__ . "/includes/footer.php"; ?>
