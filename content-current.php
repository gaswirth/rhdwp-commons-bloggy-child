<?php
/**
 * The default template for displaying static page content.
 *
 * @package WordPress
 * @subpackage rhd
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( !is_front_page() ) : ?>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->
		<?php endif; ?>

		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'rhd' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'rhd' ), 'after' => '</div>' ) ); ?>

		</div><!-- .entry-content -->

		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'rhd' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->

		<!-- CURRENT items -->
		<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 9
			);

			$current = get_posts( $args );
		?>

		<?php if ( $current ) : ?>
			<div id="current-projects">
				<!--
<div class="current-item-sizer"></div>
				<div class="current-gutter-sizer"></div>
-->
				<?php foreach ( $current as $post ) : setup_postdata( $post ); ?>
					<div class="current-item">
						<?php $ext_link = do_shortcode('[ct id="_ct_text_55429868c47de"]'); ?>

						<?php if ( $ext_link ) : ?>
							<a class="current-item-link" href="<?php echo $ext_link; ?>" target="_blank"></a>
						<?php endif; ?>

						<figure class="current-item-thumb">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'current-grid' ); ?>
							<?php endif; ?>
						</figure>
						<div class="current-item-overlay">
							<div class="overlay"></div>
							<div class="current-item-content">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		<?php endif; ?>

	</article><!-- #post -->
