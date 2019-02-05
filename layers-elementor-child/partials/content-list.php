<?php
/**
 * This template is used for displaying posts in post lists
 *
 * @package Layers
 * @since Layers 1.0.0
 */

global $post, $layers_post_meta_to_display; ?>
<article class="post-container" id="post-<?php the_ID(); ?>" <?php post_class( 'push-bottom-large' ); ?>>
	<div class="post-thumbnail">
		<?php echo layers_post_featured_media( array( 'postid' => get_the_ID(), 'wrap_class' => 'post-thumbnail', 'size' => 'large' ) ); ?>
	</div>
	<div class="post-text-content">
		<h1 class="post-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<div class="post-meta">
			<?php layers_post_meta( get_the_ID(), NULL, 'footer', 'meta-info push-bottom' ); ?>
		</div>
		<div class="post-excerpt">
			<?php if( '' != get_the_excerpt() || '' != get_the_content() ) { ?>
				<?php do_action('layers_list_post_content'); ?>
			<?php } ?>
		</div>
		<div class="read-more">
			<a href="<?php the_permalink(); ?>">Read more >></a>
		</div>

	</div>
</article>