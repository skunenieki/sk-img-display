<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="js/vendor/modernizr-2.8.0.min.js"></script>
    </head>
    <body>
        <p>Hello world! This is HTML5 Boilerplate.</p>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="//js.pusher.com/2.2/pusher.min.js"></script>
        <script>
            var pusher = new Pusher('YOUR_APP_KEY');
            var channel = pusher.subscribe('sk-image-display');

            channel.bind('display', function(data) {
                console.log('An event was triggered with message: ' + data.message);
            });

        </script>
    </body>
</html>
