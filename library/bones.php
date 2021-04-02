<?php
/* Welcome to Bones :)
  This is the core Bones file where most of the
  main functions & features reside. If you have
  any custom functions, it's best to put them
  in the functions.php file.

  Developed by: Eddie Machado
  URL: http://themble.com/bones/

  - head cleanup (remove rsd, uri links, junk css, ect)
  - enqueueing scripts & styles
  - theme support functions
  - custom menu output & fallbacks
  - related post function
  - page-navi function
  - removing <p> from around images
  - customizing the post excerpt

 */

/* * *******************
  WP_HEAD GOODNESS
  The default wordpress head is
  a mess. Let's clean it up by
  removing all the junk we don't
  need.
 * ******************* */

function senar_head_cleanup() {
    // category feeds
    // remove_action( 'wp_head', 'feed_links_extra', 3 );
    // post and comment feeds
    // remove_action( 'wp_head', 'feed_links', 2 );
    // EditURI link
    remove_action('wp_head', 'rsd_link');
    // windows live writer
    remove_action('wp_head', 'wlwmanifest_link');
    // previous link
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    // start link
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    // links for adjacent posts
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    // WP version
    remove_action('wp_head', 'wp_generator');
    // remove WP version from css
    add_filter('style_loader_src', 'senar_remove_wp_ver_css_js', 9999);
    // remove Wp version from scripts
    add_filter('script_loader_src', 'senar_remove_wp_ver_css_js', 9999);
}

/* end senar head cleanup */

// A better title
// http://www.deluxeblogtips.com/2012/03/better-title-meta-tag.html
function rw_title($title, $sep, $seplocation) {
    global $page, $paged;

    // Don't affect in feeds.
    if (is_feed())
        return $title;

    // Add the blog's name
    if ('right' == $seplocation) {
        $title .= get_bloginfo('name');
    } else {
        $title = get_bloginfo('name') . $title;
    }

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo('description', 'display');

    if ($site_description && ( is_home() || is_front_page() )) {
        $title .= " {$sep} {$site_description}";
    }

    // Add a page number if necessary:
    if ($paged >= 2 || $page >= 2) {
        $title .= " {$sep} " . sprintf(__('Page %s', 'dbt'), max($paged, $page));
    }

    return $title;
}

// end better title
// remove WP version from RSS
function senar_rss_version() {
    return '';
}

// remove WP version from scripts
function senar_remove_wp_ver_css_js($src) {
    if (strpos($src, 'ver='))
        $src = remove_query_arg('ver', $src);
    return $src;
}

// remove injected CSS for recent comments widget
function senar_remove_wp_widget_recent_comments_style() {
    if (has_filter('wp_head', 'wp_widget_recent_comments_style')) {
        remove_filter('wp_head', 'wp_widget_recent_comments_style');
    }
}

// remove injected CSS from recent comments widget
function senar_remove_recent_comments_style() {
    global $wp_widget_factory;
    if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
        remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
    }
}

// remove injected CSS from gallery
function senar_gallery_style($css) {
    return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
}

/* * *******************
  SCRIPTS & ENQUEUEING
 * ******************* */

// loading modernizr and jquery, and reply script
function senar_scripts_and_styles() {

    global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    if (!is_admin()) {

        // modernizr (without media query polyfill)
        wp_register_script('senar-modernizr', get_stylesheet_directory_uri() . '/library/js/libs/modernizr.custom.min.js', array(), '2.5.3', false);

        // register main stylesheet
        wp_register_style('senar-stylesheet', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), '', 'all');

        // ie-only style sheet
        wp_register_style('senar-ie-only', get_stylesheet_directory_uri() . '/library/css/ie.css', array(), '');

        // comment reply script for threaded comments
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }

        //adding scripts file in the footer
//        wp_register_script('senar-libs-mask', get_stylesheet_directory_uri() . '/assets/js/ain.js', array('jquery'), '', true);
        
        wp_register_script('senar-main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);
        wp_register_script('senar-mask-js', get_stylesheet_directory_uri() . '/assets/js/modules/mask.js', array(), '', true);
        wp_register_script('senar-carousel-js', get_stylesheet_directory_uri() . '/assets/js/modules/carousel.js', array(), '', true);
        wp_register_script('senar-slide-js', get_stylesheet_directory_uri() . '/assets/js/modules/slide.js', array(), '', true);
        wp_register_script('senar-common-js', get_stylesheet_directory_uri() . '/assets/js/modules/common.js', array('senar-mask-js'), '', true);
        wp_register_script('senar-home-js', get_stylesheet_directory_uri() . '/assets/js/modules/home.js', array('senar-slide-js', 'senar-carousel-js'), '', true);
        wp_register_script('senar-blog-js', get_stylesheet_directory_uri() . '/assets/js/modules/blog.js', array('senar-slide-js'), '', true);

        // enqueue styles and scripts
        wp_enqueue_script('senar-modernizr');
        wp_enqueue_style('senar-stylesheet');
        wp_enqueue_style('senar-ie-only');

        $wp_styles->add_data('senar-ie-only', 'conditional', 'lt IE 9'); // add conditional wrapper around ie stylesheet

        /*
          I recommend using a plugin to call jQuery
          using the google cdn. That way it stays cached
          and your site will load faster.
         */
        wp_enqueue_script('jquery');
        wp_enqueue_script('senar-main-js');
        wp_enqueue_script('senar-common-js');
        wp_enqueue_script('senar-home-js');
        wp_enqueue_script('senar-blog-js');
    }
}

