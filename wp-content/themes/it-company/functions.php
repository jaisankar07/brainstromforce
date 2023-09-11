<?php
/**
 * IT Company functions and definitions
 * @package IT Company
 */

/* Breadcrumb Begin */
function it_company_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url( home_url() );
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(',');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			echo "<span> ";
			the_title();
		}
	}
}

/* Theme Setup */
if ( ! function_exists( 'it_company_setup' ) ) :

function it_company_setup() {

	$GLOBALS['content_width'] = apply_filters( 'it_company_content_width', 640 );
	
	load_theme_textdomain( 'it-company', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('it-company-homepage-thumb',240,145,true);
	
    register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'it-company' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', it_company_font_url() ) );

	// Theme Activation Notice
	global $pagenow;
	
	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'it_company_activation_notice' );
	}
}
endif;
add_action( 'after_setup_theme', 'it_company_setup' );

// Notice after Theme Activation
function it_company_activation_notice() {
	echo '<div class="notice notice-success is-dismissible welcome">';
		echo '<h3>'. esc_html__( 'Greetings from Themeglance!!', 'it-company' ) .'</h3>';
		echo '<p>'. esc_html__( 'A heartful thank you for choosing Themeglance. We promise to deliver only the best to you. Please proceed towards welcome section to get started.', 'it-company' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=it_company_guide' ) ) .'" class="button button-primary">'. esc_html__( 'About Theme', 'it-company' ) .'</a></p>';
	echo '</div>';
}

/* Theme Widgets Setup */
function it_company_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'it-company' ),
		'description'   => __( 'Appears on blog page sidebar', 'it-company' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title pt-0 mb-2">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'it-company' ),
		'description'   => __( 'Appears on page sidebar', 'it-company' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title pt-0 mb-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'it-company' ),
		'description'   => __( 'Appears on page sidebar', 'it-company' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title pt-0 mb-2">',
		'after_title'   => '</h3>',
	) );

	$it_company_footer_columns = get_theme_mod('it_company_footer_widget', '4');
	for ($i=1; $i<=$it_company_footer_columns; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer ', 'it-company' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s mb-3">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	register_sidebar( array(
			'name'          => __( 'Shop Page Sidebar', 'it-company' ),
			'description'   => __( 'Appears on shop page', 'it-company' ),	
			'id'            => 'woocommerce_sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Single Product Page Sidebar', 'it-company' ),
		'description'   => __( 'Appears on shop page', 'it-company' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'it_company_widgets_init' );

/* Theme Font URL */
function it_company_font_url(){
	$font_family   = array(
		'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Kalam:wght@300;400;700',
		'PT+Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
		'Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Playball',
		'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Julius+Sans+One',
		'Arsenal:ital,wght@0,400;0,700;1,400;1,700',
		'Slabo+13px',
		'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
		'Overpass+Mono:wght@300;400;500;600;700',
		'Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
		'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
		'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700',
		'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Quicksand:wght@300;400;500;600;700',
		'Padauk:wght@400;700',
		'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
		'Inconsolata:wght@200;300;400;500;600;700;800;900',
		'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Pacifico',
		'Indie+Flower',
		'VT323',
		'Dosis:wght@200;300;400;500;600;700;800',
		'Frank+Ruhl+Libre:wght@300;400;500;700;900',
		'Fjalla+One',
		'Oxygen:wght@300;400;700',
		'Arvo:ital,wght@0,400;0,700;1,400;1,700',
		'Noto+Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Lobster',
		'Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700',
		'Yanone+Kaffeesatz:wght@200;300;400;500;600;700',
		'Anton',
		'Libre+Baskerville:ital,wght@0,400;0,700;1,400',
		'Bree+Serif',
		'Gloria+Hallelujah',
		'Abril+Fatface',
		'Varela+Round',
		'Vampiro+One',
		'Shadows+Into+Light',
		'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Rokkitt:wght@100;200;300;400;500;600;700;800;900',
		'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Francois+One',
		'Orbitron:wght@400;500;600;700;800;900',
		'Patua+One',
		'Acme',
		'Satisfy',
		'Quattrocento+Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Architects+Daughter',
		'Russo+One',
		'Monda:wght@400;700',
		'Righteous',
		'Lobster+Two:ital,wght@0,400;0,700;1,400;1,700',
		'Hammersmith+One',
		'Courgette',
		'Permanent+Marke',
		'Cherry+Swash:wght@400;700',
		'Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
		'Poiret+One',
		'BenchNine:wght@300;400;700',
		'Economica:ital,wght@0,400;0,700;1,400;1,700',
		'Handlee',
		'Cardo:ital,wght@0,400;0,700;1,400',
		'Alfa+Slab+One',
		'Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Cookie',
		'Chewy',
		'Great+Vibes',
		'Coming+Soon',
		'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
		'Days+One',
		'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Shrikhand',
		'Tangerine:wght@400;700',
		'IM+Fell+English+SC',
		'Boogaloo',
		'Bangers',
		'Fredoka+One',
		'Bad+Script',
		'Volkhov:ital,wght@0,400;0,700;1,400;1,700',
		'Shadows+Into+Light+Two',
		'Marck+Script',
		'Sacramento',
		'Unica+One',
		'Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
		'Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Josefin+Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700'
	);

	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_family ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
	return $contents;
}

