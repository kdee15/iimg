<?php

// A.1 GLOBAL SETTINGS ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    // Add RSS links to <head> section
    automatic_feed_links();

// A.1 END ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.2 CUSTOM CONTENT TYPES +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    // A.2.1. HOMEPAGE CAROUSEL ---------------------------------------------------------------------------------------

    function carousel() {
      $labels = array(
        'Title'              => _x( 'Carousel', 'post type general name' ),
        'singular_name'      => _x( 'Carousel Pics', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Carousel Pic' ),
        'add_new_item'       => __( 'Add New Carousel Pic' ),
        'edit_item'          => __( 'Edit Carousel' ),
        'new_item'           => __( 'New Carousel Pic' ),
        'all_items'          => __( 'All Carousel Pics' ),
        'view_item'          => __( 'View Carousel' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Carousel'
      );

      $args = array(
        'labels'         => $labels,
        'description'   => 'A list of Carousel Pics',
        'public'        => true,
        'menu_position' => 3,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
        'has_archive'   => true,

      );
        
      register_post_type( 'carousel', $args ); 
    }

    add_action( 'init', 'carousel' );

    // A.2.1. End -----------------------------------------------------------------------------------------------------

    // A.2.1. HOMEPAGE ABout Copy -------------------------------------------------------------------------------------

    function about() {
      $labels = array(
        'Title'              => _x( 'About', 'post type general name' ),
        'singular_name'      => _x( 'About', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'About' ),
        'add_new_item'       => __( 'Add New About' ),
        'edit_item'          => __( 'Edit About' ),
        'new_item'           => __( 'New About' ),
        'all_items'          => __( 'All About' ),
        'view_item'          => __( 'View About' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'About'
      );

      $args = array(
        'labels'         => $labels,
        'description'   => 'A list of About',
        'public'        => true,
        'menu_position' => 3,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
        'has_archive'   => true,

      );
        
      register_post_type( 'about', $args ); 
    }

    add_action( 'init', 'about' );

    // A.2.1. End -----------------------------------------------------------------------------------------------------

    // A.2.1. TEAM ----------------------------------------------------------------------------------------------------

    function team() {
      $labels = array(
        'Title'              => _x( 'Team', 'post type general name' ),
        'singular_name'      => _x( 'Team Member', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Team Member' ),
        'add_new_item'       => __( 'Add New Team Member' ),
        'edit_item'          => __( 'Edit Team' ),
        'new_item'           => __( 'New Team Member' ),
        'all_items'          => __( 'All Team Members' ),
        'view_item'          => __( 'View Team' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Our Team'
      );

      $args = array(
        'labels'         => $labels,
        'description'   => 'A list of Team Members',
        'public'        => true,
        'menu_position' => 4,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
        'has_archive'   => true,

      );
        
      register_post_type( 'team', $args ); 
    }

    add_action( 'init', 'team' );

    // A.2.1. End -----------------------------------------------------------------------------------------------------

    // A.2.1. TEAM CAROUSEL -------------------------------------------------------------------------------------------

    function team_carousel() {
      $labels = array(
        'Title'              => _x( 'Team Carousel', 'post type general name' ),
        'singular_name'      => _x( 'Team Carousel Pics', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Team Carousel Pic' ),
        'add_new_item'       => __( 'Add New Team Carousel Pic' ),
        'edit_item'          => __( 'Edit Team Carousel' ),
        'new_item'           => __( 'New Team Carousel Pic' ),
        'all_items'          => __( 'All Team Carousel Pics' ),
        'view_item'          => __( 'View Team Carousel' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Team Carousel'
      );

      $args = array(
        'labels'         => $labels,
        'description'   => 'A list of Team Carousel Pics',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
        'has_archive'   => true,

      );
        
      register_post_type( 'team_carousel', $args ); 
    }

    add_action( 'init', 'team_carousel' );

    // A.2.1. End -----------------------------------------------------------------------------------------------------

    // A.2.1. SERVICES ------------------------------------------------------------------------------------------------

    function services() {
      $labels = array(
        'Title'              => _x( 'Services', 'post type general name' ),
        'singular_name'      => _x( 'Service', 'post type singular name' ),
        'add_new'            => __( 'Add New', 'Service' ),
        'add_new_item'       => __( 'Add New Service' ),
        'edit_item'          => __( 'Edit Services' ),
        'new_item'           => __( 'New Service' ),
        'all_items'          => __( 'All Services' ),
        'view_item'          => __( 'View Service' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Services'
      );

      $args = array(
        'labels'         => $labels,
        'description'   => 'A list of Services',
        'public'        => true,
        'menu_position' => 7,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
        'has_archive'   => true,

      );
        
      register_post_type( 'services', $args ); 
    }

    add_action( 'init', 'services' );

    // A.2.1. End -----------------------------------------------------------------------------------------------------

    // A.2.1. CLIENT LOGOS --------------------------------------------------------------------------------------------

    function logos() {
      $labels = array(
        'Title'              => _x( 'Logos', 'post type general name' ),
        'singular_name'      => _x( 'Logo', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Logo' ),
        'add_new_item'       => __( 'Add New Logo' ),
        'edit_item'          => __( 'Edit Logos' ),
        'new_item'           => __( 'New Logo' ),
        'all_items'          => __( 'All Logos' ),
        'view_item'          => __( 'View Logo' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Client Logos'
      );

      $args = array(
        'labels'         => $labels,
        'description'   => 'A list of Team Carousel Pics',
        'public'        => true,
        'menu_position' => 6,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
        'has_archive'   => true,

      );
        
      register_post_type( 'logos', $args ); 
    }

    add_action( 'init', 'logos' );

    // A.2.1. End -----------------------------------------------------------------------------------------------------

    // A.2.1. CONTACT DETAILS -----------------------------------------------------------------------------------------

    function branches() {
      $labels = array(
        'Title'              => _x( 'Branches', 'post type general name' ),
        'singular_name'      => _x( 'Branch', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Branch' ),
        'add_new_item'       => __( 'Add New Branch' ),
        'edit_item'          => __( 'Edit Branch' ),
        'new_item'           => __( 'New Branch' ),
        'all_items'          => __( 'All Branches' ),
        'view_item'          => __( 'View Branch' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Branches'
      );

      $args = array(
        'labels'         => $labels,
        'description'   => 'A list of Branches',
        'public'        => true,
        'menu_position' => 8,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
        'has_archive'   => true,

      );
        
      register_post_type( 'branches', $args ); 
    }

    add_action( 'init', 'branches' );

    // A.2.1. End -----------------------------------------------------------------------------------------------------

// A.2 END ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.3 WIDGETS ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
    // Load jQuery
    if ( !is_admin() ) {
       wp_deregister_script('jquery');
       wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
       wp_enqueue_script('jquery');
    }
    
    // Clean up the <head>
    function removeHeadLinks() {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Sidebar Widgets',
            'id'   => 'sidebar-widgets',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }
    
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'about us widget',
            'id'   => 'about-widget',
            'description'   => 'About Us Content Widget.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

// A.3 END ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

?>