/* * *******************
  THEME SUPPORT
 * ******************* */

// Adding WP 3+ Functions & Theme Support
function senar_theme_support() {

    // wp thumbnails (sizes handled in functions.php)
    add_theme_support('post-thumbnails');

    // default thumb size
    set_post_thumbnail_size(125, 125, true);

    // wp custom background (thx to @bransonwerner for update)
//    add_theme_support('custom-background', array(
//        'default-image' => '', // background image default
//        'default-color' => '', // background color default (dont add the #)
//        'wp-head-callback' => '_custom_background_cb',
//        'admin-head-callback' => '',
//        'admin-preview-callback' => ''
//            )
//    );

    // rss thingy
    add_theme_support('automatic-feed-links');

    // to add header image support go here: http://themble.com/support/adding-header-background-image-support/
    // adding post format support
//    add_theme_support('post-formats', array(
//        'aside', // title less blurb
//        'gallery', // gallery of images
//        'link', // quick link to other site
//        'image', // an image
//        'quote', // a quick quote
//        'status', // a Facebook like status update
//        'video', // video
//        'audio', // audio
//        'chat'               // chat transcript
//            )
//    );

    // wp menus
    add_theme_support('menus');

    // registering wp3+ menus
    register_nav_menus(
            array(
                'main-nav' => __('The Main Menu', 'senar'), // main nav in header
                'footer-links' => __('Footer Links', 'senar') // secondary nav in footer
            )
    );

    // Enable support for HTML5 markup.
    add_theme_support('html5', array(
        'comment-list',
        'search-form',
        'comment-form'
    ));
}

/* end senar theme support */


/* * *******************
  RELATED POSTS FUNCTION
 * ******************* */

// Related Posts Function (call using senar_related_posts(); )
function senar_related_posts() {
    echo '<ul id="senar-related-posts">';
    global $post;
    $tags = wp_get_post_tags($post->ID);
    if ($tags) {
        foreach ($tags as $tag) {
            $tag_arr .= $tag->slug . ',';
        }
        $args = array(
            'tag' => $tag_arr,
            'numberposts' => 5, /* you can change this to show more */
            'post__not_in' => array($post->ID)
        );
        $related_posts = get_posts($args);
        if ($related_posts) {
            foreach ($related_posts as $post) : setup_postdata($post);
                ?>
                <li class="related_post"><a class="entry-unrelated" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
            <?php
            endforeach;
        }
        else {
            ?>
            <?php echo '<li class="no_related_post">' . __('No Related Posts Yet!', 'senar') . '</li>'; ?>
            <?php
        }
    }
    wp_reset_postdata();
    echo '</ul>';
}

/* end senar related posts function */

/* * *******************
  PAGE NAVI
 * ******************* */

// Numeric Page Navi (built into the theme by default)
function senar_page_navi() {
    global $wp_query;
    $bignum = 999999999;
    if ($wp_query->max_num_pages <= 1)
        return;
    echo '<nav class="pagination">';
    echo paginate_links(array(
        'base' => str_replace($bignum, '%#%', esc_url(get_pagenum_link($bignum))),
        'format' => '',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text' => '&larr;',
        'next_text' => '&rarr;',
        'type' => 'list',
        'end_size' => 3,
        'mid_size' => 3
    ));
    echo '</nav>';
}

/* end page navi */

/* * *******************
  RANDOM CLEANUP ITEMS
 * ******************* */

// remove the p from around imgs (http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/)
function senar_filter_ptags_on_images($content) {
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

// This removes the annoying […] to a Read More link
function senar_excerpt_more($more) {
    global $post;
    // edit here if you like
//    return '...  <a class="excerpt-read-more" href="' . get_permalink($post->ID) . '" title="' . __('Read ', 'senar') . esc_attr(get_the_title($post->ID)) . '">' . __('Read more &raquo;', 'senar') . '</a>';
    return ' ...';
}

//custom excerpt length
function wpfme_custom_excerpt_length($length) {
    //the amount of words to return
    return 10;
}

add_filter('excerpt_length', 'wpfme_custom_excerpt_length');

function senar_custom_excerpt_more( $output ) {
	if ( has_excerpt() ) {
		$output .= '';
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'senar_custom_excerpt_more' );
?>
