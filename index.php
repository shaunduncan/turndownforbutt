<!DOCTYPE html>
<html>
    <head>
        <title>TURN DOWN FOR BUTT</title>
        <style>
            html {
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                overflow: hidden;
            }
        </style>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://connect.soundcloud.com/sdk.js"></script>
        <script src="http://w.soundcloud.com/player/api.js"></script>
    </head>
    <body>
        <div id="soundcloud" style="display: none"></div>
        <div style="position: absolute; bottom: 0; right: 0; width: 125px; height: 125px">
            <script type="text/javascript"><!--
                google_ad_client = "ca-pub-8503195967090189";
                google_ad_slot = "5905651865";
                google_ad_width = 125;
                google_ad_height = 125;
                //-->
            </script>
            <script type="text/javascript" src="//pagead2.googlesyndication.com/pagead/show_ads.js"></script>
        </div>
        <div style="position: absolute; left: 0; bottom: 0; padding: 5px 0px">
            <a href="https://soundcloud.com/djsnake-king/dj-snake-lil-jon-turn-down-for" target="_blank" style="padding: 5px; background: white; font-size: 18px"><b>Song on SoundCloud</b></a>
        </div>
        <script type="text/javascript">
            var soundcloud;
            SC.oEmbed("https://soundcloud.com/djsnake-king/dj-snake-lil-jon-turn-down-for", {auto_play: true}, function(oembed) {
                if(oembed) {
                    $("#soundcloud").html(oembed.html);
                    var frame = $("#soundcloud iframe")[0];
                    frame.onload = function() {
                        window.player = SC.Widget(frame).bind(SC.Widget.Events.FINISH, function () {
                            window.player.skip(0).seekTo(0);
                            window.player.play();
                        });
                    }
                }
            });

            var images = {};
            var sources = {
                'doge':        'http://media.giphy.com/media/MWDsImejYsyis/giphy.gif',
                'fireworks':   'http://media.giphy.com/media/LjIn8IjwFcbwA/giphy.gif',
                'spiderman':   'http://media.giphy.com/media/bVfE9AGsqo98c/giphy.gif',
                'archer':      'http://media.giphy.com/media/aWB56UhMhvqpO/giphy.gif',
                'simpsons':    'http://media.giphy.com/media/130HITF1ekbUhq/giphy.gif',
                'fry':         'http://media.giphy.com/media/rUs7L7BeFxBIY/giphy.gif',
                'corgi':       'http://media.giphy.com/media/HUfTNG6lOZNK/giphy.gif',
                'bounce':      'http://media.giphy.com/media/aR0nY5Imqkr7y/giphy.gif',
                'buttslap':    'http://media.giphy.com/media/r7WbZwvlJeocU/giphy.gif',
                'honeybooboo': 'http://media.giphy.com/media/UUYMrnOTyeWOI/giphy.gif',
                'cleveland':   'http://media.giphy.com/media/fIRlp168XuC6Q/giphy.gif',
                'goose':       'http://media.giphy.com/media/b9QBHfcNpvqDK/giphy.gif',
                'catbed':      'http://media.giphy.com/media/QrK0u2Li8IMUg/giphy.gif',
                'catyard':     'http://media.giphy.com/media/fyHv5syNZTpFS/giphy.gif',
                'rocko':       'http://media.giphy.com/media/12LE7NClxdJ9m0/giphy.gif',
                'penguin':     'http://media.giphy.com/media/lmr7ac1Gn4kmc/giphy.gif',
                'bambi':       'http://media.giphy.com/media/uUUaqBhyava6Y/giphy.gif',
                'inflatable':  'http://i.imgur.com/66JjRPY.gif',
                'flanders':    'http://www.reactiongifs.com/wp-content/uploads/2013/12/pxmEA.gif',
                'squidward':   'http://www.reactiongifs.com/wp-content/uploads/2012/11/squidward_twerkin.gif',
                'lazytown':    'http://i382.photobucket.com/albums/oo268/korn_fagg/lazytown.gif',
            };

            var changeBackground = function(key) {
                if (!sources.hasOwnProperty(key)) {
                    key = "";
                }

                var next = key;

                if (next == "") {
                    var idx = Math.floor(Math.random() * Object.keys(sources).length);
                    next = Object.keys(sources)[idx];
                }

                var url = sources[next];
                var nextFunc = function() { changeBackground(key); }
                var timeout = 10000;

                if (!images.hasOwnProperty(url)) {
                    var img = new Image();
                    img.onload = function() {
                        images[this.id] = this;
                        $('html').css('background-image', "url('" + url + "')");
                        setTimeout(nextFunc, timeout);
                    }
                    img.src = url;
                    images[url] = new Image(url);
                } else {
                    $('html').css('background-image', "url('" + url + "')");
                    setTimeout(nextFunc, timeout);
                }
            }

            changeBackground(window.location.hash.substring(1));
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-50399393-1', 'turndownforbutt.com');
            ga('send', 'pageview');
        </script>
    </body>
</html>
