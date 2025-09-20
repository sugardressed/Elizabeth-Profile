<?php
define('TITLE','Elizabeth | Contact');
include('templates/header.php');

// Initial Variables
$fName=$_POST['fName'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$tfName=trim($fName);
$tfName=ucwords($tfName);
$tfName=htmlspecialchars($tfName);

?>

<body>
    <div class="contactConf">
        <h2>Thank You for your Interest!</h2>
        <h3>I am receiving the following information:</h3>
        <?php
            // Select to subscribe
            if(isset($_POST['fName'])) {
                print "Name: $tfName <br>\n";
            }
            if(isset($_POST['email'])) {
                print "Email: $email <br>\n";
            }
            if(isset($_POST['phone'])) {
                print "Phone: $phone <br>\n";
            }
            if(isset($_POST['message'])) {
                print "Message: $message";
            }
                else{
                print "Missing information, please try again.";
            }
            ?>
    </div>
</body>


<?php
include('templates/footer.html');
?>