<?php
/**
 * The template part for displaying post
 * @package IT Company
 * @subpackage it_company
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?> 
<article class="blog-sec animated fadeInDown p-2 mb-4">
  <div class="mainimage">
    <?php
      if(has_post_thumbnail() && get_theme_mod('it_company_featured_image',true) == true) {
        the_post_thumbnail(); 
      }
    ?>
  </div>
  <h2><a href="<?php echo esc_url(get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
  <?php if( get_theme_mod( 'it_company_metafields_date',true) != '' || get_theme_mod( 'it_company_metafields_author',true) != '' || get_theme_mod( 'it_company_metafields_comment',true) != '' || get_theme_mod( 'it_company_metafields_time',true) != '') { ?>
    <div class="post-info py-1 px-2">
      <?php if( get_theme_mod( 'it_company_metafields_date',true) != '') { ?>
        <a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><span class="entry-date me-2"><i class="<?php echo esc_attr(get_theme_mod('it_company_postdate_icon',"fa fa-calendar pe-2" )); ?>"></i><?php echo esc_html( get_the_date() ); ?></span><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a>
      <?php }?>
      <?php if( get_theme_mod( 'it_company_metafields_author',true) != '') { ?>
        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><span class="entry-author me-2"><i class="<?php echo esc_attr(get_theme_mod('it_company_postauthor_icon',"fa fa-user pe-2" )); ?>"></i> <?php the_author(); ?></span><span class="screen-reader-text"><?php the_author(); ?></span></a>
      <?php }?>
      <?php if( get_theme_mod( 'it_company_metafields_comment',true) != '') { ?>
        <span class="entry-comments me-2"><i class="<?php echo esc_attr(get_theme_mod('it_company_postcomment_icon',"fa fa-comments pe-2" )); ?>"></i> <?php comments_number( __('0 Comments','it-company'), __('0 Comments','it-company'), __('% Comments','it-company') ); ?></span> 
      <?php }?>
      <?php if( get_theme_mod( 'it_company_metafields_time',true) != '') { ?>
        <span class="entry-comments me-2"><i class="<?php echo esc_attr(get_theme_mod('it_company_posttime_icon',"fa fa-clock pe-2" )); ?>"></i> <?php echo esc_html( get_the_time() ); ?></span>
      <?php }?>
    </div>
  <?php }?>
  <?php if(get_theme_mod('it_company_blog_post_content') == 'Full Content'){ ?>
    <?php the_content(); ?>
  <?php }
  if(get_theme_mod('it_company_blog_post_content', 'Excerpt Content') == 'Excerpt Content'){ ?>
    <?php if(get_the_excerpt()) { ?>
      <div class="entry-content"><p><?php $it_company_excerpt = get_the_excerpt(); echo esc_html( it_company_string_limit_words( $it_company_excerpt, esc_attr(get_theme_mod('it_company_post_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('it_company_button_excerpt_suffix','...') ); ?></p></div>
    <?php }?>
  <?php }?>
  <?php if ( get_theme_mod('it_company_button_text','Read Full') != '' ) {?>
    <div class="blogbtn mt-2">
      <a href="<?php the_permalink(); ?>" class="blogbutton-small"><?php echo esc_html( get_theme_mod('it_company_button_text',__('Read Full','it-company')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('it_company_button_text',__('Read Full','it-company')) ); ?></span></a>
    </div>
  <?php }?>
</article> 