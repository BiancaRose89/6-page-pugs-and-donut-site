<?php
/**
 * The template for displaying the Front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package geekpack
 */

get_header( 'widgets' );
?>

	<div id="primary" class="content-area-main">
		<main id="main" class="site-main">

		<div id="front-page-1" class="widget-area">
			<div class="wrap">
				<div class="inner">
					<?php dynamic_sidebar( 'front-page-1' ); ?>
				</div>
			</div>
		</div>

		<section class="featured-work">
			<div class="wrap">
				<div class="inner">
					<div class="featured-work-content">
						<?php query_posts('posts_per_page=3&post_type=portfolio&order=ASC'); ?>
							<?php while ( have_posts() ) : the_post();
								$image_1 = get_field("image_1");
								$size = "featured-image";
							?>

						<div class="individual-featured-work">
							<figure class="hovereffect">
								<?php echo wp_get_attachment_image($image_1, $size); ?>
								<a href="<?php the_permalink(); ?>">
									<div class="overlay">
										<h1><?php the_title(); ?></h1>
									</div>
								</a>
							</figure>
						</div>

					<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div>
					<div class="featured-work-button">
						<a class="button" href="<?php echo home_url(); ?>/portfolio">Our Work</a>
					</div>
				</div>
			</div>
		</section>

	<div id="front-page-2" class="widget-area">
			<div class="wrap">
				<div class="inner">
					<?php dynamic_sidebar( 'front-page-2' ); ?>
				</div>
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
