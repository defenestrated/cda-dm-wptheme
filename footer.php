<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			  <?php if ( has_nav_menu( 'primary' ) ) : ?>
				    <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					      <?php
						    wp_nav_menu( array(
							      'theme_location' => 'primary',
							      'menu_class'     => 'primary-menu',
						    ) );
					      ?>
				    </nav><!-- .main-navigation -->
			  <?php endif; ?>

			  <?php if ( has_nav_menu( 'social' ) ) : ?>
				    <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					      <?php
						    wp_nav_menu( array(
							      'theme_location' => 'social',
							      'menu_class'     => 'social-links-menu',
							      'depth'          => 1,
							      'link_before'    => '<span class="screen-reader-text">',
							      'link_after'     => '</span>',
						    ) );
					      ?>
				    </nav><!-- .social-navigation -->
			  <?php endif; ?>

			  <div class="site-info">
				    <?php
					  /**
					   * Fires before the twentysixteen footer text for footer customization.
					   *
					   * @since Twenty Sixteen 1.0
					   */
					  do_action( 'twentysixteen_credits' );
				    ?>
				    <span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
            <span class="cda-link">a project by <a href="http://www.newschool.edu/center-for-data-arts/" target="_blank">the center for data arts</a></span>
				    <!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?></a> -->
            <span class="footer-sponsorship">supported by <a href="http://pressforward.org/" target="_blank">PressForward</a></span>
            <div class="foot-sole">
                <a href="http://www.newschool.edu/center-for-data-arts/" target="_blank"><img src=" <?php echo get_template_directory_uri() ?>/assets/cda-logo-v-square-200px.gif" class="footlogos cda-logo"></a>
                <a href="http://www.newschool.edu/" target="_blank"><img src=" <?php echo get_template_directory_uri() ?>/assets/tns-logo-h-2x.png" class="footlogos tns-logo"></a>
                <a href="http://pressforward.org/" target="_blank"><img src=" <?php echo get_template_directory_uri() ?>/assets/PFLogo_transparent.png" class="footlogos pf-logo"></a>
            </div>
			  </div><!-- .site-info -->
		</footer><!-- .site-footer -->
	  </div><!-- .site-inner -->
    </div><!-- .site -->

    <?php wp_footer(); ?>
</body>
</html>
