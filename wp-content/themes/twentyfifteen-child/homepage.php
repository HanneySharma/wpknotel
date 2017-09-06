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
    <meta property="og:image" content="https://d1g17mzu1m6f7h.cloudfront.net/static-assets/b3d1ef348353_background-6.jpg">
    <meta property="og:description" content="The next level in company-sized workspace for companies up to 200 people.">
     <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyBUZRmPI23_wHQV2nJKqaFsYKpHpsVAKoQ"></script>
   
     <script type="text/javascript">


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
                     "featureType": "all",
                     "elementType": "labels.text",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "administrative",
                     "elementType": "all",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "administrative",
                     "elementType": "labels.text",
                     "stylers": [{
                         "visibility": "off"
                     }, {
                         "hue": "#00b2ff"
                     }]
                    }, {
                     "featureType": "administrative.country",
                     "elementType": "geometry.stroke",
                     "stylers": [{
                         "visibility": "off"
                     }, {
                         "color": "#c7c7c7"
                     }]
                    }, {
                     "featureType": "administrative.country",
                     "elementType": "labels.text",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "administrative.province",
                     "elementType": "geometry.stroke",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "administrative.province",
                     "elementType": "labels.text",
                     "stylers": [{
                         "visibility": "on"
                     }]
                    }, {
                     "featureType": "administrative.locality",
                     "elementType": "labels.text",
                     "stylers": [{
                         "visibility": "off"
                     }, {
                         "color": "#484848"
                     }]
                    }, {
                     "featureType": "administrative.locality",
                     "elementType": "labels.text.fill",
                     "stylers": [{
                         "color": "#555555"
                     }]
                    }, {
                     "featureType": "administrative.locality",
                     "elementType": "labels.text.stroke",
                     "stylers": [{
                         "color": "#ffffff"
                     }]
                    }, {
                     "featureType": "administrative.neighborhood",
                     "elementType": "labels.text",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "administrative.land_parcel",
                     "elementType": "labels.text",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "landscape",
                     "elementType": "all",
                     "stylers": [{
                         "color": "#e5e8e7"
                     }, {
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "landscape.man_made",
                     "elementType": "geometry.fill",
                     "stylers": [{
                         "color": "#ffffff"
                     }, {
                         "visibility": "on"
                     }]
                    }, {
                     "featureType": "landscape.natural",
                     "elementType": "geometry.fill",
                     "stylers": [{
                         "color": "#f5f5f2"
                     }, {
                         "visibility": "on"
                     }]
                    }, {
                     "featureType": "poi",
                     "elementType": "labels.icon",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "poi.attraction",
                     "elementType": "all",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "poi.business",
                     "elementType": "all",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "poi.government",
                     "elementType": "geometry",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "poi.medical",
                     "elementType": "all",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "poi.park",
                     "elementType": "all",
                     "stylers": [{
                         "color": "#91b65d"
                     }, {
                         "gamma": 1.51
                     }]
                    }, {
                     "featureType": "poi.park",
                     "elementType": "labels.icon",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "poi.place_of_worship",
                     "elementType": "all",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "poi.school",
                     "elementType": "all",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "poi.sports_complex",
                     "elementType": "all",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "poi.sports_complex",
                     "elementType": "geometry",
                     "stylers": [{
                         "color": "#c7c7c7"
                     }, {
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "road",
                     "elementType": "all",
                     "stylers": [{
                         "color": "#ffffff"
                     }]
                    }, {
                     "featureType": "road",
                     "elementType": "labels",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "road.highway",
                     "elementType": "geometry",
                     "stylers": [{
                         "color": "#ffffff"
                     }, {
                         "visibility": "simplified"
                     }]
                    }, {
                     "featureType": "road.highway",
                     "elementType": "labels.icon",
                     "stylers": [{
                         "color": "#ffffff"
                     }, {
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "road.arterial",
                     "elementType": "all",
                     "stylers": [{
                         "visibility": "simplified"
                     }, {
                         "color": "#ffffff"
                     }]
                    }, {
                     "featureType": "road.arterial",
                     "elementType": "geometry",
                     "stylers": [{
                         "visibility": "simplified"
                     }]
                    }, {
                     "featureType": "road.local",
                     "elementType": "all",
                     "stylers": [{
                         "color": "#ffffff"
                     }, {
                         "visibility": "simplified"
                     }]
                    }, {
                     "featureType": "road.local",
                     "elementType": "geometry",
                     "stylers": [{
                         "visibility": "on"
                     }]
                    }, {
                     "featureType": "transit",
                     "elementType": "all",
                     "stylers": [{
                         "visibility": "off"
                     }]
                    }, {
                     "featureType": "water",
                     "elementType": "all",
                     "stylers": [{
                         "color": "#a0d3d3"
                     }]
                    }]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
               


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
                            var lcatn  = ['<?php echo $value->address;?><br><br> <u>Click for more info</u> ',<?php echo $value->lat; ?>, <?php echo $value->lng; ?>,<?php echo $key ?>,'<?php echo ''.$value->url_link; ?>' ,];
                            locations.push(lcatn);
                            <?php 
                        }
                    } ?>
                for (i = 0; i < locations.length; i++) {
                  marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    label: '',
                    icon: '<?php echo get_stylesheet_directory_uri()."/arrow-small.png"; ?>',
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
                     this.setIcon('<?php echo get_stylesheet_directory_uri()."/arrow-big.png"; ?>');
                    }
                  })(marker, i));

                  google.maps.event.addListener(marker, 'mouseout', (function(marker, i) {
                    return function() {
                      infowindow.close(map, marker);
                      this.setIcon('<?php echo get_stylesheet_directory_uri()."/arrow-small.png"; ?>');
                    }
                  })(marker, i));
                }
            }
        </script>

            <style type="text/css">
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
                        <div style="position: relative; background: rgb(41, 34, 20) none repeat scroll 0% 0%; color: rgb(255, 255, 255); text-align: center;" data-radium="true" class="row">
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
                                        <a href="https://app.knotel.com">
                                            <button style="-moz-user-select: none; border: 10px none; box-sizing: border-box; display: inline-block; font-family: Roboto,sans-serif; cursor: pointer; text-decoration: none; margin: 0px; padding: 0px; outline: medium none; font-size: inherit; font-weight: inherit; transform: translate(0px, 0px); vertical-align: middle; height: 40px; line-height: 36px; min-width: 88px; color: white; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; border-radius: 2px; position: relative; overflow: hidden; background-color: transparent; text-align: center; letter-spacing: 1px;" type="button" tabindex="0">
                                                <div><span style="position: relative; padding-left: 16px; padding-right: 16px; vertical-align: middle; letter-spacing: 0px; text-transform: uppercase; font-weight: 500; font-size: 14px;">Login</span></div>
                                            </button></a>
                                        </div>  </div>
										
										
										   <div class="mobile-box">  
										   
										 <div data-radium="true" style="display: flex; align-items: center; cursor: pointer;"><div id="TopLogoMb" data-radium="true" style="display: none; width: 40px; height: 40px; border-radius: 50%; position: relative; text-align: center; overflow: hidden; background-color: rgb(187, 159, 125); cursor: pointer; margin-right: 10px;"><div data-radium="true" style="width: 56%; display: inline-block; margin-top: 56%; transform: translateY(-50%);"><svg width="100%" height="100%" viewBox="28 0 200 200" preserveAspectRatio="xMidYMid meet" version="1.1" data-radium="true"><g id="Land-+-Overview" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" data-radium="true"><g id="Land-+-Overview---Desktop-HD" transform="translate(-591.000000, -246.000000)" fill="#FEFEFE" data-radium="true"><g id="Section-1---Land" data-radium="true"><g id="Logo-Lockup" transform="translate(460.000000, 120.000000)" data-radium="true"><!-- react-text: 18 --><!-- /react-text --><polyline id="Flag" points="334 126 260 322 186 126"/></g></g></g></g></svg></div></div><span class="rmq-8131a4a3" data-radium="true"></span><div class="rmq-8131a4a3" data-radium="true" style="margin-left: 3px;"></div></div><div class="rmq-7d7ca92" data-radium="true" style="flex: 1 1 0%; display: flex; align-items: center; justify-content: center;"><span class="rmq-99c7f619" data-radium="true" style="display: inline-block; margin: 2px 10px; letter-spacing: 1px; font-family: Roboto,sans-serif; font-size: 14px;"><a href="tel:6469790898" tabindex="0" style="border: 10px none; box-sizing: border-box; display: inline-block; font-family: Roboto,sans-serif; cursor: pointer; text-decoration: none; margin: 0px; padding: 12px; outline: medium none; font-size: 0px; font-weight: inherit; transform: translate(0px, 0px); vertical-align: middle; position: relative; overflow: visible; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; width: 48px; height: 48px; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;"><div><svg viewBox="0 0 24 24" style="display: inline-block; color: rgba(0, 0, 0, 0.87); fill: rgb(255, 255, 255); height: 24px; width: 24px; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg></div></a></span><span class="rmq-99c7f619" data-radium="true" style="display: inline-block; margin: 2px 10px; letter-spacing: 1px; font-family: Roboto,sans-serif; font-size: 14px;"><a href="mailto:hellohello@knotel.com" tabindex="0" style="border: 10px none; box-sizing: border-box; display: inline-block; font-family: Roboto,sans-serif; cursor: pointer; text-decoration: none; margin: 0px; padding: 12px; outline: medium none; font-size: 0px; font-weight: inherit; transform: translate(0px, 0px); vertical-align: middle; position: relative; overflow: visible; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; width: 48px; height: 48px; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;"><div><svg viewBox="0 0 24 24" style="display: inline-block; color: rgba(0, 0, 0, 0.87); fill: rgb(255, 255, 255); height: 24px; width: 24px; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg></div></a></span></div><div data-radium="true" style="display: flex; align-items: center;">
                                         <a href="https://app.knotel.com">
                                         <button tabindex="0" type="button" style="border: 10px none; box-sizing: border-box; display: inline-block; font-family: Roboto,sans-serif; cursor: pointer; text-decoration: none; margin: 0px; padding: 0px; outline: medium none; font-size: inherit; font-weight: inherit; transform: translate(0px, 0px); vertical-align: middle; height: 40px; line-height: 36px; min-width: 88px; color: white; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; border-radius: 2px; position: relative; overflow: hidden; background-color: rgba(0, 0, 0, 0); text-align: center; letter-spacing: 1px;"><div><span style="position: relative; padding-left: 16px; padding-right: 16px; vertical-align: middle; letter-spacing: 0px; text-transform: uppercase; font-size: 14px; font-weight: 500;">Login</span></div></button></a></div>
										   
										   
										   
										   
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
                                                if($menu_item->title == "Explore Knotel SF"){?>
                                                    
                                        <li style="display: inline-block; margin: 12px;" data-radium="true">
                                            <a target = "_blank" href="<?php echo $menu_item->url;  ?>">
                                                <div style="color: rgba(0, 0, 0, 0.87); background: rgb(51, 33, 120) none repeat scroll 0% 0%; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; box-sizing: border-box; font-family: Roboto,sans-serif; box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.12), 0px 1px 4px rgba(0, 0, 0, 0.12); border-radius: 0px; display: inline-block; min-width: 88px; width: 180px; font-size: 18px;" class="gtm-light">
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
                              <div class="gtm-light ExploreKnotelSF" style=" color: rgba(0, 0, 0, 0.87); background: rgb(51, 33, 120) none repeat scroll 0% 0%; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; box-sizing: border-box; font-family: Roboto,sans-serif; box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.12), 0px 1px 4px rgba(0, 0, 0, 0.12); border-radius: 20px; display: none; min-width: 88px; width: 180px; font-size: 18px;"><a href="http://try.knotel.com/sanfrancisco" tabindex="0" style="border: 10px none; box-sizing: border-box; display: inline-block; font-family: Roboto,sans-serif; cursor: pointer; text-decoration: none; margin: 0px; padding: 0px; outline: medium none; font-size: inherit; font-weight: inherit; transform: translate(0px, 0px); vertical-align: middle; position: relative; height: 36px; line-height: 36px; width: 100%; border-radius: 2px; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; background-color: rgb(51, 33, 120); text-align: center;"><div><div style="height: 36px; border-radius: 2px; transition: all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms; top: 0px;"><span style="-moz-user-select: none; position: relative; opacity: 1; font-size: 16px; letter-spacing: 0px; text-transform: none; font-weight: 300; margin: 0px; padding: 0px 10px; color: white; font-family: &quot;Gotham A&quot;,&quot;Gotham B&quot;; font-style: normal; line-height: 1em;">Explore Knotel SF</span></div></div></a></div>
                                </div>
                            <div class="btm-link" style="position: relative; text-align: left; width:50%" data-radium="true" >
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
                    <!--<div id="section-2">
                        <div id = "locations" style="position: relative; color: rgb(255, 255, 255); background: rgb(224, 197, 164) none repeat scroll 0% 0%;" data-radium="true" class="rmq-87874af2 row text-center">
                            <div style="background-color: rgb(90, 146, 191); opacity: 1; height: 100px; font-size: 36px; width: 100%;" data-radium="true" class="rmq-21f120e text-center header gtm-extra-light">
                                <div style="top: 50%; transform: translateY(-50%); position: relative; color: rgb(255, 255, 255);" data-radium="true">Our Locations</div>
                            </div>
                            
                              <div id="map"></div>  
                             
                              
                              
                              
                            
                        </div>
                    </div>-->
                    
                  <div id="section-2">
    <div id="locations" style="position: relative; color: rgb(255, 255, 255); background: rgb(224, 197, 164) none repeat scroll 0% 0%;" data-radium="true" class="rmq-87874af2 row text-center">
        <div style="background-color: rgb(90, 146, 191); opacity: 1; height: 100px; font-size: 36px; width: 100%;" data-radium="true" class="rmq-21f120e text-center header gtm-extra-light">
            <div style="top: 50%; transform: translateY(-50%); position: relative; color: rgb(255, 255, 255);" data-radium="true">Our Locations</div>
        </div>
        <div>
            <svg style="float: right;" version="1.1" preserveAspectRatio="xMaxYMax meet" width="100%" height="100%" viewBox="0 0 1350 1040">
                <g fill-rule="evenodd" fill="none" stroke-width="1" stroke="none" id="Section-2---Locations">
                    <g fill="#58585B" transform="translate(388.000000, 0.000000)" id="Map">
                        <g id="Layer_1">
                            <path id="Fill-1" d="M238.933807,1016.213 L248.763314,1004.12796 L250.675026,990.189488 L272.772602,953.512454 L278.026045,956.375493 L257.539123,990.566203 L255.326355,1004.76085 L244.533465,1018.54864 L225.913096,1024.09389 C225.913096,1024.09389 222.646628,1030.93091 222.646628,1034.34942 C222.646628,1037.76793 225.913096,1041.55268 225.913096,1041.55268 L225.913096,1047.47658 L238.933807,1051.43038 L970.396697,1051.43038 L970.396697,0 L733.555236,0 C739.455951,3.69181313 748.005967,5.30415601 750.549898,6.94663614 C753.169093,8.64939077 757.54947,12.3412039 755.532389,14.104233 C753.500255,15.9275367 751.212223,15.8069877 751.031589,19.2426342 C750.835902,22.663212 753.455097,24.3207608 752.160552,26.9577702 C750.88106,29.5646423 749.466093,34.4318082 745.627617,34.2208474 C741.8343,34.0249553 739.154894,34.2811219 737.453923,36.8578568 C735.79811,39.4345917 733.856293,39.7359642 729.61139,41.0167973 C725.32133,42.2976305 723.394565,42.1921501 721.392537,44.3771007 C719.360403,46.5620513 716.69605,46.4264337 712.78231,47.7675413 C708.898676,49.0634431 700.965827,54.0059521 696.088705,59.475863 C691.19653,64.9457739 682.556197,76.3225858 680.057425,79.9993303 C677.558653,83.706212 666.494812,104.922836 662.791812,109.669453 C659.088812,114.431138 641.687724,139.143683 638.376098,143.558791 C635.064472,147.958829 616.53442,172.204247 614.47218,175.534413 C613.674379,176.77004 612.169095,179.211157 610.453071,181.878304 C607.653241,186.218068 604.31151,191.13044 602.821278,192.471547 C600.412823,194.641429 586.759893,213.401868 584.757864,215.586818 C582.710677,217.771769 580.362434,218.796435 580.482856,223.392366 C580.648438,227.988297 580.783913,232.22258 578.3303,235.115756 C575.876686,238.069207 576.222901,238.445922 573.182227,238.702089 C570.096393,238.897981 565.249377,243.584324 565.249377,243.584324 C565.249377,243.584324 581.50645,254.072087 589.81562,255.684429 L588.671604,262.495448 C588.671604,262.495448 564.797792,252.007685 557.406845,247.01997 C557.406845,247.01997 547.80313,262.555722 544.551716,265.825614 C541.300301,269.095506 541.13472,272.109231 539.38859,276.238034 C537.657513,280.366837 536.137175,279.507926 538.304785,281.918906 C540.457342,284.329886 543.919496,284.149062 542.188419,287.871013 C540.472395,291.592963 537.732777,292.225845 536.814553,295.616286 C535.851171,299.006726 536.498444,301.327295 531.109525,301.824559 C525.720607,302.261549 522.393928,300.197148 521.460652,303.949235 C520.467164,307.716392 520.120949,328.345339 520.120949,328.345339 L511.706408,327.893281 L511.480616,332.097427 L517.561965,333.212505 L517.230802,339.30023 L507.612034,339.933112 C507.612034,339.933112 503.803665,354.278443 510.893555,356.960658 C517.998497,359.642874 519.849997,360.893569 525.720607,358.497658 C531.576163,356.162021 544.94309,349.230454 551.581394,346.924954 C558.219699,344.619454 570.60819,341.078327 580.362434,344.694797 C590.13173,348.250993 601.451469,350.812659 607.6984,354.956531 C607.6984,354.956531 626.514456,365.670324 630.473354,367.041568 C634.387094,368.397745 641.29635,367.915549 646.564845,366.182657 C651.803235,364.494971 679.28973,349.92361 681.096071,348.009895 C682.88736,346.081111 683.30884,344.363288 684.061482,340.686543 C684.859283,337.009799 689.676193,332.685103 691.542746,329.611104 C693.454457,326.552173 695.456485,320.961713 695.456485,320.961713 L691.030949,318.113743 L692.506128,311.905469 L705.90316,318.641145 L705.120412,322.920634 L700.544347,322.664468 C700.544347,322.664468 699.761599,326.069977 698.256315,327.68232 C696.75103,329.354937 693.921095,334.056348 692.566339,336.874181 C691.316953,339.661877 690.18799,344.468768 689.751457,346.457827 C689.360083,348.461954 688.517124,348.959218 686.394673,350.872934 C684.272222,352.77158 664.462678,363.440167 661.813377,365.037441 C659.164076,366.58951 648.627085,370.612833 647.106748,371.396401 C645.646622,372.134764 643.554276,374.319714 647.708862,376.293704 C651.923658,378.267694 665.094897,383.858154 669.460222,388.092438 C673.810495,392.371927 683.805584,403.251474 686.153827,412.292649 C688.54723,421.27355 693.725408,436.477793 694.417839,439.973714 C695.095217,443.439497 698.015469,447.055967 699.912128,449.180643 C701.823839,451.30532 714.197277,460.557455 717.764802,463.330082 C721.377484,466.147915 742.78263,473.049345 748.487658,473.637022 C754.177633,474.239767 768.02625,477.886374 770.494917,479.438442 C773.023795,481.005579 779.6621,485.405618 780.369583,487.741255 C781.107173,490.076892 780.730852,492.035813 784.298376,494.838577 C787.850847,497.611204 788.513172,501.363292 790.153932,503.472899 C791.734481,505.582507 806.004578,522.157994 809.060306,524.297739 C812.10098,526.48269 814.133114,526.316935 816.963049,526.48269 C819.792984,526.633376 831.20304,527.808729 833.430861,528.803258 C835.673735,529.797787 839.873479,531.726571 841.544345,533.293708 C843.154999,534.800571 843.004471,537.362237 841.258341,538.417041 C838.3983,538.673207 836.682276,537.422512 834.228662,536.006061 C830.856825,534.122483 815.231972,532.118356 813.786899,532.600552 C812.281614,533.112885 809.361362,534.649885 807.70555,537.995119 C806.094895,541.355423 802.25642,543.721197 806.411005,551.707568 C810.56559,559.693939 810.98707,562.014508 811.649395,565.766595 C812.31172,569.518683 811.09244,581.799612 812.10098,583.607847 C813.184785,585.355808 814.810492,586.922945 814.675017,589.213376 C814.554594,591.488738 814.283643,591.488738 816.496411,593.025738 C818.694126,594.577806 822.954081,600.544982 822.758394,604.251864 C822.547655,608.003951 822.637972,611.40946 822.637972,611.40946 L837.690816,613.699891 L837.359654,619.697204 L821.719748,617.421842 C821.719748,617.421842 814.780387,618.461577 812.718147,620.043783 C810.610749,621.671194 808.578615,621.836949 809.526944,625.649311 C810.46022,629.431536 811.438655,632.641153 811.333285,634.343908 C811.242968,636.031594 810.8817,637.764486 810.8817,637.764486 L807.871131,637.463113 L804.303607,637.131603 C804.303607,637.131603 806.215318,634.057604 804.589611,631.947996 C803.009062,629.883595 801.157562,626.900007 802.497265,623.2534 C803.852021,619.561587 803.776757,615.839636 808.443139,614.393048 C813.109521,612.901254 816.300724,612.524539 816.300724,612.524539 C816.300724,612.524539 817.610321,608.56149 815.758822,606.436814 C813.84711,604.357344 805.507834,594.125748 805.507834,594.125748 L776.16984,601.418962 L770.856185,604.583373 L772.376523,618.717744 L751.362751,625.589037 L755.562495,642.767269 L743.565378,647.57416 L755.773235,690.986869 L749.992942,692.689624 L741.171975,664.330472 L730.755407,666.937344 L728.768431,661.361952 L739.847325,657.700277 L735.79811,642.827544 L748.638186,638.668603 L745.477089,627.563026 L739.516162,626.689046 L740.50965,619.576655 L746.199625,620.450635 L764.880206,614.302636 L763.134076,598.420306 L770.178807,595.361375 L804.153078,588.038023 L805.43257,569.458408 L798.34268,568.478948 L782.657616,514.548339 C782.657616,514.548339 782.567299,510.494879 782.73288,507.390742 C782.898461,504.226331 780.745904,501.815351 778.638506,498.259155 C776.546161,494.687891 776.320368,493.813911 773.911913,490.830323 C771.473352,487.801529 759.416023,483.431628 756.300084,482.376824 C753.199198,481.337089 739.591427,478.624737 736.159378,478.428845 C732.727329,478.248021 724.643952,474.360316 721.844122,472.732904 C719.074399,471.165767 715.070342,470.668503 710.057745,468.378072 C705.045148,466.117778 690.157884,449.783388 686.861311,441.299753 C683.609897,432.801048 679.018779,411.900865 677.001698,406.867944 C674.984616,401.895298 663.710036,393.245907 661.226316,391.67877 C658.742597,390.126702 653.955792,387.836271 652.510719,388.318467 C651.065646,388.8308 650.282898,392.236309 648.777614,393.848652 C647.257276,395.506201 647.151906,392.34179 646.399264,390.277388 C645.646622,388.212987 641.311402,388.574634 639.294321,388.469153 C637.337451,388.348604 636.088065,395.174691 635.395634,397.70622 C634.658045,400.282955 635.079525,403.432298 635.184895,406.596709 C635.290265,409.776189 631.948533,407.847405 629.735765,406.58164 C627.507944,405.315876 629.720712,401.714475 630.172297,398.565132 C630.60883,395.476064 632.5657,391.543153 635.079525,387.640379 C637.578297,383.782811 638.361045,379.503321 638.361045,379.503321 C632.14422,378.297831 617.708542,369.784058 613.267953,367.252529 C608.81231,364.705932 593.127246,358.105874 585.510507,355.393521 C577.90882,352.681169 569.057747,352.756512 564.466629,352.816786 C559.875512,352.846924 549.308415,356.583943 546.659114,358.136011 C546.659114,358.136011 529.634346,370.703244 527.180733,373.732038 C524.727119,376.715626 515.439514,388.845869 513.61812,391.030819 C511.811778,393.230839 504.872417,404.336415 505.564848,407.530964 C506.257278,410.740581 508.349624,424.633853 509.839855,429.305127 C511.269876,433.976401 513.542855,450.446408 513.362221,453.882054 C513.166534,457.317701 510.095754,471.512346 509.975331,473.802777 C509.854908,476.093208 506.769075,485.375481 506.678758,487.078235 C506.588441,488.811127 506.407807,491.975538 506.407807,491.975538 L517.501754,492.849519 L517.847969,497.460518 C517.847969,497.460518 531.199842,499.901635 533.141659,500.323557 C535.143688,500.715341 537.085505,502.237272 537.085505,502.237272 L536.0017,511.082555 L518.058709,503.774272 L506.272331,499.404371 C506.272331,499.404371 505.760535,508.83733 504.46599,511.655163 C503.171445,514.42779 500.65762,518.330564 500.65762,518.330564 L492.649507,512.152427 L487.682068,519.053858 L496.427771,526.964886 L485.604775,541.882825 L478.48478,535.478659 L474.57104,538.989649 L477.250446,541.988305 L474.78178,551.345921 L470.837934,555.399381 L476.859072,560.055586 C476.859072,560.055586 468.655272,568.509085 466.517768,570.694036 C464.425423,572.863918 457.967752,581.151661 456.883947,585.084573 C455.78509,589.017484 451.66061,601.464168 450.110167,603.950491 C448.514566,606.436814 439.874233,633.515133 438.865692,636.890505 C437.811993,640.280946 433.115505,647.182376 432.739184,649.186503 C432.302652,651.19063 432.919818,655.80163 431.851066,659.463306 C430.827473,663.14005 429.48777,666.500354 430.375887,671.457931 C431.248952,676.385372 434.455208,690.610154 434.455208,690.610154 L434.078887,695.91431 L433.025188,711.736366 L446.331903,725.132374 L445.067464,733.05847 L423.587054,711.540474 L424.204221,689.495075 L410.190023,668.067491 L404.876368,671.171627 L418.137925,690.580016 L417.671286,704.006161 L394.745804,677.816891 L390.260056,681.026508 L405.869856,700.239005 L401.624954,703.734926 L391.539548,694.588271 L387.309698,698.943103 L411.665201,720.069315 L409.196535,723.098109 L434.696054,749.151762 L430.81242,752.391516 L406.667657,727.558422 L402.723811,730.737902 L429.713562,762.382015 L426.386884,765.365602 L401.579795,736.735215 L397.711214,738.54345 L420.034583,765.576563 L416.406847,769.087553 L398.689649,747.464076 L396.296247,749.347654 L404.469941,762.698456 L399.984194,765.893004 L390.410584,752.195624 L379.316638,771.377984 L375.131947,769.132759 L385.30767,750.764105 L385.593674,745.324331 L373.882561,744.947615 L374.424463,740.110587 L365.588443,728.703638 L366.491614,717.28162 L361.057537,717.582992 L357.6857,710.500739 L358.046968,699.048584 L328.874555,697.451309 L317.795661,701.158191 L295.743243,700.826681 L294.147642,709.325386 L289.827475,709.355523 L288.758723,703.011632 L275.572431,702.559573 L275.813276,708.918533 C275.813276,708.918533 262.416245,707.30619 260.655062,708.632229 C258.833667,709.958268 258.216501,711.073346 256.666058,712.730895 C255.160773,714.343238 254.24255,715.172012 251.954517,715.036395 C249.666485,714.915846 249.079424,715.443248 247.513928,712.23363 C245.993591,708.978807 246.038749,708.104827 242.636806,707.652768 C239.219811,707.185641 228.291445,707.41167 225.913096,709.024013 C223.519693,710.636356 222.887474,712.308974 222.751998,714.584336 C222.631576,716.874767 222.646628,721.741933 222.646628,721.741933 L210.047397,721.380286 L190.870073,741.813341 L200.293154,752.979193 L198.893239,757.771015 L183.012488,749.422997 L177.653675,758.629927 L193.790325,767.234112 L190.222801,774.512258 L173.754988,766.134102 L169.013342,774.783493 L187.949821,785.000021 L185.93274,790.032941 L182.320057,788.134295 L172.716342,806.849527 L154.5024,798.682332 L149.384433,808.416664 L166.665098,817.714006 L163.624424,825.534622 L146.343758,817.156467 L141.602112,824.931877 L159.801001,833.415513 L157.798973,838.222404 L139.585031,830.838778 L135.746555,838.116924 L166.439306,852.95952 L166.454359,857.841754 L147.638303,856.259548 L131.968291,849.388255 L128.054551,858.022578 L143.468664,864.652773 L139.976404,870.48433 L125.992312,864.532224 L122.469946,871.222693 L134.482116,877.06932 L130.688799,882.87074 L119.504535,877.672065 L115.997223,884.633769 L126.579373,890.088612 L120.859292,900.696924 L115.109105,895.799621 L107.191308,899.084581 L103.006618,896.553052 L69.0925579,918.794342 L71.4408017,923.797126 L80.6079843,918.010774 L89.1580001,929.357448 L58.2996682,959.253601 L52.4742172,950.905582 L51.3452539,944.832926 L70.1010986,932.08487 L63.7638509,922.275195 C63.7638509,922.275195 36.2321976,943.401407 31.7163442,947.198701 C27.2456492,950.950788 5.67492251,962.116639 5.67492251,962.116639 L4.92228027,970.976991 L13.1712393,971.986589 L15.4893774,976.431833 L14.5410482,983.860665 L9.06181265,984.116832 L8.15864191,990.671684 L0.406426813,990.520997 L0,997.934761 L18.2892065,998.944359 L18.048361,1003.52522 L12.5992312,1003.22385 L12.719654,1006.991 L6.68346311,1006.65949 L6.18671923,1010.62254 L18.4848935,1011.30063 C18.4848935,1011.30063 16.1818083,1016.63492 15.8054871,1018.36781 C15.3990603,1020.04043 15.0076864,1022.31579 16.3774953,1024.09389 C17.6870928,1025.90213 9.10697115,1056.13857 14.5410482,1051.43038 L200.293154,1051.43038 C203.439198,1046.97007 209.129173,1042.94143 210.047397,1041.49484 C212.862279,1037.04959 209.206486,1019.21166 214.700774,1018.36781 C220.210115,1017.52397 231.210104,1006.991 238.933807,1016.213 Z"></path>
                            <path id="Fill-4" d="M249.032902,23.8385648 L219.740066,70.445822 L207.90853,62.9115095 C207.90853,62.9115095 207.411786,72.0581649 203.287306,77.9499973 C203.287306,77.9499973 188.475307,103.717346 183.492815,110.935217 C178.525377,118.13802 157.782556,150.836936 154.711776,155.267112 C151.61089,159.682219 145.74028,172.535756 144.250049,178.804304 C142.759817,185.057784 135.910773,205.340153 132.990521,206.877153 C130.010058,208.414152 127.631708,210.026495 127.631708,210.026495 L124.470611,225.923895 L133.547476,227.566375 L127.631708,262.826957 L132.71957,263.655732 L132.042192,276.298308 L125.2082,275.318848 L123.56744,284.420297 L129.799318,285.354552 L127.210228,296.55054 L123.793233,311.378067 L107.807111,309.946548 L106.392144,325.949428 L115.499115,326.989163 C115.499115,326.989163 111.02842,366.966225 110.531676,376.127949 C110.01988,385.274604 104.751384,418.832432 104.751384,418.832432 L80.8625189,415.231031 L75.5338119,439.039458 L102.659038,446.25733 L97.7518109,470.47261 L81.5248441,550.110294 L52.6083291,544.534902 L41.07785,597.847698 L51.7954755,601.283344 L49.3719675,613.82044 L39.7682525,611.560146 L27.4098668,659.08659 L34.1986999,660.608521 L32.5278341,670.297647 L25.6938425,669.318186 C25.6938425,669.318186 25.0766759,680.770341 24.8207775,685.351203 C24.579932,689.916997 22.0962126,693.232094 27.1539685,694.648545 C32.2568829,696.080064 38.4737078,697.571858 38.4737078,697.571858 C38.4737078,697.571858 36.2458868,707.230847 36.0200941,711.208964 C35.8093543,715.187081 37.4651672,715.880237 41.273537,720.084384 C45.0819067,724.333736 48.06237,731.928323 52.9997031,736.23795 C57.9520891,740.562645 65.8698855,741.542106 65.8698855,741.542106 L64.8312392,750.673693 L82.698966,749.347654 L86.4471244,742.672253 L89.0512665,747.96134 L94.3799736,745.399674 L92.7392135,733.284499 C102.117136,729.758441 113.948672,722.962491 121.083721,718.170668 C128.233822,713.363777 172.489186,679.067586 182.002584,672.693558 C184.772307,670.870254 188.309726,669.092157 192.163254,667.419539 C201.691705,663.351011 213.101761,660.126325 218.882054,659.237276 C226.980484,657.98658 278.416055,651.024875 278.416055,651.024875 L279.60523,660.277011 L338.251113,657.187943 L338.507012,652.62215 C338.507012,652.62215 352.867426,651.657758 359.791734,650.889258 C366.716043,650.120758 373.911303,644.18372 378.984112,635.278162 C384.05692,626.372605 397.183001,596.144943 399.260294,589.921601 C401.337586,583.698259 412.085317,544.158187 416.254955,530.611493 C418.828992,522.263474 422.622309,499.690674 425.572666,481.261746 C427.379008,469.839728 428.884292,460.045122 429.501459,456.127279 C431.217483,445.895683 419.747215,434.940792 416.586118,430.721577 C413.334704,426.547568 411.829419,412.096757 411.739102,403.507641 C411.663838,394.918524 410.068236,371.275852 410.068236,371.275852 L424.518967,379.548527 C424.518967,379.548527 425.512455,361.240147 425.346874,354.338717 C425.121081,347.437287 429.651987,327.576839 431.232536,319.635674 C432.813085,311.67944 445.111259,286.560042 449.988381,281.029856 C454.880555,275.605151 470.339827,254.599488 471.754794,249.53643 C473.184815,244.473372 476.857709,240.088402 479.371534,236.185628 C481.870306,232.282854 514.655402,188.749597 521.399077,180.537196 C528.127698,172.27959 535.368117,165.785012 539.086169,161.400042 C541.148409,158.943856 544.881515,152.901338 549.081258,147.295809 C552.347726,142.925908 555.975461,138.766968 559.332246,136.702566 C567.02425,131.94088 586.788635,106.068051 592.990407,98.3227783 C599.101862,90.6679168 616.322316,69.2101947 621.455337,59.1594218 C626.588357,49.108649 653.59316,16.7111052 660.984107,7.36855764 C662.685079,5.22881288 664.9129,2.69728388 667.366513,0 L251.290829,0 C247.828674,6.04251863 240.181829,17.9768697 240.181829,17.9768697 L249.032902,23.8385648 Z"></path>
                            <path id="Fill-6" d="M668.573886,29.6098482 C667.836296,33.0153574 660.746406,46.9538356 655.372541,51.2483937 C650.013728,55.5580205 646.220411,61.1334117 644.895761,65.0512542 C643.495846,68.9690967 632.988961,83.3596336 627.615095,87.6541918 C622.196071,91.9487499 612.893413,105.224209 609.732315,110.181786 C606.571218,115.154433 605.743311,120.292834 599.089954,126.229872 C592.481755,132.197048 586.15956,142.775222 583.179097,145.457438 C580.138422,148.139653 572.461471,162.695945 566.982236,168.090512 C561.548159,173.575492 558.281691,181.38104 555.210911,184.696137 C552.140131,187.935892 543.800855,194.370194 543.093371,196.61542 C542.370834,198.875713 539.360266,211.940211 534.016506,215.67723 C528.672746,219.384112 526.113762,224.432101 523.479514,230.5801 C520.845266,236.728099 521.281799,239.048668 528.477059,233.141767 C535.687371,227.249934 556.249557,207.720996 561.653529,203.426438 C567.027394,199.116811 585.406918,177.719364 589.561503,174.509747 C593.7763,171.30013 598.246995,163.50965 600.86619,157.361651 C603.500437,151.168447 612.682673,140.198488 617.529689,135.316253 C617.529689,135.316253 623.656197,128.173725 626.094758,125.401098 C628.548371,122.688745 632.311583,116.570883 636.601643,111.100973 C640.936863,105.555719 648.357915,95.6857689 652.708187,90.1405149 C656.998248,84.670604 675.708934,56.9594026 680.044154,51.5045603 C684.334214,45.9593063 690.400511,39.9921308 694.570149,37.3249842 C698.709681,34.718112 701.238559,30.257799 704.926506,25.8728292 C708.5994,21.4727906 709.668152,12.898743 709.668152,12.898743 C709.893945,8.92062601 707.666124,7.65486151 710.195002,3.1945485 C710.751957,2.2301565 711.143331,1.11507825 711.429335,0 L700.094543,0 C699.356954,0.3013725 698.574206,0.542470501 697.671035,0.768499876 C694.223933,1.77809775 690.656409,3.28496025 687.510365,8.84528289 C684.36432,14.4056055 669.356634,26.2194075 668.573886,29.6098482 Z"></path>
                        </g>
                    </g>
                    <svg class = "mapclsredirect"  id="209 N 8th ST" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="509.35441558443716" x="937.9309374999997">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">209 N 8th St</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg  class = "mapclsredirect"  id="1 State St" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="680.8558441558629" x="414.11875000000276">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">1 State St</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg  class = "mapclsredirect"  id="22 W 38th St" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="99.04675324674234" x="709.9843750000051">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">22 W 38th St</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg  class = "mapclsredirect"  id="68 Jay St" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="680.5051948051853" x="661.3000000000882">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">68 Jay St</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg class = "mapclsredirect"  id="33 W 17th St" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="258.35844155849276" x="596.3781250000004">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">33 W 17th St</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg  class = "mapclsredirect"  id="116 W Houston St" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="388.3441558441481" x="529.3750000001048">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">116 W Houston St</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg class = "mapclsredirect"  id="30 Cooper Sq" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="383.73545454548906" x="596.3134374999772">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">30 Cooper Sq</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg  class = "mapclsredirect"  id="50 W 17th St" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="260.06493506491324" x="566.7831250000081">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">50 W 17th St</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg class = "mapclsredirect"  id="473 President ST" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="967.1984415583994" x="639.4028125000583">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">473 President St</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg class = "mapclsredirect"  id="28 W 23rd St" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="233.19350649356116" x="645.4093749999743">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">28 W 23rd St</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg class = "mapclsredirect"  id="25 West 26th St" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="185.51454545452484" x="622.3750000000443">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">25 West 26th St</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg class = "mapclsredirect"  id="875 6th Ave" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="138.9740259740289" x="594.165624999991">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">875 6th Ave</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg class = "mapclsredirect"  id="137 Varick ST" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="411.25324675328363" x="480.3250000000451">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">137 Varick St</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg  class = "mapclsredirect"  id="475 Park Ave S" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="183.9974025974254" x="702.8312500000796">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">475 Park Ave S</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg class = "mapclsredirect"  id="Madison Ave" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="54.05844155848834" x="754.2906250000514">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">Madison Ave &amp; 47th St</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg class = "mapclsredirect"  id="Times Square" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="66.4480519480441" x="651.8218750000376">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">Times Square</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg class = "mapclsredirect"  id="Plaza District" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="9.561038961066682" x="711.7937500000997">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">Plaza District</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg class = "mapclsredirect"  id="16 W 22nd St" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="200.02207792208677" x="581.1437500000948">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">16 W 22nd St</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg  class = "mapclsredirect"  id="Meatpacking" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="222.06623376622878" x="498.7656249999825">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">Meatpacking</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg class = "mapclsredirect"  id="Lower East Side" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="474.33506493503893" x="660.9531250000314">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">Lower East Side</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg class = "mapclsredirect"  id="Financial District" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="645.335064935073" x="441.9062500000555">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">Financial District</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                    <svg class = "mapclsredirect"  id="W 26th ST" cursor="pointer" overflow="visible" viewBox="0 0 182 180" height="80" width="82" y="170.18181818184175" x="535.3750000000107">
                        <text fill="#FFFFFF" text-anchor="middle" letter-spacing="0.673483431" font-weight="100" font-size="28" font-family=".SFNSDisplay-Regular, .SF NS Display">
                            <tspan y="122" x="50%">W 26th St</tspan>
                        </text>
                        <svg id="Battery-Marker" viewBox="0 0 90 110" height="100" x="32%" width="80">
                            <g transform="translate(15.558511, 82.978723)" id="Ground-Target">
                                <ellipse ry="10.3723404" rx="19.0159574" cy="10.3723404" cx="19.0159574" fill="#ff6246" id="Outer"></ellipse>
                                <ellipse ry="5.65764023" rx="10.3723404" cy="10.3723404" cx="19.0159574" fill="#FF9582" id="Inner"></ellipse>
                            </g>
                            <g id="Marker">
                                <path d="M69.1489362,34.6732523 C69.1489362,15.5237438 53.6694195,0 34.5744681,0 C15.4795166,0 0,15.5237438 0,34.6732523 C0,41.5473168 1.99466215,47.954172 5.43520166,53.343465 L34.5744681,93.3510638 L63.7137345,53.343465 C67.154274,47.954172 69.1489362,41.5473168 69.1489362,34.6732523 Z" fill="#FFFFFF" id="Pointer"></path>
                                <ellipse ry="15.5585106" rx="15.5585106" cy="34.5744681" cx="34.5744681" fill="#bb9f7d" id="Inner-Dot"></ellipse>
                            </g>
                        </svg>
                    </svg>
                </g>
            </svg>
        </div>
        <div style="clear: both; display: none;" data-radium="true" class="rmq-57363760">
            <div style="background-color: rgb(90, 146, 191); opacity: 1; height: 100px; font-size: 36px; width: 100%;" data-radium="true" class="rmq-21f120e text-center header gtm-extra-light">
                <div style="top: 50%; transform: translateY(-50%); position: relative; color: rgb(255, 255, 255);" data-radium="true">Locations</div>
            </div>
            <div data-radium="true" class="col-sm-6 ">
                <p  style="font-size: 26px;" data-radium="true"><a loc ="209 N 8th ST" href="<?php echo get_home_url(); ?>/bedford">209 N 8th ST</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="1 State St" href="<?php echo get_home_url(); ?>/battery">1 State St</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="22 W 38th St" href="<?php echo get_home_url(); ?>/bryant">22 W 38th St</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="68 Jay St" href="<?php echo get_home_url(); ?>/dumbo">68 Jay St</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="33 W 17th St" href="<?php echo get_home_url(); ?>/union-sq-1">33 W 17th St</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="116 W Houston St" href="<?php echo get_home_url(); ?>/houston">116 W Houston St</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="30 Cooper Sq" href="<?php echo get_home_url(); ?>/cooper-square">30 Cooper Sq</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a  loc ="50 W 17th St" href="<?php echo get_home_url(); ?>/union-sq-2">50 W 17th St</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="473 President ST"  href="<?php echo get_home_url(); ?>/gowanus">473 President ST</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="28 W 23rd St" href="<?php echo get_home_url(); ?>/flatiron">28 W 23rd St</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="25 West 26th St" href="<?php echo get_home_url(); ?>/madison">25 West 26th St</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="875 6th Ave" href="<?php echo get_home_url(); ?>/herald-square">875 6th Ave</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="137 Varick ST" href="<?php echo get_home_url(); ?>/soho-west">137 Varick ST</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="475 Park Ave S" href="<?php echo get_home_url(); ?>/park-ave-south">475 Park Ave S</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="Madison Ave" href="<?php echo get_home_url(); ?>/grand-central">Madison Ave &amp; 47th ST</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="Times Square" href="<?php echo get_home_url(); ?>/times-square">Times Square</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="Plaza District" href="<?php echo get_home_url(); ?>/plaza">Plaza District</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="16 W 22nd St" href="<?php echo get_home_url(); ?>/qlabs">16 W 22nd St</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="Meatpacking" href="<?php echo get_home_url(); ?>/meatpacking">Meatpacking</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="Lower East Side" href="<?php echo get_home_url(); ?>/lower-east-side">Lower East Side</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a  loc ="Financial District" href="<?php echo get_home_url(); ?>/fidi">Financial District</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a loc ="W 26th ST" href="<?php echo get_home_url(); ?>/chelsea">W 26th ST</a>
                </p>
            </div>
            <div data-radium="true" class="col-sm-6">
                <p style="font-size: 26px;" data-radium="true"><a  loc ="972 Mission ST" href="<?php echo get_home_url(); ?>/soma">972 Mission ST</a>
                </p>
            </div>
        </div>
    </div>
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
                                        $url = "https://app.knotel.com/publications/upcoming10Events";
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
                                        $url = "https://app.knotel.com/publications/past10Events";
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
                                        <?php echo do_shortcode("[contact-form-7 id='288' title='Home Page Get in touch']");  ?>
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
    <!--<script type="text/javascript" src="<?php //echo get_stylesheet_directory_uri(); ?>/number-changer.js">-->
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

@media screen and (max-width: 760px){
  .ExploreKnotelSF {
      display: block !important;
      margin: 0 auto;
    }
    
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
                $('div.rmq-81090bd0').css('background-size','0 auto, 0 auto, cover');
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
            var url = $(this).attr("id");
            var link  = $(document).find('a[loc="'+url+'"]').attr('href');
            window.location.href= link;
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
$(document).find('#map').height( $(window).height() - $(document).find('#headerDiv').height() - 50 );   
  
  

  
  
</script>
 <?php get_template_part('googleadward'); ?>
 <?php wp_footer(); ?>
 </body>
</html>
