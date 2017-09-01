<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/*
  Plugin Name: Custom Map
  Author: Teq Mavens
  Author URI: http://twitter.com/hiddenpearls
*/


wp_enqueue_style( 'map-form', '/wp-content/plugins/custom-map/css/map.css' );
wp_enqueue_script('jquerymin-js','/wp-content/plugins/custom-map/js/jquery-3.2.1.min.js');
wp_enqueue_script('vaildat-js','/wp-content/plugins/custom-map/js/jquery.validate.min.js');
wp_enqueue_script('custom-js','/wp-content/plugins/custom-map/js/custom.js');

add_action( 'init', 'process_post' );
function process_post() {
	global $wpdb;
     $wpdb->query('CREATE TABLE IF NOT EXISTS wp_mapsettings (id int(11) NOT NULL AUTO_INCREMENT,zoom int(11) NULL,lat float(10,6) NULL,lag float(10,6) NULL,PRIMARY KEY (id))');
     $wpdb->query('CREATE TABLE IF NOT EXISTS wp_markers (id int(11) NOT NULL AUTO_INCREMENT,title varchar(255) NOT NULL,address varchar(255) NOT NULL,lat float(10,6) NOT NULL,lng float(10,6) NOT NULL,link varchar(255) NOT NULL, region_id int(11) NULL,PRIMARY KEY (id))');
    $wpdb->query('CREATE TABLE IF NOT EXISTS wp_regions (id int(11) NOT NULL AUTO_INCREMENT,regionname varchar(255) NOT NULL,lat float(10,6) NOT NULL,lag float(10,6) NOT NULL, zoom int(11) NOT NULL,PRIMARY KEY (id))');
    add_action('admin_menu', 'mapMenu');
    
}



function mapMenu(){
	add_menu_page('map_settings', 'Map Setting', 'manage_options','map_settings','my_map_options');
	add_submenu_page('map_settings', 'Add Markers', 'Add Markers', 'manage_options', 'add_markers', 'add_map_markers');
        add_submenu_page('map_settings', 'Add Regions', 'Add Regions', 'manage_options', 'add_regions', 'add_map_regions');
}

