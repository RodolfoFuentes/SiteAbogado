<?php
/**
 * Displays the index section of the theme.
 *
 * @package Theme Horse
 * @subpackage Interface
 * @since Interface 1.0
 */
?>
<?php get_header(); ?>

<!-- CAROUSEL -->
<div>
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Slider_header')) : endif; ?>
</div>	
<!-- END CAROUSEL -->
<div class="col-xs-12 col-lg-8 well">
      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Articles_destacado')) : endif; ?>
</div>
<?php
	/** 
	 * interface_before_main_container hook
	 */
	//do_action( 'interface_before_main_container' );
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
<?php
	/** 
	 * interface_after_main_container hook
	 */
	//do_action( 'interface_after_main_container' );
?>
<?php get_footer(); ?>
