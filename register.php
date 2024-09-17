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
    <link rel="stylesheet" href="css/style2.css">
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
                    <h1 class="mb-5 text-center"><span>Register</span></h1>

                    <br><br>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!--register start here-->
    <div class="container" style="border-style: dashed;">





        <div class="regForm mt-5">
            <!--log in start-->
            <div class="signmee">
                <form id="sign" name="sign" class="sign" action="login.php" method="post" style="border-style: dashed;">

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="email" name="email" class="form-control" />
                        <label class="form-label" for="email">Email</label>
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="passwords" name="passwords" class="form-control" />
                        <label class="form-label" for="passwords">Password</label>
                    </div>

                    <!-- 2 column grid layout -->
                    <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3 mb-md-0">
                                <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                <label class="form-check-label" for="loginCheck"> Remember me </label>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <div class="form-check d-flex mb-4">
                        <button type="submit" id="getDataButton" class="btn btn-sm btn-dark rounded">submit</button>
                    </div>
                    <!-- Register buttons -->

                </form>


            </div>
            <!--log in end here-->

            <!--form register-->
            <form id="regis" method="post" style="border-style: dashed;">
                <!-- Name input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="registerName">first name</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" />

                </div>

                <!-- Username input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="last_name">last name</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" />

                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="last_name">email</label>
                    <input type="email" id="email2" name="email2" class="form-control" />

                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="last_name">email</label>
                    <input type="email" id="email" name="email" class="form-control" />

                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="contact">Contact</label>
                    <input type="number" id="contact" name="contact" class="form-control" />

                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="position" name="position" value="client">
                    <label class="form-check-label" for="client">
                        Client
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="position" name="position" value="employee">
                    <label class="form-check-label" for="employee">
                        Employee
                    </label>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="m_email" name="email" class="form-control" />

                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="Password">Password</label>
                    <input type="password" id="L_passwords" name="L_passwords" class="form-control" />

                </div>

                <!-- Repeat Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="r_passwords">Repeat password</label>
                    <input type="password" id="r_passwords" name="r_passwords" class="form-control" />

                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex mb-4">
                    <button type="button" id="btnRegister" name="btnRegister" class="btn btn-sm btn-dark rounded custom-margin">submit</button>
                </div>
        </div>
    </div>
    <div class="result">
    </div>
    </form>
    <!--end here-->


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

    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
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
        /*   $messageText = "<?= $_SESSION['message'] ?? ''; ?>" //double question mark symbolize null

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
            <?php unset($_SESSION['message']); ?>


        }*/
    </script>
    <script>
        /*  function showSignForm() {
            $('#regis').hide();
            $('#sign').show();
            window.location.href = 'backend/api.php'; //redirect
        }*/

        $(document).ready(function() {
            $('#btnRegister').click(function(event) {
                event.preventDefault(); // Prevent the default form submission

                //session message


                //session ou

                // Collect form data in array
                var formData = {
                    first_name: $('#first_name').val(),
                    last_name: $('#last_name').val(),
                    position: $('input[name="position"]:checked').val(),
                    contact: $('#contact').val(),
                    m_email: $('#m_email').val(),
                    passwords: $('#L_passwords').val(),

                    action: 'insert' // Action to perform in PHP function call



                };

                console.log('Array:', formData);



                $('#regis').hide(); //show and hide divs
                $('#sign').show();

                // Perform an AJAX request to the PHP script
                $.ajax({
                    url: 'backend/api.php', // URL to the PHP script
                    method: 'POST', // Use POST method
                    data: formData, // Send form data
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            // Handle successful response
                            //get se page sessions
                            var mess = response.message;
                            var errorms = response.error;

                            console.log("Message from server: ", mess);

                            if (mess) {
                                alert('User updated successfully', mess);
                            }
                            //out of sesion
                        }

                    },

                });
            });
        });
    </script>
</body>

</html>