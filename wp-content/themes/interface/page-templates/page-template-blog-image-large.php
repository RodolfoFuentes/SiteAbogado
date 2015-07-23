<?php
/**
 * Template Name: Blog Image Large
 *
 * Displays the Blog with Large Image as Featured Image and excerpt.
 *
 * @package Theme Horse
 * @subpackage Interface
 * @since Interface 1.0
 */
?>
<?php get_header(); ?>
<?php
	/** 
	 * interface_before_main_container hook
	 */
	do_action( 'interface_before_main_container' );
?>

<?php
		/** 
		 * interface_main_container hook
		 *
		 * HOOKED_FUNCTION_NAME PRIORITY
		 *
		 * interface_content 10
		 */
		//do_action( 'interface_main_container' );
		?>
<div id="primary-full" class="no-margin-left">
	<div id="content">
	<?php if (have_posts()) : 
					while (have_posts()) : the_post(); ?>
					
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail('large');
						}?>
						<a href="<?php echo the_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
						<div class="entry-content clearfix">
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>

			<?php else : ?>
 
        		<h2>pagina no encontrada</h2>
 
			<?php endif; ?>
	</div><!-- content -->
</div><!-- #primary -->
<?php
	/** 
	 * interface_after_main_container hook
	 */
	do_action( 'interface_after_main_container' );
?>
<?php get_footer(); ?>