<?php

/**
 * Plugin Name: Simple Meta Boxes
 * Plugin URI: https://github.com/jackcutting/wp-metaboxes/
 * Description: A simple way to add meta boxes to any WordPress theme.
 * Version: 1.0
 * Author: Jack Cutting
 * Author URI: https://github.com/jackcutting
 * License: GPL2
 */

/*  Copyright 2014  Jack Cutting  (email : me@jackcutting.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

$prefix = '_jc_';

$meta_boxes = array(

	'jackcutting_test_metabox' => array(
		'id'			=> 'jackcutting_test_metabox',			// 
		'title'			=> __( 'Test Meta Boxes', 'jack' ),		// 
		'post_type'		=> 'page',								// 'post', 'page', 'dashboard', 'link', 'attachment' or 'custom_post_type' (default: none)
		'context'		=> 'side',								// 'normal', 'advanced', or 'side' (default: advanced)
		'priority'		=> 'default',							// 'high', 'core', 'default' or 'low' (default: default)
		'fields'		=> array(
			array(
				'name'	=> __( 'Test Text Field', 'jack' ),
				'desc'	=> __( 'example description (opt)', 'jack' ),
				'id'	=> $prefix . 'test_text',
				'type'	=> 'text',
			)
		)
	),
	'jackcutting_test_metabox_2' => array(
		'id'			=> 'jackcutting_test_metabox_2',
		'title'			=> __( 'Test Meta Boxes 2', 'jack' ),
		'post_type'		=> 'page',
		'context'		=> 'normal',
		'priority'		=> 'default',
		'fields'		=> array(
			array(
				'name'	=> __( 'Test Text Field 2', 'jack' ),
				'desc'	=> __( 'example description (opt)', 'jack' ),
				'id'	=> $prefix . 'test_text_2',
				'type'	=> 'text',
			),
			array(
				'name'	=> __( 'Search', 'jack' ),
				'desc'	=> __( 'example description (opt)', 'jack' ),
				'id'  	=> $prefix . 'search_field',
				'type'	=> 'search',
			),
			array(
				'name' => __( 'Test Text Email', 'jack' ),
				'desc' => __( 'example description (opt)', 'jack' ),
				'id'   => $prefix . 'email',
				'type' => 'email',
				// 'repeatable' => true,
			),
			array(
				'name'	=> __( 'Facebook URL', 'jack' ),
				'desc'	=> __( 'example description (opt)', 'jack' ),
				'id'  	=> $prefix . 'facebookurl',
				'type'	=> 'url',
			),
			array(
				'name'	=> __( 'Telephone Number', 'jack' ),
				'desc'	=> __( 'example description (opt)', 'jack' ),
				'id'  	=> $prefix . 'telephone',
				'type'	=> 'tel',
			),
			array(
				'name' => __( 'Test Number', 'jack' ),
				'desc' => __( 'example description (opt)', 'jack' ),
				'id'   => $prefix . 'test_number',
				'type' => 'number',
			),
			array(
				'name' => __( 'Test Range', 'jack' ),
				'desc' => __( 'example description (opt)', 'jack' ),
				'id'   => $prefix . 'test_Range',
				'type' => 'Range',
			),
			array(
				'name' => __( 'Test Date Picker', 'jack' ),
				'desc' => __( 'example description (opt)', 'jack' ),
				'id'   => $prefix . 'test_textdate',
				'type' => 'date',
			),
			array(
				'name' => __( 'Test Month', 'jack' ),
				'desc' => __( 'example description (opt)', 'jack' ),
				'id'   => $prefix . 'test_textdate',
				'type' => 'month',
			),
			array(
				'name' => __( 'Test Week', 'jack' ),
				'desc' => __( 'example description (opt)', 'jack' ),
				'id'   => $prefix . 'test_textdate',
				'type' => 'week',
			),
			array(
				'name' => __( 'Test Time', 'jack' ),
				'desc' => __( 'example description (opt)', 'jack' ),
				'id'   => $prefix . 'test_textdate',
				'type' => 'time',
			),
			array(
				'name' => __( 'Test Datetime', 'jack' ),
				'desc' => __( 'example description (opt)', 'jack' ),
				'id'   => $prefix . 'test_textdate',
				'type' => 'datetime',
			),
			array(
				'name' => __( 'Test Datetime Local', 'jack' ),
				'desc' => __( 'example description (opt)', 'jack' ),
				'id'   => $prefix . 'test_textdate',
				'type' => 'datetime-local',
			),
			array(
				'name'    => __( 'Test Color Picker', 'jack' ),
				'desc'    => __( 'example description (opt)', 'jack' ),
				'id'      => $prefix . 'test_colorpicker',
				'type'    => 'color',
				'default' => '#ffffff'
			),

			array(
				'name' => __( 'Test Money', 'jack' ),
				'desc' => __( 'example description (opt)', 'jack' ),
				'id'   => $prefix . 'test_textmoney',
				'type' => 'text_money',
				// 'before'     => '£', // override '$' symbol if needed
				// 'repeatable' => true,
			),

			array(
				'name' => __( 'Test Text Area', 'jack' ),
				'desc' => __( 'example description (opt)', 'jack' ),
				'id'   => $prefix . 'test_textarea',
				'type' => 'textarea',
			),
			array(
				'name' => __( 'Test Text Area Small', 'jack' ),
				'desc' => __( 'example description (opt)', 'jack' ),
				'id'   => $prefix . 'test_textareasmall',
				'type' => 'textarea_small',
			),
			array(
				'name' => __( 'Test Text Area for Code', 'jack' ),
				'desc' => __( 'example description (opt)', 'jack' ),
				'id'   => $prefix . 'test_textarea_code',
				'type' => 'textarea_code',
			),
			array(
				'name' => __( 'Test Title Weeeee', 'jack' ),
				'desc' => __( 'This is a title description', 'jack' ),
				'id'   => $prefix . 'test_title',
				'type' => 'title',
			),
			array(
				'name'    => __( 'Test Select', 'jack' ),
				'desc'    => __( 'example description (opt)', 'jack' ),
				'id'      => $prefix . 'test_select',
				'type'    => 'select',
				'options' => array(
					'standard' => __( 'Option One', 'jack' ),
					'custom'   => __( 'Option Two', 'jack' ),
					'none'     => __( 'Option Three', 'jack' ),
				),
			),
			array(
				'name'    => __( 'Test Radio inline', 'jack' ),
				'desc'    => __( 'example description (opt)', 'jack' ),
				'id'      => $prefix . 'test_radio_inline',
				'type'    => 'radio_inline',
				'options' => array(
					'standard' => __( 'Option One', 'jack' ),
					'custom'   => __( 'Option Two', 'jack' ),
					'none'     => __( 'Option Three', 'jack' ),
				),
			),
			array(
				'name'    => __( 'Test Radio', 'jack' ),
				'desc'    => __( 'example description (opt)', 'jack' ),
				'id'      => $prefix . 'test_radio',
				'type'    => 'radio',
				'options' => array(
					'option1' => __( 'Option One', 'jack' ),
					'option2' => __( 'Option Two', 'jack' ),
					'option3' => __( 'Option Three', 'jack' ),
				),
			),
			array(
				'name'     => __( 'Test Taxonomy Radio', 'jack' ),
				'desc'     => __( 'example description (opt)', 'jack' ),
				'id'       => $prefix . 'text_taxonomy_radio',
				'type'     => 'taxonomy_radio',
				'taxonomy' => 'category', // Taxonomy Slug
				// 'inline'  => true, // Toggles display to inline
			),
			array(
				'name'     => __( 'Test Taxonomy Select', 'jack' ),
				'desc'     => __( 'example description (opt)', 'jack' ),
				'id'       => $prefix . 'text_taxonomy_select',
				'type'     => 'taxonomy_select',
				'taxonomy' => 'category', // Taxonomy Slug
			),
			array(
				'name'     => __( 'Test Taxonomy Multi Checkbox', 'jack' ),
				'desc'     => __( 'example description (opt)', 'jack' ),
				'id'       => $prefix . 'test_multitaxonomy',
				'type'     => 'taxonomy_multicheck',
				'taxonomy' => 'post_tag', // Taxonomy Slug
				// 'inline'  => true, // Toggles display to inline
			),
			array(
				'name' => __( 'Test Checkbox', 'jack' ),
				'desc' => __( 'example description (opt)', 'jack' ),
				'id'   => $prefix . 'test_checkbox',
				'type' => 'checkbox',
			),
			array(
				'name'    => __( 'Test Multi Checkbox', 'jack' ),
				'desc'    => __( 'example description (opt)', 'jack' ),
				'id'      => $prefix . 'test_multicheckbox',
				'type'    => 'multicheck',
				'options' => array(
					'check1' => __( 'Check One', 'jack' ),
					'check2' => __( 'Check Two', 'jack' ),
					'check3' => __( 'Check Three', 'jack' ),
				),
				// 'inline'  => true, // Toggles display to inline
			),
			array(
				'name'    => __( 'Test wysiwyg', 'jack' ),
				'desc'    => __( 'example description (opt)', 'jack' ),
				'id'      => $prefix . 'test_wysiwyg',
				'type'    => 'wysiwyg',
				'options' => array( 'textarea_rows' => 5, ),
			),
			array(
				'name' => __( 'Test Image', 'jack' ),
				'desc' => __( 'Upload an image or enter a URL.', 'jack' ),
				'id'   => $prefix . 'test_image',
				'type' => 'file',
			),
			array(
				'name'         => __( 'Multiple Files', 'jack' ),
				'desc'         => __( 'Upload or add multiple images/attachments.', 'jack' ),
				'id'           => $prefix . 'test_file_list',
				'type'         => 'file_list',
				'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
			),
			array(
				'name' => __( 'oEmbed', 'jack' ),
				'desc' => __( 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.', 'jack' ),
				'id'   => $prefix . 'test_embed',
				'type' => 'oembed',
			),
		)
	)

);

Class Simple_Metabox {

	public $_meta_boxes = array();

	public function __construct(){
		add_action( 'load-post.php', array( &$this, 'smb_init' ) );
		add_action( 'load-post-new.php', array( &$this, 'smb_init' ) );
	}

	public function smb_init() {

		add_action( 'add_meta_boxes', array( &$this, 'smb_add_meta' ) );
		add_action( 'save_post', array( &$this, 'smb_save_meta' ), 10, 2 );

	}

	public function smb_add_meta() {

		foreach ($this->_meta_boxes as $id => $args) {
			add_meta_box( 
				$args['id'], 			// $id
				$args['title'], 		// $title
				array( &$this, 'smb_show_meta' ), 	// $callback
				$args['post_type'], 	// $screen
				$args['context'], 		// $context
				$args['priority'], 		// $priority
				$callback_args			// $callback_args
			);
		}

	}

	public function smb_show_meta( $post, $box ) { 

		$fields = $this->_meta_boxes[$box['id']]['fields'];

		wp_nonce_field( basename( __FILE__ ), $box['id'] . '_nonce' );

		if ( $this->_meta_boxes[$box['id']]['show_on']){
			$key = $this->_meta_boxes[$box['id']]['show_on']['key'];
			$value = $this->_meta_boxes[$box['id']]['show_on']['value'];
			if ( in_array( $post->$key , $value) ) {
				echo $this->do_output( $post, $fields );
			} else {
				echo '<p>You will be able to put data here if this page has a parent of Schools &amp; Courses.</p>';
			}
		}else{
			echo $this->do_output( $post, $fields );
		}

	}

	private function do_output( $post, $fields = array() ){
		$output = '';
		if( ! empty( $fields ) ){
			foreach ($fields as $field) {
				switch ( $field['type'] ) {

					case 'text':
						$output .= $this->create_input( $post, $field['id'], $field['name'], $field['type'] );
						break;
					case 'search':
						$output .= $this->create_input( $post, $field['id'], $field['name'], $field['type'] );
						break;
					case 'email':
						$output .= $this->create_input( $post, $field['id'], $field['name'], $field['type'] );
						break;
					case 'url':
						$output .= $this->create_input( $post, $field['id'], $field['name'], $field['type'] );
						break;
					case 'tel':
						$output .= $this->create_input( $post, $field['id'], $field['name'], $field['type'] );
						break;
					case 'number':
						$output .= $this->create_input( $post, $field['id'], $field['name'], $field['type'] );
						break;
					case 'range':
						$output .= $this->create_input( $post, $field['id'], $field['name'], $field['type'] );
						break;
					case 'date':
						$output .= $this->create_input( $post, $field['id'], $field['name'], $field['type'] );
						break;
					case 'month':
						$output .= $this->create_input( $post, $field['id'], $field['name'], $field['type'] );
						break;
					case 'week':
						$output .= $this->create_input( $post, $field['id'], $field['name'], $field['type'] );
						break;
					case 'time':
						$output .= $this->create_input( $post, $field['id'], $field['name'], $field['type'] );
						break;
					case 'datetime':
						$output .= $this->create_input( $post, $field['id'], $field['name'], $field['type'] );
						break;
					case 'datetime-local':
						$output .= $this->create_input( $post, $field['id'], $field['name'], $field['type'] );
						break;
					case 'color':
						$output .= $this->create_input( $post, $field['id'], $field['name'], $field['type'] );
						break;

					case 'textarea':
						$output .= $this->create_textarea( $post, $field['id'], $field['name'], $field['type'] );
						break;
					case 'textarea_small':
						$output .= $this->create_textarea( $post, $field['id'], $field['name'], $field['type'] );
						break;
					case 'textarea_code':
						$output .= $this->create_textarea( $post, $field['id'], $field['name'], $field['type'] );
						break;

					case 'select':
						$output .= $this->create_select( $post, $field['id'], $field['name'], $field['type'], $field['options'] );
						break;

					default:
						$output .= $this->create_input( $field['id'], $field['name'], 'text' );
						break;
				}
			}
		}

		return $output;
	}

	private function create_input( $post, $id, $name, $type ){
		return '<p><label for="' . $id . '"><strong>' . $name . '</strong></label></p>
		<p><input class="widefat" type="' . $type . '" name="' . $id . '" id="' . $id . '" value="' . esc_attr( get_post_meta( $post->ID, $id, true ) ) . '" size="30"></p>';
	}

	private function create_textarea( $post, $id, $name, $type ){
		return '<p><label for="' . $id . '"><strong>' . $name . '</strong></label></p>
		<p><textarea name="' . $id . '" id="' . $id . '" class="' . $type . '">' . esc_attr( get_post_meta( $post->ID, $id, true ) ) . '</textarea></p>';
	}

	private function create_select( $post, $id, $name, $type, $options ){
		$opt = '';
		$data = esc_attr( get_post_meta( $post->ID, $id, true ) );
		foreach ($options as $opt_value => $opt_name) {
			$opt .= '<option data-selected="' . $data . '" value="' . $opt_value . '"';
			$opt .= ( $opt_value == $data ? ' selected="selected"' : '' );
			$opt .= '>' . $opt_name . '</option>';
		}
		return '<p><label for="' . $id . '"><strong>' . $name . '</strong></label></p>
		<p><select name="' . $id . '" id="' . $id . '">' . $opt . '</select></p>';
	}

	public function smb_save_meta($post_id, $post) {

		$post_type = $post->post_type;

		foreach ($this->_meta_boxes as $metabox) {
			
			if ( $post_type == $metabox['post_type'] ){

				/*
				 * We need to verify this came from our screen and with proper authorization,
				 * because the save_post action can be triggered at other times.
				 */

				// Check if our nonce is set.
				if ( ! isset( $_POST[$metabox['id'] . '_nonce'] ) ) {
					return;
				}

				// Verify that the nonce is valid.
				if ( ! wp_verify_nonce( $_POST[$metabox['id'] . '_nonce'], basename( __FILE__ ) ) ) {
					return;
				}

				// If this is an autosave, our form has not been submitted, so we don't want to do anything.
				if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
					return;
				}

				// Check the user's permissions.
				if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

					if ( ! current_user_can( 'edit_page', $post_id ) ) {
						return;
					}

				} else {

					if ( ! current_user_can( 'edit_post', $post_id ) ) {
						return;
					}

				}

				foreach ($metabox['fields'] as $field) {
					
					$key = $field[ 'id' ];

					$new = $_POST[ $key ];

					$old = get_post_meta( $post_id, $key, true );

					if ( $new == '' && $old != '' ){
						delete_post_meta( $post_id, $key, $old );
					} else {
						update_post_meta( $post_id, $key, $new );
					}

				}

			}else{

				continue;

			}

		}

	}

}

$smb = new Simple_Metabox;

if ( $meta_boxes ){
	$smb->_meta_boxes = $meta_boxes;
}

function get_meta_data( $key ){

	global $post;

	return get_post_meta( $post->post_id, $key, true );

}
