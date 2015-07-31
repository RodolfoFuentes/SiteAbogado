<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme Horse
 * @subpackage Interface
 * @since Interface 1.0
 */

get_header(); ?>
<div id="primary" class="no-margin-left">
	<?php
	interface_theloop_for_search();
	 ?>
</div><!-- #primary -->

<div id="secondary">
	<?php interface_display_right_sidebar(); ?>
</div>

<?php get_footer(); ?>