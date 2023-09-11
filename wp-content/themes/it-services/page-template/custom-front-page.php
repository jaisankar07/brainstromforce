<?php
/**
 * Template Name: Custom Front Page
 */
get_header(); ?>

<main id="maincontent" role="main">
  
  <?php if(get_theme_mod('it_company_slider_display_option','frontpage') == 'frontpage' || get_theme_mod('it_company_slider_display_option') == 'both'){ ?>
    <?php get_template_part( 'template-parts/slider/slider'); ?>
  <?php }?>

  <?php if( get_theme_mod('it_services_section_title') != ''){ ?>
    <section id="we-do" class="py-5 mb-md-0 mb-3">
      <div class="container">
        <?php if( get_theme_mod('it_services_section_title') != ''){ ?>
          <div class="text-center mb-4">
            <h2><?php echo esc_html(get_theme_mod('it_services_section_title','')); ?></h2>
          </div>
        <?php }?>
        <div class="row m-0"> 
          <?php 
            $it_services_catData=  get_theme_mod('it_services_what_we_do_category');
            if($it_services_catData){
              $page_query = new WP_Query(array( 'category_name' => esc_html( $it_services_catData ,'it-services')));?>
              <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="we-do-box p-3 mb-4 text-center">
                    <?php if(has_post_thumbnail()){
                      the_post_thumbnail();
                    } ?>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="mb-0"><?php $it_services_excerpt = get_the_excerpt(); echo esc_html( it_company_string_limit_words( $it_services_excerpt, esc_attr(get_theme_mod('it_services_we_do_excerpt_number','30')))); ?></p>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata();
            }
          ?>
        </div>
      </div>
    </section>
  <?php }?>

  <div class="white-bg">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="entry-content"><?php the_content(); ?></div>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>