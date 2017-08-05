<?php
/*====================== Post Type videos =======================*/
add_action( 'init', 'my_custom_post_videos' );
function my_custom_post_videos() {
   $labels = array(
     'name'               => _x( 'Videos', 'post type general name' ),
     'singular_name'      => _x( 'Videos', 'post type singular name' ),
     'add_new'            => _x( 'Add new', 'videos' ),
     'add_new_item'       => __( 'Add new' ),
     'edit_item'          => __( 'Edit' ),
     'new_item'           => __( 'New video' ),
     'all_items'          => __( 'All' ),
     'view_item'          => __( 'View' ),
     'search_items'       => __( 'Search' ),
     'not_found'          => __( 'Not found' ),
     'not_found_in_trash' => __( 'Not found' ), 
     'parent_item_colon'  => '',
     'menu_name'          => 'Videos'
   );
   $args = array(
     'labels'        => $labels,
     'description'   => 'videos',
     'public'        => true,
     'menu_position' => 5,
	 'rewrite' 		 => array( 'slug' => 'videos', 'with_front' => true ),
     'supports'      => array( 'title', 'thumbnail'),
     'has_archive'   => true,
   );
   register_post_type( 'videos', $args );
   flush_rewrite_rules(false);
}
?>