/*radio button sanitization*/
 function it_company_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Excerpt Limit Begin */
function it_company_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'it_company_loop_columns');
	if (!function_exists('it_company_loop_columns')) {
	function it_company_loop_columns() {
		return get_theme_mod( 'it_company_products_per_row', '3' ); // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'it_company_products_per_page' );
function it_company_products_per_page( $cols ) {
  	return  get_theme_mod( 'it_company_products_per_page',9);
}

/* Theme enqueue scripts */
function it_company_scripts() {
	wp_enqueue_style( 'it-company-font', it_company_font_url(), array() );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'it-company-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'it-company-style', 'rtl', 'replace' );
	wp_enqueue_style( 'it-company-block-pattern-frontend', get_template_directory_uri().'/block-patterns/css/block-frontend.css' );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
	wp_enqueue_style( 'it-company-block-style', get_theme_file_uri('/css/blocks-style.css') );
	// Paragraph
    $it_company_paragraph_color = get_theme_mod('it_company_paragraph_color', '');
    $it_company_paragraph_font_family = get_theme_mod('it_company_paragraph_font_family', '');
    $it_company_paragraph_font_size = get_theme_mod('it_company_paragraph_font_size', '');
	// "a" tag
	$it_company_atag_color = get_theme_mod('it_company_atag_color', '');
    $it_company_atag_font_family = get_theme_mod('it_company_atag_font_family', '');
	// "li" tag
	$it_company_li_color = get_theme_mod('it_company_li_color', '');
    $it_company_li_font_family = get_theme_mod('it_company_li_font_family', '');
	// H1
	$it_company_h1_color = get_theme_mod('it_company_h1_color', '');
    $it_company_h1_font_family = get_theme_mod('it_company_h1_font_family', '');
    $it_company_h1_font_size = get_theme_mod('it_company_h1_font_size', '');
	// H2
	$it_company_h2_color = get_theme_mod('it_company_h2_color', '');
    $it_company_h2_font_family = get_theme_mod('it_company_h2_font_family', '');
    $it_company_h2_font_size = get_theme_mod('it_company_h2_font_size', '');
	// H3
	$it_company_h3_color = get_theme_mod('it_company_h3_color', '');
    $it_company_h3_font_family = get_theme_mod('it_company_h3_font_family', '');
    $it_company_h3_font_size = get_theme_mod('it_company_h3_font_size', '');
	// H4
	$it_company_h4_color = get_theme_mod('it_company_h4_color', '');
    $it_company_h4_font_family = get_theme_mod('it_company_h4_font_family', '');
    $it_company_h4_font_size = get_theme_mod('it_company_h4_font_size', '');
	// H5
	$it_company_h5_color = get_theme_mod('it_company_h5_color', '');
    $it_company_h5_font_family = get_theme_mod('it_company_h5_font_family', '');
    $it_company_h5_font_size = get_theme_mod('it_company_h5_font_size', '');
	// H6
	$it_company_h6_color = get_theme_mod('it_company_h6_color', '');
    $it_company_h6_font_family = get_theme_mod('it_company_h6_font_family', '');
    $it_company_h6_font_size = get_theme_mod('it_company_h6_font_size', '');

	$it_company_custom_css ='
		p,span{
		    color:'.esc_html($it_company_paragraph_color).'!important;
		    font-family: '.esc_html($it_company_paragraph_font_family).';
		    font-size: '.esc_html($it_company_paragraph_font_size).';
		}
		a{
		    color:'.esc_html($it_company_atag_color).'!important;
		    font-family: '.esc_html($it_company_atag_font_family).';
		}
		li{
		    color:'.esc_html($it_company_li_color).'!important;
		    font-family: '.esc_html($it_company_li_font_family).';
		}
		h1{
		    color:'.esc_html($it_company_h1_color).'!important;
		    font-family: '.esc_html($it_company_h1_font_family).'!important;
		    font-size: '.esc_html($it_company_h1_font_size).'!important;
		}
		h2{
		    color:'.esc_html($it_company_h2_color).'!important;
		    font-family: '.esc_html($it_company_h2_font_family).'!important;
		    font-size: '.esc_html($it_company_h2_font_size).'!important;
		}
		h3{
		    color:'.esc_html($it_company_h3_color).'!important;
		    font-family: '.esc_html($it_company_h3_font_family).'!important;
		    font-size: '.esc_html($it_company_h3_font_size).'!important;
		}
		h4{
		    color:'.esc_html($it_company_h4_color).'!important;
		    font-family: '.esc_html($it_company_h4_font_family).'!important;
		    font-size: '.esc_html($it_company_h4_font_size).'!important;
		}
		h5{
		    color:'.esc_html($it_company_h5_color).'!important;
		    font-family: '.esc_html($it_company_h5_font_family).'!important;
		    font-size: '.esc_html($it_company_h5_font_size).'!important;
		}
		h6{
		    color:'.esc_html($it_company_h6_color).'!important;
		    font-family: '.esc_html($it_company_h6_font_family).'!important;
		    font-size: '.esc_html($it_company_h6_font_size).'!important;
		}
	';
			
	wp_add_inline_style( 'it-company-basic-style',$it_company_custom_css );
	
	wp_enqueue_script( 'it-company-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') );

	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/js/jquery.superfish.js', array('jquery') ,'',true);
	require get_parent_theme_file_path( '/inc/tg-custom-css.php' );
	wp_add_inline_style( 'it-company-basic-style',$it_company_custom_css );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'it_company_scripts' );
/*** Enqueue block editor style */
function it_company_block_editor_styles() {
	wp_enqueue_style( 'it-company-font', it_company_font_url(), array() );
    wp_enqueue_style( 'it-company-block-patterns-style-editor', get_theme_file_uri( '/block-patterns/css/block-editor.css' ), false, '1.0', 'all' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/css/bootstrap.css' );
    wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
}
add_action( 'enqueue_block_editor_assets', 'it_company_block_editor_styles' );

/* Theme Credit link */
define('IT_COMPANY_THEMESGLANCE_PRO_THEME_URL',__('https://www.themesglance.com/themes/it-company-wordpress-theme/','it-company'));
define('IT_COMPANY_THEMESGLANCE_THEME_DOC',__('https://www.themesglance.com/demo/docs/it-company-pro/','it-company'));
define('IT_COMPANY_THEMESGLANCE_LIVE_DEMO',__('https://themesglance.com/it-company-pro/','it-company'));
define('IT_COMPANY_THEMESGLANCE_FREE_THEME_DOC',__('https://www.themesglance.com/demo/docs/free-it-company/','it-company'));
define('IT_COMPANY_THEMESGLANCE_SUPPORT',__('https://wordpress.org/support/theme/it-company/','it-company'));
define('IT_COMPANY_THEMESGLANCE_REVIEW',__('https://wordpress.org/support/theme/it-company/reviews/','it-company'));
define('IT_COMPANY_SITE_URL',__('https://www.themesglance.com/themes/free-it-company-wordpress-theme/','it-company'));

function it_company_credit_link() {
    echo "<a href=".esc_url(IT_COMPANY_SITE_URL)." target='_blank'>".esc_html__('IT Company WordPress Theme','it-company')."</a>";
}

function it_company_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/*----- Related Posts Function ------*/
if ( ! function_exists( 'it_company_related_posts_function' ) ) {
	function it_company_related_posts_function() {
		wp_reset_postdata();
		global $post;

		// Define shared post arguments
		$args = array(
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'ignore_sticky_posts'    => 1,
			'orderby'                => 'rand',
			'post__not_in'           => array( $post->ID ),
			'posts_per_page'    => absint( get_theme_mod( 'it_company_related_post_count', '3' ) ),
		);
		// Related by categories
		if ( get_theme_mod( 'it_company_post_shown_by', 'categories' ) == 'categories' ) {

			$cats = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $cats ) {
				$cats                 = wp_get_post_categories( $post->ID, array( 'fields' => 'ids' ) );
				$args['category__in'] = $cats;
			} else {
				$args['cat'] = $cats;
			}
		}
		// Related by tags
		if ( get_theme_mod( 'it_company_post_shown_by', 'categories' ) == 'tags' ) {

			$tags = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $tags ) {
				$tags            = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );
				$args['tag__in'] = $tags;
			} else {
				$args['tag_slug__in'] = explode( ',', $tags );
			}
			if ( ! $tags ) {
				$break = true;
			}
		}

		$query = ! isset( $break ) ? new WP_Query( $args ) : new WP_Query();

		return $query;
	}
}

