<?php
/**
 * IT Company: Block Patterns
 *
 * @package IT Company
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'it-company',
		array( 'label' => __( 'IT Company', 'it-company' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'it-company/banner-section',
		array(
			'title'      => __( 'Banner Section', 'it-company' ),
			'categories' => array( 'it-company' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/banner.png\",\"id\":845,\"dimRatio\":50,\"isDark\":false,\"align\":\"full\",\"className\":\"main-banner-section\"} -->\n<div class=\"wp-block-cover alignfull is-light main-banner-section\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-845\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/banner.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"15%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:15%\"></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"70%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:70%\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"style\":{\"typography\":{\"fontSize\":\"50px\",\"textTransform\":\"uppercase\"}},\"textColor\":\"white\"} -->\n<h1 class=\"has-text-align-center has-white-color has-text-color\" style=\"font-size:50px;text-transform:uppercase\">LOREM IPSUM DOLOR SIT AMET</h1>\n<!-- /wp:heading -->\n\n<!-- wp:columns {\"verticalAlignment\":\"top\"} -->\n<div class=\"wp-block-columns are-vertically-aligned-top\"><!-- wp:column {\"verticalAlignment\":\"top\",\"width\":\"15%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-top\" style=\"flex-basis:15%\"></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"top\",\"width\":\"70%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-top\" style=\"flex-basis:70%\"><!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"14px\"}},\"textColor\":\"white\"} -->\n<p class=\"has-text-align-center has-white-color has-text-color\" style=\"font-size:14px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"align\":\"center\",\"style\":{\"border\":{\"radius\":\"4px\"}},\"fontSize\":\"small\"} -->\n<div class=\"wp-block-button aligncenter has-custom-font-size has-small-font-size\"><a class=\"wp-block-button__link\" style=\"border-radius:4px\">DETAILS</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"top\",\"width\":\"15%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-top\" style=\"flex-basis:15%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"15%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:15%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'it-company/service-section',
		array(
			'title'      => __( 'Service Section', 'it-company' ),
			'categories' => array( 'it-company' ),
			'content'    => "<!-- wp:group {\"align\":\"full\",\"className\":\"mx-5 aboutus-section\"} -->\n<div class=\"wp-block-group alignfull mx-5 aboutus-section\"><!-- wp:heading {\"textAlign\":\"center\",\"className\":\"py-4\"} -->\n<h2 class=\"has-text-align-center py-4\">ABOUT US</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {\"align\":\"full\",\"className\":\"about-us-col-section\"} -->\n<div class=\"wp-block-columns alignfull about-us-col-section\"><!-- wp:column {\"className\":\"about-us-section-col-one\"} -->\n<div class=\"wp-block-column about-us-section-col-one\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"20.33%\",\"className\":\"about-us-img\"} -->\n<div class=\"wp-block-column about-us-img\" style=\"flex-basis:20.33%\"><!-- wp:image {\"id\":928,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"about-us-img\"} -->\n<figure class=\"wp-block-image size-full about-us-img\"><img src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/Icon2.png\" alt=\"\" class=\"wp-image-928\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"80.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:80.66%\"><!-- wp:heading {\"level\":3,\"style\":{\"typography\":{\"textTransform\":\"uppercase\",\"fontSize\":\"15px\"}}} -->\n<h3 style=\"font-size:15px;text-transform:uppercase\">LOREM ipsum dolor</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"style\":{\"typography\":{\"fontSize\":\"12px\"}}} -->\n<p class=\"has-text-align-left\" style=\"font-size:12px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"align\":\"right\",\"style\":{\"typography\":{\"fontSize\":\"11px\"},\"color\":{\"text\":\"#c5351f\"}},\"className\":\"know-more\"} -->\n<p class=\"has-text-align-right know-more has-text-color\" style=\"color:#c5351f;font-size:11px\">KNOW MORE&gt;&gt;</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"20.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:20.33%\"><!-- wp:image {\"id\":929,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"about-us-img\"} -->\n<figure class=\"wp-block-image size-full about-us-img\"><img src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/Icon.png\" alt=\"\" class=\"wp-image-929\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"80.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:80.66%\"><!-- wp:heading {\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"15px\"}}} -->\n<h3 style=\"font-size:15px\">LOREM IPSUM DOLOR</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"12px\"}}} -->\n<p style=\"font-size:12px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"align\":\"right\",\"style\":{\"typography\":{\"fontSize\":\"11px\"},\"color\":{\"text\":\"#c5351f\"}},\"className\":\"know-more\"} -->\n<p class=\"has-text-align-right know-more has-text-color\" style=\"color:#c5351f;font-size:11px\">KNOW MORE&gt;&gt;</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"20.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:20.33%\"><!-- wp:image {\"id\":930,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"about-us-img\"} -->\n<figure class=\"wp-block-image size-full about-us-img\"><img src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/Icon3.png\" alt=\"\" class=\"wp-image-930\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"80.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:80.66%\"><!-- wp:heading {\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"15px\"}}} -->\n<h3 style=\"font-size:15px\">LOREM IPSUM DOLOR</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"12px\"}}} -->\n<p style=\"font-size:12px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"align\":\"right\",\"style\":{\"typography\":{\"fontSize\":\"11px\"},\"color\":{\"text\":\"#c5351f\"}},\"className\":\"know-more\"} -->\n<p class=\"has-text-align-right know-more has-text-color\" style=\"color:#c5351f;font-size:11px\">KNOW MORE</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"top\"} -->\n<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:image {\"align\":\"center\",\"id\":860,\"width\":280,\"height\":320,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"abt-img\"} -->\n<figure class=\"wp-block-image aligncenter size-full is-resized abt-img\"><img src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/about-us.png\" alt=\"\" class=\"wp-image-860\" width=\"280\" height=\"320\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"about-us-section-col-two\"} -->\n<div class=\"wp-block-column about-us-section-col-two\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"20.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:20.33%\"><!-- wp:image {\"id\":931,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"about-us-img\"} -->\n<figure class=\"wp-block-image size-full about-us-img\"><img src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/Icon4.png\" alt=\"\" class=\"wp-image-931\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"80.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:80.66%\"><!-- wp:heading {\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"15px\"}}} -->\n<h3 style=\"font-size:15px\">LOREM ipsum dolor</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"12px\"}}} -->\n<p style=\"font-size:12px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"align\":\"right\",\"style\":{\"typography\":{\"fontSize\":\"11px\"},\"color\":{\"text\":\"#c5351f\"}},\"className\":\"know-more\"} -->\n<p class=\"has-text-align-right know-more has-text-color\" style=\"color:#c5351f;font-size:11px\">KNOW MORE&gt;&gt;</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"20.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:20.33%\"><!-- wp:image {\"id\":932,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"about-us-img\"} -->\n<figure class=\"wp-block-image size-full about-us-img\"><img src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/Icon5.png\" alt=\"\" class=\"wp-image-932\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"80.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:80.66%\"><!-- wp:heading {\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"15px\"}}} -->\n<h3 style=\"font-size:15px\">LOREM IPSUM DOLOR</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"12px\"}}} -->\n<p style=\"font-size:12px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"align\":\"right\",\"style\":{\"typography\":{\"fontSize\":\"11px\"},\"color\":{\"text\":\"#c5351f\"}},\"className\":\"know-more\"} -->\n<p class=\"has-text-align-right know-more has-text-color\" style=\"color:#c5351f;font-size:11px\">KNOW MORE&gt;&gt;</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"20.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:20.33%\"><!-- wp:image {\"id\":940,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"about-us-img\"} -->\n<figure class=\"wp-block-image size-full about-us-img\"><img src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/Icon6.png\" alt=\"\" class=\"wp-image-940\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"80.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:80.66%\"><!-- wp:heading {\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"14px\"}}} -->\n<h3 style=\"font-size:14px\">LOREM IPSUM DOLOR</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"12px\"}}} -->\n<p style=\"font-size:12px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"align\":\"right\",\"style\":{\"typography\":{\"fontSize\":\"11px\"},\"color\":{\"text\":\"#c5351f\"}},\"className\":\"know-more\"} -->\n<p class=\"has-text-align-right know-more has-text-color\" style=\"color:#c5351f;font-size:11px\">KNOW MORE&gt;&gt;</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group -->",
		)
	);
}