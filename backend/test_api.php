<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="userGallery" id="userGallery">
        <h1>helow helow</h1>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function fetchUsers() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'testGet.php?action=galleryArchitect', true);
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
</body>

</html>