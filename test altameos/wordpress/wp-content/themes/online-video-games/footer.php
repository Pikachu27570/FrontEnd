<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('online-video-games-footer-sidebar')) {
        echo '<div class="row sidebar-area footer-area">';
          dynamic_sidebar('online-video-games-footer-sidebar');
        echo '</div>';
      }
    ?>
    <p class="mb-0 py-3 text-center text-md-left">
      <?php
        if (!get_theme_mod('online_video_games_footer_text') ) { ?>
          <?php esc_html_e('Online Game WordPress Theme','online-video-games'); ?>
        <?php } else {
          echo esc_html(get_theme_mod('online_video_games_footer_text'));
        }
      ?>
      <?php if ( get_theme_mod('online_video_games_copyright_enable', true) == true ) : ?>
        <?php
        /* translators: %s: Misbah WP */
        printf( esc_html__( ' by %s', 'online-video-games' ), 'Misbah WP' ); ?>
        <a href="<?php echo esc_url(__('https://wordpress.org','online-video-games')); ?>" rel="generator"><?php  /* translators: %s: WordPress */  printf( esc_html__( ' | Proudly powered by %s', 'online-video-games' ), 'WordPress' ); ?></a>
      <?php endif; ?>
    </p>
    <?php if ( get_theme_mod('online_video_games_scroll_enable_setting', true) == true ) : ?>
      <div class="scroll-up">
        <a href="#tobottom"><i class="fa fa-arrow-up"></i></a>
      </div>
    <?php endif; ?>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>