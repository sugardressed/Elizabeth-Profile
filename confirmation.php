<?php
define('TITLE', 'Elizabeth | Contact Confirmation');
include('templates/header.php');

/*
|--------------------------------------------------------------------------
| 1. Only allow POST requests
|--------------------------------------------------------------------------
*/
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Invalid request.');
}

/*
|--------------------------------------------------------------------------
| 2. Optional referer check
|--------------------------------------------------------------------------
*/
if (!empty($_SERVER['HTTP_REFERER'])) {
    if (strpos($_SERVER['HTTP_REFERER'], 'xugarsoft.com/contact.php') === false) {
        die('Invalid origin.');
    }
}

/*
|--------------------------------------------------------------------------
| 3. Honeypot check
|--------------------------------------------------------------------------
*/
if (!empty($_POST['website'])) {
    die('Spam detected.');
}

/*
|--------------------------------------------------------------------------
| 4. Time check
|--------------------------------------------------------------------------
*/
if (!isset($_POST['form_time']) || !is_numeric($_POST['form_time'])) {
    die('Invalid form submission.');
}

if ((time() - (int)$_POST['form_time']) < 3) {
    die('Form submitted too quickly.');
}

/*
|--------------------------------------------------------------------------
| 5. Collect raw input
|--------------------------------------------------------------------------
*/
$fNameRaw   = trim($_POST['fName'] ?? '');
$emailRaw   = trim($_POST['email'] ?? '');
$phoneRaw   = trim($_POST['phone'] ?? '');
$messageRaw = trim($_POST['message'] ?? '');

/*
|--------------------------------------------------------------------------
| 6. Required fields
|--------------------------------------------------------------------------
*/
if ($fNameRaw === '' || $emailRaw === '' || $phoneRaw === '' || $messageRaw === '') {
    die('Missing information, please go back and try again.');
}

/*
|--------------------------------------------------------------------------
| 7. Validate email format
|--------------------------------------------------------------------------
*/
if (!filter_var($emailRaw, FILTER_VALIDATE_EMAIL)) {
    die('Please enter a valid email address.');
}

/*
|--------------------------------------------------------------------------
| 8. Validate email domain
|--------------------------------------------------------------------------
| This checks if the domain can receive mail.
| It still does NOT guarantee the exact mailbox exists.
*/
$emailParts = explode('@', $emailRaw);
$emailDomain = $emailParts[1] ?? '';

if ($emailDomain === '' || (!checkdnsrr($emailDomain, 'MX') && !checkdnsrr($emailDomain, 'A'))) {
    die('Please enter a real email domain.');
}

/*
|--------------------------------------------------------------------------
| 9. Validate phone as exactly 10 digits
|--------------------------------------------------------------------------
| Remove anything that is not a number first.
| This allows formats like:
| 6195551212
| 619-555-1212
| (619) 555-1212
*/
$phoneDigits = preg_replace('/\D/', '', $phoneRaw);

if (strlen($phoneDigits) !== 10) {
    die('Phone number must be exactly 10 digits.');
}

/*
|--------------------------------------------------------------------------
| 10. Sanitize for output
|--------------------------------------------------------------------------
*/
$fName   = htmlspecialchars($fNameRaw, ENT_QUOTES, 'UTF-8');
$email   = htmlspecialchars($emailRaw, ENT_QUOTES, 'UTF-8');
$phone   = htmlspecialchars($phoneDigits, ENT_QUOTES, 'UTF-8');
$message = nl2br(htmlspecialchars($messageRaw, ENT_QUOTES, 'UTF-8'));

/*
|--------------------------------------------------------------------------
| 11. Prepare and send email
|--------------------------------------------------------------------------
*/
$to      = 'sugardressed@gmail.com';
$subject = 'Resume - Potential Client for Xugarsoft.com';

$body = "
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h2>New Contact Message</h2>
    <p><strong>Name:</strong> {$fName}</p>
    <p><strong>Email:</strong> {$email}</p>
    <p><strong>Phone:</strong> {$phone}</p>
    <p><strong>Message:</strong><br>{$message}</p>
</body>
</html>
";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: no-reply@xugarsoft.com\r\n";
$headers .= "Reply-To: {$emailRaw}\r\n";

$mailSent = mail($to, $subject, $body, $headers);
?>

<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-4 py-5 px-4 px-md-5 text-center">
            <?php if ($mailSent): ?>
                <div class="contactConf">
                    <h2>Thank You for Your Interest!</h2>
                    <p>Your message has been sent successfully. I will get back to you soon.</p>
                    <p>You will be redirected to the home page in 10 seconds.</p>
                </div>
                <script>
                    setTimeout(function () {
                        window.location.href = "index.php";
                    }, 10000);
                </script>
            <?php else: ?>
                <div class="contactConf">
                    <h2>Sorry, Something Went Wrong</h2>
                    <p>Your message could not be sent right now. Please try again later.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
include('templates/footer.html');
?>