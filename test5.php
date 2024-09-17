<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AJAX PHP Object</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <button type="button" id="getUserButton">Get User Data</button>
    <div id="userData"></div><br><br>
    <div id="txtmessage">
        <h1>see me</h1>
    </div><br><br>

    <div id="logme">
        <h1>session 2</h1><br><br>
        <a href="" id="response">log out</a>
    </div>



    <script>
        $(document).ready(function() {
            $('#getUserButton').click(function() {
                $.ajax({
                    url: 'testbutton.php', // The PHP file that returns JSON
                    type: 'POST', // You can use 'POST' if necessary
                    dataType: 'json', // Tell jQuery to expect JSON
                    success: function(response) {
                        // Accessing the properties of the PHP object
                        var name = response.name;
                        var email = response.email;
                        var mess = response.messageText;

                        console.log(mess);

                        //  $('#userData').html('Name: ' + name + '<br>Email: ' + email);
                        // document.getElementById('txtmessage').innerHTML = "hey where are you";
                        if (mess) {
                            alert('user updated successfulu');
                        }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error('AJAX request failed: ' + textStatus, errorThrown);
                    }
                });
            });
        });
    </script>
    <script src="js/jquery.min.js"></script>
</body>

</html>