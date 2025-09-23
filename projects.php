<?php
define('TITLE','Elizabeth | Projects');
include('templates/header.php');
?>

<!-- Projects Section-->
<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-12">
            <!-- Project Card Policies and Procedures-->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder"><a href="http://pp.xugarsoft.com/" target="new" alternative="Policy and Procedures Site">Policies and Procedures</a></h2>
                                <p>This site is a library that house policies and procedures for users to find content quick and easy. This demo-site was built with WordPress.</p>
                            </div>
                            <img class="img-fluid" src="./assets/images/PPScreen.png" alt="Policies and Procedures Site" />
                        </div>
                    </div>
                </div>    
            <!-- Project Card File Review Application-->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">File Review Application</h2>
                                <p>The File Review Application is an internal system designed to help staff audit client files efficiently and ensure compliance with State of California regulations. Since the agency undergoes an annual state audit, this tool enables users to verify that all files meet State requirements. The application was built using Microsoft Access for the front end and Microsoft SQL Server for the back end. </p>
                            </div>
                            <img class="img-fluid" src="./assets/images/FileReview.PNG" alt="File Review Application" />
                        </div>
                    </div>
                </div>
                <!-- Project Card Forms-->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">Forms</h2>
                                <p>The Forms' site was originated from a collection of forms stored on the network, where there was a risk of users accidentally deleting or modifying them. To address this, I developed a secure site that allows staff to easily locate and access forms without the possibility of altering the originals. The project was built using Visual Studio with HTML, CSS, JavaScript, and PHP, and hosted on a local IIS server.</p>
                            </div>
                            <img class="img-fluid" src="./assets/images/ApLibrary.png" alt="AP Library" />
                        </div>
                    </div>
                </div>
                <!-- Project Directives-->
                <div class="card overflow-hidden shadow rounded-4 border-0">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">Directives</h2>
                                <p>The Directives site was developed to centralize and publish policy and procedure updates. Staff receive notifications twice a week about new directives, which are then posted on the intranet. I designed the site with a user-friendly interface that allowed staff with limited technical skills to update the list independently, without requiring my assistance. The project was built with HTML, CSS, JavaScript, and PHP, and hosted on a local IIS server.</p>
                            </div>
                            <img class="img-fluid" src="./assets/images/ApDirectives.png" alt="AP Directives" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call to action section-->
<section class="py-5 bg-gradient-primary-to-secondary text-white">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="display-4 mb-4">Let's build something together</h2>
            <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6" href="contact.php">Contact me</a>
        </div>
    </div>
</section>
</main>
<!-- Footer-->
<?php
include('templates/footer.html');
?>