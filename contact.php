<?php
$page = "contact";
$pageTitle = "Contact | JR Elite Builders";

/**
 * Optional basic handler (mail()).
 * If your host doesn't support mail(), swap this for SMTP (PHPMailer) or your form provider.
 */
$sent = false;
$error = "";
$name = "";
$email = "";
$phone = "";
$message = "";

if (!function_exists('jre_h')) {
  function jre_h($s) {
    return htmlspecialchars((string)$s, ENT_QUOTES, "UTF-8");
  }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name    = trim((string)($_POST["name"] ?? ""));
  $email   = trim((string)($_POST["email"] ?? ""));
  $phone   = trim((string)($_POST["phone"] ?? ""));
  $message = trim((string)($_POST["message"] ?? ""));

  if ($name === "" || $email === "" || $message === "") {
    $error = "Please fill out your name, email, and message.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Please enter a valid email address.";
  } else {
    // prevent header injection
    $emailSafe = preg_replace("/[\\r\\n]+/", "", $email);

    $to = "jrelitebuilders@gmail.com";
    $subject = "JR Elite Builders - Website Contact Form";
    $body =
      "Name: {$name}\n" .
      "Email: {$email}\n" .
      "Phone: {$phone}\n\n" .
      "Message:\n{$message}\n";

    $headers =
      "From: {$emailSafe}\r\n" .
      "Reply-To: {$emailSafe}\r\n" .
      "Content-Type: text/plain; charset=UTF-8\r\n";

    $ok = @mail($to, $subject, $body, $headers);
    $sent = $ok ? true : false;

    if (!$sent) {
      $error = "Your message could not be sent from this server. Please call or email us directly.";
    } else {
      // clear fields on success
      $name = $email = $phone = $message = "";
    }
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
            <p>California, USA</p>
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

      <!-- Right: Contact Form (this replaces where the map used to be) -->
      <div class="col-lg-8">
        <div class="jre-form">
          <h3 class="jre-form-title">Send a Message</h3>

          <?php if ($sent): ?>
            <div class="alert alert-success mb-4">Thanks! We received your message and will get back to you soon.</div>
          <?php elseif ($error): ?>
            <div class="alert alert-warning mb-4"><?php echo jre_h($error); ?></div>
          <?php endif; ?>

          <form method="post" action="contact.php" novalidate>
            <div class="row g-3">
              <div class="col-md-6">
                <input class="form-control" type="text" name="name" placeholder="Full Name*" required value="<?php echo jre_h($name); ?>">
              </div>
              <div class="col-md-6">
                <input class="form-control" type="email" name="email" placeholder="Email*" required value="<?php echo jre_h($email); ?>">
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" name="phone" placeholder="Phone (optional)" value="<?php echo jre_h($phone); ?>">
              </div>
              <div class="col-12">
                <textarea class="form-control" name="message" rows="7" placeholder="Tell us about your project*" required><?php echo jre_h($message); ?></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="th-btn th-icon w-100">
                  Send Message<i class="fa-regular fa-arrow-right ms-2"></i>
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
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6511951.459901925!2d-124.59221395479265!3d37.160692955957906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sni!4v1747016769007!5m2!1sen!2sni"
        width="100%" height="520" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

<!-- Get in Touch (kept as-is) -->
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

/* Make the *second* card darker like the original design */
.jre-contact-card--dark .jre-contact-icon{
  background:#121828;
  color:#fff;
}
.jre-contact-card--dark .jre-contact-text p a{
  color:#8b95be;
}

/* Right: form styling to match the theme/card look */
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
</style>

<?php require __DIR__ . "/includes/footer.php"; ?>
