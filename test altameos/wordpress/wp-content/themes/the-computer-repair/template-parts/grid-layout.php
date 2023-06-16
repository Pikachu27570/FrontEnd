<?php
/**
 * The template part for displaying grid post
 *
 * @package The Computer Repair
 * @subpackage the-computer-repair
 * @since the-computer-repair 1.0
 */
?>

<div class="col-lg-4 col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
	    <div class="post-main-box wow bounceInLeft delay-1000" data-wow-duration="2s">
	      	<div class="box-image">
	          	<?php 
		            if(has_post_thumbnail() && get_theme_mod( 'the_computer_repair_featured_image_hide_show',true) ==1) { 
		              the_post_thumbnail(); 
		            }
	          	?>
	        </div>
	        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
	        <?php if( get_theme_mod( 'the_computer_repair_grid_postdate',true) ==1 || get_theme_mod( 'the_computer_repair_grid_author',true) ==1 || get_theme_mod( 'the_computer_repair_grid_comments',true) ==1) { ?>
	            <div class="post-info">
	              <?php if(get_theme_mod('the_computer_repair_grid_postdate',true)==1){ ?>
	                <i class="<?php echo esc_attr(get_theme_mod('the_computer_repair_grid_postdate_icon','fas fa-calendar-alt')); ?>"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $the_computer_repair_archive_year, $the_computer_repair_archive_month, $the_computer_repair_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
	              <?php } ?>

	              <?php if(get_theme_mod('the_computer_repair_grid_author',true)==1){ ?>
	                <span><?php echo esc_html(get_theme_mod('the_computer_repair_meta_field_separator', '|'));?></span> <i class="<?php echo esc_attr(get_theme_mod('the_computer_repair_grid_author_icon','far fa-user')); ?>"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
	              <?php } ?>

	              <?php if(get_theme_mod('the_computer_repair_grid_comments',true)==1){ ?>
	                <span><?php echo esc_html(get_theme_mod('the_computer_repair_meta_field_separator', '|'));?></span> <i class="<?php echo esc_attr(get_theme_mod('the_computer_repair_grid_comments_icon','fa fa-comments')); ?>" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'the-computer-repair'), __('0 Comments', 'the-computer-repair'), __('% Comments', 'the-computer-repair') ); ?> </span>
	              <?php } ?>

	              <hr>
	            </div>
          <?php } ?>
	        <div class="new-text">
	        	<div class="entry-content">
	        		<p>
			          <?php $the_computer_repair_excerpt = get_the_excerpt(); echo esc_html( the_computer_repair_string_limit_words( $the_computer_repair_excerpt, esc_attr(get_theme_mod('the_computer_repair_related_posts_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('the_computer_repair_excerpt_suffix','') ); ?>
			        </p>
	        	</div>
	        </div>
	        <?php if( get_theme_mod('the_computer_repair_button_text','Read More') != ''){ ?>
		        <div class="more-btn">
		          <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('the_computer_repair_button_text',__('Read More','the-computer-repair')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('the_computer_repair_button_text',__('Read More','the-computer-repair')));?></span></a>
		        </div>
	        <?php } ?>
	    </div>
	    <div class="clearfix"></div>
  	</article>
</div>