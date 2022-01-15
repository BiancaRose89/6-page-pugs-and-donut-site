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
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
				<div class="wrap">
					<div class="inner">
								<?php
								while ( have_posts() ) :
									the_post();

									get_template_part( 'template-parts/content', 'page' );

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;

								endwhile; // End of the loop.
								?>
					</div>
				</div>

		<div id="front-page-3" class="widget-area">
			<div class="wrap">
				<div class="inner">
					<?php dynamic_sidebar( 'front-page-3' ); ?>
				</div>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer( 'widgets' );
