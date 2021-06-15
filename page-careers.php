<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package InsightCustom
 */

get_header();
?>
<div class="content-area">
	<main id="main-content" class="site-main" role="main">
        <section id="careersHero">
			<div class="hero" style="background-image: url('<?php echo the_field('hero_shot'); ?>')"></div>
		</section>
		<section class="centerText whiteText heroTitle" style="background-image: url('<?php echo the_field('background_image'); ?>')">
			<h1 class="whiteText"><?php the_field('intro_copy'); ?></h1>
		</section>
		<div class="main-content pageWidth limitWidth paddedSection">
            <?php 
                while ( have_posts() ):
                    the_post();
                    the_content();
                endwhile;
            ?>
            <div class="careers-container">
                <h2>Open Positions</h2>
                <div class="careers-grid container-wide padding-top-50">
                    <?php
                    $args = array(
                        'post_type'      => 'Careers',
                        'posts_per_page' => -1,
                        'order'          => 'ASC'
                    );
                    $careers = new WP_Query( $args );
                    if ( $careers->have_posts() ) : ?>
                        <?php while ( $careers->have_posts() ) : $careers->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="careers-card">
                            <h2 class="g4 careers-card__title"><?php the_title(); ?></h2><br>
                            <span class="careers-card__more">More Details <?php get_template_part( "/inc/svg-icons/chevron-right" ); ?></span>
                        </a>
                        <?php endwhile; ?>
                    <?php endif; wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="paddedSection">
                <a class="primaryBtn" href="/job-application/">Apply Now</a>
            </div>
		</div>
	</main>
</div>
<?php
get_footer();
