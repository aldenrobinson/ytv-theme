<?php
//front slide meta box

//add frontslide meta box
function frontslide_meta_box_add() { 
  add_meta_box( 
    'frontslide_meta_box', 
    'frontslide options', 
    'show_frontslide_meta_box', 
    'slide', 
    'normal',
    'high' ); 
}
add_action( 'add_meta_boxes', 'frontslide_meta_box_add' );

//frontslide Field Array
$prefix = 'frontslide_';
$frontslide_meta_fields = array(  

  array(
    'label'	=> 'frontslide image',
    'desc'	=> 'Photo for the frontslide',
    'id'	=> $prefix.'image',
    'type'	=> 'image'
  )

);

function show_frontslide_meta_box(){
  global $frontslide_meta_fields, $post;
  echo '<input type="hidden" name="frontslide_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    
    //Begin the field table and loop
    echo '<table class="form-table">';
    foreach ($frontslide_meta_fields as $field) {
      $meta = get_post_meta($post->ID, $field['id'], true);
      echo '<tr>
	    <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
	    <td>';
	    switch($field['type']) {
	      //case items go here  
		  
		// image
		case 'image':
			$image = get_template_directory_uri().'/images/image.png';	
			echo '<span class="custom_default_image" style="display:none">'.$image.'</span>';
			if ($meta) { $image = wp_get_attachment_image_src($meta, 'thumbnail');	$image = $image[0]; }				
			echo	'<input name="'.$field['id'].'" type="hidden" class="custom_upload_image" value="'.$meta.'" />
						<img src="'.$image.'" class="custom_preview_image" alt="" /><br />
							<input class="custom_upload_image_button button" type="button" value="Choose Image" />
							<small>&nbsp;<a href="#" class="custom_clear_image_button">Remove Image</a></small>
							<br clear="all" /><span class="description">'.$field['desc'].'</span>';
		break;
		
		// textarea  
		  case 'textarea':  
		      echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="20" rows="8">'.$meta.'</textarea> 
			  <br /><span class="description">'.$field['desc'].'</span>';  
		  break;  

	    }//end switch
      echo '</td></tr>';
    }//end foreach
    echo '</table>'; //end table
}//end function show_frontslide_meta_box



// Save the frontslide Data
function save_frontslide_meta($post_id) {
    global $frontslide_meta_fields;
	
	// verify nonce
	if (!wp_verify_nonce($_POST['frontslide_meta_box_nonce'], basename(__FILE__))) 
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
	foreach ($frontslide_meta_fields as $field) {
		if($field['type'] == 'tax_select') continue;
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	} // enf foreach
}
add_action('save_post', 'save_frontslide_meta');


?>
