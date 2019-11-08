<?php
/**
 * @package InsightCustom
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="textWrap">
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
				insightcustom_posted_on();
				insightcustom_posted_by();
				?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
		<?php insightcustom_post_thumbnail(); ?>
		<div class="entry-summary">
			<?php the_title( '<h2 class="entry-title mediumHeading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		</div><!-- .entry-summary -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
