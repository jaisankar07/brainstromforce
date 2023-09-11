<?php
/**
 * The template for displaying the footer.
 * @package IT Services
 */
?> 
<?php if( get_theme_mod( 'it_company_hide_scroll',true) != '' || get_theme_mod( 'it_company_backtotop_responsive',true) != '') { ?>
  <?php $it_company_scroll_align = get_theme_mod( 'it_company_back_to_top','Right');
  if($it_company_scroll_align == 'Left'){ ?>
    <a href="#content" class="back-to-top scroll-left text-center"><?php esc_html_e('Top', 'it-services'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'it-services'); ?></span></a>
  <?php }else if($it_company_scroll_align == 'Center'){ ?>
    <a href="#content" class="back-to-top scroll-center text-center"><?php esc_html_e('Top', 'it-services'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'it-services'); ?></span></a>
  <?php }else{ ?>
    <a href="#content" class="back-to-top scroll-right text-center"><?php esc_html_e('Top', 'it-services'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'it-services'); ?></span></a>
  <?php }?>
<?php }?>
<footer role="contentinfo" id="footer" class="copyright-wrapper">
  <?php //Set widget areas classes based on user choice
    $it_company_footer_columns = get_theme_mod('it_company_footer_widget', '4');
    if ($it_company_footer_columns == '3') {
      $cols = 'col-lg-4 col-md-4';
    } elseif ($it_company_footer_columns == '4') {
      $cols = 'col-lg-3 col-md-3';
    } elseif ($it_company_footer_columns == '2') {
      $cols = 'col-lg-6 col-md-6';
    } else {
      $cols = 'col-lg-12 col-md-12';
    }
  ?>
  <?php if (get_theme_mod('it_company_footer_hide_show', true)){ ?>
    <div class="container">
      <div class="footerinner">
        <div class="row">
          <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
              <?php dynamic_sidebar( 'footer-1'); ?>
            </div>
          <?php endif; ?> 
          <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
            <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
              <?php dynamic_sidebar( 'footer-2'); ?>
            </div>
          <?php endif; ?> 
          <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
            <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
              <?php dynamic_sidebar( 'footer-3'); ?>
            </div>
          <?php endif; ?> 
          <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
            <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
              <?php dynamic_sidebar( 'footer-4'); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php } ?>  
  <?php if (get_theme_mod('it_company_copyright_hide_show', true)) {?>
    <div class="inner">
      <div class="copyright">
        <div class="container">
          <p><?php it_services_credit_link(); ?> <?php echo esc_html(get_theme_mod('it_company_text',__('By Themesglance','it-services'))); ?> </p>
        </div>
      </div>
    </div>
  <?php } ?>  
</footer>

<?php wp_footer(); ?>
</body>
</html>