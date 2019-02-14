<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bumblebee
 */

?>
<style type="text/css">
	<?php require get_stylesheet_directory() . '/footer.css'; ?>
</style>
<footer class="footer">
	<div class="container">
		<div class="pure-g">
			<div class="pure-u-1 pure-u-md-3-5 left-foot">
				<div class="ipad-hide logo-socials">
					<a href=" <?php echo esc_url( site_url() ); ?> " class="footer-logo"><img src="<?php echo esc_html( get_theme_mod( 'bumblebee_footer_logo' ) ); ?>" alt="" style="width:<?php echo esc_html( get_theme_mod( 'bumblebee_footer_logo_width' ) ); ?>px"></img></a>
					<?php
					if ( has_nav_menu( 'v2-footer-social-links' ) ) {
						wp_nav_menu(
							array(
								'theme_location' => 'v2-footer-social-links',
								'menu_class'     => 'footer-social-links',
								'container'      => false,
							)
						);
					}
					?>
				</div> <!-- /.ipad-hide -->
				<div class="site-links">
					<?php
					if ( has_nav_menu( 'v2-footer-site-links' ) ) {
						wp_nav_menu(
							array(
								'theme_location' => 'v2-footer-site-links',
								'menu_class'     => 'footer-site-links',
								'container'      => false,
							)
						);
					}
					?>
				</div>
				<div class="footer-brand-links-container">
					<div class="footer-brand-links">
						<p>Our Brands</p>
						<?php
						if ( has_nav_menu( 'v2-footer-brand-links' ) ) {
							wp_nav_menu(
								array(
									'theme_location' => 'v2-footer-brand-links',
									'menu_class'     => 'footer-brand-links',
									'container'      => false,
								)
							);
						}
						?>
					</div>
					<?php
					if ( has_nav_menu( 'v2-footer-global-links' ) ) {
						wp_nav_menu(
							array(
								'theme_location' => 'v2-footer-global-links',
								'menu_class'     => 'footer-global-links',
								'container'      => false,
							)
						);
					}
					?>
					<div class="copyright">&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php echo esc_html( __( 'Home Service Publications, Inc', 'tmbi-theme-v3' ) ); ?></div>
				</div>
			</div>
			<div class="pure-u-1 pure-u-md-2-5 right-foot">
				<div class="newsletter">
					<h3><?php echo esc_html( get_theme_mod( 'bumblebee_footer_nl_heading_text' ) ); ?></h3>
					<form action="<?php echo esc_url( get_site_url() ); ?>/newslettersignuppage/" method="post">
						<input type="text" id="email" placeholder="Email Address"></input>
						<button type="submit" id="subscribe">Sign Up</button>
					</form>
				</div>
				<div class="diyu-logo">
					<a href="<?php echo esc_html( get_theme_mod( 'bumblebee_footer_nl_subscribe_url' ) ); ?>" target="_blank" rel="noopener noreferrer">
						<img src="<?php echo esc_html( get_theme_mod( 'bumblebee_footer_nl_subscribe_image' ) ); ?>" alt="" style="width:<?php echo esc_html( get_theme_mod( 'bumblebee_footer_nl_subscribe_image_width' ) ); ?>px"></img>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
<?php

/**
 *  Getting hamburger menu markup
 */
function get_hamburger_menu_markup() {
	if ( has_nav_menu( 'hamburger-menu' ) ) {
		$menu = wp_nav_menu(
			array(
				'theme_location' => 'hamburger-menu',
				'menu_class'     => 'pure-menu-children hamburger-menu-items',
				'menu_id'        => 'menu',
			)
		);
	};
}

echo '<div class="accessibility-menu">';
get_hamburger_menu_markup();
echo '</div>';

?>
<script src="//instant.page/1.1.0" type="module" integrity="sha384-EwBObn5QAxP8f09iemwAJljc+sU+eUXeL9vSBw1eNmVarwhKk2F9vBEpaN9rsrtp"></script>
</body>
</html>
