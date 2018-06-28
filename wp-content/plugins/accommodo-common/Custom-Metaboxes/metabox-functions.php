<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
$textdomain = "accommodo";
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';
	
    $meta_boxes[] = array(
        'id'         => 'page_setting',
        'title'      => 'Page Setting',
        'pages'      => array('page'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                    'name' => 'Selected Sidebar or Full Width',
                    'desc' => 'Sidebar or Full Width with Blog ,',
                    'id'   => $prefix . 'sidebar_page',
                    'type'    => 'select',
                    'options' => array(
                        array( 'name' => 'Right Sidebar', 'value' => 'right', ),
                        array( 'name' => 'Left Sidebar', 'value' => 'left', ),
                        array( 'name' => 'Full Width', 'value' => 'full', ),
                        array( 'name' => 'Sidebar Both', 'value' => 'both', ),
                        ),
                    'default' => 'right',
                ),    
        )
    );

    $meta_boxes[] = array(
        'id'         => 'post_setting',
        'title'      => 'Post Setting',
        'pages'      => array('post'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(  

            array(
                'name' => 'Blog Track SoundCloud',
                'desc' => 'Input ID Track SoundCloud',
                'id'   => $prefix . 'tracks',
                'type'    => 'text',
            ),  
            array(
                'name' => 'Upload thumbnail image ',
                'desc' => 'Display with Home page',
                'id'   => $prefix . 'thumbnail_img',
                'type'    => 'file',
                
            ),
            array(
                'name' => 'Upload Author Avatar ',
                'desc' => 'Upload Author Avatar in single',
                'id'   => $prefix . 'avatar_author',
                'type'    => 'file',
                
            ),
            array(
                'name' => 'Name Author',
                'desc' => 'Input Name Author',
                'id'   => $prefix . 'name_author',
                'type'    => 'text',
            ),
            array(
                'name' => 'Description Author',
                'desc' => 'Input Description Author',
                'id'   => $prefix . 'desc_author',
                'type'    => 'textarea',
            ),

        )
    );
    // Add other metaboxes as needed


    $meta_boxes[] = array(
        'id'         => 'accommodation_setting',
        'title'      => 'Accommodation Setting',
        'pages'      => array('accommodation'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Accommodation Rating',
                'desc' => 'Set Accommodation Rating',
                'id'   => $prefix . 'accommodo_rating',
                'type'    => 'text',
            ),  
            array(
                'name' => 'Accommodation Description',
                'desc' => 'Set Accommodation Description',
                'id'   => $prefix . 'accommodo_desc',
                'type'    => 'textarea',
            ),  
            array(
                'name' => 'Accommodation Data Map latitude',
                'desc' => 'Set Accommodation Data Map latitude',
                'id'   => $prefix . 'accommodo_latitude',
                'type'    => 'text',
            ),  
            array(
                'name' => 'Accommodation Data Map longitude',
                'desc' => 'Set Accommodation Data Map longitude',
                'id'   => $prefix . 'accommodo_longitude',
                'type'    => 'text',
            ),  
            array(
                'name' => 'Accommodation Bedrooms',
                'desc' => 'Set Accommodation Bedrooms',
                'id'   => $prefix . 'accommodo_bed',
                'type'    => 'text',
            ),   
            array(
                'name' => 'Accommodation Info',
                'desc' => 'Set Accommodation Info',
                'id'   => $prefix . 'accommodo_info',
                'type'    => 'text',
            ), 
            array(
                'name' => 'Accommodation Info danger',
                'desc' => 'Set Accommodation Info danger',
                'id'   => $prefix . 'accommodo_info_danger',
                'type'    => 'text',
            ), 
            array(
                'name' => 'Accommodation Info Live',
                'desc' => 'Set Accommodation Info Live',
                'id'   => $prefix . 'accommodo_info_live',
                'type'    => 'text',
            ), 
            array(
                'name' => 'Accommodation Price',
                'desc' => 'Set Accommodation Price',
                'id'   => $prefix . 'accommodo_price',
                'type'    => 'text',
            ), 
            array(
                'name' => 'Accommodation Price warning',
                'desc' => 'Set Accommodation Price warning',
                'id'   => $prefix . 'accommodo_warning',
                'type'    => 'text',
            ), 
            array(
                'name' => 'Accommodation Title Reviews',
                'desc' => 'Set Accommodation Title Reviews',
                'id'   => $prefix . 'accommodo_title',
                'type'    => 'text',
            ), 
            array(
                'name' => 'Accommodation Text Reviews',
                'desc' => 'Set Accommodation Text Reviews',
                'id'   => $prefix . 'accommodo_text',
                'type'    => 'textarea',
            ), 
            array(
                'name' => 'Accommodation offer Number',
                'desc' => 'Set Accommodation offer Number',
                'id'   => $prefix . 'accommodo_offer',
                'type'    => 'text',
            ), 
            array(
                'name' => 'Accommodation Top',
                'desc' => 'Set Accommodation is Top',
                'id'   => $prefix . 'accommodo_top',
                'type'    => 'checkbox',
            ), 
        )
    );
$meta_boxes[] = array(
        'id'         => 'service_setting',
        'title'      => 'Service Setting',
        'pages'      => array('service'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Service Description',
                'desc' => 'Set Service Description',
                'id'   => $prefix . 'service_desc',
                'type'    => 'text',
            ),  
            array(
                'name' => 'Service Icon',
                'desc' => 'Set Service Class ICon',
                'id'   => $prefix . 'service_icon',
                'type'    => 'text',
            ),  
            array(
                'name' => 'Service Type',
                'desc' => 'Service Type',
                'id'   => $prefix . 'service_type',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Type 1', 'value' => 'type1', ),
                    array( 'name' => 'Type 2', 'value' => 'type2', ),
                    ),
                'default' => 'type1',
            ),   
                   
        )
    );
	// Add other metaboxes as needed

	// Add other metaboxes as needed
	
	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}