function my_map_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	global $wpdb;
	$querystr = "SELECT * FROM `wp_mapsettings` limit 1";
    $pageposts = $wpdb->get_row($querystr, OBJECT);
    $zoom = (!empty($pageposts))? $pageposts->zoom : '';
    $lagi = (!empty($pageposts))? $pageposts->lag : '';
    $lati = (!empty($pageposts))? $pageposts->lat : '';
    	echo '<div class="wrap">';
    	if(isset($_GET['action']) && $_GET['action'] == 'update'){
			echo '<p class="message">Map setting has been updated successfully</p>';
		} else if(isset($_GET['action']) && $_GET['action'] == 'save'){
			echo '<p class="message">Map setting has been saved successfully</p>';
		} 
		echo '<p><b><h1>Map Settings</h1></b></p>';
        echo '<form method="post" id="add_marker_id" action = "" class="mapForm">';
        echo '<table width="100%"><tbody>';
        echo '<tr>';
        echo '<td><strong>Zoom:</strong></td>';
        echo '<td><input type="text" name="zoom" size="45" placeholder = "Zoom in number" value="'.$zoom.'"/></td>';
        echo '</tr><tr><td>';  
        if(!empty($pageposts)){
        	?>
        	<input type="hidden" value="<?php echo $pageposts->id; ?>" name="id"> 
        	<?php 
        } 
        echo '<strong>Center Longitude:</strong></td>';
        echo '<td><input type="text" name="longitude"  value="'.$lagi.'" size="45" placeholder = "Longitude" /></td>';
        echo '</tr><tr>';
        echo '<td><strong>Center Latitude:</strong></td>';
        echo '<td><input type="text" name="latitude"  value="'.$lati.'"  size="45" placeholder = "Latitude"   />';
        echo '<input type="hidden" name="type" value = "settings" /></td>';
        echo '</tr><tr><td></td></tr><tr>';
        echo '<td></td><td ><input class="btn" type="submit" name="Submit" value="Save"/></td>';
        echo '</tr></tbody></table>';
        echo '</form>';
		echo '</div>';   
        
    }

    function add_map_markers() {        
        if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		global $wpdb;
		$pageMarker = array();
                
		if(isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id']) && !empty($_GET['id'])){
                    $querystr = "SELECT * FROM `wp_markers` WHERE id = ".$_GET['id'];
                    $pageMarker = $wpdb->get_row($querystr, OBJECT);
		}

		if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id']) && !empty($_GET['id'])){
                    $querystr = "DELETE FROM `wp_markers` WHERE id = ".$_GET['id'];
                    $wpdb->query($querystr);
		}
                //*******************Get regions********************
                $regions_array = array();
                $queryregions = "SELECT * FROM `wp_regions`";
                $Regions = $wpdb->get_results($queryregions, OBJECT);
                $regions_html = '<option disabled selected value>Select Region</option>';
                if(!empty($Regions)){
                    foreach($Regions as $key => $region_val){
                        $regions_array[$region_val->id] = $region_val->regionname;  
                        if(!empty($pageMarker)){
                            $selected = ($region_val->id == $pageMarker->region_id) ? 'selected':'';      
                        }
                        $regions_html .= '<option '.$selected.' value = "'.$region_val->id.'">'.$region_val->regionname.'</option>';    
                    }    
                }
		$title = (!empty($pageMarker))? $pageMarker->title : '';
		$address = (!empty($pageMarker))? $pageMarker->address : '';
		$lat = (!empty($pageMarker))? $pageMarker->lat : '';
		$lng = (!empty($pageMarker))? $pageMarker->lng : '';
		$link = (!empty($pageMarker))? $pageMarker->link : '';
		$id = (!empty($pageMarker))? $pageMarker->id : '';

		echo '<div class="wrap">';
		if(isset($_GET['action']) && $_GET['action'] == 'update'){
			echo '<p class="message">Marker has been updated successfully</p>';
		} else if(isset($_GET['action']) && $_GET['action'] == 'save'){
			echo '<p class="message">Marker has been saved successfully</p>';
		} else if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id']) && !empty($_GET['id'])){
			echo '<p class="message">Marker has been deleted successfully</p>';
		}
		echo '<p><b><h1>Add Markers</h1></b></p>';
                echo '<form method="post" id="add_marker_id" action=""  class="mapForm">';
                echo '<input type="hidden" name="id" value="'.$id.'" />';
                echo '<table width="100%"><tbody><tr>';
                echo '<td><strong>Title:</strong></td>';
                echo '<td><input type="text" name="title" size="45" placeholder = "Title" value="'.$title.'" /></td>';
                echo '</tr><tr>';   
                echo '</tr><tr>';
                echo '<td><strong>Link:</strong></td>';
                echo '<td><input type="text" name="link" size="45" placeholder = "Link"   value="'.$link.'" /></td>';
                echo '</tr><tr>';
                echo '<td><strong>Longitude:</strong></td>';
                echo '<td><input type="text" name="longitude" size="45" placeholder = "Longitude"   value="'.$lng.'" /></td>';
                echo '</tr><tr>';
                echo '<td><strong>Latitude:</strong></td>';
                echo '<td><input type="text" name="latitude" size="45"  placeholder = "Latitude"  value="'.$lat.'" /></td>';
                echo '</tr><tr>';
                echo '<td><strong>Region:</strong></td>';
                echo '<td><select name = "region" >';
                echo  $regions_html;
                echo '</select></td>';
                echo '</tr>';
                echo '<td><strong>Address:</strong></td>';
                echo '<td><textarea rows = "3" cols="50" name="address" size="45" placeholder = "Address">'.$address.'</textarea></td>';
                echo '</tr><tr><td></td><td></td>';
                echo '</tr><tr>';
                echo '<td></td><td><input type="hidden" name="type" value = "marker" />';
                echo '<input type="submit" name="Submit" value="Save" /></td>';
                echo '</tr></tbody></table>';
                echo '</form>';
		echo '</div>';
		$querystr = "SELECT * FROM `wp_markers`";
                $pageMarkers = $wpdb->get_results($querystr, OBJECT);
		$html = "
		<h2>Markers List</h2>
		<table border='0' width='100%' class='wp-list-table widefat fixed striped posts'><tbody>
		<tr>
		<td>S.no</td>
		<td>Title</td>
		<td>Longitude</td>
		<td>Latitude</td>
		<td>Address</td>
		<td>Link</td>
                <td>Region</td>
		<td>Action</td>
		</tr>
		";
			if(!empty($pageMarkers)){
				foreach ($pageMarkers as $key => $pageMarkers) {
                                        $regionname = (array_key_exists($pageMarkers->region_id,$regions_array) ? $regions_array[$pageMarkers->region_id] : '');
					$id = $key+1;
					$html .= '<tr>
						<td>'.$id.'</td>	
						<td>'.$pageMarkers->title.'</td>	
						<td>'.$pageMarkers->lng.'</td>	
						<td>'.$pageMarkers->lat.'</td>	
						<td>'.$pageMarkers->address.'</td>	
						<td>'.$pageMarkers->link.'</td>
                                                <td>'.$regionname.'</td>
						<td><a title="Edit" href="admin.php?page=add_markers&id='.$pageMarkers->id.'&action=edit">Edit</a> &nbsp;&nbsp;&nbsp;<a href="admin.php?page=add_markers&id='.$pageMarkers->id.'&action=delete" title="Delete">Delete</a> </td>
					</tr>';
					
				}
			} else {
				$html .= "<tr><td  colspan='7'></td></tr><tr><td colspan='7' align='center'>No Record Found</td></tr>";
			}
		echo $html .= "</tbody></table>";

	}
        
        
        
    //********************************************************START Code for add regions.**************************************************//
   function add_map_regions(){
            if ( !current_user_can( 'manage_options' ) )  {
                wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
            }
            global $wpdb;
            $pageMarker = array();
            if(isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id']) && !empty($_GET['id'])){
                $querystr = "SELECT * FROM `wp_regions` WHERE id = ".$_GET['id'];
                $pageMarker = $wpdb->get_row($querystr, OBJECT);    
            }
            if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id']) && !empty($_GET['id'])){
                $querystr = "DELETE FROM `wp_regions` WHERE id = ".$_GET['id'];
                $wpdb->query($querystr);
            }
            
            
            
            
            $region = (!empty($pageMarker))? $pageMarker->regionname : '';
            $lat = (!empty($pageMarker))? $pageMarker->lat : '';
            $lag = (!empty($pageMarker))? $pageMarker->lag : '';
            $zoom = (!empty($pageMarker))? $pageMarker->zoom : '';  
            $id = (!empty($pageMarker))? $pageMarker->id : '';  
            echo '<div class="wrap">';
            if(isset($_GET['action']) && $_GET['action'] == 'update'){
                echo '<p class="message">Region has been updated successfully</p>';
            } else if(isset($_GET['action']) && $_GET['action'] == 'save'){
                echo '<p class="message">Region has been saved successfully</p>';
            } else if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id']) && !empty($_GET['id'])){
                echo '<p class="message">Region has been deleted successfully</p>';
            }
            echo '<p><b><h1>Add Regions</h1></b></p>';
            echo '<form method="post" id="add_regions" action=""  class="mapForm">';
            echo '<input type="hidden" name="id" value="'.$id.'" />';
            echo '<table width="100%"><tbody><tr>';
            echo '<td><strong>Region Name:</strong></td>';
            echo '<td><input type="text" name="regionname" size="45" placeholder = "Region Name" value="'.$region.'" /></td>';
            echo '</tr><tr>';   
            echo '<td><strong>Center Longitude:</strong></td>';
            echo '<td><input type="text" name="longitude" size="45" placeholder = "Longitude"   value="'.$lag.'" /></td>';
            echo '</tr><tr>';
            echo '<td><strong>Center Latitude:</strong></td>';
            echo '<td><input type="text" name="latitude" size="45"  placeholder = "Latitude"  value="'.$lat.'" /></td>';
            echo '</tr><tr>';
            echo '<td><strong>Zoom:</strong></td>';
            echo '<td><input type="text" name="zoom" size="45"  placeholder = "Zoom"  value="'.$zoom.'" /></td>';
            echo '</tr>';
            echo '<td></td><td><input type="hidden" name="type" value = "regions" />';
            echo '<input type="submit" name="Submit" value="Save" /></td>';
            echo '</tr></tbody></table>';
            echo '</form>';
            echo '</div>';
            $querystr = "SELECT * FROM `wp_regions`";
            $pageMarkers = $wpdb->get_results($querystr, OBJECT);
            $html = "
            <h2>Regions List</h2>
            <table border='0' width='100%' class='wp-list-table widefat fixed striped posts'><tbody>
            <tr>
            <td>S.no</td>
            <td>Region Name</td>
            <td>Center Longitude</td>
            <td>Center Latitude</td>
            <td>Zoom</td>
            <td>Action</td>
            </tr>
            ";
            if(!empty($pageMarkers)){
                foreach ($pageMarkers as $key => $pageMarkers) {
                    $id = $key+1;
                    $html .= '<tr>
                    <td>'.$id.'</td>	
                    <td>'.$pageMarkers->regionname.'</td>	
                    <td>'.$pageMarkers->lag.'</td>	
                    <td>'.$pageMarkers->lat.'</td>	
                    <td>'.$pageMarkers->zoom.'</td>    
                    <td><a title="Edit" href="admin.php?page=add_regions&id='.$pageMarkers->id.'&action=edit">Edit</a> &nbsp;&nbsp;&nbsp;<a href="admin.php?page=add_regions&id='.$pageMarkers->id.'&action=delete" title="Delete">Delete</a> </td>
                </tr>';			
                }
            } else {
                $html .= "<tr><td  colspan='7'></td></tr><tr><td colspan='7' align='center'>No Record Found</td></tr>";
            }
            echo $html .= "</tbody></table>";    
    } 
    
    //********************************************************END Code for add regions.**************************************************//    

    if(isset($_POST['zoom']) && isset($_POST['zoom']) && isset($_POST['zoom']) && isset($_POST['type'])  && $_POST['type'] == 'settings' ){
		global $wpdb;
        if(!isset($_POST['id']))
        {
        	$wpdb->query("INSERT INTO wp_mapsettings (zoom,lat,lag) VALUES ('".$_POST['zoom']."','".$_POST['latitude']."','".$_POST['longitude']."')");
        	header("Location: admin.php?page=map_settings&action=save"); 
        	exit;
        } else {
        	$wpdb->query("UPDATE wp_mapsettings SET zoom= '".$_POST['zoom']."', lat='".$_POST['latitude']."',lag='".$_POST['longitude']."' WHERE id = ".$_POST['id']);
        	header("Location: admin.php?page=map_settings&action=update"); 
        	exit;
        }
	} else if(isset($_POST['title']) && isset($_POST['link']) && isset($_POST['longitude']) && isset($_POST['latitude']) && isset($_POST['region']) && isset($_POST['address']) && $_POST['type'] == 'marker' ){
	        global $wpdb;
	        
	        if(!isset($_POST['id']) || empty($_POST['id']))
        	{	
                    
                    $wpdb->query("INSERT INTO wp_markers(title,address,lat,lng,link,region_id) VALUES ('".$_POST['title']."','".$_POST['address']."','".$_POST['latitude']."', '".$_POST['longitude']."', '".$_POST['link']."','".$_POST['region']."')");
        		header("Location: admin.php?page=add_markers&action=save"); 
        		exit;
	        } else {
                        
                    $wpdb->query( "UPDATE `wp_markers` SET `title`='".$_POST['title']."',`address`='".$_POST['address']."',`lat`='".$_POST['latitude']."',`lng`='".$_POST['longitude']."',`link`=  '".$_POST['link']."',`region_id`='".$_POST['region']."' WHERE id = ".$_POST['id'] );
	        	header("Location: admin.php?page=add_markers&action=update"); 
	        	exit;
        	}    
        }else if(isset($_POST['regionname']) && isset($_POST['longitude']) && isset($_POST['latitude']) && isset($_POST['zoom']) && $_POST['type'] == 'regions' ){
	        global $wpdb;
                
	        if(!isset($_POST['id']) || empty($_POST['id']))
        	{
                    $wpdb->query("INSERT INTO wp_regions(regionname,lat,lag,zoom) VALUES ('".$_POST['regionname']."','".$_POST['latitude']."', '".$_POST['longitude']."','".$_POST['zoom']."')");
                    header("Location: admin.php?page=add_regions&action=save"); 
                    exit;
	        } else {
                $wpdb->query( "UPDATE `wp_regions` SET `regionname`='".$_POST['regionname']."',`lat`='".$_POST['latitude']."',`lag`='".$_POST['longitude']."',`zoom`=  '".$_POST['zoom']."' WHERE id = ".$_POST['id'] );
                    header("Location: admin.php?page=add_regions&action=update"); 
                    exit;
        	}
	    
        }
        
        
        
?>