<?php
	// main picture
	add_theme_support( 'post-thumbnails' );
	
		// size thumbnail
	add_image_size( 'plus_block', 360, 270, true ); 
	add_image_size( 'pv_block', 260, 260, true ); 

	// register menus
	if(function_exists('register_nav_menus')) {
		register_nav_menus( array(
			'menu_head' => __('Header navigation'),
			'menu_main' => __('Main navigation'),
			'menu_footer' => __('Footer navigation'),
		));
	}
	function my_wp_nav_menu_args($args=''){  
    $args['container'] = '';  
    return $args;  
} // function  
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );  

// pagination
function wp_corenavi() {
   global $wp_query, $wp_rewrite;
   $pages = '';
   $max = $wp_query->max_num_pages;
   if (!$current = get_query_var('paged')) $current = 1;
   $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
   $a['total'] = $max;
   $a['current'] = $current;

   $total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
   $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
   $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
   $a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
   $a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"

   if ($max > 1) echo '<div class="pagination">';
   //if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
   echo $pages . paginate_links($a);
   if ($max > 1) echo '</div>';
}

if (function_exists('register_sidebar')) {
    
	register_sidebar(array(
      'id' => 'page_right_1',
      'name' => 'Page sidebar 1', 
      'description' => 'add', 
      'before_widget' => '<div class="DnnModule DnnModule-DNN_HTML DnnModule-2891"><div id="dnn_ctr2891_ContentPane">',
      'after_widget' => '</div><div class="clear"></div></div>',
      'before_title' => '<h5><span id="dnn_ctr1051_dnnTITLE_titleLabel" class="TitleH5">',
      'after_title' => '</span></h5>', 
    ));
	register_sidebar(array(
      'id' => 'sidebar_right',
      'name' => 'Single sidebar', 
      'description' => 'add', 
      'before_widget' => '<div class="DnnModule DnnModule-DNN_HTML DnnModule-2891"><div id="dnn_ctr2891_ContentPane">',
      'after_widget' => '</div><div class="clear"></div></div>',
      'before_title' => '<h5><span id="dnn_ctr1051_dnnTITLE_titleLabel" class="TitleH5">',
      'after_title' => '</span></h5>', 
    ));
	}

function improved_trim_excerpt($text) {
	global $post;
	if ( '' == $text ) {
		$text = get_the_content('');
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]&gt;', $text);
		$text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
		$text = strip_tags($text, '<p>');
		$excerpt_length = 50;
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words)> $excerpt_length) {
			array_pop($words);
			array_push($words, '');
			$text = implode(' ', $words);
		}
	}
	return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');

/* Підключення налаштувань, типів постів, додаткових полів */
//require_once(TEMPLATEPATH . '/functions/options.php');
require_once(TEMPLATEPATH . '/functions/post-type.php');
require_once(TEMPLATEPATH . '/functions/extra-fields.php');

remove_filter( 'sanitize_title', 'sanitize_title_with_dashes' );
add_filter( 'sanitize_title', 'wpse5029_sanitize_title_with_dashes' );
function wpse5029_sanitize_title_with_dashes($title) {
    $title = strip_tags($title);
    // Preserve escaped octets.
    $title = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '---$1---', $title);
    // Remove percent signs that are not part of an octet.
    $title = str_replace('%', '', $title);
    // Restore octets.
    $title = preg_replace('|---([a-fA-F0-9][a-fA-F0-9])---|', '%$1', $title);

    $title = remove_accents($title);
    if (seems_utf8($title)) {
        //if (function_exists('mb_strtolower')) {
        //    $title = mb_strtolower($title, 'UTF-8');
        //}
        $title = utf8_uri_encode($title, 200);
    }

    //$title = strtolower($title);
    $title = preg_replace('/&.+?;/', '', $title); // kill entities
    $title = str_replace('.', '-', $title);
    // Keep upper-case chars too!
    $title = preg_replace('/[^%a-zA-Z0-9 _-]/', '', $title);
    $title = preg_replace('/\s+/', '-', $title);
    $title = preg_replace('|-+|', '-', $title);
    $title = trim($title, '-');

    return $title;
}
function wpa_change_date_structure(){
    global $wp_rewrite;
    $wp_rewrite->date_structure = 'date/%year%/%monthnum%/%day%';
}
add_action( 'init', 'wpa_change_date_structure' );

add_action('wp_head', 'kama_postviews');
function kama_postviews() {

/* ------------ views -------------- */
$meta_key		= 'views';	// key
$who_count 		= 0; 			//  0 - all. 1 - only guests. 2 - only registred.
$exclude_bots 	= 1;			// bots? 0 - include. 1 - disable.

global $user_ID, $post;
	if(is_singular()) {
		$id = (int)$post->ID;
		static $post_views = false;
		if($post_views) return true; 
		$post_views = (int)get_post_meta($id,$meta_key, true);
		$should_count = false;
		switch( (int)$who_count ) {
			case 0: $should_count = true;
				break;
			case 1:
				if( (int)$user_ID == 0 )
					$should_count = true;
				break;
			case 2:
				if( (int)$user_ID > 0 )
					$should_count = true;
				break;
		}
		if( (int)$exclude_bots==1 && $should_count ){
			$useragent = $_SERVER['HTTP_USER_AGENT'];
			$notbot = "Mozilla|Opera"; 
			$bot = "Bot/|robot|Slurp/|yahoo";
			if ( !preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent) )
				$should_count = false;
		}

		if($should_count)
			if( !update_post_meta($id, $meta_key, ($post_views+1)) ) add_post_meta($id, $meta_key, 1, true);
	}
	return true;
}
?>