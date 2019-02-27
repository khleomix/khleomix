<?php
/*
 *  Author: JC Mae Palmes
 *  URL: khleomix.com
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width)) {
	$content_width = 900;
}

if (function_exists('add_theme_support')) {
	// Add Menu Support
	add_theme_support('menus');

	// Add Thumbnail Theme Support
	add_theme_support('post-thumbnails');
	add_image_size('large', 700, '', true); // Large Thumbnail
	add_image_size('medium', 250, '', true); // Medium Thumbnail
	add_image_size('small', 120, '', true); // Small Thumbnail
	add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

	// Enables post and comment RSS feed links to head
	add_theme_support('automatic-feed-links');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// Khleomix navigation
function khleomix_nav() {
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '<span class="global-menu__item">',
		'link_after'      => '</span>',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load Khleomix scripts (header.php)
function khleomix_header_scripts() {
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

		wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
		wp_enqueue_script('modernizr');

		wp_register_script('khleomixscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
		wp_enqueue_script('khleomixscripts');

		wp_register_script('fontawesome', '//use.fontawesome.com/releases/v5.0.8/js/all.js', array(), '5.0.8'); // Font Awesome
		wp_enqueue_script('fontawesome');

	}
}


// Load Footer scripts (footer.php)
function khleomix_footer_scripts() {
	wp_register_script('charming', get_template_directory_uri() . '/js/charming.min.js', array('jquery'), '1.0.0');
	wp_enqueue_script('charming');

	wp_register_script('anime', get_template_directory_uri() . '/js/anime.min.js', array('jquery'), '1.0.0');
	wp_enqueue_script('anime');

	wp_register_script('swing', get_template_directory_uri() . '/js/swing.js', array('jquery'), '1.0.0');
	wp_enqueue_script('swing');

	wp_register_script('easings', get_template_directory_uri() . '/js/easings.js', array('jquery'), '1.0.0');
	wp_enqueue_script('easings');



	wp_register_script('classie', get_template_directory_uri() . '/js/classie.js', array('jquery'), '1.0.0');
	wp_enqueue_script('classie');

	wp_register_script('tweenmax', get_template_directory_uri() . '/js/TweenMax.min.js', array('jquery'), '1.0.0');
	wp_enqueue_script('tweenmax');

	wp_register_script('share', get_template_directory_uri() . '/js/share.js', array('jquery'), '1.0.0');
	wp_enqueue_script('share');

	wp_register_script('iamgesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), '1.0.0');
	wp_enqueue_script('iamgesloaded');

	wp_register_script('glitch', get_template_directory_uri() . '/js/glitch.js', array('jquery'), '1.0.0');
	wp_enqueue_script('glitch');
}

// Load Khleomix conditional scripts
function khleomix_conditional_scripts() {
	if ( !is_404() ) {
		wp_register_script('menu', get_template_directory_uri() . '/js/menu.js', array('jquery'), '1.0.0');
		wp_enqueue_script('menu');
	}
}


//Add defer attribute to enqueued scripts
function add_defer_attribute($tag, $handle) {
	// add script handles to the array below
	$scripts_to_defer = array('modernizr', 'khleomixscripts', 'fontawesome', 'charming', 'anime', 'swing', 'easings', 'menu', 'classie', 'tweenmax', 'share', 'iamgesloaded', 'glitch');

	foreach($scripts_to_defer as $defer_script) {
		if ($defer_script === $handle) {
			 return str_replace(' src', ' defer src', $tag);
		}
	}
	return $tag;
}
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);


// Load Khleomix styles
function khleomix_styles() {
	wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0', 'all');
	wp_enqueue_style('normalize');

	wp_register_style('khleomix', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
	wp_enqueue_style('khleomix');

	wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');
	wp_enqueue_style('main');

	wp_register_style('swing', get_template_directory_uri() . '/css/swing.css', array(), '1.0', 'all');
	wp_enqueue_style('swing');
}


// Register Khleomix Navigation
function register_khleomix_menu() {
	register_nav_menus(array( // Using array to specify more menus if needed
		'header-menu' => __('Header Menu', 'khleomix'), // Main Navigation
	));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '') {
	$args['container'] = false;
	return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var) {
	return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist) {
	return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes) {
	global $post;
	if (is_home()) {
		$key = array_search('blog', $classes);
		if ($key > -1) {
			unset($classes[$key]);
		}
	} elseif (is_page()) {
		$classes[] = sanitize_html_class($post->post_name);
	} elseif (is_singular()) {
		$classes[] = sanitize_html_class($post->post_name);
	}

	return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar')) {
	// Define Sidebar Widget Area 1
	register_sidebar(array(
		'name' => __('Sidebar Widget 1', 'khleomix'),
		'description' => __('Sidebar Widget Area 1', 'khleomix'),
		'id' => 'widget-area-1',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));

	// Define Sidebar Widget Area 2
	register_sidebar(array(
		'name' => __('Sidebar Widget 2', 'khleomix'),
		'description' => __('Sidebar Widget Area 2', 'khleomix'),
		'id' => 'widget-area-2',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action('wp_head', array(
		$wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
		'recent_comments_style'
	));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function khleomixwp_pagination() {
	global $wp_query;
	$big = 999999999;
	echo paginate_links(array(
		'base' => str_replace($big, '%#%', get_pagenum_link($big)),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages
	));
}

// Custom Excerpts
// Create 20 Word Callback for Index page Excerpts, call using khleomixwp_excerpt('khleomixwp_index');
function khleomixwp_index($length) {
	return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using khleomixwp_excerpt('khleomixwp_custom_post');
function khleomixwp_custom_post($length) {
	return 40;
}

// Create the Custom Excerpts callback
function khleomixwp_excerpt($length_callback = '', $more_callback = '') {
	global $post;
	if (function_exists($length_callback)) {
		add_filter('excerpt_length', $length_callback);
	}
	if (function_exists($more_callback)) {
		add_filter('excerpt_more', $more_callback);
	}
	$output = get_the_excerpt();
	$output = apply_filters('wptexturize', $output);
	$output = apply_filters('convert_chars', $output);
	$output = '<p>' . $output . '</p>';
	echo $output;
}

// Custom View Article link to Post
function khleomix_view_article($more) {
	global $post;
	//return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Post', 'khleomix') . '</a>';
}


// Custom Disclaimer for Bugs and Fixes Category
function my_disclaimer(){
	if ( is_single() ) {
		if ( has_category('bugs-and-fixes') ) {
			echo '<div class="disclaimer">Disclaimer: This fix might not always work for everyone, if anything happens I am not in any way liable. If you don’t have a backup – that is in no way my problem. If this helped you, share and comment. If you have a better fix, let me know via the comment section below.</div>';
		} elseif ( has_category('plugins') ) {
			echo '<div class="disclaimer">Disclaimer: All my plugins are free to use. But it might not always work for everyone, if anything happens I am not in any way liable. If this helped you, share and comment. If you do have a problem, <a href="http://khleomix.com/contact/">contact me</a> and I’ll see what I can do.</div>';
		} elseif ( has_category('snippets') ) {
			echo '<div class="disclaimer">Disclaimer: The snippets added to this post might not always work for everyone, if anything happens I am not in any way liable. If you don’t have a backup – that is in no way my problem. If this helped you, share and comment. If you can make it better, let me know via the comment section below.</div>';
		}
	}
}

// Exclude category from blog page
function exclude_category( $query ) {
	if ( $query->is_home() && $query->is_main_query() ) {
		$query->set( 'cat', '-253' );
	}
}


// Remove 'text/css' from our enqueued stylesheet
function khleomix_style_remove($tag) {
	return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html ) {
	$html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
	return $html;
}

// Custom Gravatar in Settings > Discussion
function khleomixgravatar ($avatar_defaults) {
	$myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
	$avatar_defaults[$myavatar] = "Custom Gravatar";
	return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments() {
	if (!is_admin()) {
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
			wp_enqueue_script('comment-reply');
		}
	}
}

// Custom Comments Callback
function khleomixcomments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
	<!-- heads up: starting < for the html tag (li or div) in the next line: -->
	<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
		<span class="comment-thumb"><a href="<?php comment_author_url(); ?>"><?php echo get_avatar( $comment ); ?></a></span>
	</div>
	<?php if ($comment->comment_approved == '0') : ?>
		<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
		<br />
	<?php endif; ?>

	<div class="comment-author-message">
		<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
			<?php
				printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
			?>
		</div>

		<?php comment_text() ?>

		<div class="reply">
		<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }


//Show random post in a shortcode - added to 404 page
function kd_rand_post() {
	$args = array(
		'post_type'      => 'post',
		'orderby'        => 'rand',
		'cat'            => '-253',
		'posts_per_page' => 1, //You can set this to any number that you want. I just had it at
		);

	$the_query = new WP_Query( $args );

	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$string = '<a href="'. get_permalink() .'" title="'. get_the_title() . '">Go Here</a>';
		}

		/* Restore original Post Data */
		wp_reset_postdata();

	} else {

		$string = 'no posts found';
	}

	return $string;
}
add_shortcode('kd-random-post','kd_rand_post');



/*------------------------------------*\
	Actions + Filters
\*------------------------------------*/

// Add Actions
add_action('init', 'khleomix_header_scripts'); // Add Custom Scripts to wp_head
add_action( 'wp_footer', 'khleomix_footer_scripts' ); // Add Custom Scripts to wp_footer
add_action('wp_print_scripts', 'khleomix_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'khleomix_styles'); // Add Theme Stylesheet
add_action('init', 'register_khleomix_menu'); // Add Khleomix Menu
add_action('init', 'create_portfolio'); // Add our Khleomix Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'khleomixwp_pagination'); // Add our Khleomix Pagination
add_action( 'pre_get_posts', 'exclude_category' ); // Exclude category


// Add Filters
add_filter('avatar_defaults', 'khleomixgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'khleomix_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('style_loader_tag', 'khleomix_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images



?>


