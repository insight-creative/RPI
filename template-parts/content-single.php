<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

?>
<div>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title centerText">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title centerText"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			if ( 'post' === get_post_type() ) :
				?>
			<?php endif; ?>
			<div class="centerText">
				<p>
					in
						<?php
						$categories = get_the_category();
						$separator = ', ';
						$output = '';
						if ( ! empty( $categories ) ) {
						    foreach( $categories as $category ) {
						        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
						    }
						    echo trim( $output, $separator );
						}
						?>
				</p>
			</div>
		</header><!-- .entry-header -->
		<?php insightCustom_post_thumbnail(); ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
	<?php // related posts based on first cat of current post
	$cats = get_the_category();
	if ($cats) {
		echo '<h3>Other Colors You Might Like</h3>';
		$first_cat = $cats[0]->term_id;
		$args = array(
				'category__in' => array($first_cat),
				'post__not_in' => array($post->ID),
				'showposts' => 3, // how many posts?
				'caller_get_posts' => 1
				);
		$my_query = new WP_Query($args);
	  	if ($my_query->have_posts()) { ?>
			<ul class="relatedColors wrappedFlexContainer">
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><?php the_title(); ?></a></li>
			<?php endwhile; ?>
			</ul>
		<?php } ?>
	<?php } ?>
</div>
