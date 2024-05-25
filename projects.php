<?php
define('TITLE','Elizabeth | Projects');
include('templates/header.html');
?>

<!-- Projects Section-->
<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Project Card 1-->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">File Review Application</h2>
                                <p>The File Review Application is a system the user utilize to audit files. Every year
                                    the agency is audited by the State of California, the user needs to ensure that all
                                    of the files adhere to Stage Regulations. The tools utilized for this project were:
                                    MS Access for the front end, and MS-SQL Server for the back end. </p>
                            </div>
                            <img class="img-fluid" src="./assets/images/FileReview.PNG" alt="File Review Application" />
                        </div>
                    </div>
                </div>
                <!-- Project Card 2-->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">AP Library</h2>
                                <p>The AP Library started as a bunch of forms saved in the network, the need was to
                                    avoid users to delete or modify forms by mistake. The site was build for the user to
                                    be able to locate forms easily and without the risk of modifying them. The tools
                                    utilized on this project were: VS Studio, HTML,CSS,JavaScript, and PHP hosted in
                                    Windows IIS</p>
                            </div>
                            <img class="img-fluid" src="./assets/images/ApLibrary.png" alt="AP Library" />
                        </div>
                    </div>
                </div>
                <!-- Project Card 3-->
                <div class="card overflow-hidden shadow rounded-4 border-0">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">AP Directives</h2>
                                <p>The AP Directives is a site to list policies and procedures updates, twice a week the
                                    user receives a notification about new directions, and those are published in the
                                    intranet. I built a shell where users with low skill in technology where able to
                                    update that list without my help. The tools utilized on this project were: VS
                                    Studio, HTML,CSS,JavaScript, and PHP hosted in Windows IIS</p>
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