<?php
// properties CUSTOM META BOX //


$meta_boxes = array(

	'properties' 			=> array(
		'id'			=> 'properties_metabox',
		'title'			=> __( 'Property Data', 'guildhall' ),
		'post_type'		=> 'properties',
		'context'		=> 'side',
		'priority'		=> 'default',
		'fields'		=> array(
			array(
				'id'	=> 'gp_property_location',
				'type'	=> 'text',
				'name'	=> __( "Location", 'guildhall' )
			)
		)
	),
	'properties_to_let'		=> array(
		'id'			=> 'properties_to_let_metabox',
		'title'			=> __( 'Property Data', 'guildhall' ),
		'post_type'		=> 'properties_to_let',
		'context'		=> 'side',
		'priority'		=> 'default',
		'fields'		=> array(
			array(
				'id'	=> 'gp_property_to_let_location',
				'type'	=> 'text',
				'name'	=> __( "Location", 'guildhall' )
			),
			array(
				'id'	=> 'gp_property_to_let_type',
				'type'	=> 'text',
				'name'	=> __( "Type", 'guildhall' )
			),
			array(
				'id'	=> 'gp_property_to_let_size',
				'type'	=> 'text',
				'name'	=> __( "Size", 'guildhall' )
			),
			array(
				'id'	=> 'gp_property_to_let_price',
				'type'	=> 'text',
				'name'	=> __( "Price <small>(excluding the &pound; symbol)</small>", 'guildhall' )
			),
			array(
				'id'	=> 'gp_property_to_let_ref_no',
				'type'	=> 'text',
				'name'	=> __( "Web Ref No.", 'guildhall' )
			),
			array(
				'id'	=> 'gp_property_to_let_long_lat',
				'type'	=> 'text',
				'name'	=> __( "Long & Lat <small><a target=\"_blank\" href=\"http://itouchmap.com/latlong.html\">Link</a></small>", 'guildhall' )
			)
		)
	)

);

add_action( 'load-post.php', 'meta_box_init' );
add_action( 'load-post-new.php', 'meta_box_init' );

function meta_box_init() {

	add_action( 'add_meta_boxes', 'meta_box_add_func' );
	add_action( 'save_post', 'meta_box_save_func', 10, 2 );

}

function meta_box_add_func() {

	global $meta_boxes;

	foreach ($meta_boxes as $post_type => $args) {
		add_meta_box( 
			$args['id'], 			// $id
			$args['title'], 		// $title
			'meta_box_show_func', 	// $callback
			$args['post_type'], 	// $screen
			$args['context'], 		// $context
			$args['priority'], 		// $priority
			$callback_args			// $callback_args
		);
	}

}


function meta_box_show_func( $post, $box ) { 

	global $meta_boxes;

	$fields = $meta_boxes[$post->post_type]['fields'];

	wp_nonce_field( basename( __FILE__ ), $meta['id'] . '_nonce' );

	foreach ($fields as $field) {
		echo '<p><label for="' . $field['id'] . '">' . $field['name'] . '</label><br><input class="widefat" type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . esc_attr( get_post_meta( $post->ID, $field['id'], true ) ) . '" size="30"></p>';
	}

}

function meta_box_save_func($post_id, $post) {

	global $meta_boxes;

	$fields = $meta_boxes[$post->post_type]['fields'];

	foreach ($fields as $field) {

		$key = $field[ 'id' ];

		$new = $_POST[ $key ];

		$old = get_post_meta( $post_id, $key, true );

		if ( $new == '' && $old != '' ){
			delete_post_meta( $post_id, $key, $old );
		} else {
			update_post_meta( $post_id, $key, $new );
		}

	}

}

function get_meta_data( $key ){

	global $post;

	return get_post_meta( $post->post_id, $key, true );

}