function it_company_topbar_enabled(){
	if(get_theme_mod('it_company_top_header') == true ) {
		return true;
	}
	return false;
}
function it_company_slider_enabled(){
	if(get_theme_mod('it_company_slider_hide') == true ) {
		return true;
	}
	return false;
}
function it_company_button_enabled(){
	if(get_theme_mod('it_company_button_text') != '' ) {
		return true;
	}
	return false;
}
function it_company_preloader_enabled(){
	if(get_theme_mod('it_company_preloader') == true ) {
		return true;
	}
	return false;
}
function it_company_back_to_top_enabled(){
	if(get_theme_mod('it_company_hide_scroll') == true ) {
		return true;
	}
	return false;
}
function it_company_excerpt_enabled(){
	if(get_theme_mod('it_company_blog_post_content') == 'Excerpt Content' ) {
		return true;
	}
	return false;
}
function it_company_logo_enabled(){
	if(get_theme_mod('it_company_header_layout') == 'Logo above Menu' ) {
		return true;
	}
	return false;
}
function it_company_menu_alignment_enable(){
	if(get_theme_mod('it_company_show_search') == false  && get_theme_mod('it_company_header_layout') == 'Logo above Menu' ) {
			return true;
		}
	return false;
}
function it_company_logo_title_enabled(){
	if(get_theme_mod('it_company_display_logo') == 'Both logo & Title' ) {
		return true;
	}
	return false;
}

function it_company_blog_image_dimension(){
	if(get_theme_mod('it_company_blog_image_dimension') == 'custom' ) {
		return true;
	}
	return false;
}

function it_company_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function it_company_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function it_company_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

/* TGM Plugin Activation */
require get_template_directory() .'/inc/tgm.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Implement the Get Started. */
require get_template_directory() . '/inc/getting-started/getting-started.php';

/* About Us Widget */
require get_template_directory() . '/inc/about-widget.php';

/* Contact Us Widget */
require get_template_directory() . '/inc/contact-widget.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/block-patterns/block-patterns.php';

/* webfont */
require get_template_directory() . '/inc/wptt-webfont-loader.php';