<?php
function post_types(){
	register_post_type( 'banner',
		array(
			'labels' 			=> array(
				'name' 				=> __( 'Banner' ),
				'singular_name' 	=> __( 'Banner' ),
				'add_new' 			=> __( 'Add New Banner' ),
				'add_new_item' 		=> __( 'Add New Banner' ),
				'edit_item' 		=> __( 'Edit Banner' ),
				'new_item' 			=> __( 'Add New Banner' ),
				'view_item' 		=> __( 'View Banner' ),
				'search_items' 		=> __( 'Search Banner' ),
				'not_found' 		=> __( 'No Banner found' ),
				'not_found_in_trash'=> __( 'No Banner found in trash' )
			),
			'public' 			=> true,
			'has_archive' 		=> true,
			'supports' 			=> array( 'title', 
									  	'editor', 
									  	'author', 
									  	'excerpt', 
									  	'thumbnail', 
									  	'trackbacks', 
									  	'comments'),
			'capability_type' 	=> 'post',
			'menu_icon' 		=> 'dashicons-location-alt',
			'rewrite' 			=> array("slug" => "banner"), // Permalinks format
			'menu_position' 	=> 5
		)	
	);

	register_post_type( 'about_us',
		array(
			'labels' 			=> array(
				'name' 				=> __( 'About Us' ),
				'singular_name' 	=> __( 'About Us' ),
				'add_new' 			=> __( 'Add New About Us' ),
				'add_new_item' 		=> __( 'Add New About Us' ),
				'edit_item' 		=> __( 'Edit About Us' ),
				'new_item' 			=> __( 'Add New About Us' ),
				'view_item' 		=> __( 'View About Us' ),
				'search_items' 		=> __( 'Search About Us' ),
				'not_found' 		=> __( 'No About Us found' ),
				'not_found_in_trash'=> __( 'No About Us found in trash' )
			),
			'public' 			=> true,
			'has_archive' 		=> true,
			'supports' 			=> array( 'title', 
									  	'editor', 
									  	'author', 
									  	'excerpt', 
									  	'thumbnail', 
									  	'trackbacks', 
									  	'comments'),
			'capability_type' 	=> 'post',
			'menu_icon' 		=> 'dashicons-location-alt',
			'rewrite' 			=> array("slug" => "about_us"), // Permalinks format
			'menu_position' 	=> 5
		)	
	);

	register_post_type( 'services',
		array(
			'labels' 			=> array(
				'name' 				=> __( 'Services' ),
				'singular_name' 	=> __( 'Services' ),
				'add_new' 			=> __( 'Add New Services' ),
				'add_new_item' 		=> __( 'Add New Services' ),
				'edit_item' 		=> __( 'Edit Services' ),
				'new_item' 			=> __( 'Add New Services' ),
				'view_item' 		=> __( 'View Services' ),
				'search_items' 		=> __( 'Search Services' ),
				'not_found' 		=> __( 'No Services found' ),
				'not_found_in_trash'=> __( 'No Services found in trash' )
			),
			'public' 			=> true,
			'has_archive' 		=> true,
			'supports' 			=> array( 'title', 
									  	'editor', 
									  	'author', 
									  	'excerpt', 
									  	'thumbnail', 
									  	'trackbacks', 
									  	'comments'),
			'capability_type' 	=> 'post',
			'menu_icon' 		=> 'dashicons-location-alt',
			'rewrite' 			=> array("slug" => "services"), // Permalinks format
			'menu_position' 	=> 5
		)	
	);


	register_post_type( 'clients',
		array(
			'labels' 			=> array(
				'name' 				=> __( 'Clients' ),
				'singular_name' 	=> __( 'Clients' ),
				'add_new' 			=> __( 'Add New Clients' ),
				'add_new_item' 		=> __( 'Add New Clients' ),
				'edit_item' 		=> __( 'Edit Clients' ),
				'new_item' 			=> __( 'Add New Clients' ),
				'view_item' 		=> __( 'View Clients' ),
				'search_items' 		=> __( 'Search Clients' ),
				'not_found' 		=> __( 'No Clients found' ),
				'not_found_in_trash'=> __( 'No Clients found in trash' )
			),
			'public' 			=> true,
			'has_archive' 		=> true,
			'supports' 			=> array( 'title', 
									  	'editor', 
									  	'author', 
									  	'excerpt', 
									  	'thumbnail', 
									  	'trackbacks', 
									  	'comments'),
			'capability_type' 	=> 'post',
			'menu_icon' 		=> 'dashicons-location-alt',
			'rewrite' 			=> array("slug" => "clients"), // Permalinks format
			'menu_position' 	=> 5
		)	
	);
}
add_action( 'init', 'post_types');



