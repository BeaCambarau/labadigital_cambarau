<?php
/**
 * Template Name: Labadigital
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="page">

	<?php while ( have_posts() ) : the_post(); ?>
		<h2 class="left_h2 font-effect-anaglyph">
			<?php the_title(); ?>
		</h2>
		<?php the_content(); ?>
		<?php //get_template_part( 'loop-templates/content', 'page' ); ?>
	<?php endwhile; // end of the loop. ?>

</div>

<?php if(FALSE): ?>
<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php endif; ?>

<?php get_footer(); ?>
