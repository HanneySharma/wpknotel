<?php
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    function my_theme_enqueue_styles() {
        //wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri(). '/css/style.css' );
        wp_enqueue_style( 'clock-style', get_stylesheet_directory_uri(). '/clockpicker-gh-pages/dist/jquery-clockpicker.css' );
        wp_enqueue_style( 'slippry-style', get_stylesheet_directory_uri(). '/css/slippry.css' );
	wp_enqueue_style( 'datepicker-style', get_stylesheet_directory_uri(). '/css/datapicker/datepicker3.css' );
        
        
    }
    
    function register_my_menus() {
        register_nav_menus(
            array(
            'extra-menu' => __( 'Extra Menu' ),
            'home-sub-menu' => __( 'Home Sub Menu' )
            )
        );
    }
    add_action( 'init', 'register_my_menus' );
    
    //***********************START code for custom map menus in admin section***********************************************//
    function my_plugin_menu() {
        add_menu_page('Map Settings', 'Map', 'manage_options','map_settings','my_map_options');
        add_submenu_page('map_settings', 'Add Markers', 'Add Markers', 'manage_options', 'add_markers', 'add_map_markers');
    }
	
    //Code for remove admin bar from front end for login user.
    add_filter('show_admin_bar', '__return_false'); 
        
    
   //'[$eventid, { "guests": [$guests], "submitterName": $submitterName, "submitterEmail": $submitterEmail, "shouldSendMailToGuest": true }] -H "Content-Type: application/json" -X POST https://dev.knotel.com/methods/eventRSVP 
    //Function for add guests.
    function addguests(){
        if(isset($_POST)){
            $eventid = '';
            $submitterName = '';
            $submitterEmail = '';
            $guests = array();
            if(isset($_POST['evtid']) && !empty($_POST['evtid'])){
                $eventid = $_POST['evtid'];
            }
            if(isset($_POST['submitterName']) && !empty($_POST['submitterName'])){
                $submitterName = $_POST['submitterName'];
            }
            if(isset($_POST['submitterEmail']) && !empty($_POST['submitterEmail'])){
                $submitterEmail = $_POST['submitterEmail'];
            }
            $guestList ='';
            if(isset($_POST['guest']) && !empty($_POST['guest'])){
                $guests = $_POST['guest'];
                foreach($guests as $guest){
                  $guestList .= '{"name":"'.$guest['name'].'","email":"'.$guest['email'].'"},';
                }
                $guestList = rtrim($guestList,',');
            }
            
            exec('curl -d \'["MBzWPBh5XTi7Jjf6g", { "guests": ['.$guestList.'], "submitterName": "'.$submitterName.'", "submitterEmail": "'.$submitterEmail.'", "shouldSendMailToGuest": false }]\' -H "Content-Type: application/json" -X POST https://dev.knotel.com/methods/eventRSVP');
            exit;
        }
    }
    add_action('wp_ajax_addguests', 'addguests');
    add_action('wp_ajax_nopriv_addguests', 'addguests');
    
?>