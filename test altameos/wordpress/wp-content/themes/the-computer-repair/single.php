<?php
/**
 * The Template for displaying all single posts.
 *
 * @package The Computer Repair
 */
 
 get_header(); ?>

<main id="maincontent" role="main">
  <div class="middle-align container">
    <?php
      $the_computer_repair_theme_lay = get_theme_mod( 'the_computer_repair_theme_options','Right Sidebar');
      if($the_computer_repair_theme_lay == 'Left Sidebar'){ ?>
      <div class="row m-0">
        <div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if(get_theme_mod('the_computer_repair_single_post_breadcrumb',true) ==1){ ?>
            <div class="bradcrumbs">
              <?php the_computer_repair_the_breadcrumb(); ?>
            </div>
          <?php }?> 
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/single-post-layout' ); 
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text' => __( 'Previous page', 'the-computer-repair' ),
                'next_text' => __( 'Next page', 'the-computer-repair' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'the-computer-repair' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    <?php }else if($the_computer_repair_theme_lay == 'Right Sidebar'){ ?>
      <div class="row m-0">
        <div id="our-services" class="services col-lg-8 col-md-8"> 
          <?php if(get_theme_mod('the_computer_repair_single_post_breadcrumb',true) ==1){ ?>
            <div class="bradcrumbs">
              <?php the_computer_repair_the_breadcrumb(); ?>
            </div>
          <?php }?> 
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/single-post-layout' ); 
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text' => __( 'Previous page', 'the-computer-repair' ),
                'next_text' => __( 'Next page', 'the-computer-repair' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'the-computer-repair' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php }else if($the_computer_repair_theme_lay == 'One Column'){ ?>
      <div id="our-services" class="services">
        <?php if(get_theme_mod('the_computer_repair_single_post_breadcrumb',true) ==1){ ?>
            <div class="bradcrumbs">
              <?php the_computer_repair_the_breadcrumb(); ?>
            </div>
          <?php }?>    
        <?php if ( have_posts() ) :
          /* Start the Loop */
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/single-post-layout' ); 
          endwhile;

          else :
            get_template_part( 'no-results' ); 
          endif; 
        ?>
        <div class="navigation">
          <?php
            // Previous/next page navigation.
            the_posts_pagination( array(
              'prev_text' => __( 'Previous page', 'the-computer-repair' ),
              'next_text' => __( 'Next page', 'the-computer-repair' ),
              'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'the-computer-repair' ) . ' </span>',
            ) );
          ?>
            <div class="clearfix"></div>
        </div>
      </div>
    <?php }else if($the_computer_repair_theme_lay == 'Three Columns'){ ?>
      <div class="row m-0">
        <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-lg-6 col-md-6">
          <?php if(get_theme_mod('the_computer_repair_single_post_breadcrumb',true) ==1){ ?>
            <div class="bradcrumbs">
              <?php the_computer_repair_the_breadcrumb(); ?>
            </div>
          <?php }?> 
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/single-post-layout' ); 
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text' => __( 'Previous page', 'the-computer-repair' ),
                'next_text' => __( 'Next page', 'the-computer-repair' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'the-computer-repair' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
      </div>
    <?php }else if($the_computer_repair_theme_lay == 'Four Columns'){ ?>
      <div class="row m-0">
        <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-lg-3 col-md-3"> 
        <?php if(get_theme_mod('the_computer_repair_single_post_breadcrumb',true) ==1){ ?>
            <div class="bradcrumbs">
              <?php the_computer_repair_the_breadcrumb(); ?>
            </div>
          <?php }?>  
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/single-post-layout' );
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text' => __( 'Previous page', 'the-computer-repair' ),
                'next_text' => __( 'Next page', 'the-computer-repair' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'the-computer-repair' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
        <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-3');?></div>
      </div>
    <?php }else if($the_computer_repair_theme_lay == 'Grid Layout'){ ?>
      <div class="row m-0">
        <div id="our-services" class="services col-lg-9 col-md-9">
          <div class="row m-0">
            <?php if(get_theme_mod('the_computer_repair_single_post_breadcrumb',true) ==1){ ?>
              <div class="bradcrumbs">
                <?php the_computer_repair_the_breadcrumb(); ?>
              </div>
            <?php }?> 
            <?php if ( have_posts() ) :
              /* Start the Loop */
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/single-post-layout' ); 
              endwhile;

              else :
                get_template_part( 'no-results' ); 
              endif; 
            ?>
          </div>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text' => __( 'Previous page', 'the-computer-repair' ),
                'next_text' => __( 'Next page', 'the-computer-repair' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'the-computer-repair' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php }else{ ?>
      <div class="row m-0">
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if(get_theme_mod('the_computer_repair_single_post_breadcrumb',true) ==1){ ?>
            <div class="bradcrumbs">
              <?php the_computer_repair_the_breadcrumb(); ?>
            </div>
          <?php }?> 
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/single-post-layout'); 
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif;
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text' => __( 'Previous page', 'the-computer-repair' ),
                'next_text' => __( 'Next page', 'the-computer-repair' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'the-computer-repair' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php } ?>
    <div class="clearfix"></div>
  </div>
</main>

<?php get_footer(); ?>