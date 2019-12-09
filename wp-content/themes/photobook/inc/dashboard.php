<?php
/**
 * Add theme dashboard page
 */
add_action('admin_menu', 'photobook_theme_info');
function photobook_theme_info() {
	$theme_data = wp_get_theme();
	add_theme_page( sprintf( esc_html__( '%s Dashboard', 'photobook' ), $theme_data->Name ), sprintf( esc_html__('%s Theme', 'photobook'), $theme_data->Name), 'edit_theme_options', 'photobook', 'photobook_theme_info_page');
}
if ( ! function_exists( 'photobook_admin_scripts' ) ) :
	/**
	 * Enqueue scripts for admin page only: Theme info page
	 */
	function photobook_admin_scripts( $hook ) {
		if ( $hook === 'widgets.php' || $hook === 'appearance_page_photobook'  ) {
			wp_enqueue_style('photobook-admin-css', get_template_directory_uri() . '/css/admin.css');
		}
	}
endif;
add_action('admin_enqueue_scripts', 'photobook_admin_scripts');
function photobook_theme_info_page() {
	$theme_data = wp_get_theme();
	// Check for current viewing tab
	$tab = null;
	if ( isset( $_GET['tab'] ) ) {
		$tab = $_GET['tab'];
	} else {
		$tab = null;
	}
	?>
	<div class="wrap about-wrap theme_info_wrapper">
		<h1><?php printf(esc_html__('Welcome to %1s - Version %2s', 'photobook'), $theme_data->Name, $theme_data->Version ); ?></h1>
		<div class="about-text"><?php esc_html_e( 'PhotoBook is a Photography WordPress theme built with Bootstrap and is fully responsive for all the screen sizes, Mobile-Friendly and Translation Ready. It can be used for Photography, Photo Blog, photographer, photo shooting, Portfolio, and Personal website for photo bloggers, photographer and creative guys, Theme comes with built-in widgets and widgets positions and customizer.  Home page shows 10 most recent added posts (post with images, image gallery or any normal pages) with featured images and link (view details) to the post, a trigger called LOAD MORE button will load 10 posts each time clicked and shows NO MORE POST on the end of posts. Built in Social widgets will help you to add social profiles.  Smooth scroll and small & beautiful scroll bar is added with the help of Nicescroll 3. Navigation is triggered with icon shown top right of page and is sticky. Clean and light photo gallery is implanted for viewing images within a gallery post.', 'photobook' ); ?></div>
		<a target="_blank" href="<?php echo esc_url('https://www.famethemes.com/?utm_source=theme_dashboard_page&utm_medium=badge_link&utm_campaign=theme_admin'); ?>" class="famethemes-badge wp-badge"><span>FameThemes</span></a>
		<h2 class="nav-tab-wrapper">
			<a href="?page=photobook" class="nav-tab<?php echo is_null($tab) ? ' nav-tab-active' : null; ?>"><?php echo $theme_data->Name; ?></a>
			<a href="?page=photobook&tab=demo-data-importer" class="nav-tab<?php echo $tab == 'demo-data-importer' ? ' nav-tab-active' : null; ?>"><?php esc_html_e( 'One Click Demo Import', 'photobook' ); ?></span></a>

		</h2>

		<?php if ( is_null($tab) ) { ?>
			<div class="theme_info info-tab-content">
				<div class="theme_info_column clearfix">
					<div class="theme_info_left">

						<div class="theme_link">
							<h3><?php esc_html_e( 'Theme Customizer', 'photobook' ); ?></h3>
							<p class="about"><?php printf(esc_html__('%s supports the Theme Customizer for all theme settings. Click "Customize" to start customize your site.', 'photobook'), $theme_data->Name); ?></p>
							<p>
								<a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php esc_html_e('Start Customize', 'photobook'); ?></a>
							</p>
						</div>
						<div class="theme_link">
							<h3><?php esc_html_e( 'Theme Documentation', 'photobook' ); ?></h3>
							<p class="about"><?php printf(esc_html__('Need any help to setup and configure %s? Please have a look at our documentations instructions.', 'photobook'), $theme_data->Name); ?></p>
							<p>
								<a href="<?php echo esc_url( 'http://docs.famethemes.com/article/129-photobook-documentation' ); ?>" target="_blank" class="button button-secondary"><?php esc_html_e('Online Documentation', 'photobook'); ?></a>
							</p>
						</div>
					</div>

					<div class="theme_info_right">
						<img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" alt="Theme Screenshot" />
					</div>
				</div>
			</div>
		<?php } ?>


		<?php if ( $tab == 'demo-data-importer' ) { ?>
			<div class="demo-import-tab-content info-tab-content">
				<?php if ( has_action( 'photobook_demo_import_content_tab' ) ) {
					do_action( 'photobook_demo_import_content_tab' );
				} else { ?>
					<div id="plugin-filter" class="demo-import-boxed">
						<?php
						$plugin_name = 'famethemes-demo-importer';
						$status = is_dir( WP_PLUGIN_DIR . '/' . $plugin_name );
						$button_class = 'install-now button';
						$button_txt = esc_html__( 'Install Now', 'photobook' );
						if ( ! $status ) {
							$install_url = wp_nonce_url(
								add_query_arg(
									array(
										'action' => 'install-plugin',
										'plugin' => $plugin_name
									),
									network_admin_url( 'update.php' )
								),
								'install-plugin_'.$plugin_name
							);
						} else {
							$install_url = add_query_arg(array(
								'action' => 'activate',
								'plugin' => rawurlencode( $plugin_name . '/' . $plugin_name . '.php' ),
								'plugin_status' => 'all',
								'paged' => '1',
								'_wpnonce' => wp_create_nonce('activate-plugin_' . $plugin_name . '/' . $plugin_name . '.php'),
							), network_admin_url('plugins.php'));
							$button_class = 'activate-now button-primary';
							$button_txt = esc_html__( 'Active Now', 'photobook' );
						}
						$detail_link = add_query_arg(
							array(
								'tab' => 'plugin-information',
								'plugin' => $plugin_name,
								'TB_iframe' => 'true',
								'width' => '772',
								'height' => '349',
							),
							network_admin_url( 'plugin-install.php' )
						);
						echo '<p>';
						printf( esc_html__(
							'Hey, you will need to install and activate the %1$s plugin first.', 'photobook' ),
							'<a class="thickbox open-plugin-details-modal" href="'.esc_url( $detail_link ).'">'.esc_html__( 'FameThemes Demo Importer', 'photobook' ).'</a>'
						);
						echo '</p>';
						echo '<p class="plugin-card-'.esc_attr( $plugin_name ).'"><a href="'.esc_url( $install_url ).'" data-slug="'.esc_attr( $plugin_name ).'" class="'.esc_attr( $button_class ).'">'.$button_txt.'</a></p>';
						?>
					</div>
				<?php } ?>
			</div>
		<?php } ?>



	</div> <!-- END .theme_info -->

	<?php
}
?>