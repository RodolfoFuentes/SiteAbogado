<?php
/**
 * Flexible Posts Widget: Default widget template
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');

echo $before_widget;
if( $flexible_posts->have_posts() ):
?>
	<?php while( $flexible_posts->have_posts() ) : $flexible_posts->the_post(); global $post; ?>
		<div class="col-6">
			<div class="img-article center">
				<a href="<?php echo the_permalink(); ?>">
					<?php
						if( $thumbnail == true ) {
								// If the post has a feature image, show it
								if( has_post_thumbnail() ) { 
										if ($thumbsize=="thumbnails-circle") {
											the_post_thumbnail( $thumbsize, array( 'class' => 'borderRadius200' ) );
										} else {
											the_post_thumbnail( $thumbsize);
										}
										
								// Else if the post has a mime type that starts with "image/" then show the image directly.
								} elseif( 'image/' == substr( $post->post_mime_type, 0, 6 ) ) {
									echo wp_get_attachment_image( $post->ID, $thumbsize );
								}
							}
					?>
				</a>
			</div>
				<?php 
				$categoria=get_the_category($post->ID);
				?>
				<h3 class="custom-gallery-title">
					<a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
				</h3>
				<?php if ($categoria[0]->cat_ID==12) { ?>
					<div class="date updated"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( get_the_time() ); ?>">
          <?php the_time( get_option( 'date_format' ) ); ?>
          </a></div>
					<?php
				}
				?>
				<p><?php echo substr(get_the_excerpt(), 0,300); ?>...</p>
				<?php if ($categoria[0]->cat_ID==12) {
						echo '<a class="readmore" href="' . get_permalink() . '" title="'.the_title( '', '', false ).'">'.__( 'Leer mas', 'interface' ).'</a>';
					}
				?>
		</div>
	<?php endwhile; ?>
<?php else: // We have no posts ?>
	<div class="dpe-flexible-posts no-posts">
		<p><?php _e( 'No post found', 'flexible-posts-widget' ); ?></p>
	</div>
<?php	
endif; // End have_posts()
echo $after_widget;