//Registering Custom Metaboxes for Clients
add_action( 'cmb2_admin_init', 'clients' );
function clients() {
	$prefix = 'clients_';
	$cmb = new_cmb2_box( array(
		'id'            => 'clients',
		'title'         => __( 'Clients', 'cmb2' ),
		'object_types' 	=> array( 'clients' ), // post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

	$group_field_id = $cmb->add_field( array(
		'id'          => $prefix.'clients_details',
		'type'        => 'group',
		'description' => __( 'Add clientss Details:', 'cmb2' ),
	// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
		'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		'add_button'        => __( 'Add Another Entry', 'cmb2' ),
		'remove_button'     => __( 'Remove Entry', 'cmb2' ),
		'sortable'          => true,
		'closed'         => true, // true to have the groups closed by default
		'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
	),
	) );

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb->add_group_field( $group_field_id, array(
		'name' => 'clients Name',
		'id'   => 'clients_name',
		'type' => 'text',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => 'clients Para',
		'id'   => 'clients_para',
		'type' => 'textarea',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => 'clients fa fa icon',
		'id'   => 'clients_icon',
		'type' => 'text',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => 'clients fa fa icon Color',
		'id'   => 'clients_color',
		'type' => 'text',
	) );

}

//Registering Custom Metaboxes for Services
add_action( 'cmb2_admin_init', 'services' );
function services() {
	$prefix = 'services_';
	$cmb = new_cmb2_box( array(
		'id'            => 'services',
		'title'         => __( 'Services', 'cmb2' ),
		'object_types' 	=> array( 'services' ), // post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

	$cmb->add_field( array(
		'name'       => 'Services 1',
		'desc'       => 'Enter Services 1',
		'id'         => $prefix.'services_1',
		'type'       => 'text',
	) );
	$cmb->add_field( array(
		'name'       => 'Services 1 Title',
		'desc'       => 'Enter Services 1 Title',
		'id'         => $prefix.'services_1_head',
		'type'       => 'text',
	) );


	$cmb->add_field( array(
		'name'       => 'Services 2',
		'desc'       => 'Enter Services 2',
		'id'         => $prefix.'services_2',
		'type'       => 'text',
	) );
	$cmb->add_field( array(
		'name'       => 'Services 2',
		'desc'       => 'Enter Services 2 Title',
		'id'         => $prefix.'services_2_head',
		'type'       => 'text',
	) );


	$cmb->add_field( array(
		'name'       => 'Services 3',
		'desc'       => 'Enter Services 3',
		'id'         => $prefix.'services_3',
		'type'       => 'text',
	) );
	$cmb->add_field( array(
		'name'       => 'Services 3',
		'desc'       => 'Enter Services 3 Title',
		'id'         => $prefix.'services_3_head',
		'type'       => 'text',
	) );

	$cmb->add_field( array(
		'name'       => 'Services 4',
		'desc'       => 'Enter Services 4 ',
		'id'         => $prefix.'services_4',
		'type'       => 'text',
	) );
	$cmb->add_field( array(
		'name'       => 'Services 4',
		'desc'       => 'Enter Services 4 Title',
		'id'         => $prefix.'services_4_head',
		'type'       => 'text',
	) );

	$cmb->add_field( array(
		'name'       => 'Services 5',
		'desc'       => 'Enter Services 5 ',
		'id'         => $prefix.'services_5',
		'type'       => 'text',
	) );
	$cmb->add_field( array(
		'name'       => 'Services 5',
		'desc'       => 'Enter Services 5 Title',
		'id'         => $prefix.'services_5_head',
		'type'       => 'text',
	) );
}


//Registering Custom Metaboxes for About Us
add_action( 'cmb2_admin_init', 'about_us' );
function about_us() {
	$prefix = 'about_us_';
	$cmb = new_cmb2_box( array(
		'id'            => 'about_us',
		'title'         => __( 'About Us', 'cmb2' ),
		'object_types' => array( 'about_us' ), // post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

	$cmb->add_field( array(
		'name'       => 'Add Image',
		'desc'       => 'Upload Images',
		'id'         => $prefix.'images',
		'type'       => 'file',
	) );

	//About US
	$cmb->add_field( array(
		'name'       => 'Strength Title',
		'desc'       => 'Enter Strength Title',
		'id'         => $prefix.'strength_title',
		'type'       => 'text',
	) );

	//Data A
	$cmb->add_field( array(
		'name'       => 'Data A',
		'desc'       => 'Enter Data A',
		'id'         => $prefix.'data_a',
		'type'       => 'text',
	) );
	$cmb->add_field( array(
		'name'       => 'Data A head',
		'desc'       => 'Enter Data A head',
		'id'         => $prefix.'data_a_head',
		'type'       => 'text',
	) );

	 //Data B
	$cmb->add_field( array(
		'name'       => 'Data B',
		'desc'       => 'Enter Data B',
		'id'         => $prefix.'data_b',
		'type'       => 'text',
	) );
	$cmb->add_field( array(
		'name'       => 'Data B head',
		'desc'       => 'Enter Data B head',
		'id'         => $prefix.'data_b_head',
		'type'       => 'text',
	) );

	//Data C
	$cmb->add_field( array(
		'name'       => 'Data C',
		'desc'       => 'Enter Data C',
		'id'         => $prefix.'data_c',
		'type'       => 'text',
	) );
	$cmb->add_field( array(
		'name'       => 'Data C head',
		'desc'       => 'Enter Data C head',
		'id'         => $prefix.'data_c_head',
		'type'       => 'text',
	) );

	//Data D
	$cmb->add_field( array(
		'name'       => 'Data D',
		'desc'       => 'Enter Data D',
		'id'         => $prefix.'data_d',
		'type'       => 'text',
	) );
	$cmb->add_field( array(
		'name'       => 'Data D head',
		'desc'       => 'Enter Data D head',
		'id'         => $prefix.'data_d_head',
		'type'       => 'text',
	) );

}


//Registering Custom Metaboxes for Banner
add_action( 'cmb2_admin_init', 'banner_slider' );
function banner_slider() {
	$prefix = 'banner_slider_';
	$cmb = new_cmb2_box( array(
		'id'            => 'banner_slider',
		'title'         => __( 'Banner Images', 'cmb2' ),
		'object_types' => array( 'banner' ), // post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

   //For Welcome Note Section Homepage
	$cmb->add_field( array(
		'name'       => 'Banner Images',
		'desc'       => 'Upload Images',
		'id'         => $prefix.'images',
		'type'       => 'file_list',
	) );

}

//Registering Custom Metaboxes for Homepage
add_action( 'cmb2_admin_init', 'homepage_metabox' );
function homepage_metabox() {
	$prefix = 'homepage_metabox_';
	$cmb = new_cmb2_box( array(
		'id'            => 'homepage_metabox',
		'title'         => __( 'Vertex Website Details', 'cmb2' ),
		'object_types' => array( 'page' ), // post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'template_homepage.php' ),  
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );

   //For Welcome Note Section Homepage
	$cmb->add_field( array(
		'name'       => 'Welcome Note',
		'desc'       => 'Enter Welcome Note Section here.',
		'id'         => $prefix.'welcome_note',
		'type'       => 'text',
	) );

	//For Logo Of Website
	$cmb->add_field( array(
		'name'       => 'Logo Of Website',
		'desc'       => 'Select Logo For Website',
		'id'         => $prefix.'website_logo',
		'type'       => 'file',
	) );

	//About US
	// $cmb->add_field( array(
	// 	'name'       => 'About Us',
	// 	'desc'       => 'Enter Title',
	// 	'id'         => $prefix.'about_title',
	// 	'type'       => 'text',
	// ) );

	//About US
	// $cmb->add_field( array(
	// 	'name'       => 'About Para',
	// 	'desc'       => 'Enter About us',
	// 	'id'         => $prefix.'about_para',
	// 	'type'       => 'textarea',
	// ) );

}