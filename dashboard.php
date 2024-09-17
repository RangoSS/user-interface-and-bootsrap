<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style2.css">
</head>
<style>
    .archGallery {
        display: flex;
        flex-wrap: wrap;
        width: 100%;


        /* or any desired width */
        gap: 10px;
        /* Optional: space between elements */
    }

    .archDiv {
        display: flex;


        /* or any desired width */


    }

    .user-container {
        flex: 1 0 150px;
        /* Set a base width for items (150px in this case) */
        height: 100px;
        /* Set height of items */
        background-color: lightblue;
        margin: 5px;

    }

    .user-container img {
        width: 100%;
        height: auto;
    }

    .update-button {
        /* display: inline-block;*/

        margin-right: 10px;
        border-radius: 4px;
        margin-bottom: 2px;
        margin-left: 2px;
    }

    .delete-button {

        margin-right: 10px;
        border: solid red;
        border-radius: 4px;
        margin-bottom: 2px;
        margin-left: 2px;
    }
</style>

<body>
    <h1>dashborad</h1>
    <section>
        <div class="d-flex flex-row mb-3 justify-content-center">
            <div class="p-2">
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Updates Pages</button>

                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Risonic</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">

                        <nav class="sidebar">
                            <h2>Dashboard</h2>
                            <ul>
                                <li><a href="#" onclick="showSection('pagesSection')">home page</a></li>
                                <li><a href="#" id="myLink">about us page</a></li>
                                <li><a href="#" onclick="showSection('settingsSection')">Service page</a></li>
                                <li><a href="#" onclick="showSection('pagesSection')">project</a></li>
                                <li><a href="#" onclick="showSection('imagesSection')">contact</a></li>
                                <li><a href="#" onclick="showSection('settingsSection')"></a></li>
                                <li><a href="" id="myArchitect">Architecture</a></li>
                                <li><a href="program_management.html">Program Management</a></li>
                                <li><a href="project_management.html">Project Management</a></li>
                                <li><a href="projectAudit.html">Audit</a></li>
                                <li><a href="procurement_solutions.html">Procurement Solution</a></li>
                                <li><a href="propert_assert_management.html">Assert Management</a></li>
                                <li><a href="property_development.html">Property Development</a></li>
                                <li><a href="project_finance.html">Project Finance</a></li>
                                <li><a href="dispute.html">Dispute Management</a></li>
                                <li><a href="quantity_survey.html">Quantity Survey</a></li>
                            </ul>
                        </nav>
                        <p>Try scrolling the rest of the page to see this option in action.</p>
                    </div>
                </div>
            </div>
            <div class="p-2">Flex item 2</div>
            <div class="p-2">Flex item 3</div>
        </div>

    </section>
    <div class="container" style="border-style: groove;">
        <!-- Add Page Form Modal -->
        <div id="abot_us">
            <div class="row">
                <div class="col-md-4 col sm-sm-12" style="border-style: dotted;">
                    <h2>Who We Are</h2>
                    <form style="width: 100%;">

                        <!-- Message input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="textInput">Content Pharagrap (optional)</label>
                            <textarea class="form-control" id="textInput" rows="4"></textarea>

                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="mission">Mission (optional)</label>
                            <input type="email" id="mission" class="form-control" />

                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="vision">Vission (optional)</label>
                            <input type="email" id="vision" class="form-control" />

                        </div>

                        <!-- Submit button -->
                        <button data-mdb-ripple-init type="submit" onclick="updateAndStoreText()" class="btn btn-primary btn-block mb-4">Update</button>
                        <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Cancel

                        </button>
                    </form>

                    <!-- Paragraph to display the text -->
                    <p id="myParagraph">This is the original text.</p>
                </div>
                <div class="col-md-8 col-sm-12" style="border-style: dotted;">
                    <iframe src="about.html" class="m-0" height="500" width="800" title="Iframe Example"></iframe>

                </div>
            </div>
        </div>
        <!-- architect -->
        <div class="archDiv bg-dark" id="archDiv" style="border-style: dashed;">
            <div class="row">
                <div class="col-md-4 col sm-sm-12" style="border-style: groove;">
                    <h2>Architect</h2>
                    <form id="contactFrm" style="width: 100%;">

                        <!-- Message input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="textInput">Content Pharagrap (optional)</label>
                            <textarea class="form-control" id="textInput" rows="4"></textarea>

                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="caption">caption (optional)</label>
                            <input type="text" class="form-control" id="caption">

                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="mission">Portfolio Images (optional)</label>
                            <input class="form-control btn-block" id="file" name="file" type="file">
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">

                            <input type="text" class="form-control btn-block" id="gallerytype" name="gallerytype" value="architect" disabled>
                        </div>
                        <!-- Submit button -->
                        <button data-mdb-ripple-init type="button" onclick="uploadArchitect()" class="btn btn-primary btn-block mb-4">Update</button>
                        <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Cancel

                        </button>
                    </form>
                    <div class="hada">
                        <h1>Portfolio</h1>
                    </div>
                    <!--gallery for displaying gallery-->
                    <!--  <div class="display_gallery d-flex flex-row">
                        <div id="userGallery" class="archGallery " style="border-style: dotted;">

                        </div>
                    </div>-->
                    <!-- Paragraph to display the text -->
                    <p id="myParagraph">This is the original text.</p>
                </div>
                <div class="col-md-8 col-sm-12">
                    <iframe src="architect.html" class="m-0" height="500" width="700" title="Iframe Example"></iframe>
                </div>


                <div id="userGallery" class="archGallery" style="border-style: dotted;">

                </div>


            </div>
        </div>

    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // JavaScript to handle the link click event
        document.getElementById('myLink').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior
            $('#abot_us').show();
            // $('#canvassd').hide();
            $('#offcanvasScrolling').removeClass('show');


            // Perform an action
            // alert('Link clicked! Performing an action.');
        });



        // JavaScript to handle the link click event
        document.getElementById('myArchitect').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior
            $('#archDiv').show();
            $('#abot_us').hide();
            // $('#canvassd').hide();
            $('#offcanvasScrolling').removeClass('show');


            // Perform an action
            // alert('Link clicked! Performing an action.');
        });

        function uploadArchitect() {

            var formData = new FormData(); //get form element object
            var fileUpload = $('#file').get(0); //get attribute ellement
            var files = fileUpload.files[0]; //this array get file name and size

            if (files) {

                formData.append('file', files); // Append the file to FormData object
                formData.append('action', 'uploading');
                formData.append('caption', $('#caption').val());
                formData.append('gallerytype', $('#gallerytype').val());



                console.log(formData);
                // Perform AJAX request to upload file
                $.ajax({
                    url: 'backend/api.php', // URL to which the request is sent
                    type: 'POST', // Type of request
                    data: formData, // FormData object
                    contentType: false, // Prevent jQuery from setting Content-Type
                    processData: false, // Prevent jQuery from processing data
                    success: function(response) {
                        console.log('File uploaded successfully:', response);

                        $("#contactFrm")[0].reset();
                        alert('photo inserted');
                    },
                    error: function(xhr, status, error) {
                        console.error('Upload failed:', status, error);
                    }
                });
            } else {
                console.error('No file selected');
            }
        }

        //end of function upload

        //stating get and display pictures
        function fetchUsers() {
            var xhr = new XMLHttpRequest();
            //xhr.open('GET', 'backend/testGet.php?action=galleryArchitect', true);
            xhr.open('GET', 'backend/testGet.php?action=galleryArchitect', true);
            // xhr.open('GET', 'backend/api.php', true);

            xhr.onload = function() {
                if (xhr.status === 200) {
                    var users = JSON.parse(xhr.responseText);

                    if (Array.isArray(users)) {
                        users.forEach(function(user) {
                            // Example of how you might display user data
                            const userContainer = $('<div>').addClass('user-container');
                            const img = $('<img>').attr('src', user.img_src).attr('alt', user.img_title);
                            const name = $('<h3>').text(user.img_title);
                            const email = $('<p>').text(user.img_caption);
                            var updateButton = $('<button>').text('Update').addClass('update-button');
                            var deleteButton = $('<button>').text('Delete').addClass('delete-button');


                            userContainer.append(img, name, email, updateButton, deleteButton);
                            $('#userGallery').append(userContainer);
                        });
                    } else {
                        console.error('Unexpected data format.');
                    }
                } else {
                    console.error('Failed to fetch user data.');
                }
            };

            xhr.send();
        }

        window.onload = fetchUsers;
    </script>

    </script>

</body>

</html>