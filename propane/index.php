<!DOCTYPE html>
<html>
    <head>
        <title>TURN DOWN FOR BUTT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <style>
            html {
                background-image: url('https://i4.sndcdn.com/artworks-000071536084-wwdmb2-t500x500.jpg');
                background-repeat: repeat;
                overflow: hidden;
            }
            html.full {
                background-position: center;
                background-attachment: fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://connect.soundcloud.com/sdk.js"></script>
        <script src="http://w.soundcloud.com/player/api.js"></script>
    </head>
    <body>
        <a href="https://github.com/shaunduncan/turndownforbutt" target="_blank">
            <img style="position: absolute; top: 0; right: 0; border: 0;"
                src="https://camo.githubusercontent.com/a6677b08c955af8400f44c6298f40e7d19cc5b2d/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677261795f3664366436642e706e67"
                alt="Fork me on GitHub"
                data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png">
        </a>
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
            <a href="https://soundcloud.com/tmfc666/dj-snake-turn-down-for-what-mo" target="_blank" style="padding: 5px; background: white; font-size: 18px"><b>Song on SoundCloud</b></a>
        </div>
        <script type="text/javascript">
            var soundcloud;
            SC.oEmbed("https://soundcloud.com/tmfc666/dj-snake-turn-down-for-what-mo", {auto_play: true}, function(oembed) {
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

            $(document).ready(function() {
                setInterval("$('html').toggleClass('full')", 1000);
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
