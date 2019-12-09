<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PhotoBook
 */

?>
	<footer class="dt-footer <?php if ( ! is_front_page() ) { echo 'dt-footer-sep'; } ?>">

		<?php if( is_active_sidebar( 'dt-footer-social' ) ) : ?>

		<div class="container">
			<div class="row">
				<div class="dt-footer-cont">
					<div class="col-lg-12">
						<div class="dt-footer-social">

							<?php dynamic_sidebar( 'dt-footer-social' ); ?>

						</div><!-- .dt-footer-social -->
					</div><!-- .col-lg-3 -->
				</div><!-- .dt-footer-cont -->
			</div><!-- .row -->
		</div><!-- .container -->

		<?php endif; ?>

		<div class="dt-footer-bar">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="dt-copyright">

							<?php printf( esc_html__( 'Copyright &copy; %1$s %2$s. All Rights Reserved.', 'photobook' ), date('Y'), get_bloginfo( 'name' ) ); ?>

						</div><!-- .dt-copyright -->
					</div><!-- .col-lg-6 -->

					<div class="col-lg-6 col-md-6">
						<div class="dt-footer-designer">
							<?php do_action('photobook_theme_info'); ?>
						</div><!-- .dt-footer-designer -->
					</div><!-- .col-lg-6 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .dt-footer-bar -->
	</footer><!-- .dt-footer -->

	<a id="back-to-top" class="transition35"><i class="fa fa-angle-up"></i></a><!-- #back-to-top -->

<?php wp_footer(); ?>

</body>
</html>
