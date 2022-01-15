<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package geekpack
 */

get_header( 'widgets' );
?>

	<div id="primary" class="content-area-main">
		<main id="main" class="site-main">

		<div id="below-header" class="widget-area">
			<div class="wrap">
				<div class="inner"><?php dynamic_sidebar( 'below-header' ); ?>
					<h1>Our Work</h1>
				</div>
			</div>
		</div>
				<div class="wrap">
					<div class="inner">

						<?php 
							global $query_string;
							query_posts( $query_string. '&order=ASC');
							while ( have_posts() ) : the_post();
								$image_1 = get_field("image_1");
								$size = "full";
							?>

					<div class="portfolio-content">

						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

						<a href="<?php the_permalink(); ?>">
							<?php if($image_1) {
								echo wp_get_attachment_image( $image_1, $size );
							} ?>

						</a>

						<div class="portfolio-content-button"><a href="<?php  the_permalink(); 
						?>" class="button">View Projects</a></div>

						</div>

						<?php endwhile; // End of the loop.?>
					</div>
				</div>

		<div id="above-footer" class="widget-area">
			<div class="wrap">
				<div class="inner"><?php dynamic_sidebar( 'above-footer' ); ?></div>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer( 'widgets' );
