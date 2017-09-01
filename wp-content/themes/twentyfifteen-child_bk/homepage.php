<?php
/**
 * Template Name: Home Page
*/
?>

<!DOCTYPE html>
<html>
<head>
<?php wp_head();  ?>
    
   
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-46641860-13', 'auto');
            ga('send', 'pageview');
    </script>   
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!--<script async="" src="<?php //echo get_stylesheet_directory_uri(); ?>/1673350732916943"></script>-->
    <script src="<?php echo  get_stylesheet_directory_uri();  ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo  get_stylesheet_directory_uri();  ?>/clockpicker-gh-pages/dist/jquery-clockpicker.js"></script>
    <script src="<?php echo  get_stylesheet_directory_uri();  ?>/js/datapicker/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" type="text/css" class="__meteor-css__" href="<?php echo get_stylesheet_directory_uri(); ?>/7d3a13dd59a6822481b90a5caf6f065423a815c5.css">
    <!-- Bootstrap -->
    <link href="<?php echo  get_stylesheet_directory_uri();  ?>/css/map/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo  get_stylesheet_directory_uri();  ?>/css/map/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo  get_stylesheet_directory_uri();  ?>/css/map/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo  get_stylesheet_directory_uri();  ?>/css/map/responsive.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    
    
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Knotel - Headquarters as a Service</title>
    <meta name="google-site-verification" content="xQNTNIX4ym2k1Rxk_P65bk1J6YriGf27nt-x19XpKIs">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts.css">

    <link rel="apple-touch-icon" sizes="57x57" href="https://knotel.com/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://knotel.com/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://knotel.com/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://knotel.com/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://knotel.com/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://knotel.com/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://knotel.com/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://knotel.com/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://knotel.com/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://knotel.com/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://knotel.com/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://knotel.com/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://knotel.com/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://knotel.com/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="The next level in company-sized workspace for companies up to 200 people.">
    <meta property="og:title" content="Knotel">
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://d1g17mzu1m6f7h.cloudfront.net/static-assets/b3d1ef348353_background-6.jpg">
    <meta property="og:description" content="The next level in company-sized workspace for companies up to 200 people.">
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyBUZRmPI23_wHQV2nJKqaFsYKpHpsVAKoQ"></script>
    
     <script type="text/javascript">

        var map;
        var markers = [];
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);
            <?php 
                $retrieve_data = $wpdb->get_row("SELECT * FROM `wp_mapsettings` limit 1" );
                $zoom = (!empty($retrieve_data))? $retrieve_data->zoom : 12;
                $lat =  (!empty($retrieve_data))? $retrieve_data->lat : 40.678178;
                $lag =  (!empty($retrieve_data))? $retrieve_data->lag : -73.944158;
            ?>
                
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: <?php echo $zoom; ?>,
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                        position: google.maps.ControlPosition.TOP_LEFT
                    },
                    scrollwheel: false,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(<?php echo $lat; ?>,<?php echo $lag; ?> ), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles:  [{
                        "featureType": "administrative",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }, {
                            "hue": "#0066ff"
                        }, {
                            "saturation": 74
                        }, {
                            "lightness": 100
                        }]

                    }, {
                        "featureType": "poi",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "road",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },

                    {
                        "featureType": "all",
                        "elementType": "labels.text",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }, {
                            "weight": 0.6
                        }, {
                            "saturation": -85
                        }, {
                            "lightness": 61
                        }]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "road.local",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "on"
                        }]
                    }, {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    }, {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "visibility": "simplified"
                        }, {
                            "color": "#5A92BF"
                        }, {
                            "lightness": 26
                        }, {
                            "gamma": 5.86
                        }]
                    }
                ]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                map = new google.maps.Map(mapElement, mapOptions);
                var infowindow = new google.maps.InfoWindow();
                var marker, i;
                var locations = [];
                <?php
                 $retrieve_data = $wpdb->get_results( "SELECT * FROM wp_markers" );
                 if(!empty($retrieve_data)){ 
                    foreach ($retrieve_data as $key => $value) {
                        if (!preg_match("~^(?:f|ht)tps?://~i", $value->link)) {
                            $value->link = "http://" . $value->link;
                        }
                            ?>
                            var lcatn  = ['<?php echo $value->address;?><br><br> <u>Click for more info</u> ',<?php echo $value->lat; ?>, <?php echo $value->lng; ?>,<?php echo $key ?>,'<?php echo 'http://18.220.39.115/'.$value->url_link; ?>' ,];
                            locations.push(lcatn);
                            <?php 
                        }
                    } ?>
                for (i = 0; i < locations.length; i++) {
                  
                    marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    label: '',
                    icon: '<?php echo get_stylesheet_directory_uri()."/images/arrow-small.png"; ?>',
                    url: locations[i][4]
                  });
                     // this.setIcon('http://www.christielakekids.com/_images/map_pins/events/canoe-for-kids.png');
                    google.maps.event.addListener(marker, 'click', function() {
                        window.location.href = this.url;
                    });
                 google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
                    return function() {
                      infowindow.setContent(locations[i][0]);
                      infowindow.open(map, marker);
                     this.setIcon('<?php echo get_stylesheet_directory_uri()."/images/arrow-big.png"; ?>');
                    }
                  })(marker, i));
                  
                  google.maps.event.addListener(marker, 'mouseout', (function(marker, i) {
                    return function() {
                      infowindow.close(map, marker);
                      this.setIcon('<?php echo get_stylesheet_directory_uri()."/images/arrow-small.png"; ?>');
                    }
                  })(marker, i));
                  markers.push(marker);
                }
                
                $(document).on('mouseover','div.mapsMarkets', function(){
                    var lat = $(this).attr('lat');
                    var logi = $(this).attr('lng');    
                    var id = parseInt($(this).attr('mapsmarkets'));
                    google.maps.event.trigger(markers[id], 'mouseover');
                    var center = new google.maps.LatLng(lat, logi);
                    map.panTo(center);                
                });
                
                $(document).on('mouseout','div.mapsMarkets', function(){
                    var id = parseInt($(this).attr('mapsmarkets'));
                    google.maps.event.trigger(markers[id], 'mouseout');
                });
                
                
                
                $(document).on('click','.panel-titleMAp', function(){                
                    var lat = $(this).attr('lat');
                    var logi = $(this).attr('logi');
                    var center = new google.maps.LatLng(lat, logi);
                    map.panTo(center);
                });
            }
             
         
            
            
            
        </script>

            <style type="text/css">
                .collapse.in .row.aa {
                    display: block;
                    height: 250px;
                    overflow-x: hidden;
                    overflow-y: scroll;
                    position: relative;
                  }
                .map-responsive {
                    height: 100% !important;
                  }
                #accordion {
                    border-top: 1px solid #e0c5a4;
                  }
                .mapsMarkets{
                    cursor:pointer;
                }
                
                .locationMap {
                    border-bottom: 1px solid #cecece;
                    margin-bottom: 22px;
                  }
                  
                  .locationMap:last-child {
                    border: 0px solid;
                  }

                  .locationMap:first-child {
                    border: 0px solid;
                  }
                  /* Set a size for our map container, the Google Map will take up 100% of this container */
            #map {
                
                width: 100%;
            }
        </style>
    <style type="text/css">
