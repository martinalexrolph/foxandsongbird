<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package foxandsongbird
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class=" entry-content"><p>
			<?php $page_for_posts_id = get_option('page_for_posts');
			echo get_post_field( 'post_content', $page_for_posts_id ); ?>
			</p></div>

		<?php

			$align = "alignright";
			if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();
				echo "<h2>";
				the_title();
				echo "</h2>";

				if (has_post_thumbnail()) {
					echo "<figure id=\"attachment_46\" style=\"width: 400px\" class=\"wp-caption ";
					echo $align;
					echo "\">";
					the_post_thumbnail();
					echo "</figure>";
				}
				
				the_excerpt();
				
				echo "<p><a href=\"";
				the_permalink();
				echo "\">Read more</a></p>";
				if ($align == "alignright") {
					$align = "alignleft";
				} else {
					$align = "alignright";
				}

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
