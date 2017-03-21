<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package foxandsongbird
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<section class="widget">
		<h2>F&amp;S in your inbox</h2>
		<div id="mc_embed_signup">
			<form action="//foxandsongbird.us15.list-manage.com/subscribe/post?u=29d73b2db658c587180d0747d&amp;id=46c5ad1d15" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div id="mc_embed_signup_scroll">
					<div class="mc-field-group">
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email address">
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_29d73b2db658c587180d0747d_46c5ad1d15" tabindex="-1" value=""></div>
				    <div class="clear"><input type="submit" value="Get the newsletter" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			    </div>
			</form>
		</div>
	</section>

	<section class="widget">
		<h2>Share</h2>
		<div class="addthis_inline_share_toolbox"></div>
	</section>
</aside><!-- #secondary -->
