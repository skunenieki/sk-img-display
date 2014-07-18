<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <p>Hello world! This is HTML5 Boilerplate.</p>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="//js.pusher.com/2.2/pusher.min.js"></script>
        <script>
            var pusher = new Pusher('f43e185cfa3b060dd7fe');
            var channel = pusher.subscribe('sk-image-display');

            channel.bind('display', function(data) {
                console.log(data);
            });

        </script>
    </body>
</html>
