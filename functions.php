<?php
add_theme_support( 'medium_large' );
add_theme_support( 'medium_large' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'news-post' );
add_theme_support( 'thumbnail-post' );
the_post_thumbnail( 'post-thumbnails' );
add_image_size( 'medium_large', '750', '481', true );
add_image_size( 'c', '977', '450', true );
add_image_size( 'medium_large', '750', '481', true );
add_image_size( 'post-thumbnails', '360', '231', false );
add_image_size( 'news-post', '110', '66', false );
add_image_size( 'thumbnail-post', '360', '231', array( "1", "") ); 


add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );

// Add support for featured content.
add_theme_support( 'featured-content', array(
	'featured_content_filter' => 'twentyfourteen_get_featured_posts',
	'max_posts' => 6,
) );
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function wpdocs_custom_excerpt_length( $length ) {
    return 16;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 5 );

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


function mytheme_portfolio_archive_pages( $query ) {
    if ( is_admin() || ! $query->is_main_query() )
        return;

    if ( is_post_type_archive( 'mytheme_portfolio' ) ) {
        // Display 20 posts for a custom post type called 'mytheme_portfolio'
        $query->set( 'posts_per_page', 20 );
        return;
    }
}
add_action( 'pre_get_posts', 'mytheme_portfolio_archive_pages', 1 );


function getDataAPI($url = '', $data = array()){
	if ($url != '') {

		try {
			
			$s = curl_init();
			curl_setopt($s, CURLOPT_URL, $url);
			curl_setopt($s, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($s, CURLOPT_CUSTOMREQUEST, 'GET');
			curl_setopt($s, CURLOPT_POSTFIELDS, json_encode($data));
			curl_setopt($s, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json',
				'Authorization: Bearer 9b75cbc1c0191fa3654a0f362a25d4c40f2369be' )
			);
			$result = curl_exec($s);
			$result = json_decode($result, true);
			return $result;
		} catch (Exception $e) {
			echo 'API exception: ',  $e->getMessage(), "\n";
		}
	}
	return null;
}

function curl_post($url, $fields = array()) {
		$url = "http://member.accesstrade.vn/api".$url;
		$defaults = array(
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_URL => $url,
            CURLOPT_FRESH_CONNECT => 1,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FORBID_REUSE => 1,
            CURLOPT_TIMEOUT => 4,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => 0
        );
        $ch = curl_init();
        curl_setopt_array($ch, $defaults);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: API_KEY b5b0a38cf02020e524d3e27ad4eac1a5', 'Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
        //curl_setopt($ch, CURLOPT_VERBOSE, 1); // turn verbose on
        $result = curl_exec($ch);
        
        curl_close($ch);
        return $result;
	}

function get_page_views($post_id) {

	if (function_exists('stats_get_csv')) {

		$args = array('days'=>-1, 'limit'=>-1, 'post_id'=>$post_id);
		$result = stats_get_csv('postviews', $args);
		$views = $result[0]['views'];

	} else {

		$views = 0;

	}
	return number_format_i18n($views);
}

function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit) {
  array_pop($words);
  //add a ... at last article when more than limit word count
  echo implode(' ', $words)."..."; } else {
  //otherwise
  echo implode(' ', $words); }
}
//add suppost Themes Html5
add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

register_sidebar( array(
	'name'          => __( 'Primary Sidebar', 'thegioigame' ),
	'id'            => 'sidebar-1',
	'description'   => __( 'Main sidebar that appears on the left.', 'thegioigame' ),
	'before_widget' => '<div id="%1$s" class="widget widget_categories %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4><span class="mkdf-sidearea-title"> ',
	'after_title'   => '</span><span class="mkdf-sidearea-line"></span></h4>',
) );
/**/


// quote
function td_quote_center($atts, $content = null) {
    return '<blockquote><p>' . $content . '</p></blockquote>' ;
}
add_shortcode('quote_center', 'td_quote_center');


function td_quote_right($atts, $content = null) {
    return '<blockquote class="td_quote td_quote_right"><p>' . $content . '</p></blockquote>' ;
}
add_shortcode('quote_right', 'td_quote_right');


function td_quote_left($atts, $content = null) {
    return '<blockquote class="td_quote td_quote_left"><p>' . $content . '</p></blockquote>' ;
}
add_shortcode('quote_left', 'td_quote_left');


function td_quote_box_center($atts, $content = null) {
    return '<blockquote class="td_quote_box td_box_center"><p>' . $content . '</p></blockquote>' ;
}
add_shortcode('quote_box_center', 'td_quote_box_center');


function td_quote_box_left($atts, $content = null) {
    return '<blockquote class="td_quote_box td_box_left"><p>' . $content . '</p></blockquote>' ;
}
add_shortcode('quote_box_left', 'td_quote_box_left');


function td_quote_box_right($atts, $content = null) {
    return '<blockquote class="td_quote_box td_box_right"><p>' . $content . '</p></blockquote>' ;
}
add_shortcode('quote_box_right', 'td_quote_box_right');


function td_pull_quote_center($atts, $content = null) {
    return '<blockquote class="td_pull_quote td_pull_center"><p>' . $content . '</p></blockquote>' ;
}
add_shortcode('pull_quote_center', 'td_pull_quote_center');


function td_pull_quote_left($atts, $content = null) {
    return '<blockquote class="td_pull_quote td_pull_left"><p>' . $content . '</p></blockquote>' ;
}
add_shortcode('pull_quote_left', 'td_pull_quote_left');


