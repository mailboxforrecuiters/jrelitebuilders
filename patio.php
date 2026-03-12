<?php
  // === Load PHPMailer classes (manual include, no Composer) ===
    require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
    require_once __DIR__ . '/PHPMailer/src/SMTP.php';
    require_once __DIR__ . '/PHPMailer/src/Exception.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
  
  $name = trim($_POST["name"] ?? "");
  $email = trim($_POST["email"] ?? "");
  $phone = trim($_POST["phone"] ?? "");
  $date = trim($_POST["date"] ?? "");
  $time = trim($_POST["timeStart"] ?? "");
  $message = trim($_POST["message"] ?? "");
  $duration = trim($_POST["duration"] ?? "");
  // Check required fields
  if (!$name || !$email || !$phone || !$date || !$time || !$message ) {
    http_response_code(400);
    exit("missing");
  }


// Convert AM/PM time to 24-hour format if needed
  if (preg_match('/\b(AM|PM)\b/i', $time)) {
    $parsedTime = DateTime::createFromFormat('g:i A', $time);
    if ($parsedTime) {
      $time = $parsedTime->format('H:i');
    }
  }

  // --- Prepare email ---


    
    $subject = "Patio Inquiry from $name";
    // Build email body
    $body = "Hello VIP Karaoke Lounge team,
    
    You have received a new patio inquiry with the following details:
    
    Name: $name
    Email: $email
    Phone: $phone
    Date: $date
    Time: $time
    Duration: $duration
    
    Message:
    $message
    
    Clicking 'Reply' will send an email directly to the customer.
    
    Thank you,
    VIP Karaoke Lounge Booking System
    ";
    // === Create new mailer instance ===
    $mail = new PHPMailer(true);
    
    try {
        // --- Server settings ---
        $mail->isSMTP();
        $mail->Host       = 'localhost';
        $mail->Port       = 25;
        $mail->SMTPAuth   = false;
        $mail->SMTPAutoTLS = false; // ?? prevents TLS handshake on local relay
        $mail->SMTPSecure = false; // No auth for internal relay
        $mail->Username   = 'info@vipkaraokelounge.com';  // Your Microsoft 365 email
        $mail->Password   = 'info@vipkaraokelounge.com';         // Or an app password if MFA is enabled
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        // Required to bypass CN mismatch warning for GoDaddy's relay
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true,
            ],
        ];
        // Optional: uncomment to debug connection
        // $mail->SMTPDebug = 2; // or 3 for verbose output
        // $mail->Debugoutput = 'html';
    
        // --- Sender info ---
        $mail->setFrom('info@vipkaraokelounge.com', 'VIP Karaoke Lounge Patio Inquiry');
    
        // --- Recipient(s) ---
        $mail->addAddress('info@vipkaraokelounge.com');     // primary recipient
        $mail->addAddress('xforclistx@gmail.com'); 
        
    
        // --- Reply-To from customer ---
        $mail->addReplyTo("$email", "$name");
    
        // --- Content ---
        $mail->isHTML(false); // send plain text (change to true if you want HTML)
        $mail->Subject = "$subject";
        $mail->Body    = "$body";
    
        // --- Send the email ---
        if ($mail->send()) {
            echo "? Message sent successfully!";
        } else {
            echo "? Mailer Error: " . $mail->ErrorInfo;
        }
    
    } catch (Exception $e) {
        echo "? Exception: {$mail->ErrorInfo}";
    }
}
?>
