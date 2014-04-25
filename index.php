<!DOCTYPE html>
<html>
    <head>
        <title>TURN DOWN FOR BUTT</title>
        <style>
            html {
                background-image: url('http://media.giphy.com/media/MWDsImejYsyis/giphy.gif');
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
        <script src="https://www.youtube.com/iframe_api"></script>
    </head>
    <body>
        <div id="youtube" style="display: none"></div>
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
        <script type="text/javascript">
            var youtube;

            function onYouTubeIframeAPIReady() {
                youtube = new YT.Player('youtube', {
                    height: '200',
                    width: '200',
                    videoId: 'HMUDVMiITOU',
                    playerVars: {
                        'autoplay': 1,
                        'loop' : 1
                    },
                    events: {
                        'onReady': function (event) {},
                        'onStateChange': function (state) {
                            if(state.data == 0){
                                youtube.playVideo();
                            }
                        },
                        'onError': function (event) {}
                    }
                });
            }

            var images = {};
            var sources = [
                'MWDsImejYsyis',
                'LjIn8IjwFcbwA',
                'bVfE9AGsqo98c',
                'aWB56UhMhvqpO',
                '130HITF1ekbUhq',
                'rUs7L7BeFxBIY',
                'HUfTNG6lOZNK',
                'aR0nY5Imqkr7y',
                'r7WbZwvlJeocU',
                'UUYMrnOTyeWOI',
                'fIRlp168XuC6Q',
                'b9QBHfcNpvqDK',
                'QrK0u2Li8IMUg',
                'fyHv5syNZTpFS',
                '12LE7NClxdJ9m0',
                'lmr7ac1Gn4kmc',
                'uUUaqBhyava6Y',
            ];

            var giphy = function(id) {
                return 'http://media.giphy.com/media/' + id + '/giphy.gif';
            }

            var changeBackground = function() {
                var next = Math.floor(Math.random() * sources.length);
                var hash = sources[next];
                var url = giphy(hash);

                if (!images.hasOwnProperty(hash)) {
                    var img = new Image();
                    img.id = hash;
                    img.onload = function() {
                        images[this.id] = this;
                        $('html').css('background-image', "url('" + url + "')");
                        setTimeout(changeBackground, 10000);
                    }
                    img.src = url;
                    images[hash] = new Image(url);
                } else {
                    $('html').css('background-image', "url('" + url + "')");
                    setTimeout(changeBackground, 10000);
                }
            }

            $(document).ready(function() {
                setTimeout(changeBackground, 10000);
            });
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
