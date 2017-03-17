<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package foxandsongbird
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<div class="entry-content">
				<?php
				while ( have_posts() ) : the_post();
					the_content();
				endwhile; // End of the loop.
				?>

				<?php $args = array(
				    'posts_per_page' => 1, // we need only the latest post, so get that post only
				    'category_name' => 'curators',
				);
				$q = new WP_Query( $args);
				if ( $q->have_posts() ) {
				    while ( $q->have_posts() ) {
					    $q->the_post();   

						echo "<p class=\"as-first-child\">This week's selection is curated by ";
						the_title();
						echo ".</p>";?>
			</div>


			<?php
			        	get_template_part( 'template-parts/content-no-title' );
			    	}
			    	wp_reset_postdata();
				}
			?>




			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
