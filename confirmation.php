<?php
define('TITLE','Elizabeth | Contact');
include('templates/header.php');

// Initial Variables

// $fName=$_POST['fName'];
// $email=$_POST['email'];
// $phone=$_POST['phone'];
// $message=$_POST['message'];
// $tfName=trim($fName);
// $tfName=ucwords($tfName);
// $tfName=htmlspecialchars($tfName);



// Collect and sanitize input
$fName   = htmlspecialchars(trim($_POST['fName'] ?? ''));
$email   = htmlspecialchars(trim($_POST['email'] ?? ''));
$phone   = htmlspecialchars(trim($_POST['phone'] ?? ''));
$message = htmlspecialchars(trim($_POST['message'] ?? ''));

if ($fName && $email && $message) {
    // Prepare email
    $to = "sugardressed@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $fName\nEmail: $email\nPhone: $phone\nMessage: $message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Send email
    mail($to, $subject, $body, $headers);

    // Show confirmation to user
    echo '<div class="contactConf">';
    echo "<h2>Thank You for your Interest!</h2>";
    echo "<p>Your message has been sent successfully. I will get back to you soon.</p>";
    echo '</div>';

    // Redirect after 10 seconds to home page
    header("refresh:60;url=index.php");
} else {
    echo "<p>Missing information, please go back and try again.</p>";
}

?>




<?php
include('templates/footer.html');
?>