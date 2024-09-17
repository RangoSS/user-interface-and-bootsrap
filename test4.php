<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marquee Image Slider with AJAX</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS for Marquee -->
    <style>
        .marquee-container {
            overflow: hidden;
            white-space: nowrap;
            position: relative;
            width: 100%;
        }

        .marquee {
            display: inline-block;
            white-space: nowrap;
            position: relative;
            animation: marquee 30s linear infinite;
        }

        .marquee img {
            width: 40%;
            /* Adjust the image size */
            height: auto;
            margin-right: 20px;
            display: inline-block;
            vertical-align: middle;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>
</head>

<body>

    <div class="container my-5">
        <h2 class="text-center">Marquee Image Scroller</h2>
        <div class="marquee-container">
            <div class="marquee">
                <!-- Images will be dynamically loaded here via AJAX -->
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script>
        $(document).ready(function() {
            // Function to load images via AJAX
            function loadImages() {
                $.ajax({
                    url: 'backend/testGet.php', // Update with your backend URL
                    type: 'GET',
                    data: {
                        action: 'getImages' // Update with the appropriate action parameter
                    },
                    success: function(response) {
                        const images = JSON.parse(response); // Parse the JSON response
                        let marqueeDiv = $('.marquee');
                        marqueeDiv.empty(); // Clear the existing content

                        // Append new images to the marquee
                        images.forEach(function(image) {
                            const imageItem = `<img src="${image.img_src}" alt="Image">`;
                            marqueeDiv.append(imageItem);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error loading images:', error);
                    }
                });
            }

            // Call the function to load images when the document is ready
            loadImages();
        });
    </script>
</body>

</html>