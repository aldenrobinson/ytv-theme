<?php


if(is_admin()) {  
    wp_enqueue_script('jquery-ui-datepicker');  
    wp_enqueue_style('jquery-ui-custom', get_template_directory_uri().'/stylesheets/jquery-ui-custom.css');  
}  

//Set up datepicker in WP head
 add_action('admin_head','add_custom_scripts');  
 function add_custom_scripts() {  
     global $custom_meta_fields, $post;  
   
     $output = '<script type="text/javascript"> 
 		jQuery(function() {';  
   
     foreach ($custom_meta_fields as $field) { // loop through the fields looking for certain types  
 	if($field['type'] == 'date')  
 	    $output .= '
 	    jQuery(".datepicker").datepicker({ dateFormat: "yy-mm-dd", defaultDate: +1, changeMonth: true, changeYear: true });';  
     }  
   
     $output .= '}); 
 	</script>';  
   
     echo $output;  
 }  

function add_appearance_meta_box() {
	add_meta_box(
		'appearances_meta_box', // $id
		'Appearance Details', // $title
		'show_custom_meta_box', // $callback
		'appearance', // $page
		'normal',
		'high');
}

add_action ('add_meta_boxes', 'add_appearance_meta_box');

// Field Array  
$prefix = 'custom_';  
$custom_meta_fields = array(  
	array(  
		'label' => 'Date',  
		'desc'  => 'Date of the event',  
		'id'    => $prefix.'date',  
		'type'  => 'date'  
	),
	array(
		'label'=> 'Time',  
		'desc'  => 'Start time',  
		'id'    => $prefix.'time',  
		'type'  => 'text'  
	),
	array(
		'label'=> 'Tickets',  
		'desc'  => 'Ticket Price',  
		'id'    => $prefix.'tickets',  
		'type'  => 'text'  
	)
);

// The Callback  
function show_custom_meta_box() {  
global $custom_meta_fields, $post;  
// Use nonce for verification  
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
    // Begin the field table and loop  
    echo '<table class="form-table">';  
    foreach ($custom_meta_fields as $field) {  
        // get value of this field if it exists for this post  
        $meta = get_post_meta($post->ID, $field['id'], true);  
        
        // begin a table row with  
        echo '<tr> 
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th> 
                <td>';  
                switch($field['type']) {  
                   // date
					case 'date':
					
						echo '<input type="text" class="datepicker" id="datepicker_'.$field['id'].'" value="'.$meta.'" size="18" name="'.$field['id'].'" />
								<br /><span class="description">'.$field['desc'].'</span>';
					break;
	          // text  
		  case 'text':  
		      echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="20" /> 
			  <br /><span class="description">'.$field['desc'].'</span>';  
		  break;  
                } //end switch  
        echo '</td></tr>';  
    } // end foreach  
    echo '</table>'; // end table  
}


// Save the Data  
function save_custom_meta($post_id) {  
    global $custom_meta_fields;  
    // verify nonce  
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))  
        return $post_id;  
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;  
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
    // loop through fields and save the data  
    foreach ($custom_meta_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  

add_action('save_post', 'save_custom_meta');  


?>
