<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SK</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            html {
                background: #000 url('http://www.downloadgimp.net/wp-content/uploads/2012/03/skies.jpg') no-repeat center center fixed;
                background-size: auto 100%;
                overflow: hidden;
            }
        </style>
    </head>
    <body>
        <div class="augsa" style="
            position: absolute;
            top: 0;
            left: 0;
            height: 50px;
            font-size: 40px;
            color: white;
            width: 100%;
            background: rgba(0, 0, 0, 0.7);
            font-family: Verdana;
            padding: 10px;
        ">
            Sūti foto ar #skunenieki uz twitter vai instagram.
        </div>

        <div class="apaksa" style="
            position: absolute;
            bottom: 0;
            left: 0;
            height: 50px;
            font-size: 40px;
            color: white;
            width: 100%;
            background: rgba(0, 0, 0, 0.7);
            font-family: Verdana;
            padding: 10px;
        ">
            <img class="twlogo" src="https://g.twimg.com/Twitter_logo_white.png" style="height: 30px; margin-right: 5px;">
            <img class="iglogo" src="https://fbcdn-dragon-a.akamaihd.net/hphotos-ak-xpa1/t39.2365-6/851582_417171855069447_55288290_n.png" style="height: 40px; margin-right: 5px; display:none;">
            <div class="username" style="display: inline;">skunenieki</div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="//js.pusher.com/2.2/pusher.min.js"></script>
        <script>
            var pusher = new Pusher('f43e185cfa3b060dd7fe');
            var channel = pusher.subscribe('sk-image-display');

            channel.bind('display', function(data) {
                console.log(data);
                $('html').css('background','#000 url("'+data.url+'") no-repeat center center fixed');
                $('.username').text(data.author);
                if (data.source == 'twitter') {
                    $('.iglogo').hide();
                    $('.twlogo').show();
                } else if (data.source == 'ig') {
                    $('.twlogo').hide();
                    $('.iglogo').show();
                }
            });
        </script>
    </body>
</html>
