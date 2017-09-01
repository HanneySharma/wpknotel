<?php
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    function my_theme_enqueue_styles() {
        //wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri(). '/css/style.css' );
        wp_enqueue_style( 'calender-style', get_stylesheet_directory_uri(). '/css/calendrical.css' );
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
    
    //****************************START Code for add guests.*************************************************//
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
    
    //****************************END Code for add guests.*************************************************//
    
    //****************************START Code for add meta boxes fields for press page.*************************************************//
    
        add_action( 'add_meta_boxes', 'add_employee_meta' );
	/* Saving the data */
	add_action( 'save_post', 'employee_meta_save' );
	/* Adding the main meta box container to the post editor screen */
	function add_employee_meta() {
	    add_meta_box(
	        'employee-details',
                'Link Details',
	        'employee_details_init',
	        'post');
	}

	/*Printing the box content */
	function employee_details_init() {
	    global $post;
	    // Use nonce for verification
	    wp_nonce_field( plugin_basename( __FILE__ ), 'employee_nonce' );
	    ?>
	    <div id="employee_meta_item">
	    <?php

	    //Obtaining the linked employeedetails meta values
            $employeeDetails = get_post_meta($post->ID,'employeeDetails',true);
	    $c = 0;
	    if ( count( $employeeDetails ) > 0 && is_array($employeeDetails)) {
	        foreach( $employeeDetails as $employeeDetail ) {
	            if ( isset( $employeeDetail['title'] ) || isset( $employeeDetail['link'] ) ) {
                        printf( '<p>Title<input type="text" name="employeeDetails[%1$s][title]" value="%2$s" />  Link : <input type = "text" name="employeeDetails[%1$s][link]" value = "%3$s"><a href="#" class="remove-package">%4$s</a></p>', $c, $employeeDetail['title'], $employeeDetail['link'], 'Remove' );
	                $c = $c +1;
	            }
	        }
	    }

	    ?>
	<span id="output-package"></span>
	<a href="#" class="add_package"><?php _e('Add Press Links'); ?></a>
	<script>
	    var $ =jQuery.noConflict();
	    $(document).ready(function() {
	        var count = <?php echo $c; ?>;
	        $(".add_package").click(function() {
	            count = count + 1;

	            $('#output-package').append('<p> Title <input type="text" name="employeeDetails['+count+'][title]" value="" />  Link : <input type ="text" name="employeeDetails['+count+'][link]" ><a href="#" class="remove-package"><?php echo "Remove"; ?></a></p>' );
	            return false;
	        });
	       $(document.body).on('click','.remove-package',function() {
	            $(this).parent().remove();
	        });
	    });
	    </script>
	</div><?php

	}

	/* Save function for the entered data */
	function employee_meta_save( $post_id ) {
	    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	        return;
	    // Verifying the nonce
	    if ( !isset( $_POST['employee_nonce'] ) )
	        return;

	    if ( !wp_verify_nonce( $_POST['employee_nonce'], plugin_basename( __FILE__ ) ) )
	        return;
	    // Updating the employeeDetails meta data
	    $employeeDetails = $_POST['employeeDetails'];

	    update_post_meta($post_id,'employeeDetails',$employeeDetails);
	}
    
    
    
    
    
    
?>