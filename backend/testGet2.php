<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>

    <!-- Gallery for displaying gallery -->
    <div id="imageGallery" class="archGallery">
        <h1>Portfolio</h1>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        function fetchData() {
            var xhr = new XMLHttpRequest(); // Correct initialization

            // xhr.open('GET', 'test_api.php?action=getData', true); // Update with your actual PHP file URL
            xhr.open('GET', 'test_api.php', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText); // Correct JSON parsing
                    console.log(data);
                    const gallery = $('#imageGallery');

                    data.myImages.forEach(function(image) {
                        const imageContainer = $('<div>').addClass('image-container');
                        const img = $('<img>').attr('src', image.img_src).attr('alt', image.img_title);
                        const title = $('<h3>').text(image.img_title);
                        const caption = $('<p>').text(image.img_caption);

                        imageContainer.append(img, title, caption); // Append title and caption
                        gallery.append(imageContainer);
                    });


                } else {
                    console.error('Failed to fetch data.');
                }
            };

            xhr.send(); // Don't forget to send the request
        }

        window.onload = fetchData; // Assign onload outside the function
    </script>
</body>

</html>