function td_pull_quote_right($atts, $content = null) {
    return '<blockquote class="td_pull_quote td_pull_right"><p>' . $content . '</p></blockquote>' ;
}
add_shortcode('pull_quote_right', 'td_pull_quote_right');


function bittersweet_pagination() {

	global $wp_query;

	$big = 999999999; // need an unlikely integer

	$pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<div class="paging clearfix"><ul >';
        foreach ( $pages as $page ) {
                echo "<li>$page</li>";
        }
		echo '</ul></div>';
	}
}

class wp_bootstrap_navwalker extends Walker_Nav_Menu {
/**
* @see Walker::start_lvl()
* @since 3.0.0
*
* @param string $output Passed by reference. Used to append additional content.
* @param int $depth Depth of page. Used for padding.
*/
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul role=\"menu\" class=\"dropdown-menu\">\n";
	}
/**
* @see Walker::start_el()
* @since 3.0.0
*
* @param string $output Passed by reference. Used to append additional content.
* @param object $item Menu item data object.
* @param int $depth Depth of menu item. Used for padding.
* @param int $current_page Menu item ID.
* @param object $args
*/
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
	/**
	* Dividers, Headers or Disabled
	* =============================
	* Determine whether the item is a Divider, Header, Disabled or regular
	* menu item. To prevent errors we use the strcasecmp() function to so a
	* comparison that is not case sensitive. The strcasecmp() function returns
	* a 0 if the strings are equal.
	*/
		if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="divider">';
		} else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="divider">';
		} else if ( strcasecmp( $item->attr_title, 'dropdown-header') == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr( $item->title );
		} else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {
		$output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';
		} else {
			$class_names = $value = '';
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;
			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		if ( $args->has_children )
			$class_names .= ' ';
		if ( in_array( 'current-menu-item', $classes ) )
			$class_names .= ' active';
			$cus = 'td-menu-item td-normal-menu';
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . ' '.$cus.'"' : '';
			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
			$output .= $indent . '<li' . $id . $value . $class_names .'>';
			$atts = array();
			$atts['title'] = ! empty( $item->title ) ? $item->title	: '';
			$atts['target'] = ! empty( $item->target ) ? $item->target	: '';
			$atts['rel'] = ! empty( $item->xfn ) ? $item->xfn	: '';
	// If item has_children add atts to a.
		if ( $args->has_children && $depth === 0 ) {
			$atts['href'] = $item->url;
			$atts['data-toggle'] = 'dropdown';
			$atts['class'] = 'dropdown-toggle';
			$atts['aria-haspopup'] = 'true';
		} else {
			$atts['href'] = ! empty( $item->url ) ? $item->url : '';
		}
			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
			$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}
		$item_output = $args->before;
	/*
	* Glyphicons
	* ===========
	* Since the the menu item is NOT a Divider or Header we check the see
	* if there is a value in the attr_title property. If the attr_title
	* property is NOT null we apply it as the class name for the glyphicon.
	*/
		if ( ! empty( $item->attr_title ) )
			$item_output .= '<a'. $attributes .'><span class="glyphicon ' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';
		else
			$item_output .= '<a'. $attributes .'>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= ( $args->has_children && 0 === $depth ) ? ' <span class="caret"></span></a>' : '</a>';
			$item_output .= $args->after;
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}
/**
* Traverse elements to create list from elements.
*
* Display one element if the element doesn't have any children otherwise,
* display the element and its children. Will only traverse up to the max
* depth and no ignore elements under that depth.
*
* This method shouldn't be called directly, use the walk() method instead.
*
* @see Walker::start_el()
* @since 2.5.0
*
* @param object $element Data object
* @param array $children_elements List of elements to continue traversing.
* @param int $max_depth Max depth to traverse.
* @param int $depth Depth of current element.
* @param array $args
* @param string $output Passed by reference. Used to append additional content.
* @return null Null on failure with no changes to parameters.
*/
	public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
		if ( ! $element )
		return;
			$id_field = $this->db_fields['id'];
		// Display this element.
		if ( is_object( $args[0] ) )
			$args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );
		parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}
/**
* Menu Fallback
* =============
* If this function is assigned to the wp_nav_menu's fallback_cb variable
* and a manu has not been assigned to the theme location in the WordPress
* menu manager the function with display nothing to a non-logged in user,
* and will add a link to the WordPress menu manager if logged in as an admin.
*
* @param array $args passed from the wp_nav_menu function.
*
*/
	public static function fallback( $args ) {
		if ( current_user_can( 'manage_options' ) ) {
					extract( $args );
					$fb_output = null;
				if ( $container ) {
					$fb_output = '<' . $container;
				if ( $container_id )
					$fb_output .= ' id="mainNav"';
				if ( $container_class )
					$fb_output .= ' class="' . $container_class . '"';
					$fb_output .= '>';
			}
			$fb_output .= '<ul';
			if ( $menu_id )
				$fb_output .= ' id="' . $menu_id . '"';
			if ( $menu_class )
				$fb_output .= ' class="' . $menu_class . '"';
				$fb_output .= '>';
				$fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">Add a menu</a></li>';
				$fb_output .= '</ul>';
			if ( $container )
				$fb_output .= '</' . $container . '>';
				echo $fb_output;
			}
		}
}