.SlideDivUp {
  display: none;
}
.rmq-fe6607cb:hover {
  box-shadow: 0px 0px 15px #000 !important;
}
.rmq-7b67cde4 {
  line-height: 30px;
  margin-bottom: 18px;
}


        .Button__root___1gz0c {
            display: inline-block;
            margin: 0 5px 0 0;
            padding: 3px 8px;
            height: 30px;
            line-height: 22px;
            box-sizing: border-box;
            background: none #fdfdfd;
            background: linear-gradient(180deg, #fdfdfd 0, #f6f7f8);
            border: 1px solid #999;
            border-radius: 2px;
            color: #333;
            text-decoration: none;
            font-size: inherit;
            font-family: inherit;
            cursor: pointer;
            white-space: nowrap
        }
        
        .Button__root___1gz0c:disabled {
            cursor: not-allowed;
            background: none transparent
        }
        
        .Button__root___1gz0c:disabled>* {
            opacity: .5
        }
    </style>
    <style type="text/css">
        .ButtonWrap__root___1EO_R {
            display: inline-block;
            position: relative;
            z-index: 10
        }
    </style>
    <style type="text/css">
        .IconButton__root___3tqZW {
            padding-left: 3px;
            padding-right: 3px
        }
        
        .IconButton__icon___3YgOS {
            display: inline-block;
            width: 22px;
            height: 22px;
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: 18px
        }
        
        .IconButton__isActive___2Ey8p {
            background: none #d8d8d8
        }
        
        .IconButton__icon-undo___EQSRP {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTcuODU2IDI0YzIuNjY1LTQuODMgMy4xMTUtMTIuMTk1LTcuMzU2LTExLjk1VjE4bC05LTkgOS05djUuODJDMjMuMDM4IDUuNDk1IDI0LjQzNSAxNi44OSAxNy44NTYgMjR6Ii8+PC9zdmc+");
            background-size: 14px
        }
        
        .IconButton__icon-redo___30MVz {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTMuNSA1LjgyVjBsOSA5LTkgOXYtNS45NUMzLjAzIDExLjgwNiAzLjQ3OCAxOS4xNyA2LjE0NCAyNC0uNDM2IDE2Ljg5Ljk2MiA1LjQ5NCAxMy41IDUuODJ6Ii8+PC9zdmc+");
            background-size: 14px
        }
        
        .IconButton__icon-unordered-list-item___Pvkrr {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNNC42NTYgMy4zNDRIMTR2MS4zMTNINC42NTZWMy4zNDR6bTAgNS4zMTJWNy4zNDNIMTR2MS4zMTNINC42NTZ6bTAgNHYtMS4zMTNIMTR2MS4zMTNINC42NTZ6bS0yLTEuNTNxLjM3NSAwIC42NC4yNXQuMjY3LjYyNC0uMjY2LjYyNS0uNjQuMjUtLjYyNi0uMjVUMS43OCAxMnQuMjUtLjYyNS42MjYtLjI1em0wLTguMTI2cS40MDYgMCAuNzAzLjI4dC4yOTYuNzItLjI5Ny43Mi0uNzA0LjI4LS43MDMtLjI4VDEuNjU2IDR0LjI5Ny0uNzIuNzAzLS4yOHptMCA0cS40MDYgMCAuNzAzLjI4dC4yOTYuNzItLjI5Ny43Mi0uNzA0LjI4LS43MDMtLjI4VDEuNjU2IDh0LjI5Ny0uNzIuNzAzLS4yOHoiLz48L3N2Zz4=")
        }
        
        .IconButton__icon-ordered-list-item___2rzD0 {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNNC42NTYgOC42NTZWNy4zNDNIMTR2MS4zMTNINC42NTZ6bTAgNHYtMS4zMTNIMTR2MS4zMTNINC42NTZ6bTAtOS4zMTJIMTR2MS4zMTNINC42NTZWMy4zNDR6bS0zLjMxMiA0di0uNjg4aDJ2LjYyNWwtMS4yMiAxLjM3NmgxLjIydi42ODhoLTJWOC43MmwxLjE4OC0xLjM3NkgxLjM0NHptLjY1Ni0ydi0yaC0uNjU2di0uNjg4aDEuMzEzdjIuNjg4SDJ6bS0uNjU2IDZ2LS42ODhoMnYyLjY4OGgtMnYtLjY4OGgxLjMxM3YtLjMxM0gydi0uNjg4aC42NTd2LS4zMTNIMS4zNDR6Ii8+PC9zdmc+")
        }
        
        .IconButton__icon-blockquote___17VSX {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOS4zNDQgMTEuMzQ0bDEuMzEzLTIuNjg4aC0ydi00aDR2NGwtMS4zMTMgMi42ODhoLTJ6bS01LjM0NCAwbDEuMzQ0LTIuNjg4aC0ydi00aDR2NEw2IDExLjM0NEg0eiIvPjwvc3ZnPg==")
        }
        
        .IconButton__icon-bold___2zl9t {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNOSAxMC4zNDRxLjQzOCAwIC43Mi0uMjk3dC4yOC0uNzAzLS4yOC0uNzAzVDkgOC4zNDVINi42NTZ2Mkg5em0tMi4zNDQtNnYyaDJxLjQwNiAwIC43MDMtLjI5N3QuMjk2LS43MDMtLjI5Ny0uNzAzLS43MDQtLjI5NmgtMnptMy43NSAyLjg0NHExLjQzOC42NTYgMS40MzggMi4yOCAwIDEuMDY0LS43MDMgMS43OThUOS4zNzYgMTJoLTQuNzJWMi42NTZoNC4xOXExLjEyNCAwIDEuODkuNzh0Ljc2NiAxLjkwNy0xLjA5MyAxLjg0NHoiLz48L3N2Zz4=")
        }
        
        .IconButton__icon-italic___2hHzc {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNNi42NTYgMi42NTZIMTJ2MmgtMS44NzVMNy44NzUgMTBoMS40N3YySDR2LTJoMS44NzVsMi4yNS01LjM0NGgtMS40N3YtMnoiLz48L3N2Zz4=")
        }
        
        .IconButton__icon-underline___2EmZJ {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgdmlld0JveD0iMCAwIDE2IDE2Ij48cGF0aCBkPSJNMy4zNDQgMTIuNjU2aDkuMzEzVjE0SDMuMzQ0di0xLjM0NHpNOCAxMS4zNDRxLTEuNjU2IDAtMi44MjgtMS4xNzJUNCA3LjM0NFYyaDEuNjU2djUuMzQ0cTAgLjk3LjY4OCAxLjY0VDggOS42NTh0MS42NTYtLjY3Mi42ODgtMS42NFYySDEydjUuMzQ0UTEyIDkgMTAuODI4IDEwLjE3MlQ4IDExLjM0NHoiLz48L3N2Zz4=")
        }
        
        .IconButton__icon-strikethrough___QtE2X {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMjMuNTcgMTJxLjE5IDAgLjMxLjEydC4xMi4zMXYuODU2cTAgLjE4OC0uMTIuMzA4dC0uMzEuMTJILjQzcS0uMTg4IDAtLjMwOC0uMTJUMCAxMy4yODZ2LS44NTdxMC0uMTkuMTItLjMxVC40MjggMTJIMjMuNTd6bS0xNy4xLS44NTdxLS4zNzYtLjQ3LS42ODQtMS4wNy0uNjQzLTEuMy0uNjQzLTIuNTIgMC0yLjQyMyAxLjc5NS00LjEzNyAxLjc4LTEuNyA1LjI2My0xLjcuNjcgMCAyLjIzOC4yNTMuODg0LjE2IDIuMzcuNjQyLjEzNS41MS4yODIgMS41OC4xODggMS42NDcuMTg4IDIuNDUgMCAuMjQyLS4wNjcuNjA0bC0uMTYuMDQtMS4xMjUtLjA4LS4xODgtLjAyN3EtLjY3LTEuOTk3LTEuMzgtMi43NDctMS4xNzgtMS4yMi0yLjgxMi0xLjIyLTEuNTI3IDAtMi40MzguNzktLjg5Ny43NzgtLjg5NyAxLjk1NiAwIC45NzcuODg0IDEuODc0dDMuNzM3IDEuNzI4cS45MjUuMjY4IDIuMzE4Ljg4NC43NzcuMzc1IDEuMjcyLjY5Nkg2LjQ3em02Ljc5IDMuNDI4aDUuNTAzcS4wOTQuNTIzLjA5NCAxLjIzMyAwIDEuNDg3LS41NSAyLjg0LS4zMDcuNzM2LS45NSAxLjM5Mi0uNDk2LjQ3LTEuNDYgMS4wODUtMS4wNy42NDMtMi4wNS44ODQtMS4wNy4yOC0yLjcxOC4yOC0xLjUyOCAwLTIuNjEzLS4zMDdsLTEuODc1LS41MzZxLS43NjMtLjIxMy0uOTY0LS4zNzQtLjEwNy0uMTA3LS4xMDctLjI5NXYtLjE3M3EwLTEuNDQ2LS4wMjYtMi4wOS0uMDEzLS40IDAtLjkxbC4wMjctLjQ5NnYtLjU4OGwxLjM2Ny0uMDI3cS4yLjQ1NS40MDIuOTV0LjMuNzUuMTY3LjM2M3EuNDcuNzYzIDEuMDcgMS4yNi41NzcuNDggMS40MDcuNzYyLjc5LjI5NSAxLjc2OC4yOTUuODU3IDAgMS44NjItLjM2MiAxLjAzLS4zNDggMS42MzQtMS4xNTIuNjMtLjgxNi42My0xLjcyNyAwLTEuMTI1LTEuMDg2LTIuMTAzLS40NTUtLjM4OC0xLjgzNS0uOTV6Ii8+PC9zdmc+");
            background-size: 14px
        }
        
        .IconButton__icon-code___3F1pe {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTE2IDExNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEuNDE0Ij48ZyBmaWxsLXJ1bGU9Im5vbnplcm8iPjxwYXRoIGQ9Ik0yMi40NjQgMjguNDhjMCAyLjg5NS4zNDQgNS45MDUuODA2IDkuMDIuMzQyIDMuMDEuNjkgNi4wMi42OSA4LjkxNyAwIDMuNTYyLS45MTcgNy43OS04Ljk1NSA3LjkxMnY3LjIzNmM4LjAzNi4xMTUgOC45NTYgNC42NzIgOC45NTYgNy45MTIgMCAyLjg4Ni0uMzQ4IDUuNzgzLS42OSA4Ljc4Ny0uNDYyIDMuMDEzLS44MDYgNi4xMzQtLjgwNiA4LjkyIDAgMTEuMjM4IDcuMTA2IDE1LjI1MiAxNy4wODcgMTUuMjUyaDMuMzJ2LTcuOTEyaC0yLjA2MmMtNS43MjYgMC04LjAyNS0zLjIzMy04LjAyNS04Ljc5NiAwLTIuMjM2LjM0NC00LjU3LjgwNi03LjAyMy4yMjctMi40MzguNjg0LTUuMTIuNjg0LTguMTIuMTE1LTcuNzkyLTMuMzItMTEuMjUzLTkuMTc0LTEyLjU4NnYtLjIyNWM1Ljg1NC0xLjMzMiA5LjI5My00LjY3NiA5LjE3LTEyLjQ3IDAtMi44OTUtLjQ1Ny01LjU2NS0uNjg0LTguMDI0LS40NjItMi40NC0uODA3LTQuNzc3LS44MDctNy4wMTIgMC01LjQ1IDIuMDU4LTguNjg4IDguMDI0LTguNjg4aDIuMDY2di04LjAxNGgtMy4zMmMtMTAuMjA1LS4wMDMtMTcuMDg2IDQuNDQ0LTE3LjA4NiAxNC45MTV6TTkyLjA2IDQ2LjQxN2MwLTIuODkzLjQ1My01LjkwMy44MDMtOC45MTguMzQzLTMuMTE0Ljc5Ny02LjEyLjc5Ny05LjAyIDAtMTAuNDctNi44NzUtMTQuOTE3LTE3LjA4LTE0LjkxN2gtMy4zMjd2OC4wMTdoMi4wNmM1Ljg1Mi4xMTQgNy45MSAzLjIzMyA3LjkxIDguNjg4IDAgMi4yMy0uMzQyIDQuNTY1LS42ODUgNy4wMTItLjM1IDIuNDU1LS42OTIgNS4xMjYtLjY5MiA4LjAyNC0uMTA1IDcuNzk3IDMuMzI3IDExLjEzNiA5LjA1NiAxMi40N3YuMjIyYy01LjcyIDEuMzMzLTkuMTYgNC43OTYtOS4wNTYgMTIuNTg3IDAgMyAuMzQyIDUuNjg2LjY5MiA4LjEyLjM0MyAyLjQ1NS42ODYgNC43OS42ODYgNy4wMjUgMCA1LjU1NC0yLjE4IDguNjgtNy45MTIgOC43ODhoLTIuMDZ2Ny45MTJoMy4zMjVjOS45NzUgMCAxNy4wNzYtNC4wMSAxNy4wNzYtMTUuMjUgMC0yLjc4My0uNDU0LTUuOS0uNzk2LTguOTE0LS4zNDctMy4wMS0uODA1LTUuOS0uODA1LTguNzk1IDAtMy4yMzMgMS4wMzUtNy43OSA4Ljk0My03LjkxM1Y1NC4zMmMtNy45MDQtLjExMi04LjkzNS00LjM0LTguOTM1LTcuOTAzeiIvPjwvZz48L3N2Zz4=")
        }
        
        .IconButton__icon-link___2umEl {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMiIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDIyIDI0Ij48cGF0aCBkPSJNMTkuNSAxNi4yODZxMC0uNTM2LS4zNzUtLjkxbC0yLjc4Ni0yLjc4N3EtLjM3Ni0uMzc2LS45MTItLjM3Ni0uNTYzIDAtLjk2NC40M2wuMjU0LjI0N3EuMjE0LjIwOC4yODguMjl0LjIuMjUzLjE3NS4zNDIuMDQ4LjM2OHEwIC41MzYtLjM3NS45MXQtLjkxLjM3NnEtLjIwMiAwLS4zNy0uMDQ4dC0uMzQtLjE3NC0uMjU1LS4yLS4yODgtLjI5LS4yNDgtLjI1M3EtLjQ0Mi40MTUtLjQ0Mi45NzggMCAuNTM2LjM3NS45MWwyLjc2IDIuNzczcS4zNi4zNjIuOTEuMzYyLjUzNiAwIC45MS0uMzQ4bDEuOTctMS45NTVxLjM3NS0uMzc1LjM3NS0uODk3em0tOS40MTUtOS40NDJxMC0uNTM2LS4zNzUtLjkxTDYuOTUgMy4xNnEtLjM3NC0uMzc0LS45MS0uMzc0LS41MjIgMC0uOTEuMzYyTDMuMTYgNS4xMDNxLS4zNzUuMzc1LS4zNzUuODk3IDAgLjUzNi4zNzUuOTFsMi43ODYgMi43ODdxLjM2Mi4zNjIuOTEuMzYyLjU2NCAwIC45NjUtLjQxNmwtLjI1My0uMjQ4cS0uMjEzLS4yMDgtLjI4OC0uMjg4dC0uMjAyLS4yNTQtLjE3NC0uMzQyLS4wNDctLjM2OHEwLS41MzYuMzc1LS45MXQuOTEtLjM3NnEuMjAyIDAgLjM3LjA0N3QuMzQuMTc0LjI1NS4yLjI4OC4yODguMjQ4LjI1NHEuNDQyLS40MTUuNDQyLS45Nzh6bTExLjk4NiA5LjQ0MnEwIDEuNjA3LTEuMTM3IDIuNzJsLTEuOTcgMS45NTRxLTEuMTEgMS4xMTItMi43MTggMS4xMTItMS42MiAwLTIuNzMyLTEuMTM4bC0yLjc2LTIuNzcycS0xLjExLTEuMTEyLTEuMTEtMi43MiAwLTEuNjQ2IDEuMTc4LTIuNzk4bC0xLjE3OC0xLjE4cS0xLjE1MiAxLjE4LTIuNzg2IDEuMTgtMS42MDcgMC0yLjczMi0xLjEyNUwxLjMzOCA4LjczMlEuMjEzIDcuNjA4LjIxMyA2VDEuMzUgMy4yODNsMS45Ny0xLjk1NVE0LjQzMi4yMTUgNi4wNC4yMTVxMS42MiAwIDIuNzMgMS4xMzhsMi43NiAyLjc3MnExLjExMiAxLjExMiAxLjExMiAyLjcyIDAgMS42NDYtMS4xOCAyLjc5OGwxLjE4IDEuMThxMS4xNTItMS4xOCAyLjc4Ni0xLjE4IDEuNjA3IDAgMi43MzIgMS4xMjVsMi43ODYgMi43ODZxMS4xMjUgMS4xMjUgMS4xMjUgMi43MzJ6Ii8+PC9zdmc+");
            background-size: 14px
        }
        
        .IconButton__icon-remove-link___j61pw {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMiIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDIyIDI0Ij48cGF0aCBkPSJNNS44OCAxNy4wMjJsLTMuNDMgMy40M3EtLjEzNC4xMi0uMzA4LjEyLS4xNiAwLS4zMDgtLjEyLS4xMi0uMTM1LS4xMi0uMzF0LjEyLS4zMDdsMy40My0zLjQzcS4xMzMtLjEyLjMwNy0uMTJ0LjMxLjEycS4xMi4xMzUuMTIuMzF0LS4xMi4zMDd6bTIuMjYzLjU1djQuMjg1cTAgLjE4OC0uMTIuMzA4dC0uMzEuMTItLjMwNy0uMTItLjEyLS4zMDhWMTcuNTdxMC0uMTg3LjEyLS4zMDd0LjMwOC0uMTIuMzA4LjEyLjEyLjMwOHptLTMtM3EwIC4xODctLjEyLjMwN3QtLjMxLjEySC40M3EtLjE4OCAwLS4zMDgtLjEyVDAgMTQuNTd0LjEyLS4zMDcuMzA4LS4xMmg0LjI4NnEuMTg4IDAgLjMwOC4xMnQuMTIuMzA4em0xNi45MjggMS43MTRxMCAxLjYwNy0xLjEzNyAyLjcybC0xLjk3IDEuOTU0cS0xLjExIDEuMTEyLTIuNzE4IDEuMTEyLTEuNjIgMC0yLjczMi0xLjEzOEw5LjA0IDE2LjQ0N3EtLjI4LS4yOC0uNTYzLS43NWwzLjItLjI0IDMuNjU3IDMuNjdxLjM2Mi4zNi45MS4zNjd0LjkxMi0uMzU1bDEuOTctMS45NTZxLjM3NC0uMzc1LjM3NC0uODk3IDAtLjUzNi0uMzc1LS45MWwtMy42Ny0zLjY4NC4yNC0zLjJxLjQ3LjI4Ljc1LjU2Mmw0LjUgNC41cTEuMTI2IDEuMTUyIDEuMTI2IDIuNzMyek0xMy44MSA2LjU5bC0zLjIuMjRMNi45NSAzLjE2cS0uMzc0LS4zNzUtLjkxLS4zNzUtLjUyMiAwLS45MS4zNjJMMy4xNiA1LjEwMnEtLjM3NS4zNzUtLjM3NS44OTcgMCAuNTM1LjM3NS45MWwzLjY3IDMuNjctLjI0IDMuMjE0cS0uNDctLjI4LS43NS0uNTYzbC00LjUtNC41US4yMTMgNy41OC4yMTMgNnEwLTEuNjA4IDEuMTM4LTIuNzJsMS45Ny0xLjk1NVE0LjQzLjIxMyA2LjA0LjIxM3ExLjYyIDAgMi43MzIgMS4xMzhsNC40NzMgNC40ODhxLjI4LjI4LjU2My43NXptOC40NzggMS4xMjRxMCAuMTg4LS4xMi4zMDh0LS4zMS4xMmgtNC4yODVxLS4xODcgMC0uMzA3LS4xMnQtLjEyLS4zMDguMTItLjMwOC4zMDgtLjEyaDQuMjg3cS4xODggMCAuMzA4LjEydC4xMi4zMDh6TTE1IC40M3Y0LjI4NXEwIC4xODgtLjEyLjMwOHQtLjMxLjEyLS4zMDctLjEyLS4xMi0uMzA4Vi40M3EwLS4xOS4xMi0uMzFUMTQuNTcgMHQuMzEuMTIuMTIuMzF6bTUuNDUgMi4wMmwtMy40MjggMy40M3EtLjE0Ny4xMi0uMzA4LjEydC0uMzA4LS4xMnEtLjEyLS4xMzQtLjEyLS4zMDh0LjEyLS4zMDhsMy40My0zLjQzcS4xMzMtLjEyLjMwNy0uMTJ0LjMwOC4xMnEuMTIyLjEzNS4xMjIuMzF0LS4xMi4zMDd6Ii8+PC9zdmc+");
            background-size: 14px
        }
        
        .IconButton__icon-image___1gW7U {
            background-image: url("data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTMzLjMzMyA1MzMuMzM0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MzMuMzMzIDUzMy4zMzQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNNDY2LjY2NywxMDBoLTQwMHYzMzMuMzMzaDQwMFYxMDB6IE01MzMuMzMzLDMzLjMzM0w1MzMuMzMzLDMzLjMzM1Y1MDBIMFYzMy4zMzNINTMzLjMzM3ogTTQzMy4zMzMsNDAwSDEwMHYtNjYuNjY3ICAgbDEwMC0xNjYuNjY3bDEzNi45NzksMTY2LjY2N2w5Ni4zNTQtNjYuNjY2VjMwMFY0MDB6IE0zMzMuMzMzLDE4My4zMzNjMCwyNy42MTQsMjIuMzg2LDUwLDUwLDUwczUwLTIyLjM4Niw1MC01MHMtMjIuMzg2LTUwLTUwLTUwICAgUzMzMy4zMzMsMTU1LjcxOSwzMzMuMzMzLDE4My4zMzN6IiBmaWxsPSIjMDAwMDAwIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==");
            background-size: 14px
        }
        
        .IconButton__icon-cancel___fx4TT {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMjMuNzggMTkuMjhMMTYuNSAxMmw3LjI4LTcuMjhhLjc0OC43NDggMCAwIDAgMC0xLjA2TDIwLjM0LjIxOGEuNzUuNzUgMCAwIDAtMS4wNi0uMDAyTDEyIDcuNDk4IDQuNzE3LjIyYS43NDguNzQ4IDAgMCAwLTEuMDYgMEwuMjE3IDMuNjZhLjc1Ljc1IDAgMCAwIDAgMS4wNkw3LjQ5NyAxMmwtNy4yOCA3LjI4YS43NDguNzQ4IDAgMCAwIDAgMS4wNmwzLjQ0IDMuNDRhLjc1Ljc1IDAgMCAwIDEuMDYuMDAybDcuMjgtNy4yOCA3LjI4MiA3LjI4Yy4wNzguMDc4LjE3LjEzNS4yNjguMTcuMjY3LjEuNTguMDQ0Ljc5My0uMTdsMy40NC0zLjQ0YS43NS43NSAwIDAgMCAwLTEuMDZ6Ii8+PC9zdmc+");
            background-size: 13px
        }
        
        .IconButton__icon-accept___2D6M9 {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMjAuMjUgM0w5IDE0LjI1IDMuNzUgOSAwIDEyLjc1bDkgOSAxNS0xNXoiLz48L3N2Zz4=");
            background-size: 13px
        }
    </style>
    <style type="text/css">
        .ButtonGroup__root___3lEAn {
            display: inline-block;
            vertical-align: top;
            margin: 0 5px 5px 0;
            white-space: nowrap
        }
        
        .ButtonGroup__root___3lEAn:last-child {
            margin-right: 0
        }
        
        .ButtonGroup__root___3lEAn>div>button {
            margin-right: 0;
            border-radius: 0
        }
        
        .ButtonGroup__root___3lEAn>div>button:focus {
            position: relative;
            z-index: 1
        }
        
        .ButtonGroup__root___3lEAn>div:first-child>button {
            border-top-left-radius: 2px;
            border-bottom-left-radius: 2px
        }
        
        .ButtonGroup__root___3lEAn>div+div>button {
            border-left-width: 0
        }
        
        .ButtonGroup__root___3lEAn>div:last-child>button {
            border-top-right-radius: 2px;
            border-bottom-right-radius: 2px
        }
    </style>
    <style type="text/css">
        .InputPopover__root___3Hpj9 {
            position: absolute;
            top: calc(100% + 5px);
            left: 0;
            width: 260px;
            background: none #fdfdfd;
            background: linear-gradient(180deg, #fdfdfd 0, #f6f7f8);
            border: 1px solid #999;
            border-radius: 2px;
            box-sizing: border-box;
            padding: 4px
        }
        
        .InputPopover__root___3Hpj9:before {
            top: -10px;
            border: 5px solid transparent;
            border-bottom-color: #999
        }
        
        .InputPopover__root___3Hpj9:after,
        .InputPopover__root___3Hpj9:before {
            content: "";
            display: block;
            position: absolute;
            width: 0;
            height: 0;
            left: 10px
        }
        
        .InputPopover__root___3Hpj9:after {
            top: -9px;
            border: 5px solid transparent;
            border-bottom-color: #fdfdfd
        }
        
        .InputPopover__inner___32V5P {
            display: flex
        }
        
        .InputPopover__input___264Za {
            display: block;
            flex: 1 0 auto;
            height: 30px;
            background: none #fff;
            border: 1px solid #999;
            border-radius: 2px;
            box-sizing: border-box;
            padding: 2px 6px;
            font-family: inherit;
            font-size: inherit;
            line-height: 24px
        }
        
        .InputPopover__inner___32V5P .InputPopover__buttonGroup___2c3Sl {
            flex: 0 1 auto;
            margin-left: 4px;
            margin-bottom: 0
        }
    </style>
    <style type="text/css">
        .Dropdown__root___3ALmx {
            display: inline-block;
            position: relative;
            line-height: 22px;
            vertical-align: top;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }
        
        .Dropdown__root___3ALmx select {
            position: relative;
            z-index: 2;
            display: inline-block;
            box-sizing: border-box;
            height: 30px;
            line-height: inherit;
            font-family: inherit;
            font-size: inherit;
            color: inherit;
            margin: 0;
            padding: 0;
            border: 4px solid transparent;
            border-right-width: 10px;
            border-left-width: 5px;
            background: none transparent;
            opacity: 0;
            cursor: pointer
        }
        
        .Dropdown__root___3ALmx .Dropdown__value___34Py9 {
            display: block;
            position: absolute;
            z-index: 1;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            line-height: 23px;
            border: 1px solid #999;
            border-radius: 2px;
            padding: 3px;
            padding-right: 33px;
            padding-left: 12px;
            white-space: nowrap;
            text-overflow: ellipsis
        }
        
        .Dropdown__root___3ALmx .Dropdown__value___34Py9:after,
        .Dropdown__root___3ALmx .Dropdown__value___34Py9:before {
            display: block;
            content: "";
            position: absolute;
            top: 50%;
            right: 10px;
            width: 0;
            height: 0;
            border: 4px solid transparent
        }
        
        .Dropdown__root___3ALmx .Dropdown__value___34Py9:before {
            margin-top: -10px;
            border-bottom-color: #555
        }
        
        .Dropdown__root___3ALmx .Dropdown__value___34Py9:after {
            margin-top: 1px;
            border-top-color: #555
        }
        
        .Dropdown__root___3ALmx select:focus+.Dropdown__value___34Py9 {
            border-color: #66afe9
        }
        
        @media screen and (-webkit-min-device-pixel-ratio:0) {
            .Dropdown__root___3ALmx select {
                opacity: 1;
                color: inherit;
                -webkit-appearance: none;
                border-left-width: 12px;
                border-right-width: 35px
            }
            .Dropdown__root___3ALmx select+.Dropdown__value___34Py9 {
                color: transparent
            }
            .Dropdown__root___3ALmx select:focus+.Dropdown__value___34Py9 {
                border-color: #999
            }
        }
    </style>
    <style type="text/css">
        .EditorToolbar__root___3_Aqz {
            font-family: Helvetica, sans-serif;
            font-size: 14px;
            margin: 0 10px;
            padding: 10px 0 5px;
            border-bottom: 1px solid #ddd;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }
    </style>
    <style type="text/css">
        .ImageSpan__root___RoAqL {
            color: transparent;
            background-repeat: no-repeat;
            display: inline-block;
            text-align: right;
            cursor: pointer
        }
        
        .ImageSpan__resize___1Hx5M {
            border: 1px dashed #78a300;
            position: relative;
            max-width: 100%;
            display: inline-block;
            line-height: 0;
            top: -1px;
            left: -1px,
        }
        
        .ImageSpan__resizeHandle___18rou {
            cursor: nwse-resize;
            position: absolute;
            z-index: 2;
            line-height: 1;
            bottom: -4px;
            right: -5px;
            border: 1px solid #fff;
            background-color: #78a300;
            width: 8px;
            height: 8px
        }
        
        .ImageSpan__selected___eNzgf {
            background-color: #b4d5fe
        }
    </style>
    <style type="text/css">
        /**
 * We inherit the height of the container by default
 */
        
        .DraftEditor-root,
        .DraftEditor-editorContainer,
        .public-DraftEditor-content {
            height: inherit;
            text-align: initial;
        }
        
        .DraftEditor-root {
            position: relative;
        }
        /**
 * Zero-opacity background used to allow focus in IE. Otherwise, clicks
 * fall through to the placeholder.
 */
        
        .DraftEditor-editorContainer {
            background-color: rgba(255, 255, 255, 0);
            /* Repair mysterious missing Safari cursor */
            border: 1px solid transparent;
            position: relative;
            z-index: 1;
        }
        
        .public-DraftEditor-content {
            outline: none;
            white-space: pre-wrap;
        }
        
        .public-DraftEditor-block {
            position: relative;
        }
        
        .DraftEditor-alignLeft .public-DraftEditor-block {
            text-align: left;
        }
        
        .DraftEditor-alignLeft .public-DraftEditorPlaceholder-root {
            left: 0;
            text-align: left;
        }
        
        .DraftEditor-alignCenter .public-DraftEditor-block {
            text-align: center;
        }
        
        .DraftEditor-alignCenter .public-DraftEditorPlaceholder-root {
            margin: 0 auto;
            text-align: center;
            width: 100%;
        }
        
        .DraftEditor-alignRight .public-DraftEditor-block {
            text-align: right;
        }
        
        .DraftEditor-alignRight .public-DraftEditorPlaceholder-root {
            right: 0;
            text-align: right;
        }
        /**
 * @providesModule DraftEditorPlaceholder
 */
        
        .public-DraftEditorPlaceholder-root {
            color: #9197a3;
            position: absolute;
            z-index: 0;
        }
        
        .public-DraftEditorPlaceholder-hasFocus {
            color: #bdc1c9;
        }
        
        .DraftEditorPlaceholder-hidden {
            display: none;
        }
        /**
 * @providesModule DraftStyleDefault
 */
        
        .public-DraftStyleDefault-block {
            position: relative;
            white-space: pre-wrap;
        }
        /* @noflip */
        
        .public-DraftStyleDefault-ltr {
            direction: ltr;
            text-align: left;
        }
        /* @noflip */
        
        .public-DraftStyleDefault-rtl {
            direction: rtl;
            text-align: right;
        }
        /**
 * These rules provide appropriate text direction for counter pseudo-elements.
 */
        /* @noflip */
        
        .public-DraftStyleDefault-listLTR {
            direction: ltr;
        }
        /* @noflip */
        
        .public-DraftStyleDefault-listRTL {
            direction: rtl;
        }
        /**
 * Default spacing for list container elements. Override with CSS as needed.
 */
        
        .public-DraftStyleDefault-ul,
        .public-DraftStyleDefault-ol {
            margin: 16px 0;
            padding: 0;
        }
        /**
 * Default counters and styles are provided for five levels of nesting.
 * If you require nesting beyond that level, you should use your own CSS
 * classes to do so. If you care about handling RTL languages, the rules you
 * create should look a lot like these.
 */
        /* @noflip */
        
        .public-DraftStyleDefault-depth0.public-DraftStyleDefault-listLTR {
            margin-left: 1.5em;
        }
        /* @noflip */
        
        .public-DraftStyleDefault-depth0.public-DraftStyleDefault-listRTL {
            margin-right: 1.5em;
        }
        /* @noflip */
        
        .public-DraftStyleDefault-depth1.public-DraftStyleDefault-listLTR {
            margin-left: 3em;
        }
        /* @noflip */
        
        .public-DraftStyleDefault-depth1.public-DraftStyleDefault-listRTL {
            margin-right: 3em;
        }
        /* @noflip */
        
        .public-DraftStyleDefault-depth2.public-DraftStyleDefault-listLTR {
            margin-left: 4.5em;
        }
        /* @noflip */
        
        .public-DraftStyleDefault-depth2.public-DraftStyleDefault-listRTL {
            margin-right: 4.5em;
        }
        /* @noflip */
        
        .public-DraftStyleDefault-depth3.public-DraftStyleDefault-listLTR {
            margin-left: 6em;
        }
        /* @noflip */
        
        .public-DraftStyleDefault-depth3.public-DraftStyleDefault-listRTL {
            margin-right: 6em;
        }
        /* @noflip */
        
        .public-DraftStyleDefault-depth4.public-DraftStyleDefault-listLTR {
            margin-left: 7.5em;
        }
        /* @noflip */
        
        .public-DraftStyleDefault-depth4.public-DraftStyleDefault-listRTL {
            margin-right: 7.5em;
        }
        /**
 * Only use `square` list-style after the first two levels.
 */
        
        .public-DraftStyleDefault-unorderedListItem {
            list-style-type: square;
            position: relative;
        }
        
        .public-DraftStyleDefault-unorderedListItem.public-DraftStyleDefault-depth0 {
            list-style-type: disc;
        }
        
        .public-DraftStyleDefault-unorderedListItem.public-DraftStyleDefault-depth1 {
            list-style-type: circle;
        }
        /**
 * Ordered list item counters are managed with CSS, since all list nesting is
 * purely visual.
 */
        
        .public-DraftStyleDefault-orderedListItem {
            list-style-type: none;
            position: relative;
        }
        /* @noflip */
        
        .public-DraftStyleDefault-orderedListItem.public-DraftStyleDefault-listLTR:before {
            left: -36px;
            position: absolute;
            text-align: right;
            width: 30px;
        }
        /* @noflip */
        
        .public-DraftStyleDefault-orderedListItem.public-DraftStyleDefault-listRTL:before {
            position: absolute;
            right: -36px;
            text-align: left;
            width: 30px;
        }
        /**
 * Counters are reset in JavaScript. If you need different counter styles,
 * override these rules. If you need more nesting, create your own rules to
 * do so.
 */
        
        .public-DraftStyleDefault-orderedListItem:before {
            content: counter(ol0) ". ";
            counter-increment: ol0;
        }
        
        .public-DraftStyleDefault-orderedListItem.public-DraftStyleDefault-depth1:before {
            content: counter(ol1) ". ";
            counter-increment: ol1;
        }
        
        .public-DraftStyleDefault-orderedListItem.public-DraftStyleDefault-depth2:before {
            content: counter(ol2) ". ";
            counter-increment: ol2;
        }
        
        .public-DraftStyleDefault-orderedListItem.public-DraftStyleDefault-depth3:before {
            content: counter(ol3) ". ";
            counter-increment: ol3;
        }
        
        .public-DraftStyleDefault-orderedListItem.public-DraftStyleDefault-depth4:before {
            content: counter(ol4) ". ";
            counter-increment: ol4;
        }
        
        .public-DraftStyleDefault-depth0.public-DraftStyleDefault-reset {
            counter-reset: ol0;
        }
        
        .public-DraftStyleDefault-depth1.public-DraftStyleDefault-reset {
            counter-reset: ol1;
        }
        
        .public-DraftStyleDefault-depth2.public-DraftStyleDefault-reset {
            counter-reset: ol2;
        }
        
        .public-DraftStyleDefault-depth3.public-DraftStyleDefault-reset {
            counter-reset: ol3;
        }
        
        .public-DraftStyleDefault-depth4.public-DraftStyleDefault-reset {
            counter-reset: ol4;
        }
    </style>
    <style type="text/css">
        .RichTextEditor__root___2QXK- {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 3px;
            font-family: Georgia, serif;
            font-size: 14px
        }
        
        .RichTextEditor__editor___1QqIU {
            cursor: text;
            font-size: 16px
        }
        
        .RichTextEditor__editor___1QqIU .public-DraftEditor-content,
        .RichTextEditor__editor___1QqIU .public-DraftEditorPlaceholder-root {
            margin: 0;
            padding: 9px
        }
        
        .RichTextEditor__editor___1QqIU .public-DraftEditor-content {
            overflow: auto
        }
        
        .RichTextEditor__hidePlaceholder___3WLid .public-DraftEditorPlaceholder-root {
            display: none
        }
        
        .RichTextEditor__editor___1QqIU .RichTextEditor__paragraph___3NTf9,
        .RichTextEditor__editor___1QqIU pre {
            margin: 14px 0
        }
        
        .RichTextEditor__editor___1QqIU .RichTextEditor__codeBlock____KD4Q {
            background-color: #f3f3f3;
            font-family: Inconsolata, Menlo, Consolas, monospace;
            font-size: 16px;
            margin: 14px 0;
            padding: 20px
        }
        
        .RichTextEditor__editor___1QqIU .RichTextEditor__codeBlock____KD4Q span[style] {
            padding: 0!important
        }
        
        .RichTextEditor__editor___1QqIU .RichTextEditor__blockquote___1vCYl {
            border-left: 5px solid #eee;
            color: #666;
            font-family: Hoefler Text, Georgia, serif;
            font-style: italic;
            margin: 16px 0;
            padding: 10px 20px
        }
        
        .RichTextEditor__editor___1QqIU .RichTextEditor__block___2Vs_D:first-child,
        .RichTextEditor__editor___1QqIU ol:first-child,
        .RichTextEditor__editor___1QqIU pre:first-child,
        .RichTextEditor__editor___1QqIU ul:first-child {
            margin-top: 0
        }
        
        .RichTextEditor__editor___1QqIU .RichTextEditor__block___2Vs_D:last-child,
        .RichTextEditor__editor___1QqIU ol:last-child,
        .RichTextEditor__editor___1QqIU pre:last-child,
        .RichTextEditor__editor___1QqIU ul:last-child {
            margin-bottom: 0
        }
        body::before {
  background-color: rgba(0, 0, 0, 0);
  box-shadow: 0 0 0 rgba(0, 0, 0, 0.15);
 }
    </style>
</head>

<body>
    <!-- End Google Code for Booked a tour Conversion Page -->
    <div id="render-target" style="width:100%; height:100%;">
        <div data-radium="true" data-reactroot="">
            <div>
                <div data-radium="true" class="container-fluid">
                    <div id="section-1">
                        <div style="height: 100vh; position: relative; background: rgb(41, 34, 20) none repeat scroll 0% 0%; color: rgb(255, 255, 255); text-align: center;" data-radium="true" class="row">
                            <div style="position: absolute; width: 100%; height: 100%; opacity: 0.5; background-size: cover; background-image: url(&quot;https://d1g17mzu1m6f7h.cloudfront.net/static-assets/0afdab9cd09e_bi-0.1.jpg&quot;);" data-radium="true"></div>
                            <div>
                                <header style="height: 64px; position: relative;" data-radium="true">
                                    <div id="headerDiv" style="  align-items: center;
  background-color: transparent;
  color: #fff;
  display: flex;
  font-size: 25px;
  height: 64px;
  justify-content: space-between;
  left: 0;
  opacity: 1;
  padding: 0 20px;
  position: fixed;
  top: 0;
  transition: background-color 0.3s linear 0s;
  width: 100%;
  z-index: 100;
" data-radium="true">
                                    <div class="head-box">      <div id="TopLogo" style="display: block; visibility: hidden; align-items: center; cursor: pointer;" data-radium="true">
                                            <div style="display: inline-block; width: 40px; height: 40px; border-radius: 50%; position: relative; text-align: center; overflow: hidden; background-color: rgb(187, 159, 125); cursor: pointer; margin-right: 10px; opacity: 1;" data-radium="true">
                                                <div style="width: 56%; display: inline-block; margin-top: 56%; transform: translateY(-50%);" data-radium="true">
                                                    <svg width="100%" height="100%" viewBox="28 0 200 200" preserveAspectRatio="xMidYMid meet" version="1.1" data-radium="true"><g id="Land-+-Overview" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" data-radium="true"><g id="Land-+-Overview---Desktop-HD" transform="translate(-591.000000, -246.000000)" fill="#FEFEFE" data-radium="true"><g id="Section-1---Land" data-radium="true"><g id="Logo-Lockup" transform="translate(460.000000, 120.000000)" data-radium="true"><!-- react-text: 828 --><!-- /react-text --><polyline id="Flag" points="334 126 260 322 186 126"/></g></g></g></g></svg>
                                                </div>
                                            </div><span data-radium="true" class="rmq-8131a4a3"></span>
                                            <div style="margin-left: 3px;" data-radium="true" class="rmq-8131a4a3"></div>
                                        </div>
                                        <div style="flex: 1 1 0%; display: flex; align-items: center; justify-content: center;" data-radium="true" class="rmq-7d7ca92"><span style="display: inline-block; margin: 2px 10px; letter-spacing: 1px; font-family: Roboto,sans-serif; font-size: 14px;" data-radium="true" class="rmq-99c7f619"><a style="text-decoration: underline;" data-radium="true" href="tel:6469790898"> 646-979-0898 </a></span><span style="display: inline-block; margin: 2px 10px; letter-spacing: 1px; font-family: Roboto,sans-serif; font-size: 14px;" data-radium="true" class="rmq-99c7f619"><a style="text-decoration: underline;" data-radium="true" href="mailto:hellohello@knotel.com"> hellohello@knotel.com </a></span></div>
                                        <div style="display: flex; align-items: center;" data-radium="true">
                                        <a href="https://knotel.com/login?redirect_url=%2Flocations">
                                            <button style="-moz-user-select: none; border: 10px none; box-sizing: border-box; display: inline-block; font-family: Roboto,sans-serif; cursor: pointer; text-decoration: none; margin: 0px; padding: 0px; outline: medium none; font-size: inherit; font-weight: inherit; transform: translate(0px, 0px); vertical-align: middle; height: 40px; line-height: 36px; min-width: 88px; color: white; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; border-radius: 2px; position: relative; overflow: hidden; background-color: transparent; text-align: center; letter-spacing: 1px;" type="button" tabindex="0">
                                                <div><span style="position: relative; padding-left: 16px; padding-right: 16px; vertical-align: middle; letter-spacing: 0px; text-transform: uppercase; font-weight: 500; font-size: 14px;">Login</span></div>
                                            </button></a>
                                        </div>  </div>
                                        
                                        
                                           <div class="mobile-box">  
                                           
                                         <div data-radium="true" style="display: flex; align-items: center; cursor: pointer;"><div id="TopLogoMb" data-radium="true" style="display: none; width: 40px; height: 40px; border-radius: 50%; position: relative; text-align: center; overflow: hidden; background-color: rgb(187, 159, 125); cursor: pointer; margin-right: 10px;"><div data-radium="true" style="width: 56%; display: inline-block; margin-top: 56%; transform: translateY(-50%);"><svg width="100%" height="100%" viewBox="28 0 200 200" preserveAspectRatio="xMidYMid meet" version="1.1" data-radium="true"><g id="Land-+-Overview" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" data-radium="true"><g id="Land-+-Overview---Desktop-HD" transform="translate(-591.000000, -246.000000)" fill="#FEFEFE" data-radium="true"><g id="Section-1---Land" data-radium="true"><g id="Logo-Lockup" transform="translate(460.000000, 120.000000)" data-radium="true"><!-- react-text: 18 --><!-- /react-text --><polyline id="Flag" points="334 126 260 322 186 126"/></g></g></g></g></svg></div></div><span class="rmq-8131a4a3" data-radium="true"></span><div class="rmq-8131a4a3" data-radium="true" style="margin-left: 3px;"></div></div><div class="rmq-7d7ca92" data-radium="true" style="flex: 1 1 0%; display: flex; align-items: center; justify-content: center;"><span class="rmq-99c7f619" data-radium="true" style="display: inline-block; margin: 2px 10px; letter-spacing: 1px; font-family: Roboto,sans-serif; font-size: 14px;"><a href="tel:6469790898" tabindex="0" style="border: 10px none; box-sizing: border-box; display: inline-block; font-family: Roboto,sans-serif; cursor: pointer; text-decoration: none; margin: 0px; padding: 12px; outline: medium none; font-size: 0px; font-weight: inherit; transform: translate(0px, 0px); vertical-align: middle; position: relative; overflow: visible; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; width: 48px; height: 48px; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;"><div><svg viewBox="0 0 24 24" style="display: inline-block; color: rgba(0, 0, 0, 0.87); fill: rgb(255, 255, 255); height: 24px; width: 24px; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg></div></a></span><span class="rmq-99c7f619" data-radium="true" style="display: inline-block; margin: 2px 10px; letter-spacing: 1px; font-family: Roboto,sans-serif; font-size: 14px;"><a href="mailto:hellohello@knotel.com" tabindex="0" style="border: 10px none; box-sizing: border-box; display: inline-block; font-family: Roboto,sans-serif; cursor: pointer; text-decoration: none; margin: 0px; padding: 12px; outline: medium none; font-size: 0px; font-weight: inherit; transform: translate(0px, 0px); vertical-align: middle; position: relative; overflow: visible; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; width: 48px; height: 48px; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;"><div><svg viewBox="0 0 24 24" style="display: inline-block; color: rgba(0, 0, 0, 0.87); fill: rgb(255, 255, 255); height: 24px; width: 24px; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg></div></a></span></div><div data-radium="true" style="display: flex; align-items: center;"><button tabindex="0" type="button" style="border: 10px none; box-sizing: border-box; display: inline-block; font-family: Roboto,sans-serif; cursor: pointer; text-decoration: none; margin: 0px; padding: 0px; outline: medium none; font-size: inherit; font-weight: inherit; transform: translate(0px, 0px); vertical-align: middle; height: 40px; line-height: 36px; min-width: 88px; color: white; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; border-radius: 2px; position: relative; overflow: hidden; background-color: rgba(0, 0, 0, 0); text-align: center; letter-spacing: 1px;"><div><span style="position: relative; padding-left: 16px; padding-right: 16px; vertical-align: middle; letter-spacing: 0px; text-transform: uppercase; font-size: 14px; font-weight: 500;">Login</span></div></button></div>
                                           
                                           
                                           
                                           
                                           </div>
                                        
                                        
                                        
                                    </div>
                                </header>
                            </div>
                            <div style="height: 30vh;" data-radium="true" class="rmq-1f051394 rmq-24494ed1">
                                <div style="display: inline-block; width: 25vh; height: auto; border-radius: 50%; position: relative; text-align: center; overflow: hidden; top:60%; transform: translateY(-50%);" data-radium="true" class="rmq-8f05138c">
                                    <div style="width: 50%; display: inline-block; margin-top:50%; transform: translateY(-50%);" data-radium="true">
                                        <svg data-radium="true" version="1.1" preserveAspectRatio="xMidYMid meet" viewBox="-13 0 285 285" height="100%" width="100%">
                                            <g data-radium="true" fill-rule="evenodd" fill="none" stroke-width="1" stroke="none" id="Land-+-Overview">
                                                <g data-radium="true" fill="#FEFEFE" transform="translate(-591.000000, -246.000000)" id="Land-+-Overview---Desktop-HD">
                                                    <g data-radium="true" id="Section-1---Land">
                                                        <g data-radium="true" transform="translate(460.000000, 120.000000)" id="Logo-Lockup">
                                                            <g data-radium="true" transform="translate(131.000000, 365.000000)" id="Wordmark">
                                                                <path id="L" d="M242,42.0555556 L259,26 L259,43 L241,43 L229,42.9995428 L229,2 L242,2 L242,42.0555556 Z"></path>
                                                                <polygon points="220 12 220 2 188 2 188 43 220.089271 43 220 33 199 33 199 27 214 27 214 18 199 18 199 12" id="E"></polygon>
                                                                <polygon points="180 2 144 2 144 12.5 156 12.5 156 43 168 43 168 12.5 180 12.5" id="T"></polygon>
                                                                <path id="O" d="M118.5,12 C112.710454,12 108,16.7104539 108,22.5 C108,28.2895461 112.710454,33 118.5,33 C124.289546,33 129,28.2895461 129,22.5 C129,16.7104539 124.289546,12 118.5,12 M96,22.5 C96,10.0932203 106.09322,0 118.5,0 C130.90678,0 141,10.0932203 141,22.5 C141,34.9067797 130.90678,45 118.5,45 C106.09322,45 96,34.9067797 96,22.5 Z"></path>
                                                                <polygon points="48 2 58.8706076 2 76.8471964 25 76.8471964 2 88 2 88 43 77.8419273 43 59.0684381 19.2446156 59.0684381 43 48 43" id="N"></polygon>
                                                                <polygon points="42 2 27 2 11.5 18.5 11.5 2 0 2 0 45.5 16 28.5 27 43 42 43 24.5 20.5" id="K"></polygon>
                                                            </g>
                                                            <polyline points="334 126 260 322 186 126" id="Flag"></polyline>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 50vh; display: flex; flex-direction: column; position: relative;" data-radium="true">
                                <div style="height: auto; padding: 0px 20px;  margin-top: 50px;" data-radium="true"><span style="display: block; margin: 10px 0px; font-size: 44px;" data-radium="true" class="rmq-cf6c184f rmq-bdf3850a gtm-light">Commit to your business, not a lease</span><span style="display: block; margin: 10px 0px; font-size: 26px; letter-spacing: 1px;" data-radium="true" class="rmq-6ac507a5 rmq-6bdd4447 gtm-light">Headquarters as a Service</span></div>
                                <div style="flex: 1 1 0%; display: flex; align-items: center; justify-content: center; min-height: 100px;" data-radium="true">
                                    <div id="BookATour" style="color: rgba(0, 0, 0, 0.87); background: rgb(255, 98, 70) none repeat scroll 0% 0%; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; box-sizing: border-box; font-family: Roboto,sans-serif; box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.12), 0px 1px 4px rgba(0, 0, 0, 0.12); border-radius: 22px; display: inline-block; min-width: 88px; height: 46px;" class="gtm-light">
                                        <a style="border: 10px none; box-sizing: border-box; display: inline-block; font-family: Roboto,sans-serif; cursor: pointer; text-decoration: none; margin: 0px; padding: 0px; outline: medium none; font-size: inherit; font-weight: inherit; transform: translate(0px, 0px); vertical-align: middle; position: relative; height: 46px; width: 100%; border-radius: 2px; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; background-color: rgb(255, 98, 70); text-align: center;" target = "_blank" tabindex="0" href="http://try.knotel.com/knotel-benefits/">
                                            <div>
                                                <div class="kbtn" style="height: 46px; border-radius: 2px; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; top: 0px;"><span style="-moz-user-select: none; position: relative; opacity: 1; font-size: 22px; letter-spacing: 0px; text-transform: none; font-weight: 300; margin: 0px; padding: 0px 20px; color: white; font-family: &quot;Gotham A&quot;,&quot;Gotham B&quot;; font-style: normal; line-height: 2em;">Book a tour</span></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- react-empty: 57 -->
                                <div style="display: inline-block; margin: 12px;" data-radium="true" class="wtn-book">
                                    <ul style="display: inline-block; margin: 12px;" data-radium="true" id="menuUl">
                                        <?php
                            // //$menu_items = wp_nav_menu(array( 'theme_location' => 'extra-menu'));
                                            $menu_items = wp_get_nav_menu_items('Homepagemenu');
                                            foreach ( (array) $menu_items as $key => $menu_item ) {
                                                if($menu_item->title == "We're hiring"){?>
                                                    
                                        <li style="display: inline-block; margin: 12px;" data-radium="true">
                                            <a target = "_blank" href="<?php echo $menu_item->url;  ?>">
                                                <div style="color: rgba(0, 0, 0, 0.87); background: rgb(51, 33, 120) none repeat scroll 0% 0%; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; box-sizing: border-box; font-family: Roboto,sans-serif; box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.12), 0px 1px 4px rgba(0, 0, 0, 0.12); border-radius: 20px; display: inline-block; min-width: 88px; width: 180px; font-size: 18px;" class="gtm-light">
                                                    <button style="border: 10px none; box-sizing: border-box; display: inline-block; font-family: Roboto,sans-serif; cursor: pointer; text-decoration: none; margin: 0px; padding: 0px; outline: medium none; font-size: inherit; font-weight: inherit; transform: translate(0px, 0px); position: relative; height: 36px; line-height: 36px; width: 100%; border-radius: 2px; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; background-color: rgb(51, 33, 120); text-align: center;" type="button" tabindex="0">
                                                        <div>
                                                            <div style="height: 36px; border-radius: 2px; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; top: 0px;"><span style="-moz-user-select: none; position: relative; opacity: 1; font-size: 18px; letter-spacing: 0px; text-transform: none; font-weight: 300; margin: 0px; padding: 0px 10px; color: white; font-family: &quot;Gotham A&quot;,&quot;Gotham B&quot;; font-style: normal; line-height: 1em;"><?php echo $menu_item->title;  ?></span></div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </a>
                                        </li>   
                                        
                                        
                                                <?php     
                                                }else{
                                                ?>
                                                <li style="display: inline-block; margin: 12px;" data-radium="true">
                                                <a href="<?php echo $menu_item->url;  ?>">    
                                                <button style="-moz-user-select: none; border: 10px none; box-sizing: border-box; display: inline-block; font-family: Roboto,sans-serif; cursor: pointer; text-decoration: none; margin: 0px 10px; padding: 0px; outline: medium none; font-size: 20px; font-weight: inherit; transform: translate(0px, 0px); height: 36px; line-height: 36px; min-width: 88px; color: white; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; border-radius: 2px; position: relative; overflow: hidden; background-color: transparent; text-align: center; width: 160px;" type="button" tabindex="0">
                                                    <div><span style="position: relative; padding-left: 16px; padding-right: 16px; vertical-align: middle; letter-spacing: 1.5px; text-transform: uppercase; font-weight: 100; font-size: 14px;"><?php echo $menu_item->title;  ?></span></div>
                                                </button>
                                                </a>        
                                            </li>    
                                            <?php
                                                }
                                            }
                                        ?>
                                      
                                  
                                    </ul>
                                </div>
                            </div>
                            <div class="btm-link" style="position: absolute; bottom: 30px; left: 20px;" data-radium="true" >
                                <?php 
                                    $menu_items = wp_get_nav_menu_items('homesubmenu');
                                    foreach ( (array) $menu_items as $key => $menu_item ) {      
                                        if($menu_item->title == 'I have space') {
                                            $link_target = "target = '_blank'";    
                                        }else{
                                            $link_target = "target = '_self'";
                                        }    
                                        
                                    ?>
                                <a <?php echo $link_target; ?> href= "<?php echo $menu_item->url; ?>"><button class = "submenucls" style="-moz-user-select: none; border: 10px none; box-sizing: border-box; display: inline-block; font-family: Roboto,sans-serif; cursor: pointer; text-decoration: none; margin: 0px 10px; padding: 0px; outline: medium none; font-size: 20px; font-weight: inherit; transform: translate(0px, 0px); height: 36px; line-height: 36px; min-width: 88px; color: white; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; border-radius: 2px; position: relative; overflow: hidden; background-color: transparent; text-align: center; width: auto;" type="button" tabindex="0">
                                    <div><span style="position: relative; padding-left: 16px; padding-right: 16px; vertical-align: middle; letter-spacing: 1.5px; text-transform: uppercase; font-weight: 100; font-size: 12px;"><?php echo $menu_item->title; ?></span></div>
                                    </button></a>
                               <?php
                                }
                                ?> 
                            
                            </div>
                        </div>
                    </div>
                    <div id="section-2">
                        
                       
                        
                        
                        <div id = "locations" style="position: relative; color: rgb(255, 255, 255); background: rgb(224, 197, 164) none repeat scroll 0% 0%;" data-radium="true" class="rmq-87874af2 row text-center">
                            <div style="background-color: rgb(90, 146, 191); opacity: 1; height: 100px; font-size: 36px; width: 100%;" data-radium="true" class="rmq-21f120e text-center header gtm-extra-light">
                                <div style="top: 50%; transform: translateY(-50%); position: relative; color: rgb(255, 255, 255);" data-radium="true">Our Locations</div>
                            </div>
                             <section class="map-area">
        <div class="container-fluid no-padding">
            <div class="row-fluid">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding">
                    
            <div class="loction"> <img src="<?php echo  get_stylesheet_directory_uri();  ?>/images/loc-ico.png"> Our Locations</div>
                        <div id="map"></div>
                    
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding">
                    <div class="right-collapse">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php     
                            $regions_data = $wpdb->get_results( "SELECT * FROM wp_regions" );
                            if(!empty($regions_data)){ 
                                foreach ($regions_data as $key => $value) {   
                                    $count_query = "SELECT COUNT(*) FROM wp_markers where region_id =".$value->id;
                                    $count = $wpdb->get_var($count_query);
                                    $querystr = "SELECT * FROM `wp_markers` where region_id = ".$value->id;
                                    $locationsResults = $wpdb->get_results($querystr, OBJECT);
                                    
                            ?>
                            
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4  lat="<?php echo $value->lat; ?>" logi="<?php echo $value->lag; ?>" class="panel-title panel-titleMAp"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $key; ?>" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                 <i class="fa fa-map-marker" aria-hidden="true"></i>
 <?php echo $value->regionname; ?>
                            <span class="section-count">
                                <?php echo $count." Locations"; ?>
                            </span>
                            </a>
                        </h4>
                                </div>
                                <div id="collapseOne<?php echo $key; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                        <!-- <h4>209 N 8th St209 N 8th St</h4> -->

                                    <div class="row aa">
                                        <div class="row locationMap">
                    <?php
                                            if(!empty($locationsResults)){
                                                $ii = 0;
                                                foreach ($locationsResults as $key => $locationval) { 
                                                    
                                                   
                                                    if($ii % 3 == 0){
                                                        echo '</div><div class="row locationMap">';
                                                    }
                                                    $ii++; 
                                                    echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mapsMarkets" lat= "'.$locationval->lat.'" lng = "'.$locationval->lng.'" mapsMarkets="'.($ii-1).'">';
                                                    echo '<h5>'.$locationval->title.'</h5>';
                                                    echo '<p>';
                                                    echo $locationval->address;
                                                    echo '</p>';
                                                    echo '</div>';
                                                    
                                                    
                                                    
                                                }
                                          
                                            }
                                        
                                        
                                        ?>                  
                                                    
                                        </div>          
                                                    
                                    </div>
                                        
                                
                                        
                                        
                                     
                                    </div>
                                    
                              
                                    
                                </div>
                            </div>
                            <?php
                            }
                            
                                }
                            
                            ?>
                         
                        </div>

                    </div>
                </div>

            </div>
    </section>
                              
                                
                            
                        </div>
                        <!--<div id = "locations" style="position: relative; color: rgb(255, 255, 255); background: rgb(224, 197, 164) none repeat scroll 0% 0%;" data-radium="true" class="rmq-87874af2 row text-center">
                            <div style="background-color: rgb(90, 146, 191); opacity: 1; height: 100px; font-size: 36px; width: 100%;" data-radium="true" class="rmq-21f120e text-center header gtm-extra-light">
                                <div style="top: 50%; transform: translateY(-50%); position: relative; color: rgb(255, 255, 255);" data-radium="true">Our Locations</div>
                            </div>
                            
                              <div id="map"></div>  
                                
                            
                        </div>-->
                    </div>
                    <div id="section-3">
                        <?php
                            $backgourndimg = '';
                            $args = array('posts_per_page' => 3,'category_name' => 'spaces-we-offer','order' =>'ASC');
                            query_posts($args);
                            while ( have_posts() ) : the_post(); 
                                if (has_post_thumbnail()) { 
                                    
                                    $src = get_the_post_thumbnail_url(null,'full');
                                    $backgourndimg .= 'url(&quot;'.$src.'&quot;),';   
                                }
                            endwhile;
                            $backgourndimg = trim($backgourndimg,",");
                            $backgourndimg .= ';';
                            wp_reset_query();    
                        ?>
                        <div id="spaces" style="min-height: 800px; height: 100vh; position: relative; color: rgb(255, 255, 255); background-size: cover, 0px auto, 0px auto; background-position: center center, center center, center center; background-repeat: no-repeat; background-image:<?php echo $backgourndimg;  ?>" data-radium="true" class="rmq-81090bd0 row">
                            <div style="background-color: rgb(90, 146, 191); opacity: 1; height: 100px; font-size: 36px; width: 100%;" data-radium="true" class="rmq-21f120e text-center header gtm-extra-light">
                                <div style="top: 50%; transform: translateY(-50%); position: relative; color: rgb(255, 255, 255);" data-radium="true">Spaces We Offer</div>
                            </div>
                            <div style="position: absolute; bottom: 52px; width: 100%; text-align: center; display: flex; justify-content: space-around;" data-radium="true" class="rmq-eb53322b" >
                            <?php
                                $args = array('posts_per_page' => 3,'category_name' => 'spaces-we-offer','order' =>'ASC');
                                query_posts($args);
                                $ih = 0;
                                while ( have_posts() ) : the_post(); $ih++; ?>   
                                <div style="color: rgb(0, 0, 0); overflow: hidden; margin: 12px auto; width: 230px; height: 230px; padding: 12px; font-weight: 100; font-family: &quot;Gotham A&quot;,&quot;Gotham B&quot;; background-size: 62% auto; background-position: center center; background-repeat: no-repeat; transition: background-color 0.2s ease 0s; box-shadow: 2px 2px 12px -4px rgb(0, 0, 0); display: flex; align-items: center; justify-content: center;" data-radium="true" class="rmq-8d558822 rmq-space<?php echo $ih ?>">
                                    <p style="display: block; font-size: 25px; line-height: 40px; color: white; margin: 0px auto; max-width: 90%;" data-radium="true" class="rmq-1a8e12bb"><?php the_title(); ?></p>
                                    <div style="display: none; font-size: 17px; letter-spacing: 1px; line-height: 25px; text-align: left; color: white; margin: 0px 5px;" data-radium="true" class="rmq-1a8e12bbne"><?php the_content(); ?></div>
                                    <p style="display: none; background-size: cover; background-image: url(<?php echo get_the_post_thumbnail_url(null,'full'); ?>)" data-radium="true" class="rmq-e4fe6c72"></p>
                                </div>
                                <?php   
                                    endwhile;
                                    wp_reset_query();
                                ?>  
                            </div>
                        </div>
                    </div>
                    <div id="section-4">
                        <div id="services" style="min-height: 100vh; position: relative;" data-radium="true" class="rmq-e3f807fe row">
                            <div style="background-color: rgb(90, 146, 191); opacity: 1; height: 100px; font-size: 36px; width: 100%;" data-radium="true" class="rmq-21f120e text-center header gtm-extra-light">
                                <div style="top: 50%; transform: translateY(-50%); position: relative; color: rgb(255, 255, 255);" data-radium="true">Services We Provide</div>
                            </div>
                            <div style="display: inline-block; vertical-align: middle; width: 32%; height: inherit; padding: 30px 0px; background: white none repeat scroll 0% 0%; min-height: 100vh;" data-radium="true" class="rmq-260f5a11">
                                
                                <?php
                                $sargs = array('posts_per_page' => 4,'category_name' => 'services-we-provide','order' => 'ASC');
                                query_posts($sargs);
                                $iv = 0;
                                while (have_posts() ) : the_post(); 
                                $iv++;
                                ?>  
                                <div style="<?php echo ($iv == 1)? ' background-color: rgb(187, 159, 125) !important;color: white;' : 'color: #000;' ?>  display: inline-block; padding: 5% 15%; min-height: 25%; position: relative; width: 100%; cursor: default; font-weight: 100; font-family: &quot;Gotham A&quot;,&quot;Gotham B&quot;" data-radium="true" class="rmq-e8346481">
                                    <div class="services-text" data-radium="true">
                                        <p style="font-size: 28px; margin-top: 0px;" data-radium="true" class="rmq-7b67cde4"><?php the_title(); ?></p>
                                        <p style="font-size: 16px; line-height: 25px; letter-spacing: 1px;" data-radium="true" class="rmq-a15360cf"><?php the_content(); ?></p>
                                        <p style="background-size: cover; background-image: url(<?php echo get_the_post_thumbnail_url(null,'full'); ?>)" data-radium="true" class="rmq-99b29990"></p>
                                    </div> 
                                </div>
                                 <?php   
                                    endwhile;
                                    wp_reset_query();
                                ?>
                            </div>
                            
                            <?php
                                $backgourndimgservices = '';
                                $args = array('posts_per_page' => 4,'category_name' => 'services-we-provide','order' => 'ASC');
                                query_posts($args);
                                while ( have_posts() ) : the_post(); 
                                    if (has_post_thumbnail()) { 
                                        $src = get_the_post_thumbnail_url(null,'full');
                                        $backgourndimgservices .= 'url(&quot;'.$src.'&quot;),';   
                                    }
                                endwhile;
                                $backgourndimgservices = trim($backgourndimgservices,",");
                                $backgourndimgservices .= ';';
                                wp_reset_query();    
                            ?>
                            
                            
                            <div class="rmq-e8346481div" style="position: absolute; top: 0px; right: 0px; bottom: 0px; z-index: -1; width: 70%; background-size: cover, 0px auto, 0px auto, 0px auto; background-position: center center, center center, center center; background-repeat: no-repeat; background-image:<?php echo $backgourndimgservices; ?>" data-radium="true"></div>
                        </div>
                    </div>
                    <div id="section-5">
                        <div id="events" data-radium="true">
                            <div style="background-color: rgb(245, 245, 245); padding: 0px 0px 52px; position: relative;" data-radium="true" class="row text-center">
                                <div style="background: rgb(187, 159, 125) none repeat scroll 0% 0%; color: rgb(255, 255, 255); font-weight: 100; position: relative;" data-radium="true" class="text-center gtm-book v-center">
                                    <div style="background-color: rgb(90, 146, 191); opacity: 1; height: 100px; font-size: 36px; width: 100%;" data-radium="true" class="rmq-21f120e text-center header gtm-extra-light">
                                        <div></div>
                                        <div style="top: 50%; transform: translateY(-50%); position: relative; color: rgb(255, 255, 255);" data-radium="true">Events we're hosting</div>
                                    </div>
                                    <div style="display: inline-block; width: 100%;" data-radium="true">
                                        <p style="font-size: 25px; margin: 30px 0px; font-weight: 300;" data-radium="true" class="rmq-b31e0d11 gtm-thin">Stay in the know about Knotel events and news</p>
                                      <!--*******************************************************mialchimp form**************************************************************-->  
                                           
                                      
                                      <div id="mc_embed_signup">
                                        <form style="display: inline-block; width: 100%; max-width: 1200px;" action="//knotel.us16.list-manage.com/subscribe/post?u=3872153b32a86ea0345de58d0&amp;id=c27561fcec" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll">
                                                 <div data-radium="true">
                                                <div data-radium="true">
                                                    <div style="margin-bottom: 0px;" data-radium="true" class="rmq-e020e205 col-sm-4 mc-field-group">
                                                        <div data-radium="true">
                                                            <label for="fname"></label>
                                                            <input style="width: 100%; height: 31px; padding-left: 20px; font-size: 14px; border-radius: 22px; border: medium none; outline: medium none;" data-radium="true" class="rmq-597fe5b6" placeholder="First Name" name="FNAME" class ="required" type="text" id="mce-FNAME">
                                                            <!-- react-text: 164 -->
                                                            <!-- /react-text -->
                                                        </div>
                                                    </div>
                                                    <div style="margin-bottom: 0px;" data-radium="true" class="rmq-e020e205 col-sm-4 mc-field-group">
                                                        <div data-radium="true">
                                                            <label for="lname"></label>
                                                            <input style="width: 100%; height: 31px; padding-left: 20px; font-size: 14px; border-radius: 22px; border: medium none; outline: medium none;" data-radium="true" class="rmq-597fe5b6" placeholder="Last Name"  name="LNAME" class ="required" type="text" id="mce-LNAME">
                                                            <!-- react-text: 169 -->
                                                            <!-- /react-text -->
                                                        </div>
                                                    </div>
                                                    <div style="margin-bottom: 0px;" data-radium="true" class="rmq-e020e205 col-sm-4 mc-field-group">
                                                        <div data-radium="true">
                                                            <label for="email"></label>
                                                            <input style="width: 100%; height: 31px; padding-left: 20px; font-size: 14px; border-radius: 22px; border: medium none; outline: medium none;" data-radium="true" class="rmq-597fe5b6" placeholder="Email (required)" class ="required email" name="EMAIL" type="text" id="mce-EMAIL">
                                                            <!-- react-text: 174 -->
                                                            <!-- /react-text -->
                                                        </div>
                                                    </div>
                                                    
                                                    <div id="mce-responses" class="clear">
                                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                                    </div> 
                                                </div>
                                                <div class="clearfix"></div>
                                                <div data-radium="true">
                                                    <input style="border-radius: 22px; border: medium none; color: white; background: rgb(255, 98, 70) none repeat scroll 0% 0%; font-size: 14px; padding: 6px; margin: 30px; cursor: not-allowed; outline: medium none; display: inline-block; width: 366px; height: 40px;" data-radium="true" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button kbtn">
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
                                      
                                      
                                      <!--*******************************************************mialchimp form**************************************************************-->    
                                    </div>
                
                                </div>



                                <div style="float: none; display: inline-block; vertical-align: top;" data-radium="true" class="col-xs-12 text-center col-md-5 tabv">


                                    <p style="float: none; display: inline-block; vertical-align: top; font-size: 22px;" data-radium="true" class="gtm-extra-light">COMING EVENTS</p>
                                    <?php
                                        //**************START Code for read upcoming events.***********//
                                        $url = "https://knotel.com/publications/upcoming10Events";
                                        $ch = curl_init();
                                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                        curl_setopt($ch, CURLOPT_URL,$url);
                                        $result=curl_exec($ch);
                                        curl_close($ch);
                                        $response = json_decode($result, true);
                                        $i = 0;
                                        foreach($response as $key => $events){
                                            $j = 0;
                                            foreach($events as $event){
                                                $starttime = $event['startDate'];
                                                $starttime = date("H:i",strtotime($starttime));
                                                $endtime = $event['endDate'];
                                                $endtime = date("H:i",strtotime($endtime));
                                                $eventday = strtotime($event['startDate']);
                                                $month = date("M",$eventday);
                                                $day = date("d",$eventday);
                                                $eventyear = date("Y",$eventday);
                                                $todaydate = date("Y-m-d");
                                                $eventdate = date("Y-m-d",strtotime($event['startDate']));
                                                //if($eventdate >= $todaydate){
                                                $j++;
                                            if($j > 3){
                                                echo '<div class="SlideDivUp">';
                                            }
                                        ?>

                                        <div data-radium="true" id="js-tst-coming-events" class="event-list js-tst-coming-events">
                                        <div style="margin: 22px auto; background: rgb(255, 255, 255) none repeat scroll 0% 0%; cursor: pointer; border-radius: 2px; overflow: hidden; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.12), 0px 1px 2px rgba(0, 0, 0, 0.24); transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) 0s; width:500px;" data-radium="true" class="rmq-fe6607cb js-tst-event">
                                            <a href = "<?php echo get_site_url('','event-detail?event='.$event['urlName']); ?>">
                                                <div style="width: 100%; height: 300px;" data-radium="true"><img style="width: 100%; height: 100%; object-fit: cover;" data-radium="true" src="<?php if(isset($event['imageCdnUrl']) && !empty($event['imageCdnUrl'])){ echo $event['imageCdnUrl'];  } elseif(isset($event['imageUrl']) && !empty($event['imageUrl'])){ echo $event['imageUrl']; }else { echo  get_stylesheet_directory_uri()."/images/coming-soon.jpg";  }  ?>"></div>
                                                <div style="width: 100%; padding: 20px;" data-radium="true">
                                                    
                                                    <div class="upcoming-event-cls" data-radium="true">

                                                        <div style="text-transform: uppercase;" data-radium="true">
                                                            <p style="margin: 0px; font-size: 40px;" data-radium="true" class="gtm-bold"><?php echo $day; ?><span style="font-size:16px;"> <?php echo $month; ?></span></p>
                                                           
                                                            <hr>
                                                            <p style="margin: 0px; font-size: 22px;" data-radium="true" class="gtm-book"><?php echo $eventyear; ?></p>
                                                        </div>
                                                    </div>
                                                    <div style="display: inline-block; width: calc(100% - 100px); vertical-align: top; padding-left: 20px;" data-radium="true" class="text-left">
                                                        <div style="margin-bottom: 10px;" data-radium="true">
                                                            <div style="max-height: 2.2em; overflow: hidden; font-size: 20px; text-transform: uppercase;" data-radium="true" class="gtm-bold"><?php  echo $event['title'];  ?></div>
                                                        </div>
                                                        <div data-radium="true">
                                                            <div data-radium="true" class="gtm-book">
                                                                <!-- react-text: 598 --><?php echo $starttime; ?>
                                                                <!-- /react-text -->
                                                                <!-- react-text: 599 -->to
                                                                <!-- /react-text -->
                                                                <!-- react-text: 600 --><?php echo $endtime; ?>
                                                                <!-- /react-text -->
                                                                <!-- react-text: 601 -->at Knotel 
                                                                <!-- /react-text -->
                                                                <!-- react-text: 602 --><?php echo $event['addressLine']; ?>
                                                                <!-- /react-text -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                        <?php
                                        if($j > 3){
                                                echo '</div>';
                                            }
                                            }
                                    
                                            }
                                        //}
  
                                    ?>
                                </div>
                      
                                <div style="float: none; display: inline-block; vertical-align: top;" data-radium="true" class="col-xs-12 text-center col-md-5 tabv">
                                    <p style="float: none; display: inline-block; vertical-align: top; font-size: 22px;" data-radium="true" class="gtm-extra-light">PAST EVENTS</p>
                                    <div data-radium="true" id="js-tst-past-events" class="event-list js-tst-past-events">
                                    <?php
                                        //**************START Code for read upcoming events.***********//
                                        $url = "https://knotel.com/publications/past10Events";
                                        $ch = curl_init();
                                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                        curl_setopt($ch, CURLOPT_URL,$url);
                                        $result=curl_exec($ch);
                                        curl_close($ch);
                                        $response = json_decode($result, true);

                                        $i = 0;
                                        foreach($response as $key => $events){
                                            $j = 0 ;
                                            foreach($events as $event){
                                                $starttime = $event['startDate'];
                                                $starttime = date("H:i",strtotime($starttime));
                                                $endtime = $event['endDate'];
                                                $endtime = date("H:i",strtotime($endtime));
                                                $eventday = strtotime($event['startDate']);
                                                $month = date("M",$eventday);
                                                $day = date("d",$eventday);
                                                $eventyear = date("Y",$eventday);
                                                $currentyear = date("Y");
                                                $todaydate = date("Y-m-d");
                                                $eventdate = date("Y-m-d",strtotime($event['startDate']));
                                                //if($eventdate < $todaydate && $eventyear == $currentyear ){
                                                $j++;
                                                if($j > 3){
                                                    echo '<div class="SlideDivUp">';
                                                }
                                        ?>
                                        
                                        <div style=" margin: 22px auto; background: rgb(255, 255, 255) none repeat scroll 0% 0%; cursor: pointer; border-radius: 2px; overflow: hidden; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.12), 0px 1px 2px rgba(0, 0, 0, 0.24); transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) 0s; width: 500px;" data-radium="true" class="rmq-fe6607cb js-tst-event">
                                            <a href = "<?php echo get_site_url('','event-detail?event='.$event['urlName']); ?>">
                                                <div style="width: 100%; height: 300px;" data-radium="true"><img style="width: 100%; height: 100%; object-fit: cover;" data-radium="true" src="<?php if(isset($event['imageCdnUrl']) && !empty($event['imageCdnUrl'])){ echo $event['imageCdnUrl'];  } elseif(isset($event['imageUrl']) && !empty($event['imageUrl'])){ echo $event['imageUrl']; } else{ echo  get_stylesheet_directory_uri()."/images/coming-soon.jpg";  }   ?>"></div>
                                                <div style="width: 100%; padding: 20px;" data-radium="true">
                                                    
                                                    <div class="upcoming-event-cls" data-radium="true">

                                                        <div style="text-transform: uppercase;" data-radium="true">
                                                            <p style="margin: 0px; font-size: 40px;" data-radium="true" class="gtm-bold"><?php echo $day; ?><span style="font-size:16px;"> <?php echo $month; ?></span></p>
                                                            <hr>
                                                            <p style="margin: 0px; font-size: 22px;" data-radium="true" class="gtm-book"><?php echo $eventyear; ?></p>
                                                        </div>
                                                    </div>
                                                    <div style="display: inline-block; width: calc(100% - 100px); vertical-align: top; padding-left: 20px;" data-radium="true" class="text-left">
                                                        <div style="margin-bottom: 10px;" data-radium="true">
                                                            <div style="max-height: 2.2em; overflow: hidden; font-size: 20px; text-transform: uppercase;" data-radium="true" class="gtm-bold"><?php  echo $event['title'];  ?></div>
                                                        </div>
                                                        <div data-radium="true">
                                                            <div data-radium="true" class="gtm-book">
                                                                <!-- react-text: 598 --><?php echo $starttime; ?>
                                                                <!-- /react-text -->
                                                                <!-- react-text: 599 -->to
                                                                <!-- /react-text -->
                                                                <!-- react-text: 600 --><?php echo $endtime; ?>
                                                                <!-- /react-text -->
                                                                <!-- react-text: 601 -->at Knotel 
                                                                <!-- /react-text -->
                                                                <!-- react-text: 602 --><?php echo $event['addressLine']; ?>
                                                                <!-- /react-text -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                       <?php
                                       if($j > 3){
                                                echo '</div>';
                                            }
                                        }
                                        }    
                                        //}
                                       ?> 
                                       
                                    </div>
                                </div>
                                
                                
                                
                                  <div data-radium="true" class="col-xs-12 text-center col-md-12"> <a href="#" id="readmoreEvent" act="more" class="read-btn btn center-block kbtn" style="color: #fff;"> Read More</a> </div>
                                
                                
                                
                             
                                <div style="background: rgb(187, 159, 125) none repeat scroll 0% 0%; color: rgb(255, 255, 255); font-weight: 100; position: relative; clear: both;" data-radium="true" class="text-center gtm-book v-center">
                                    <div style="background-color: rgb(90, 146, 191); opacity: 1; height: auto; font-size: 36px; width: 100%;" data-radium="true" class="rmq-21f120e text-center header gtm-extra-light">
                                        <div data-radium="true">
                                            <!-- react-text: 188 -->Interested in hosting your next event at a Knotel?
                                            <!-- /react-text -->
                                            <br>
                                            <!-- react-text: 190 -->Get in touch with us today!
                                            <!-- /react-text -->
                                        </div>
                                    </div>
                                    <div style="display: inline-block; width: 100%;" data-radium="true">
                                        <p class="gtm-thin"></p>
                                        <div class = "contafrmcls">
                                        <?php echo do_shortcode("[contact-form-7 id='68' title='Contact form 1']");  ?>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" data-radium="true" style="background: rgb(245, 245, 245);">
                    <div class="col-xs-12">
                    <div style="position: relative; text-align:center;" data-radium="true">
                                    <div style="display: inline-block; width: 142px; height: 142px; border-radius: 50%; position: relative; text-align: center; overflow: hidden; background-color: rgb(187, 159, 125); align-self: center; margin-top: 30px;margin-bottom: 30px; " data-radium="true" class="rmq-c4aee8dd">
                                        <div style="width: 50%; display: inline-block; margin-top: 50%; transform: translateY(-50%);" data-radium="true">
                                            <svg data-radium="true" version="1.1" preserveAspectRatio="xMidYMid meet" viewBox="-13 0 285 285" height="100%" width="100%">
                                                <g data-radium="true" fill-rule="evenodd" fill="none" stroke-width="1" stroke="none" id="Land-+-Overview">
                                                    <g data-radium="true" fill="#FEFEFE" transform="translate(-591.000000, -246.000000)" id="Land-+-Overview---Desktop-HD">
                                                        <g data-radium="true" id="Section-1---Land">
                                                            <g data-radium="true" transform="translate(460.000000, 120.000000)" id="Logo-Lockup">
                                                                <g data-radium="true" transform="translate(131.000000, 365.000000)" id="Wordmark">
                                                                    <path id="L" d="M242,42.0555556 L259,26 L259,43 L241,43 L229,42.9995428 L229,2 L242,2 L242,42.0555556 Z"></path>
                                                                    <polygon points="220 12 220 2 188 2 188 43 220.089271 43 220 33 199 33 199 27 214 27 214 18 199 18 199 12" id="E"></polygon>
                                                                    <polygon points="180 2 144 2 144 12.5 156 12.5 156 43 168 43 168 12.5 180 12.5" id="T"></polygon>
                                                                    <path id="O" d="M118.5,12 C112.710454,12 108,16.7104539 108,22.5 C108,28.2895461 112.710454,33 118.5,33 C124.289546,33 129,28.2895461 129,22.5 C129,16.7104539 124.289546,12 118.5,12 M96,22.5 C96,10.0932203 106.09322,0 118.5,0 C130.90678,0 141,10.0932203 141,22.5 C141,34.9067797 130.90678,45 118.5,45 C106.09322,45 96,34.9067797 96,22.5 Z"></path>
                                                                    <polygon points="48 2 58.8706076 2 76.8471964 25 76.8471964 2 88 2 88 43 77.8419273 43 59.0684381 19.2446156 59.0684381 43 48 43" id="N"></polygon>
                                                                    <polygon points="42 2 27 2 11.5 18.5 11.5 2 0 2 0 45.5 16 28.5 27 43 42 43 24.5 20.5" id="K"></polygon>
                                                                </g>
                                                                <polyline points="334 126 260 322 186 126" id="Flag"></polyline>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <ul data-radium="true">
                                        <?php
                                            $menu_items = wp_get_nav_menu_items('footermenu');
                                            foreach ( (array) $menu_items as $key => $menu_item ) {
                                                if($menu_item->title == 'Careers'){
                                                    $link_target = "target = '_blank'";
                                                }elseif ($menu_item->title == 'I have space') {
                                                    $link_target = "target = '_blank'";    
                                                }else{
                                                    $link_target = "target = '_self'";
                                                }   
                                            ?>
                                        
                                        <li style="display: inline-block; width: 230px; margin-bottom: 20px;" data-radium="true">
                                            <div style="font-size: 18px; color: rgb(187, 159, 125);" data-radium="true" class="rmq-f3603296"><a href="<?php echo $menu_item->url;  ?>" <?php echo $link_target; ?> class="gtm-extra-light"><?php echo $menu_item->title;  ?></a></div>
                                        </li>
                                         <?php     
                                            }
                                        ?>
                                    </ul>
                                    <p class="gtm-thin">Copyright © 2017 KNOTEL. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                @media screen and (max-width:480px) {
                    .rmq-1f051394 {
                        height: 30vh !important;
                    }
                }
                
                @media screen and (max-width:320px) {
                    .rmq-24494ed1 {
                        height: calc(35vh + 64px) !important;
                    }
                }
                
                @media screen and (max-width:480px) {
                    .rmq-cf6c184f {
                        font-size: 28px !important;
                    }
                }
                
                @media screen and (max-width:320px) {
                    .rmq-bdf3850a {
                        font-size: 20px !important;
                    }
                }
                
                @media screen and (max-width:480px) {
                    .rmq-6ac507a5 {
                        font-size: 18px !important;
                        margin: 30px 0 0 0 !important;
                    }
                }
                
                @media screen and (max-width:320px) {
                    .rmq-6bdd4447 {
                        font-size: 20px !important;
                        margin: 25px 0 0 0 !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-8131a4a3 {
                        display: none !important;
                    }
                }
                
                @media screen and (max-width:320px) {
                    .rmq-99c7f619 {
                        letter-spacing: 0 !important;
                    }
                }
                
                @media screen and (max-width: 768px) and (min-width: 393px) {
                    .rmq-7d7ca92 {
                        padding: 0 !important;
                    }
                }
                
                @media screen and (max-width:480px) {
                    .rmq-8f05138c {
                        width: 20vh !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-21f120e {
                        font-size: 28px !important;
                        opacity: 1 !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-57363760 {
                        display: block !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-87874af2 {
                        background: #92CEFF !important;
                        font-weight: 300 !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-38507f08 {
                        display: block !important;
                        text-align: left !important;
                        margin: 0 !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-1a8e12bb {
                        display: block !important;
                        margin: 1em 0 !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-e4fe6c72 {
                        /*background-image: url('https://d1g17mzu1m6f7h.cloudfront.net/static-assets/b9c999fe661a_bi-1.2.jpg'), url('https://d1g17mzu1m6f7h.cloudfront.net/static-assets/248ae14d200a_bi-2.2.jpg'), url('https://d1g17mzu1m6f7h.cloudfront.net/static-assets/c70329660085_bi-3.2.jpg') !important; */
                        background-position: center !important;
                        background-repeat: no-repeat !important;
                        height: 220px !important;
                        width: auto !important;
                        display: block !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-8d558822 {
                        background-color: initial !important;
                        box-shadow: none !important;
                        width: auto !important;
                        height: auto !important;
                        display: block !important;
                        padding: 0 !important;
                        margin: 10px 20px 0px 20px !important;
                        font-weight: 300 !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-eb53322b {
                        position: relative !important;
                        flex-direction: column !important;
                        bottom: initial !important;
                        padding: 22px 0 22px !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-81090bd0 {
                        background-color: #92CEFF !important;
                        padding-bottom: 20px !important;
                        height: auto !important;
                        background-size: 0, 0, 0 !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-7b67cde4 {
                        font-size: 25px !important;
                        margin: 0 !important;
                        font-weight: 300 !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-a15360cf {
                        font-size: 18px !important;
                        letter-spacing: 1px !important;
                        font-weight: 300 !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-99b29990 {
                        /*background-image: url('https://d1g17mzu1m6f7h.cloudfront.net/static-assets/8f8f66ee13eb_sosa-1.2.jpg'), url('https://d1g17mzu1m6f7h.cloudfront.net/static-assets/7544c67a4c57_bloglovin1.jpg'), url('https://d1g17mzu1m6f7h.cloudfront.net/static-assets/485190b7ab5f_be-1.1.jpg'), url('https://d1g17mzu1m6f7h.cloudfront.net/static-assets/b973c2ec7e9d_be-3.jpg') !important; */
                        background-position: center !important;
                        background-repeat: no-repeat !important;
                        height: 220px !important;
                        width: auto !important;
                        display: block !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-e8346481 {
                        padding: 10px 20px !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-260f5a11 {
                        width: 100% !important;
                        position: relative !important;
                        background: initial !important;
                        height: initial !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-e3f807fe {
                        background: #92CEFF !important;
                        height: initial !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-b31e0d11 {
                        font-size: 20px !important;
                        margin: 30px 20px !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-e020e205 {
                        margin-bottom: 20px !important;
                    }
                }
                
                @media screen and (max-width:480px) {
                    .rmq-164b544e {
                        margin: 15px 20px 20px 20px !important;
                    }
                }
                
                @media screen and (max-width:420px) {
                    .rmq-35c6c4a2 {
                        width: 100% !important;
                        font-size: 16px !important;
                        margin: 0 0 30px 0 !important;
                        height: 35px !important;
                    }
                }
                
                @media screen and (max-width:420px) {
                    .rmq-597fe5b6 {
                        width: 100% !important;
                        font-size: 16px !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-c4aec95b {
                        margin-bottom: 20px !important;
                        margin-top: 20px !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-f3603296 {
                        font-size: 18px !important;
                        line-height: 70px !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-c4aee8dd {
                        width: 100px !important;
                        height: 100px !important;
                        margin: 10px !important;
                    }
                }
                
                @media screen and (max-width:768px) {
                    .rmq-fe6607cb {
                        width: initial !important;
                    }
                }

#menuUl > li {
  float: left;
}
#menuUl > li:hover, #menuUl > li:focus {
  background-color: rgba(255, 255, 255, 0.1);
}
#menuUl li .gtm-light span {
  float: left;
  padding: 9px 0 !important;
  width: 100%;
}
#menuUl > li:last-child:hover, #menuUl > li:last-child:focus {
  background-color: rgba(255, 255, 255, 0);
}

            </style>
        </div>
    </div>



    <script>
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            window.isMobile = true;
        } else {
            window.isMobile = false;
        }
    </script>
  
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/oct.js" type="text/javascript" async=""></script>


    <!-- start number replacer -->
    <script type="text/javascript">
        vs_account_id = "CA6phU7rfCQQ6ADO";
    </script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/number-changer.js">
    </script>
    

    <style>
        button::-moz-focus-inner,
        input::-moz-focus-inner {
            border: 0;
            padding: 0;
        }
    </style>
    <div>
        <div style="position: fixed; box-sizing: border-box; z-index: 1500; top: 0px; left: -10000px; width: 100%; height: 100%; transition: left 0ms cubic-bezier(0.23, 1, 0.32, 1) 450ms; overflow-y: auto;" data-reactroot="">
            <div></div>
            <div style="position: fixed; height: 100%; width: 100%; top: 0px; left: -100%; opacity: 0; background-color: rgba(0, 0, 0, 0.54); will-change: opacity; transform: translateZ(0px); transition: left 0ms cubic-bezier(0.23, 1, 0.32, 1) 400ms, opacity 400ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; z-index: 1400;">
                <!-- react-empty: 4 -->
            </div>
        </div>
    </div>
    <div>
        <div style="position: fixed; box-sizing: border-box; z-index: 1500; top: 0px; left: -10000px; width: 100%; height: 100%; transition: left 0ms cubic-bezier(0.23, 1, 0.32, 1) 450ms; padding: 0px; min-height: 434px; min-width: 310px;" data-reactroot="">
            <div></div>
            <div style="position: fixed; height: 100%; width: 100%; top: 0px; left: -100%; opacity: 0; background-color: rgba(0, 0, 0, 0.54); will-change: opacity; transform: translateZ(0px); transition: left 0ms cubic-bezier(0.23, 1, 0.32, 1) 400ms, opacity 400ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; z-index: 1400;">
                <!-- react-empty: 4 -->
            </div>
        </div>
    </div>
    <div>
        <div style="position: fixed; box-sizing: border-box; z-index: 1500; top: 0px; left: -10000px; width: 100%; height: 100%; transition: left 0ms cubic-bezier(0.23, 1, 0.32, 1) 450ms; font-size: 14px; color: rgba(0, 0, 0, 0.87);" data-reactroot="">
            <div></div>
            <div style="position: fixed; height: 100%; width: 100%; top: 0px; left: -100%; opacity: 0; background-color: rgba(0, 0, 0, 0.54); will-change: opacity; transform: translateZ(0px); transition: left 0ms cubic-bezier(0.23, 1, 0.32, 1) 400ms, opacity 400ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; z-index: 1400;">
                <!-- react-empty: 4 -->
            </div>
        </div>
    </div>
    <div>
        <div style="position: fixed; box-sizing: border-box; z-index: 1500; top: 0px; left: -10000px; width: 100%; height: 100%; transition: left 0ms cubic-bezier(0.23, 1, 0.32, 1) 450ms; font-size: 14px; color: rgba(0, 0, 0, 0.87);" data-reactroot="">
            <div></div>
            <div style="position: fixed; height: 100%; width: 100%; top: 0px; left: -100%; opacity: 0; background-color: rgba(0, 0, 0, 0.54); will-change: opacity; transform: translateZ(0px); transition: left 0ms cubic-bezier(0.23, 1, 0.32, 1) 400ms, opacity 400ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; z-index: 1400;">
                <!-- react-empty: 4 -->
            </div>
        </div>
    </div>
   

    
    
    

<style>
    div.rmq-e8346481,div.rmq-8d558822{
        cursor: pointer !important;
    }
    .gm-style .gm-style-iw {
  font-size: 13px;
  font-weight: 300;
  overflow: hidden;
  padding: 12px 5px;
  color: #000;
}
</style>
<script>
    $(document).ready(function(){
        $(document).on('mouseover','div.rmq-8d558822',function(){
            var index = $(this).index();
            $(document).find('p.rmq-1a8e12bb').show();
            $(document).find('div.rmq-1a8e12bbne').hide();
            $(this).find('div.rmq-1a8e12bbne').show();
            $(this).find('p.rmq-1a8e12bb').hide();
            if(index == 0){
                $('div.rmq-81090bd0').css('background-size','cover, 0 auto, 0 auto');
            } else if(index == 1){ 
                $('div.rmq-81090bd0').css('background-size','0 auto,cover, 0 auto');
            } else {
                $('div.rmq-81090bd0').css('background-size','cover, 0 auto, cover');
            }
            
        });
        
        
        $(document).on('mouseover','div.rmq-e8346481',function(){
            $('div.rmq-e8346481').css({'background-color': '#fff','color': '#000'});
            $(this).css({'background-color': 'rgb(187, 159, 125)','color': 'white'});
            var index = $(this).index();
            if(index == 0){
                $('div.rmq-e8346481div').css('background-size','cover, 0 auto, 0 auto, 0 auto');
            } else if(index == 1){ 
                $('div.rmq-e8346481div').css('background-size','0 auto,cover, 0 auto, 0 auto');
            } else if(index == 2){ 
                $('div.rmq-e8346481div').css('background-size','0 auto, 0 auto,cover, 0 auto');
            } else if(index == 3){ 
                $('div.rmq-e8346481div').css('background-size','0 auto,0 auto, 0 auto, cover');
            } else {
                $('div.rmq-81090bd0').css('background-size','0 auto, 0 auto,0 auto, cover');
            }
            
        });


        $(document).on('click','ul#menuUl li a', function(evt){
            var  locationDiv = $(this).attr('href');
            if(locationDiv.indexOf("http") < 0){
                evt.preventDefault();
                locationDivId = locationDiv.substring(1);   
                $('html, body').animate({scrollTop: ($("div#"+locationDivId).offset().top- 50)},1000);
            } 
        });
        
        var dateToday = new Date();
        var strDate =  dateToday.getDate() + "/" +(dateToday.getMonth()+1) + "/"  + dateToday.getFullYear();
        
        var dt = new Date();
        var time = dt.getHours() + ":" + dt.getMinutes(); 
        
        
        $('#ev-date').val(strDate);
        $('#end-time').val(time);
        $('#start-time').val(time);
        $('#end-time').attr('readonly', true);
        $('#start-time').attr('readonly', true);
        $('#ev-date').attr('readonly', true);
        
        $('#ev-date').datepicker({
            format: 'dd/mm/yyyy',
            todayBtn: "linked",
            calendarWeeks: true,
            autoclose: true,
            startDate: dateToday
        });
       
      
        
        
        $('#end-time,#start-time').clockpicker({
            placement: 'top',
            align: 'left',
            donetext: 'Done'
        });
        
        
        $(".mapclsredirect").click(function() {
            var url = $(this).attr("attr-url");
            window.open(url);  
            
        });

        $("a#readmoreEvent").click(function(Evt) {
            Evt.preventDefault();
            if($(this).attr('act') == 'more'){
                $('div.SlideDivUp').slideDown();
                $(this).attr('act','less').text('Read Less');
            } else {
                $('div.SlideDivUp').slideUp();
                $(this).attr('act','more').text('Read More');
                $('html, body').animate({scrollTop: ($('a#readmoreEvent').offset().top + $(window).height())},1500);
            }
        });
        
        
       
    });
    $(window).scroll(function(){
         var scroll = $(window).scrollTop();
         var section2 = $('div#section-2').offset().top 
         if(scroll > section2){
            $('#BookATour').css({'position': 'fixed','bottom' : '13px','right' : '0px','z-index': 9999});
         } else{
            $('#BookATour').css({'position': 'relative','bottom' : '0','z-index': 9999});
         }

         if($(window).scrollTop() < 10){
            $('div#headerDiv').css({"position": "fixed", "width": "100%", "height": "inherit", "display": "flex", "padding": "0px 20px", "font-size": "25px", "align-items": "center", "justify-content": "space-between", "background-color": "transparent", "color": "rgb(255, 255, 255)", "z-index": "100", "box-shadow": "none", "transition": "background-color 0.3s linear 0s"}).find('#TopLogo,#TopLogoMb').css('visibility','hidden'); //hide
         } else {
            $('div#headerDiv').css({"background-color": "rgb(90, 146, 191)" }).find('#TopLogo,#TopLogoMb').css('visibility','visible'); //show
         }
    });

  
  $(document).find('#map').height( $('div.right-collapse').outerHeight()  );   
</script>
    <script src="<?php echo  get_stylesheet_directory_uri();  ?>/js/map/bootstrap.min.js"></script>
    
    <script type="text/javascript">
        
        
        
        
    </script>
    
 <?php get_template_part('googleadward'); ?>
 <?php wp_footer(); ?>
    
 </body>
</html>
