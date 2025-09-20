<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Elizabeth's Profile" />
        <meta name="author" content="Elizabeth Web Development and process improvement" />
            <title>
        <?php //Print the page title.
        if (defined('TITLE')) { //Is the title defined?
            print TITLE;
        } else { //The title is not defined.
            print 'Elizabeth Profile';
        }
        ?>
    </title>
        
        <!-- Favicon-->
        <!-- <link rel="icon" type="image/png" href="assets/images/X_IconNobackground.png" /> -->
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/Xugarsoft_icon_32x32.png">


        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
       
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="./css/customStyles.css">

    <!-- <link rel="icon" type="image" href="../assets/images/XugarsoftIcon.png"> -->





        
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php"><span class="fw-bolder text-primary">Elizabeth Ramirez Profile</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="resume.php">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>