<?php



// register post type Accommodation
add_action( 'init', 'register_accommodo_Accommodation' );
function register_accommodo_Accommodation() {
    
    $labels = array( 
        'name' => __( 'Accommodation', 'accommodo' ),
        'singular_name' => __( 'Accommodation', 'accommodo' ),
        'add_new' => __( 'Add New Accommodation', 'accommodo' ),
        'add_new_item' => __( 'Add New Accommodation', 'accommodo' ),
        'edit_item' => __( 'Edit Accommodation', 'accommodo' ),
        'new_item' => __( 'New Accommodation', 'accommodo' ),
        'view_item' => __( 'View Accommodation', 'accommodo' ),
        'search_items' => __( 'Search Accommodation', 'accommodo' ),
        'not_found' => __( 'No Accommodation found', 'accommodo' ),
        'not_found_in_trash' => __( 'No Accommodation found in Trash', 'accommodo' ),
        'parent_item_colon' => __( 'Parent Accommodation:', 'accommodo' ),
        'menu_name' => __( 'Accommodation', 'accommodo' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List Accommodation',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
        'taxonomies' => array( 'Accommodation', 'type' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri(). '/img/admin_ico.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'Accommodation', $args );
}

add_action( 'init', 'create_Type_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it Skillss for your posts

function create_Type_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like Skills
//first do the translations part for GUI

  $labels = array(
    'name' => __( 'Type', 'speedup' ),
    'singular_name' => __( 'Type', 'speedup' ),
    'search_items' =>  __( 'Search Type','speedup' ),
    'all_items' => __( 'All Type','speedup' ),
    'parent_item' => __( 'Parent Type','speedup' ),
    'parent_item_colon' => __( 'Parent Type:','speedup' ),
    'edit_item' => __( 'Edit Type','speedup' ), 
    'update_item' => __( 'Update Type','speedup' ),
    'add_new_item' => __( 'Add New Type','speedup' ),
    'new_item_name' => __( 'New Type Name','speedup' ),
    'menu_name' => __( 'Type','speedup' ),
  );     

// Now register the taxonomy

  register_taxonomy('type',array('Accommodation'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));

}


?>