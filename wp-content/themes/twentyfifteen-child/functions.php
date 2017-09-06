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
            
            exec('curl -d \'["MBzWPBh5XTi7Jjf6g", { "guests": ['.$guestList.'], "submitterName": "'.$submitterName.'", "submitterEmail": "'.$submitterEmail.'", "shouldSendMailToGuest": false }]\' -H "Content-Type: application/json" -X POST https://app.knotel.com/methods/eventRSVP');
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
                $category_detail = get_the_category($post->ID);
                foreach($category_detail as $key => $val){
                        if($val->term_id == 13){
                            add_meta_box(
                                'employee-details',
                                'News Details',
                                'employee_details_init', 
                                'post'
                            );      
                        }
                }            
            
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
            //print_r($employeeDetails);die;
	    $c = 0;
	    if ( count( $employeeDetails ) > 0 && is_array($employeeDetails)) {
	        foreach( $employeeDetails as $employeeDetail ) { 
                    if ( isset( $employeeDetail['title'] ) || isset( $employeeDetail['link'] ) || isset($employeeDetail['description']) ) {
                        printf( '
                            <p> 
                        <span>Title: <br><input type="text" name="employeeDetails[%1$s][title]" value="%2$s" /></span>
                        <span>Link:<br><input type ="text" name="employeeDetails[%1$s][link]" value="%3$s" ></span><br>
                        <span>Banner Image:<br><input class="imageIn" type="text" value="'.$employeeDetail['meta-image'].'" name="employeeDetails[%1$s][meta-image]]"></span><br>
                        <span>Press Logo Image:<br><input class="imageIn1" type="text" value="'.$employeeDetail['press-image'].'" name="employeeDetails[%1$s][press-image]"></span><br>
                        <span>Tag Line:<br><textarea name="employeeDetails[%1$s][description]" rows="1" cols="20" >'.$employeeDetail['description'].'</textarea></span>
                        <a href="#" class="remove-package">%4$s</a>
                        </p>', $c, $employeeDetail['title'], $employeeDetail['link'], 'Remove' );
	                $c = $c +1;
	            }
	        }
	    }

	    ?>
	<span id="output-package"></span>
	<a href="#" class="add_package"><?php _e('Add News Links'); ?></a>
        
        
      <!--  <p>
            <label for="meta-image" class="prfx-row-title"><?php //_e( 'Example File Upload', 'prfx-textdomain' )?></label>
            <input type="text" name="meta-image" id="meta-image" value="<?php //if ( isset ( $prfx_stored_meta['meta-image'] ) ) echo $prfx_stored_meta['meta-image'][0]; ?>" />
            <input type="button" id="meta-image-button" class="button" value="<?php //_e( 'Choose or Upload an Image', 'prfx-textdomain' )?>" />
        </p>
           <input type="button" id="meta-image-button" class="button" value="<?php //_e( 'Choose or Upload an Image', 'prfx-textdomain' )?>" />-->
	<script>
	    var $ =jQuery.noConflict();
	    $(document).ready(function() {
	        var count = <?php echo $c; ?>;
	        $(".add_package").click(function() {
	            count = count + 1;
	            $('#output-package').append(
                        '<p> \n\
                        <span>Title: <br><input type="text" name="employeeDetails['+count+'][title]" value="" /></span>\n\
                        <span>Link:<br><input type ="text" name="employeeDetails['+count+'][link]" ></span><br>\n\
                        <span>Banner Image:<br><input class="imageIn" type="text" value="<?php if ( isset ( $prfx_stored_meta['meta-image'] ) ) echo $prfx_stored_meta['meta-image'][0]; ?>" name="employeeDetails['+count+'][meta-image]"><input type="button" class="meta-image-button button" value="<?php _e('Upload', 'prfx-textdomain' ); ?>"/>\n\
                        </span><br>\n\
                        <span>Press Logo Image:<br>\n\
                        <input class="imageIn1" type="text" value="<?php if ( isset ( $prfx_stored_meta['press-image'] ) ) echo $prfx_stored_meta['press-image'][0]; ?>" name="employeeDetails['+count+'][press-image]"><input type="button" class="meta-image-button1 button" value="<?php _e( 'Upload', 'prfx-textdomain' ); ?>"/></span><br>\n\
                        <span>Tag Line:<br><textarea name="employeeDetails['+count+'][description]" rows="1" cols="20" ></textarea></span>\n\
                    <a href="#" class="remove-package"><?php echo "Remove"; ?></a></p>' );           
                    return false;
	        });
	       $(document.body).on('click','.remove-package',function() {
	            $(this).parent().remove();
	        });
	    });
            
                //For image upload.
                // Instantiates the variable that holds the media library frame.
                var meta_image_frame;
                // Runs when the image button is clicked.
                $(document).on('click','input.meta-image-button',function(e){      

                    // Prevents the default action from occuring.
                    e.preventDefault();
                    var  self = $(this);
                    // If the frame already exists, re-open it.
                    if ( meta_image_frame ) {
                        meta_image_frame.open();
                        return;
                    }
                    // Sets up the media library frame
                        meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
                        title: "News Images",
                        button: { text:  "UPLOAD" },
                        library: { type: 'image' }
                    });
 
                    // Runs when an image is selected.
                    meta_image_frame.on('select', function(){
                        // Grabs the attachment selection and creates a JSON representation of the model.
                        var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
                        // Sends the attachment URL to our custom image input field.
                        self.prev('input.imageIn').val(media_attachment.url);
                    });
                    // Opens the media library frame.
                    meta_image_frame.open();
                }); 

                var meta_image_frame1;
                $(document).on('click','input.meta-image-button1',function(e){                    
                    // Prevents the default action from occuring.
                    e.preventDefault();
                    var  self = $(this);
                    // If the frame already exists, re-open it.
                    if ( meta_image_frame1 ) {
                        meta_image_frame1.open();
                        return;
                    }
                    // Sets up the media library frame
                        meta_image_frame1 = wp.media.frames.meta_image_frame1 = wp.media({
                        title: "News Images",
                        button: { text:  "UPLOAD" },
                        library: { type: 'image' }
                    });
 
                    // Runs when an image is selected.
                    meta_image_frame1.on('select', function(){
                        // Grabs the attachment selection and creates a JSON representation of the model.
                        var media_attachment = meta_image_frame1.state().get('selection').first().toJSON();
                        // Sends the attachment URL to our custom image input field.
                        self.prev('input.imageIn1').val(media_attachment.url);
                    });
                    // Opens the media library frame.
                    meta_image_frame1.open();
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

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    #output-package p  span,#employee_meta_item p  span {
  display: inline-block;
}
#output-package > p,#employee_meta_item > p {
  border-bottom: 1px solid #cecece;
  margin-bottom: 33px;
  padding-bottom: 21px;
}
#output-package  p span input,#employee_meta_item  p span input {
  
  height: 35px;
}
#output-package  p span textarea,#employee_meta_item  p span textarea {
  
  min-height: 100px;
}
#output-package > p:last-child,#employee_meta_item > p:last-child {
  border-bottom: 0px solid #cecece;
}

