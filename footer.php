<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Firetoss_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo" style="background-image: url(<?php echo bloginfo('url')?>/wp-content/uploads/2017/12/truck-line-bg.png)">
  <div class="container">
    <div class="footer-wrapper">
      <a href="<?php echo esc_url( home_url() ); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>">
      </a>
      <div class="footer-flex">
        <div class="left-side">

          <? if ( is_user_logged_in() ) { ?>
            <nav id="footer-navigation" class="footer-navigation" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
            </nav><!-- #footer-navigation -->
          <? } else { ?>
            <nav id="footer-navigation" class="footer-navigation" role="navigation">
              <?php wp_nav_menu( array( 'theme_location' => 'visitor_footer', 'menu_id' => 'visitor_footer' ) ); ?>
            </nav><!-- #footer-navigation -->
          <? } ?>

        </div>
        <div class="right-side">
          <div class="social-media">
            <ul>
              <?php
                /// vars need to update instagram variable to youtube when we go to a new server
                $facebook = get_field('facebook', 'option');
                $linkedin = get_field('linkedin', 'option');
                $twitter = get_field('twitter', 'option');
                $youtube = get_field('youtube', 'option');
              ?>
              <?php echo $linkedin ? "<li class='fa'>
                                              <a href='$linkedin'>
                                                  <span class='fa-linkedin'>
                                                  </span>
                                              </a>
                                          </li>" : ""; ?>
              <?php echo $facebook ? "<li class='fa'>
                                              <a href='$facebook'>
                                                  <span class='fa-facebook'>
                                                  </span>
                                              </a>
                                          </li>" : ""; ?>
              <?php echo $twitter ? "<li class='fa'>
                                              <a href='$twitter'>
                                                  <span class='fa-twitter'>
                                                  </span>
                                              </a>
                                          </li>" : ""; ?>
              <?php echo $youtube ? "<li class='fa'>
                                              <a href='$youtube'>
                                                  <span class='fa-youtube'>
                                                  </span>
                                              </a>
                                          </li>" : ""; ?>
            </ul>
          </div>
          <div class="form-wrapper">
            <form>
              <div class="mic"></div>
              <?php echo do_shortcode( '[gravityform id="2" title="true" description="false"]' );?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer><!-- #colophon -->
  <div class="footer-site-info">
    <div class="container">
      <img src="<?php echo bloginfo('template_url')?>/img/fastgofreight-vector-dark.svg" alt="Fast Go Freight" />
      <?php $copyright = get_field('copyright', 'option');?>
      <?= $copyright ? "<p>$copyright</p>" : "" ; ?>
    </div>
  </div>
</div><!-- #page -->
<!-- Necessary script tag for BigVideoJS -->
<!-- <?php if (is_front_page()) : ?>
  <script src="https://vjs.zencdn.net/5.10.8/video.js"></script>
<?php endif; ?> -->

<?php wp_footer(); ?>
<!-- Script tag for BigVideoJS -->
<!-- <?php if (is_front_page()) : ?>
  <script type="text/javascript">
    (function ($) {
      $(document).ready(function () {
          $(function() {
              var BV = new $.BigVideo();
              BV.init();
              BV.show( "<?php bloginfo('url')?>/wp-content/themes/firetoss_seed/video/videob.mp4", {ambient: true});
          });
      });
    })(jQuery);
  </script>
<?php endif; ?> -->
</body>
</html>
