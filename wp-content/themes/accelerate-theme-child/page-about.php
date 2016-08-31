<?php
/**
 * The template for displaying the about page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post();
			$info = get_field('about_text'); ?>

			<div class='homepage-hero'>

        <?php the_content(); ?>

        <article class="about-info">
						<h5><?php echo $info; ?></h5>
				</article>

				<!-- <a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a> -->
			</div>

		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->


<?php get_footer(); ?>
