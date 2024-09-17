<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="images/copyryt.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/tiny-slider.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/glightbox.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <title>Riesonic &mdash;We Provide Construction practice</title>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="site-navigation">
                <a href="index.html" class="logo m-0 float-start"><img src="images/favicorn2.png" alt="Image" style="width:20%;"> </a>

                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu ulnavs">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li class="has-children">
                        <a href="">Services</a>
                        <ul class="dropdown">
                            <li><a href="architect.html">Architect</a></li>
                            <li><a href="quantity_survey.html">Quantity Survey</a></li>
                            <li><a href="dispute.html">Project Dispute</a></li>
                            <li class="has-children">
                                <a href="#">FINANCE</a>
                                <ul class="dropdown">
                                    <li><a href="projectAudit.html">Project Audit</a></li>
                                    <li><a href="project_finance.html">Project Finance</a></li>
                                    <li><a href="procurement_solutions.html">Procurement</a></li>
                                </ul>
                            </li>

                            <li class="has-children">
                                <a href="#">Management</a>
                                <ul class="dropdown">
                                    <li><a href="property_development.html">Property Development</a></li>
                                    <li><a href="program_management.html">Program Management</a></li>
                                    <li><a href="propert_assert_management.html">Property Assert </a></li>
                                    <li><a href="project_management.html">Project Management</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a href="projects.html">Project</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
                <button class="btn btn-primary float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    Log in
                </button>
            </div>
        </div>
    </nav>

    <div class="hero-2 overlay" style="background-image: url('images/architect9.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mx-auto ">
                    <h1 class="mb-5 text-center"><span>Contact Us</span></h1>

                    <br><br>

                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="section sec-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="row mb-5 justify-content-center text-center">
                        <div class="col-lg-8">
                            <h2 class="heading mb-4">Get in touch</h2>

                        </div>
                        <form class="row" action="sendMail.php" method="POST">

                            <div class="col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="ps-3 mb-2">Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="email" class="ps-3 mb-2">Email</label>
                                    <input type="text" class="form-control" name="email" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="phone" class="ps-3 mb-2">Phone</label>
                                    <input type="text" class="form-control" name="phone" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label for="subject" class="ps-3 mb-2">Subject</label>
                                    <input type="text" class="form-control" name="subject" required>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-12">
                                <div class="mb-3">
                                    <label for="message" class="ps-3 mb-2">Message</label>
                                    <textarea class="form-control" name="message" required cols="30" rows="7"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <input type="submit" name="btnSend" value="Send message" class="btn btn-primary mt-3">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d920246.0086354209!2d27.80967649326102!3d-25.713991938134384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssanton!5e0!3m2!1sen!2sza!4v1723546585189!5m2!1sen!2sza" width="350" height="450" style="border:0;margin-top: 90px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </div>
    <!--get location here-->
    <div class="section locations" style="margin-top:-100px;">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-12 sec-8">
                    <div class="single-info">
                        <i class="fa-solid fa-clock fa-3x"></i>
                        <div class="content float-end">
                            <h5>Mon - Sat: 8am - 5pm</h5>
                            <p>Sunday Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 sec-8  ">
                    <div class="single-info">
                        <i class="fa-solid fa-location-dot fa-3x"></i>
                        <div class="content float-end">
                            <h5>2 Fir e Brigade Road</h5>
                            <p>Santon</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 sec-8">
                    <div class="single-info">
                        <i class="fa-solid fa-phone fa-3x"></i>
                        <div class="content float-end">
                            <h5>+(27) 1234 56789</h5>
                            <p>www.riseonic.co,za</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--get locations end here-->

    <div class="site-footer bg-light">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3 class="line-top">About</h3>
                        <p class="mb-5">Riseonic Advisory is an enthusiastic black-owned and managed consulting practice by Mr. Ndiphiwe
                            Madikiza, Mr. Sazi Matebese and Ms. Mbasa Figlan who together have more than 15 years’ combined experience.
                        </p>

                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="widget">
                                <h3 class="line-top">Navigations</h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4">
                            <div class="widget">
                                <ul class="links list-unstyled">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="service.html">Services</a></li>
                                    <li><a href="projects.html">Projects</a></li>
                                    <li><a href="contact.html">contact</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4">
                            <div class="widget">
                                <ul class="links list-unstyled">
                                    <li><a href="architect.html">Architecture</a></li>
                                    <li><a href="program_management.html">Program Management</a></li>
                                    <li><a href="project_management.html">Project Management</a></li>
                                    <li><a href="projectAudit.html">Audit</a></li>
                                    <li><a href="procurement_solutions.html">Procurement Solution</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4">
                            <div class="widget">
                                <ul class="links list-unstyled">
                                    <li><a href="propert_assert_management.html">Assert Management</a></li>
                                    <li><a href="property_development.html">Property Development</a></li>
                                    <li><a href="project_finance.html">Project Finance</a></li>
                                    <li><a href="dispute.html">Dispute Management</a></li>
                                    <li><a href="quantity_survey.html">Quantity Survey</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center text-center copyright">
                <div class="col-md-8">
                    <p class="small text-black-50">Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved. &mdash; Designed by <a href="#">Smsolutionspe.co.za</a>
                    </p>
                </div>
            </div>
        </div>
    </div>







    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!--jquery link-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
    <!--sweet alert pop ups-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $messageText = "<?= $_SESSION['status'] ?? ''; ?>" //double question mark symbolize null
        if ($messageText != '') {
            Swal.fire({
                title: "Thank You",
                text: $messageText,
                icon: "success",
                showClass: {
                    popup: `
      animate__animated
      animate__fadeInUp
      animate__faster
    `
                },
                hideClass: {
                    popup: `
      animate__animated
      animate__fadeOutDown
      animate__faster
    `
                }
            });
            <?php unset($_SESSION['status']); ?>
        }
    </script>
</body>

</html>