<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
// $name_post=ucwords('product');
// $name= ucwords('product') .'s';
function inhabitent_cpt_product() {
    $name_post=ucwords('product');
    $name= ucwords('product') .'s';
	$labels = array(
		'name'                  => $name,
		'singular_name'         => $name_post,
		'menu_name'             => $name,
		'name_admin_bar'        => $name_post,
		'archives'              => $name_post .' Archives',
		'attributes'            => $name_post.' Attributes',
		'parent_item_colon'     => 'Parent '.$name_post .':',
		'all_items'             => 'All '.$name_post,
		'add_new_item'          => 'Add New '.$name_post,
		'add_new'               => 'Add New '.$name_post,
		'new_item'              => 'New '.$name_post,
		'edit_item'             => 'Edit '.$name_post,
		'update_item'           => 'Update '.$name_post,
		'view_item'             => 'View '.$name_post,
		'view_items'            => 'View '.$name,
		'search_items'          => 'Search '.$name_post,
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => $name_post.' Image',
		'set_featured_image'    => 'Set '.$name_post .' image',
		'remove_featured_image' => 'Remove '.$name_post.' image',
		'use_featured_image'    => 'Use as '.$name_post. 'image',
		'insert_into_item'      => 'Insert into '.$name_post,
		'uploaded_to_this_item' => 'Uploaded to this '.$name_post,
		'items_list'            => $name.' list',
		'items_list_navigation' => $name.' list navigation',
		'filter_items_list'     => 'Filter '.$name.' list',
	);
	$args = array(
		'label'                 => $name_post,
		'description'           => 'A product post type for hipster camping',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'shop',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'template_lock'         => 'all',
        'template'              => array(
            array('core/paragraph', array(
                'placeholder' => 'Add the product description here.'
            )),

        )

	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'inhabitent_cpt_product', 0 );


function inhabitent_cpt_adventure() {
    $name_post=ucwords('adventure');
    $name= ucwords('adventure') .'s';
	$labels = array(
		'name'                  => $name,
		'singular_name'         => $name_post,
		'menu_name'             => $name,
		'name_admin_bar'        => $name_post,
		'archives'              => $name_post .' Archives',
		'attributes'            => $name_post.' Attributes',
		'parent_item_colon'     => 'Parent '.$name_post .':',
		'all_items'             => 'All '.$name_post,
		'add_new_item'          => 'Add New '.$name_post,
		'add_new'               => 'Add New '.$name_post,
		'new_item'              => 'New '.$name_post,
		'edit_item'             => 'Edit '.$name_post,
		'update_item'           => 'Update '.$name_post,
		'view_item'             => 'View '.$name_post,
		'view_items'            => 'View '.$name,
		'search_items'          => 'Search '.$name_post,
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => $name_post.' Image',
		'set_featured_image'    => 'Set '.$name_post .' image',
		'remove_featured_image' => 'Remove '.$name_post.' image',
		'use_featured_image'    => 'Use as '.$name_post. 'image',
		'insert_into_item'      => 'Insert into '.$name_post,
		'uploaded_to_this_item' => 'Uploaded to this '.$name_post,
		'items_list'            => $name.' list',
		'items_list_navigation' => $name.' list navigation',
		'filter_items_list'     => 'Filter '.$name.' list',
	);
	$args = array(
		'label'                 => $name_post,
		'description'           => 'A adventuret post type for hipster camping',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-camera',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'adventures',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'template_lock'         => 'all',
        'template'              => array(
            array('core/paragraph', array(
                'placeholder' => 'Add the adventuredescription here.'
            )),

        )

	);
	register_post_type( 'adventure', $args );

}
add_action( 'init', 'inhabitent_cpt_adventure', 0 );

