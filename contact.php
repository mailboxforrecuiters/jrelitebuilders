<?php
$page = "contact";
$pageTitle = "Contact | JR Elite Builders";

if (!function_exists('jre_h')) {
  function jre_h($s) {
    return htmlspecialchars((string)$s, ENT_QUOTES, "UTF-8");
  }
}

require __DIR__ . "/includes/header.php";
?>

<!-- Hero -->
<div class="breadcrumb-wrapper background-image"
     style="background-image:url('https://www.jrelitebuilders.com/assets/img/breadcumb/breadcumb-bg.jpg')">
  <div class="container">
    <div class="breadcrumb-content">
      <h1 class="breadcrumb-title">Contact Us</h1>
      <ul class="breadcrumb-menu">
        <li><a href="index.php">Home</a></li>
        <li>Contact Us</li>
      </ul>
    </div>
  </div>
</div>

<!-- Contact Info (left) + FORM (right) -->
<section class="space overflow-hidden">
  <div class="container">
    <div class="row g-4 align-items-stretch">

      <!-- Left: Contact Information -->
      <div class="col-lg-4">
        <div class="title-area mb-30">
          <span class="sub-title style1">Contact Information</span>
        </div>

        <div class="jre-contact-card">
          <div class="jre-contact-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M12 22s7-5.05 7-12a7 7 0 0 0-14 0c0 6.95 7 12 7 12z" stroke="currentColor" stroke-width="1.6"/>
              <circle cx="12" cy="10" r="2.2" stroke="currentColor" stroke-width="1.6"/>
            </svg>
          </div>
          <div class="jre-contact-text">
            <h4>Our Address</h4>
            <p>Fullerton, USA</p>
          </div>
        </div>

        <div class="jre-contact-card jre-contact-card--dark">
          <div class="jre-contact-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3 5.18 2 2 0 0 1 5.11 3h3a2 2 0 0 1 2 1.72c.12.9.33 1.77.62 2.6a2 2 0 0 1-.45 2.11L9.09 10.91a16 16 0 0 0 4 4l1.48-1.2a2 2 0 0 1 2.11-.45c.83.29 1.7.5 2.6.62A2 2 0 0 1 22 16.92z"
                    stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="jre-contact-text">
            <h4>Contact Number</h4>
            <p>Phone: <a href="tel:7146047656">(714) 604-7656</a></p>
            <p>Email: <a href="mailto:jrelitebuilders@gmail.com">jrelitebuilders@gmail.com</a></p>
          </div>
        </div>

        <div class="jre-contact-card">
          <div class="jre-contact-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.6"/>
              <path d="M12 7v6l4 2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
            </svg>
          </div>
          <div class="jre-contact-text">
            <h4>Working Hours</h4>
            <p>Mon to Fri 7AM-6PM - Sat 7PM-2PM</p>
          </div>
        </div>
      </div>

      <!-- Right: Contact Form -->
      <div class="col-lg-8">
        <div class="jre-form">
          <h3 class="jre-form-title">Send a Message</h3>

          <div id="jre-contact-alert" class="alert mb-4" style="display:none;"></div>

          <form id="jre-contact-form"
                method="post"
                action="https://www.vipkaraokelounge.com/jrendpoint.php"
                novalidate>
            <input type="hidden" name="ajax" value="1">
            <input type="text"
                   name="website"
                   value=""
                   tabindex="-1"
                   autocomplete="off"
                   aria-hidden="true"
                   style="position:absolute; left:-9999px; opacity:0; pointer-events:none;">

            <div class="row g-3">
              <div class="col-md-6">
                <input class="form-control" type="text" name="name" placeholder="Full Name*" required>
              </div>
              <div class="col-md-6">
                <input class="form-control" type="email" name="email" placeholder="Email*" required>
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" name="phone" placeholder="Phone (optional)">
              </div>
              <div class="col-12">
                <textarea class="form-control" name="message" rows="7" placeholder="Tell us about your project*" required></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="th-btn th-icon w-100" id="jre-contact-submit">
                  <span class="jre-btn-label">Send Message</span>
                  <i class="fa-regular fa-arrow-right ms-2"></i>
                </button>
              </div>
            </div>
          </form>

          <p class="sec-text mt-3 mb-0" style="font-size:14px; opacity:.85;">
            Prefer email? Send photos + details to <a href="mailto:jrelitebuilders@gmail.com">jrelitebuilders@gmail.com</a>.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Map: full-width row UNDER the info+form block -->
<section class="space-top overflow-hidden">
  <div class="container">
    <div class="jre-map jre-map--full">
      <iframe
        src="https://www.google.com/maps?q=Fullerton,+CA&output=embed"
        width="100%"
        height="520"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

<!-- Get in Touch -->
<div class="space overflow-hidden">
  <div class="container">
    <div class="row gy-5">
      <div class="col-lg-6">
        <div class="">
          <div class="title-area mb-30">
            <span class="sub-title style1">Get In Touch</span>
            <h2 class="sec-title">Have An Upcoming Projects? Let’s Talk to Now!</h2>
          </div>
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

