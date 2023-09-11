<?php
/**
 * The Header for our theme.
 * @package IT Services
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  }?>
  <?php if(get_theme_mod('it_company_preloader',true) || get_theme_mod('it_company_preloader_responsive',true)){ ?>
    <?php if(get_theme_mod( 'it_company_preloader_type','Square') == 'Square'){ ?>
      <div id="overlayer"></div>
      <span class="tg-loader">
        <span class="tg-loader-inner"></span>
      </span>
    <?php }else if(get_theme_mod( 'it_company_preloader_type') == 'Circle') {?>
      <div class="preloader text-center">
        <div class="preloader-container">
          <span class="animated-preloader"></span>
        </div>
      </div>
    <?php }?>
  <?php }?>
  <header role="banner" class="header">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'it-services' ); ?><span class="screen-reader-text"><?php esc_html_e('Skip to Content','it-services'); ?></span></a>
    <?php if (has_nav_menu('primary')){?>
      <div class="toggle-menu responsive-menu p-2">
        <button role="tab" class="mobiletoggle"><i class="<?php echo esc_html(get_theme_mod('it_company_menu_open_icon','fas fa-bars')); ?> me-2"></i><?php echo esc_html( get_theme_mod('it_company_mobile_menu_label', __('Menu','it-services'))); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('it_company_mobile_menu_label', __('Menu','it-services'))); ?></button>
      </div>
      <div id="sidelong-menu" class="nav side-nav">
        <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'it-services' ); ?>">
          <?php 
            wp_nav_menu( array(
              'theme_location' => 'primary',
              'container_class' => 'main-menu-navigation clearfix' ,
              'menu_class' => 'clearfix',
              'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
              'fallback_cb' => 'wp_page_menu',
            ) ); 
          ?>
          <a href="javascript:void(0)" class="closebtn responsive-menu"><?php echo esc_html( get_theme_mod('it_company_close_menu_label', __('Close Menu','it-services'))); ?><i class="<?php echo esc_html(get_theme_mod('it_company_menu_close_icon','fas fa-times-circle')); ?> m-3"></i><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('it_company_close_menu_label', __('Close Menu','it-services'))); ?></span></a>
        </nav>
      </div>
    <?php }?>
    <div class="container-fluid px-lg-0">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 pe-lg-0">
          <div class="logo-box text-center">
            <div class="logo-inner-box">
              <?php if(get_theme_mod('it_company_display_logo', 'Both logo & Title') == 'Both logo & Title'){ ?>
                <div class="logo text-md-start text-center">
                  <div class="row">
                    <div class="<?php if( has_custom_logo() && get_theme_mod('it_company_logo_alongside',true) != '') { ?> col-lg-4 col-md-4"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                      <?php if ( has_custom_logo() ) : ?>
                        <div class="site-logo"><?php the_custom_logo(); ?></div>
                      <?php endif; ?>
                    </div>
                    <div class="<?php if( has_custom_logo() && get_theme_mod('it_company_logo_alongside',true) != '') { ?> col-lg-8 col-md-8"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                      <?php $blog_info = get_bloginfo( 'name' ); ?>
                      <?php if ( ! empty( $blog_info ) ) : ?>
                        <?php if ( is_front_page() && is_home() ) : ?>
                          <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php else : ?>
                          <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php endif; ?>
                      <?php endif; ?>
                      <?php
                      $description = get_bloginfo( 'description', 'display' );
                      if ( $description || is_customize_preview() ) :
                        ?>
                        <p class="site-description m-0">
                          <?php echo esc_html($description); ?>
                        </p>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              <?php } else if(get_theme_mod('it_company_display_logo') == 'Only Title & Tagline'){ ?>
                <div class="logo text-md-start text-center">
                  <?php $blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $blog_info ) ) : ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                      <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                      <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php endif; ?>
                  <?php endif; ?>
                  <?php
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) :
                    ?>
                    <p class="site-description m-0">
                      <?php echo esc_html($description); ?>
                    </p>
                  <?php endif; ?>
                </div>
              <?php } else if(get_theme_mod('it_company_display_logo') == 'Only Logo'){ ?>
                <div class="logo text-md-start text-center">
                  <?php if ( has_custom_logo() ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                  <?php endif; ?>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 ps-lg-0">
          <?php if(get_theme_mod('it_company_top_header') || get_theme_mod('it_company_hide_topbar_responsive')){ ?>
            <div class="top-header">
              <div class="row">
                <div class="col-lg-4 col-md-5 ps-lg-0 align-self-center">
                  <?php if ( get_theme_mod('it_company_question','') != "" ) {?>
                    <div class="welcome">
                      <?php if ( get_theme_mod('it_company_question','') != "" ) {?>
                        <p class="py-md-3 m-0 text-md-end text-center"><i class="fab fa-telegram-plane me-2"></i><?php echo esc_html( get_theme_mod('it_company_question','') ); ?></p>
                      <?php }?>
                    </div>
                  <?php }?>
                </div>
                <div class="col-lg-4 col-md-4 p-lg-0 align-self-center">
                  <div class="contact-details py-lg-2 py-md-3 text-md-center text-center">
                    <?php if ( get_theme_mod('it_company_email','') != "" ) {?>
                      <span class="conatct-font pe-md-0 pe-3">
                        <i class="<?php echo esc_html(get_theme_mod('it_company_email_icon','fas fa-envelope')); ?>"></i>
                        <?php if ( get_theme_mod('it_company_email','') != "" ) {?>
                          <a href="mailto:<?php echo esc_attr( get_theme_mod('it_company_email','') ); ?>"><p class="px-1 mb-0"><?php echo esc_html( get_theme_mod('it_company_email','') ); ?></p><span class="screen-reader-text"><?php esc_html_e('Email', 'it-services') ?></span></a>
                        <?php }?>
                      </span>
                    <?php }?>
                  </div>
                </div>
                <div class="col-lg-4 col-md-3 p-lg-0 align-self-center">
                  <div class="contact-details py-lg-2 py-md-3 text-md-start text-center">
                    <?php if ( get_theme_mod('it_company_call_number','') != "" ) {?>
                      <span class="conatct-font pe-md-0 pe-3">
                        <i class="<?php echo esc_html(get_theme_mod('it_company_phone_icon','fa fa-phone')); ?>"></i>
                        <?php if ( get_theme_mod('it_company_call_number','') != "" ) {?>
                          <a href="tel:<?php echo esc_attr( get_theme_mod('it_company_call_number','') ); ?>"><p class="px-1 mb-0"><?php echo esc_html( get_theme_mod('it_company_call_number','' )); ?></p><span class="screen-reader-text"><?php esc_html_e('Phone Number', 'it-services') ?></span></a>
                        <?php }?>
                      </span>
                    <?php }?>
                  </div>
                </div>
              </div>
            </div>
          <?php }?>
          <div id="header" class="<?php if( get_theme_mod( 'it_company_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
            <div class="row">
              <div class="menubox col-lg-11 col-md-9 pe-md-0 align-self-center">
                <div id="sidelong-menu" class="nav side-nav">
                  <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'it-services' ); ?>">
                    <?php if (has_nav_menu('primary')){
                      wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container_class' => 'main-menu-navigation clearfix' ,
                        'menu_class' => 'clearfix',
                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                        'fallback_cb' => 'wp_page_menu',
                      ) ); 
                    } ?>
                  </nav>
                </div>
              </div>
              <div class="col-lg-1 col-md-3"><p class="bar-box mb-0"><i class="fas fa-bars"></i></p></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <?php if(get_theme_mod('it_company_post_featured_image') == 'banner' ){
    if( is_singular() ) {?>
      <div id="page-site-header">
        <div class='page-header'> 
          <?php the_title( '<h1>', '</h1>' ); ?>
        </div>
      </div>
    <?php }
  }?>