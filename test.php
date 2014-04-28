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
        <script src="https://raw.githubusercontent.com/douglascrockford/JSON-js/master/json.js"></script>
    </head>
    <body>
        <div id="soundcloud"></div>
        <div id="debug" style="background: white; color: red"></div>
        <div style="position: absolute; left: 0; bottom: 0; padding: 5px 0px">
            <a href="https://soundcloud.com/djsnake-king/dj-snake-lil-jon-turn-down-for" target="_blank" style="padding: 5px; background: white; font-size: 18px"><b>Song on SoundCloud</b></a>
        </div>
        <script type="text/javascript">
            var playTrack = function() {
                window.player.skip(0).seekTo(0);
                window.player.play();
            }

            SC.oEmbed("https://soundcloud.com/djsnake-king/dj-snake-lil-jon-turn-down-for", function(oembed) {
                if(oembed) {
                    $('#debug').text(JSON.stringify(oembed));
                    $("#soundcloud").html(oembed.html);
                    var frame = $("#soundcloud iframe")[0];
                    frame.onload = function() {
                        window.player = SC.Widget(frame);
                        window.player.bind(SC.Widget.Events.READY, window.player.play);
                        window.player.bind(SC.Widget.Events.FINISH, function () {
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
    </body>
</html>
