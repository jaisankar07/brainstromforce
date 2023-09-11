<?php
/**
 * Theme Functions.
 */

/* Theme Setup */
if (!function_exists('it_services_setup')):

function it_services_setup() {

	$GLOBALS['content_width'] = apply_filters('it_services_content_width', 640);

	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support('custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	));

	add_theme_support('custom-background', array(
		'default-color' => 'ffffff',
	));

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style(array('css/editor-style.css', it_services_font_url()));
}
endif;
add_action('after_setup_theme', 'it_services_setup');

add_action( 'wp_enqueue_scripts', 'it_services_enqueue_styles' );
function it_services_enqueue_styles() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.css' );
	$parent_style = 'it-company-basic-style'; // Style handle of parent theme.
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'it-services-style', get_stylesheet_uri(), array( $parent_style ) );
	require get_parent_theme_file_path( '/inc/tg-custom-css.php' );
	wp_add_inline_style( 'it-services-style', $it_company_custom_css );
	require get_theme_file_path( '/tg-custom-css.php' );
	wp_add_inline_style( 'it-services-style', $it_services_custom_css );
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
	wp_enqueue_style( 'it-services-block-patterns-style-frontend', get_theme_file_uri('/block-patterns/css/block-frontend.css') );
}

function it_services_font_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Abhaya Libre:wght@400;500;600;700;800';
	$font_family[] = 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

function it_services_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'it-services' ),
		'description'   => __( 'Appears on blog page sidebar', 'it-services' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title pt-0 mb-2">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'it_services_widgets_init' );

/**
 * Enqueue block editor style
 */
function it_services_block_editor_styles() {
	wp_enqueue_style( 'it-services-font', it_services_font_url(), array() );
    wp_enqueue_style( 'it-services-block-patterns-style-editor', get_theme_file_uri( '/block-patterns/css/block-editor.css' ), false, '1.0', 'all' );
}
add_action( 'enqueue_block_editor_assets', 'it_services_block_editor_styles' );

function it_services_customize_register() {     
	global $wp_customize;
	$wp_customize->remove_control("it_company_facebook_icon");
	$wp_customize->remove_setting("it_company_facebook_icon");

	$wp_customize->remove_control("it_company_facebook");
	$wp_customize->remove_setting("it_company_facebook");

	$wp_customize->remove_control("it_company_twitter_icon");
	$wp_customize->remove_setting("it_company_twitter_icon");

	$wp_customize->remove_control("it_company_twitter");
	$wp_customize->remove_setting("it_company_twitter");

	$wp_customize->remove_control("it_company_youtube_icon");
	$wp_customize->remove_setting("it_company_youtube_icon");

	$wp_customize->remove_control("it_company_youtube");
	$wp_customize->remove_setting("it_company_youtube");

	$wp_customize->remove_control("it_company_linkedin_icon");
	$wp_customize->remove_setting("it_company_linkedin_icon");

	$wp_customize->remove_control("it_company_linkedin");
	$wp_customize->remove_setting("it_company_linkedin");

	$wp_customize->remove_control("it_company_social_icons_font_size");
	$wp_customize->remove_setting("it_company_social_icons_font_size");

	$wp_customize->remove_control("it_company_show_search");
	$wp_customize->remove_setting("it_company_show_search");

	$wp_customize->remove_control("it_company_search_responsive");
	$wp_customize->remove_setting("it_company_search_responsive");
	
	$wp_customize->remove_control("it_company_slider_button_label");
	$wp_customize->remove_setting("it_company_slider_button_label");

	$wp_customize->remove_control("it_company_second_theme_color");
	$wp_customize->remove_setting("it_company_second_theme_color");

	$wp_customize->remove_section("it_company_about");	

	// What we do Section
	$wp_customize->add_section('it_services_what_we_do_section',array(
		'title'	=> __('What we do','it-services'),
		'description'	=> __('Add What we do sections below.','it-services'),
		'priority' => 90,
		'panel' => 'it_company_panel_id',
	));

	$wp_customize->add_setting('it_services_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('it_services_section_title',array(
		'label'	=> __('Section Title','it-services'),
		'section'	=> 'it_services_what_we_do_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('it_services_slider_button_label',array(
		'default'	=> 'Read More',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('it_services_slider_button_label',array(
		'label'	=> __('slider button','it-services'),
		'section'	=> 'it_company_slider_section',
		'type'		=> 'text'
	));

	// category right
	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post1[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post1[$category->slug] = $category->name;
	}

	$wp_customize->add_setting( 'it_services_what_we_do_category', array(
      	'default'           => '',
      	'sanitize_callback' => 'it_company_sanitize_choices'
    ));
    $wp_customize->add_control('it_services_what_we_do_category',array(
		'type'    => 'select',
		'choices' => $cat_post1,
		'label' => __('Select Category to display Latest Post','it-services'),
		'section' => 'it_services_what_we_do_section',
	));

	$wp_customize->add_setting( 'it_services_we_do_excerpt_number', array(
		'default' => 30,
		'sanitize_callback'	=> 'it_company_sanitize_float'
	) );
	$wp_customize->add_control( 'it_services_we_do_excerpt_number', array(
		'label' => esc_html__( 'About Excerpt length','it-services' ),
		'section' => 'it_services_what_we_do_section',
		'type'  => 'number',
		'settings' => 'it_services_we_do_excerpt_number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 50,
		),
	) );
} 
add_action( 'customize_register', 'it_services_customize_register', 11 );

function it_services_remove_parent_function() {
	remove_action( 'admin_notices', 'it_company_activation_notice' );
	remove_action( 'admin_menu', 'it_company_gettingstarted' );
}
add_action( 'init', 'it_services_remove_parent_function');

define('IT_SERVICES_SITE_URL',__('https://www.themesglance.com/themes/free-it-services-wordpress-theme/','it-services'));

function it_services_credit_link() {
    echo "<a href=".esc_url(IT_SERVICES_SITE_URL)." target='_blank'>".esc_html__('IT Services WordPress Theme','it-services')."</a>";
}

/* Block Pattern */
require get_theme_file_path('/block-patterns/block-patterns.php');