.remove-package, .add_package {
  background: #008EC2;
  border: 1px solid #025b8f;
  border-radius: 5px;
  display: block;
  margin-bottom: 5px;
  padding: 10px 5px;
  position: relative;
  text-decoration: none;
  width: 94px;
  color: #fff;
  box-shadow: 2px 2px 2px  #000;
}
.remove-package:hover, .add_package:hover{
    color: #000;
}
.remove-package {
  background: #d54e21 none repeat scroll 0 0;
  border: 1px solid;
  border-radius: 6px;
  color: #fff;
  padding: 5px;
  text-decoration: none;
  width: 47px;
  margin-top: 10px;
}

input.meta-image-button[type="button"],input.meta-image-button1[type="button"] {
background: #13beeb none repeat scroll 0 0;
color: #fff;
display: inline-block;
height: 36px !important;
margin-left: -2px;
line-height: 10px;
margin-top: -5px;
box-shadow: none;
}
  </style>';
}


//Function for add pagination on blogs page.
function wpbeginner_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="pagination"><ul>' . "\n";

    /** Previous Post Link */
    $pre = '<li>'.get_previous_posts_link().'</li>';
    if ( get_previous_posts_link() )
        printf( $pre . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
	$next = '<li>'. get_next_posts_link().'</li>';
    if ( get_next_posts_link() )
        printf($next. "\n", get_next_posts_link());

    echo '</ul></div>' . "\n";

} 


?>
