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

	<div id="primary" class="content-area-single-blog">
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
								<?php while ( have_posts() ) : the_post(); 

									$details = get_field ('project_details');
									$url = get_field ('website_url');
									$image_1 = get_field ('image_1');
									$image_2 = get_field ('images_2');
									$size = "full"; ?>

							<div class="portfolio-content-single">

								<div class="portfolio-content-text">
									<h3>Project Details: <?php echo $details; ?></h3>

										<?php the_content(); ?>

										<div class="portfolio-content-buttons">
											<a href="<?php echo $url; ?>" target="_blank" class="button">
												Visit Live Site</a>
											<a href="/portfolio" class="button">Back to Our Work</a>											
										</div>
									</div>

										<div class="portfolio-content-images">
											<?php if($image_1) {
												echo wp_get_attachment_image( $image_1, $size );
											} ?>
										</div>
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
