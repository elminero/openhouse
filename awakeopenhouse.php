<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Self-Realization Fellowship San Diego Temple. Open House on June 26, 2016. Learn
                the techniques of meditation and Kriya Yoga teachings of Paramahansa Yogananda">
    <meta name="author" content="Robert Ian Farber">
    <meta name="robots" content="index follow">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>San Diego Temple Open House - Awake</title>
</head>
<body>
<div class="container" >
    <div class="row">
        <img class="img-responsive center-block" src="images/srfsdtheader_1000.png" >
        <nav class="navbar navbar-default">
            <div class="navbar-header ">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="navbar-brand"><a href="https://www.yogananda-srf.org/">Self-Realization Fellowship</a></span>
                    <span class="navbar-brand"><a href="http://www.sandiegotemple.org/">San Diego Temple</a></span>
                </div>
                <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right ">
                    <li class="active"><a href="awakeopenhouse.php">Open House</a></li>
                    <li class=""><a href="awakeopenhouse.php#location">Map</a></li>
                    <li class=""><a href="awakeopenhouse.php?#parking">Parking</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-4 center">
            <h1 class="h1titleblue"><span class="capdrop">O</span>PEN <span class="capdrop">H</span>OUSE</h1>
            <h2>In conjunction with the<br />United Nations International<br />Day of Yoga</h2>
            <h2 class="h2blue center">
                Sunday<br/>
                June 26, 2016<br/>
                11:00 a.m. to 2:30 p.m.
            </h2>
            <hr/>
            <h2>3068 1st Avenue<br /> San Diego, California 92103</h2>
            <hr />
            <h2 class="h2titleblue italic">All Are Welcome</h2>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 ">
            <img class="img-responsive center-block" src="images/awakeyoga_crop496.png" >
            <h5 class="center">Paramahansa Yogananda author of Autobiography of a Yogi</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <img class="img-responsive" src="images/sdtemple_crop2.png" />
        </div>
        <div class="col-lg-8">
            <h2>Free Admission Includes</h2>
            <ul class="program">
                <li>Learn the techniques of meditation and the Kriya Yoga teachings of Paramahansa Yogananda.</li>
                <li>Enjoy light refreshments with like minded individuals.</li>
                <li>Watch the award-winning 90-minute inspirational film, AWAKE: The Life of Yogananda.</li>
                <li>Take part in a prayer service for world peace.</li>
            </ul>
        </div>
    </div>
        <div>
            <h2>Open House Schedule</h2>
            <ul class="program" style="list-style-type: none;">
                <li>11:00 Welcome, lecture, and guided meditation</li>
                <li>12:00 Informal reception with refreshments, followed by a showing of the film, AWAKE</li>
                <li>&nbsp;&nbsp;2:00 End of program</li>
            </ul>
        <h2 style="display: inline;" id="location">Map</h2><a style="float: right" href="awakeopenhouse.php">back up top</a>
        <div class="map_container">
            <div id="map" class="map_canvas"></div>
        </div>
        <script>
            function initMap() {
                var myOptions = {zoom:17,center:new google.maps.LatLng(32.73746151088803,-117.16424223439331),mapTypeId: google.maps.MapTypeId.HYBRID};
                map = new google.maps.Map(document.getElementById('map'), myOptions);
                marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(32.73746151088803,-117.16424223439331)});
                infowindow = new google.maps.InfoWindow({content:'<strong>Self-Realization Fellowship Temple San Diego</strong><br>3068 1st Avenue San Diego, California 92103<br>'});
                google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
                async defer></script>
        <h2 style="float: left" id="parking">Parking</h2><a style="float: right; margin-top: 15px;" href="awakeopenhouse.php">back up top</a>
            <div style="clear: both"></div>
        <div>
            <ul class="program">
                <li>Parking is available at the temple in the main lot.</li>
                <li>You may also find street parking on 1st Ave.</li>
                <li>Additional parking can be found behind the temple on Front St.  See photo for details.</li>
            </ul>
            <img class="img-responsive center-block" src="images/additionalparking_min.png" />
        </div>
    </div>
    <h2 class="h2titleblue italic center">All Are Welcome</h2>
    <p class="center">
        For more information:<br/>
        <a href="http://www.sandiegotemple.org/">www.SanDiegoTemple.org</a> <br />or call 619-295-0170
    </p>
<div class="row">
    <img class="img-responsive" src="images/footer.png" width="969px" >
</div>
</div><!-- content container -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>