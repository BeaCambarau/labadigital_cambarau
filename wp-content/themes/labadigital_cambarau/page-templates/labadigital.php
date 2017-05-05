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

<div id="page" class="page-<?php the_ID(); ?>">
	<?php while ( have_posts() ) : the_post(); ?>
		<h2 class="left_h2 font-effect-anaglyph">
			<?php the_title(); ?>
		</h2>
		<?php the_content(); ?>
		<?php //get_template_part( 'loop-templates/content', 'page' ); ?>


		<?php
			$image = get_field('background_image');
			if( !empty($image) ):
		?>
		<script>
			$("body").css({
				"background-image": "url('<?php echo $image['url']; ?>')"
			})
		</script>
		<?php endif; ?>

	<?php endwhile; // end of the loop. ?>

</div>

<?php get_footer(); ?>
