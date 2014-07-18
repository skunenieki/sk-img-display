<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SK</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            html {
                background: url('http://www.downloadgimp.net/wp-content/uploads/2012/03/skies.jpg') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="//js.pusher.com/2.2/pusher.min.js"></script>
        <script>
            var pusher = new Pusher('f43e185cfa3b060dd7fe');
            var channel = pusher.subscribe('sk-image-display');

            channel.bind('display', function(data) {
                console.log(data);
                $('html').css('background-image','url("'+data.url+'")');
            });

        </script>
    </body>
</html>
