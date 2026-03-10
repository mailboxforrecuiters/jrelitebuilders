<?php
// includes/footer.php
?>
  <style id="buildscapes-footer-icon-restore">
    .footer-link-list,
    .footer-contact-list {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .footer-link-list li,
    .footer-contact-list li {
      margin: 0 0 12px;
      padding: 0;
    }

    .footer-link-list li:last-child,
    .footer-contact-list li:last-child {
      margin-bottom: 0;
    }

    /* kill broken theme bullets / pseudo icons */
    .menu-all-pages-container ul.footer-link-list li::before,
    .menu-all-pages-container ul.footer-link-list li::after,
    .menu-all-pages-container ul.footer-link-list li a::before,
    .menu-all-pages-container ul.footer-link-list li a::after,
    .footer-widget .menu-all-pages-container ul.footer-link-list li::before,
    .footer-widget .menu-all-pages-container ul.footer-link-list li::after,
    .footer-widget .menu-all-pages-container ul.footer-link-list li a::before,
    .footer-widget .menu-all-pages-container ul.footer-link-list li a::after {
      content: none !important;
      display: none !important;
    }

    .footer-link-list a,
    .footer-contact-list a,
    .footer-contact-list span {
      color: inherit;
      text-decoration: none;
    }

    .footer-link-list a:hover,
    .footer-contact-list a:hover {
      color: var(--theme-color);
    }

    .footer-link-row,
    .footer-contact-row {
      display: flex;
      align-items: center;
      gap: 12px;
      line-height: 1.5;
    }

    .footer-link-icon,
    .footer-contact-icon {
      flex: 0 0 18px;
      width: 18px;
      height: 18px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: var(--theme-color);
      transform: translateY(-1px);
    }

    .footer-link-icon svg,
    .footer-contact-icon svg {
      width: 18px;
      height: 18px;
      display: block;
      fill: currentColor;
    }

    /* make quick-link chevrons a little more obvious */
    .footer-link-icon {
      flex: 0 0 20px;
      width: 20px;
      height: 20px;
    }

    .footer-link-icon svg {
      width: 20px;
      height: 20px;
      stroke: currentColor;
      fill: none;
      stroke-width: 2.4;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .footer-contact-group + .footer-contact-group {
      margin-top: 18px;
    }

    .footer-info-title {
      margin-bottom: 8px;
    }

    .footer-contact-row .footer-info {
      margin: 0;
    }

    /* restore footer social icons with inline SVG */
    .th-social {
      display: flex;
      align-items: center;
      gap: 12px;
      flex-wrap: wrap;
    }

    .th-social a {
      width: 46px;
      height: 46px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
    }

    .th-social a svg {
      width: 20px;
      height: 20px;
      display: block;
    }

    .th-social a .social-fill {
      fill: currentColor;
    }

    .th-social a .social-stroke {
      fill: none;
      stroke: currentColor;
      stroke-width: 2;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    @media (max-width: 767px) {
      .footer-link-row,
      .footer-contact-row {
        gap: 10px;
      }
    }
  </style>

  <!-- Footer -->
  <footer class="footer-wrapper footer-layout1 background-image" style="background-image:url('https://www.jrelitebuilders.com/assets/img/bg/footer_bg_1.png');">
    <div class="widget-area">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-6 col-xl-3">
            <div class="widget footer-widget">
              <div class="th-widget-about">
                <div class="about-logo">
                  <a href="index.php"><img src="https://www.jrelitebuilders.com/assets/img/logo.png" alt="JR Elite Builders"></a>
                </div>
                <p class="about-text">JR Elite Builders delivers dependable, detail-driven construction and remodeling across Southern California—built around quality materials, skilled workmanship, and clear communication.</p>

                <div class="th-social">
                  <a href="https://www.facebook.com/jrelitebuilders/" title="facebook" aria-label="Facebook" target="_blank" rel="noopener">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path class="social-fill" d="M13.5 22v-8h2.7l.4-3.1h-3.1V8.9c0-.9.2-1.5 1.5-1.5H16V4.6c-.2 0-1-.1-1.9-.1-2.8 0-4.6 1.7-4.6 4.8v1.6H7v3.1h2.6v8h3.9z"/>
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
                      <path class="social-fill" d="M11.75 2.2c.75 0 1.33.55 1.42 1.29l.44 3.72c.06.47-.17.93-.58 1.16-.41.24-.92.21-1.31-.07l-3.02-2.13a1.42 1.42 0 0 1-.45-1.74 1.4 1.4 0 0 1 1.44-.85l2.06.15zm5.22 3.94c.38-.02.74.12.99.41.47.54.45 1.36-.05 1.88l-2.48 2.55c-.31.32-.79.44-1.22.31a1.3 1.3 0 0 1-.88-.9l-.97-3.34c-.19-.66.24-1.34.92-1.46l3.69-.64zm.77 6.16c.61.43.8 1.25.44 1.9l-1.71 3.05c-.22.39-.62.64-1.06.67-.45.03-.88-.18-1.16-.55l-2.13-2.86c-.42-.56-.27-1.36.33-1.73l3.25-2c.61-.37 1.4-.25 1.84.29l.2.24zm-5.45 3.25c.49.48.53 1.25.09 1.78l-2.06 2.5c-.28.34-.7.53-1.14.5a1.4 1.4 0 0 1-1.09-.63L6.33 16.8c-.36-.58-.2-1.34.36-1.72l3.03-2.04c.59-.4 1.38-.3 1.85.23l.72.78zm-4.91-5.1c.67.08 1.17.66 1.16 1.34l-.03 3.27c0 .43-.21.83-.58 1.08-.36.25-.83.31-1.24.15L3.72 15.2a1.42 1.42 0 0 1-.78-1.62c.14-.68.74-1.15 1.43-1.12l3.01.09z"/>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-auto">
            <div class="widget widget_nav_menu footer-widget">
              <h3 class="widget_title">Quick Links</h3>
              <div class="menu-all-pages-container">
                <ul class="footer-link-list">
                  <li>
                    <a href="index.php">
                      <span class="footer-link-row">
                        <span class="footer-link-icon" aria-hidden="true">
                          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 6l6 6-6 6"></path>
                          </svg>
                        </span>
                        <span>Home</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="about.php">
                      <span class="footer-link-row">
                        <span class="footer-link-icon" aria-hidden="true">
                          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 6l6 6-6 6"></path>
                          </svg>
                        </span>
                        <span>About</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="services.php">
                      <span class="footer-link-row">
                        <span class="footer-link-icon" aria-hidden="true">
                          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 6l6 6-6 6"></path>
                          </svg>
                        </span>
                        <span>Services</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="contact.php">
                      <span class="footer-link-row">
                        <span class="footer-link-icon" aria-hidden="true">
                          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 6l6 6-6 6"></path>
                          </svg>
                        </span>
                        <span>Contact</span>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-auto">
            <div class="widget footer-widget">
              <h3 class="widget_title">Contact Us</h3>
              <div class="th-widget-about">
                <div class="footer-contact-group">
                  <h4 class="footer-info-title">License</h4>
                  <div class="footer-contact-row">
                    <span class="footer-contact-icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="m12 2.75 2.86 5.79 6.39.93-4.62 4.5 1.09 6.36L12 17.33 6.28 20.33l1.09-6.36-4.62-4.5 6.39-.93L12 2.75Z"/>
                      </svg>
                    </span>
                    <p class="footer-info">License #1135623</p>
                  </div>
                </div>

                <div class="footer-contact-group">
                  <h4 class="footer-info-title">Address Location</h4>
                  <div class="footer-contact-row">
                    <span class="footer-contact-icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2.75A6.75 6.75 0 0 0 5.25 9.5c0 4.88 5.47 10.44 6.1 11.07a.93.93 0 0 0 1.3 0c.63-.63 6.1-6.19 6.1-11.07A6.75 6.75 0 0 0 12 2.75Zm0 9.25a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Z"/>
                      </svg>
                    </span>
                    <p class="footer-info">Fullerton, California, USA</p>
                  </div>
                </div>

                <div class="footer-contact-group">
                  <h4 class="footer-info-title">Phone Number</h4>
                  <div class="footer-contact-row">
                    <span class="footer-contact-icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.62 3.75h2.52c.52 0 .96.37 1.05.88l.58 3.28c.08.43-.11.86-.48 1.1l-1.73 1.12a14.1 14.1 0 0 0 5.31 5.31l1.12-1.73c.24-.37.67-.56 1.1-.48l3.28.58c.51.09.88.53.88 1.05v2.52c0 .58-.47 1.05-1.05 1.05h-.52C10.05 19.43 4.57 13.95 4.57 7.42V4.8c0-.58.47-1.05 1.05-1.05Z"/>
                      </svg>
                    </span>
                    <p class="footer-info"><a href="tel:7146047656">(714) 604-7656</a></p>
                  </div>
                </div>

                <div class="footer-contact-group">
                  <h4 class="footer-info-title">Email Address</h4>
                  <div class="footer-contact-row">
                    <span class="footer-contact-icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.75 5.25h14.5A1.75 1.75 0 0 1 21 7v10a1.75 1.75 0 0 1-1.75 1.75H4.75A1.75 1.75 0 0 1 3 17V7a1.75 1.75 0 0 1 1.75-1.75Zm0 2.02v.22l7.05 5.08a.35.35 0 0 0 .4 0l7.05-5.08v-.22H4.75Zm14.5 9.48v-7.01l-6.03 4.34a2.1 2.1 0 0 1-2.44 0L4.75 9.74v7.01h14.5Z"/>
                      </svg>
                    </span>
                    <p class="footer-info"><a href="mailto:jrelitebuilders@gmail.com">jrelitebuilders@gmail.com</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-3">
            <div class="widget footer-widget">
              <h4 class="widget_title">Our Location</h4>
              <div class="newsletter-widget">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106050.49788461123!2d-117.9810603!3d33.8703649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd2b35a5c0f1c9%3A0x33e63a64a6b7403d!2sFullerton%2C%20CA!5e0!3m2!1sen!2sus!4v1747017000000!5m2!1sen!2sus"
                  width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright-wrap">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-6">
            <p class="copyright-text">Copyright <?php echo date("Y"); ?> <a href="index.php">JR Elite Builders</a>. All Rights Reserved.</p>
          </div>
          <div class="col-md-6 text-end d-none d-md-block">
            <div class="footer-links"></div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll To Top -->
  <div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>

  <!-- JS -->
  <script src="https://www.jrelitebuilders.com/assets/js/vendor/jquery-3.6.0.min.js"></script>
  <script src="https://www.jrelitebuilders.com/assets/js/swiper-bundle.min.js"></script>
  <script src="https://www.jrelitebuilders.com/assets/js/bootstrap.min.js"></script>
  <script src="https://www.jrelitebuilders.com/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="https://www.jrelitebuilders.com/assets/js/jquery.counterup.min.js"></script>
  <script src="https://www.jrelitebuilders.com/assets/js/jquery-ui.min.js"></script>
  <script src="https://www.jrelitebuilders.com/assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="https://www.jrelitebuilders.com/assets/js/isotope.pkgd.min.js"></script>
  <script src="https://www.jrelitebuilders.com/assets/js/gsap.min.js"></script>
  <script src="https://www.jrelitebuilders.com/assets/js/ScrollTrigger.min.js"></script>
  <script src="https://www.jrelitebuilders.com/assets/js/circle-progress.js"></script>
  <script src="https://www.jrelitebuilders.com/assets/js/nice-select.min.js"></script>
  <script src="https://www.jrelitebuilders.com/assets/js/smooth-scroll.js"></script>
  <script src="https://www.jrelitebuilders.com/assets/js/main.js"></script>
</body>
</html>