<style>
/* Contact cards (left column) */
.jre-contact-card{
  background:#fff;
  border-radius:12px;
  padding:22px;
  display:flex;
  gap:16px;
  align-items:flex-start;
  box-shadow:0 12px 30px rgba(0,0,0,.06);
  margin-bottom:18px;
}
.jre-contact-icon{
  width:54px;height:54px;
  border-radius:12px;
  display:flex;align-items:center;justify-content:center;
  color:#6f7aa8;
  background:#eff2ff;
  flex:0 0 54px;
}
.jre-contact-text h4{
  font-size:18px;
  margin:0 0 6px 0;
  font-family:Titillium Web, sans-serif;
  font-weight:700;
}
.jre-contact-text p{
  margin:0;
  color:#6b7280;
  line-height:1.5;
}
.jre-contact-text a{ color:inherit; text-decoration:none; }
.jre-contact-text a:hover{ text-decoration:underline; }

/* Dark card */
.jre-contact-card--dark .jre-contact-icon{
  background:#121828;
  color:#fff;
}
.jre-contact-card--dark .jre-contact-text p a{
  color:#8b95be;
}

/* Right: form styling */
.jre-form{
  background:#fff;
  border-radius:12px;
  box-shadow:0 12px 30px rgba(0,0,0,.06);
  padding:26px;
  height:100%;
}
.jre-form-title{
  font-size:26px;
  margin:0 0 18px 0;
  font-family:Titillium Web, sans-serif;
  font-weight:800;
  color:#0f172a;
}

/* Full-width map block */
.jre-map{
  background:#fff;
  border-radius:12px;
  box-shadow:0 12px 30px rgba(0,0,0,.06);
  overflow:hidden;
  min-height:330px;
}
.jre-map iframe{ width:100%; height:100%; min-height:330px; display:block; }
.jre-map--full{ min-height:520px; }
.jre-map--full iframe{ min-height:520px; }

#jre-contact-alert.alert-success{
  display:block;
}
#jre-contact-alert.alert-warning{
  display:block;
}
#jre-contact-submit[disabled]{
  opacity:.7;
  cursor:not-allowed;
}
</style>

<script>
(function (window, document) {
  "use strict";

  // Prevent duplicate initialization if this script is included more than once
  if (window.__JRE_CONTACT_FORM_INIT__) {
    return;
  }
  window.__JRE_CONTACT_FORM_INIT__ = true;

  var FORM_ID = "jre-contact-form";
  var ALERT_ID = "jre-contact-alert";
  var SUBMIT_ID = "jre-contact-submit";
  var SUCCESS_MESSAGE = "Thanks! We received your message and will get back to you soon.";
  var ERROR_MESSAGE = "Your message could not be sent from this server. Please call or email us directly.";
  var REQUIRED_MESSAGE = "Please fill out your name, email, and message.";
  var CONVERSION_SEND_TO = "AW-17807260901/sKOyCM6FkOUbEOX5lKtC";

  var form = document.getElementById(FORM_ID);
  var alertBox = document.getElementById(ALERT_ID);
  var submitBtn = document.getElementById(SUBMIT_ID);
  var btnLabel = submitBtn ? submitBtn.querySelector(".jre-btn-label") : null;

  // Bail safely if required elements do not exist
  if (!form || !alertBox || !submitBtn) {
    return;
  }

  // Prevent duplicate event listeners if the DOM/script is re-rendered
  if (form.dataset.jreContactBound === "1") {
    return;
  }
  form.dataset.jreContactBound = "1";

  var isSubmitting = false;

  function showAlert(typeClass, message) {
    alertBox.className = "alert mb-4 " + typeClass;
    alertBox.textContent = message || "";
    alertBox.style.display = "block";
  }

  function clearAlert() {
    alertBox.className = "alert mb-4";
    alertBox.textContent = "";
    alertBox.style.display = "none";
  }

  function setLoading(state) {
    isSubmitting = state;
    submitBtn.disabled = state;

    if (btnLabel) {
      btnLabel.textContent = state ? "Sending..." : "Send Message";
    }
  }

  function getTrimmedFormValue(formData, key) {
    return String(formData.get(key) || "").trim();
  }

  function validate(formData) {
    var name = getTrimmedFormValue(formData, "name");
    var email = getTrimmedFormValue(formData, "email");
    var message = getTrimmedFormValue(formData, "message");

    if (!name || !email || !message) {
      return {
        ok: false,
        message: REQUIRED_MESSAGE
      };
    }

    return {
      ok: true
    };
  }

  function fireGoogleConversion() {
    if (typeof window.gtag === "function") {
      window.gtag("event", "conversion", {
        send_to: CONVERSION_SEND_TO
      });
    }
  }

  async function submitForm(event) {
    event.preventDefault();

    if (isSubmitting) {
      return;
    }

    clearAlert();

    var formData = new FormData(form);
    var validation = validate(formData);

    if (!validation.ok) {
      showAlert("alert-warning", validation.message);
      return;
    }

    setLoading(true);

    try {
      var response = await window.fetch(form.action, {
        method: "POST",
        body: formData,
        mode: "cors",
        headers: {
          "Accept": "application/json",
          "X-Requested-With": "XMLHttpRequest"
        }
      });

      var data;
      try {
        data = await response.json();
      } catch (jsonError) {
        throw new Error("Invalid JSON response from endpoint.");
      }

      if (!response.ok || !data || data.ok !== true) {
        showAlert(
          "alert-warning",
          (data && data.message) ? data.message : ERROR_MESSAGE
        );
        return;
      }

      fireGoogleConversion();
      showAlert("alert-success", data.message || SUCCESS_MESSAGE);
      form.reset();
    } catch (error) {
      showAlert("alert-warning", ERROR_MESSAGE);
    } finally {
      setLoading(false);
    }
  }

  form.addEventListener("submit", submitForm, false);

})(window, document);
</script>

<?php require __DIR__ . "/includes/footer.php"; ?>