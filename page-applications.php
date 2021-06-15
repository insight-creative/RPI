<?php
/**
 * @package InsightCustom
 */
get_header();

?>
<div id="primary" class="content-area">
	<main id="main-content" class="site-main" role="main">
		<section id="applicationsHero">
			<div class="hero" style="background-image: url('<?php echo the_field('hero_shot'); ?>')"></div>
		</section>
		<section class="centerText whiteText heroTitle" style="background-image: url('<?php echo the_field('background_image'); ?>')">
			<h1 class="whiteText"><?php the_field('intro_copy'); ?></h1>
		</section>
		<section id="applications">
			<div class="pageWidth limitWidth paddedSection">
				<?php
				$imageID = get_field('product_image')['ID'];
				echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
				?>
			</div>
			<div class="pageWidth limitWidth paddedSection">
				<?php the_field('applications_intro'); ?>
			</div>
			<div id="appLists" class="pageWidth limitWidth flex-container">
				<div class="col50">
					<?php the_field('applications_list_1'); ?>
				</div>
				<div class="col50">
					<?php the_field('applications_list_2'); ?>
				</div>
			</div>
			<div class="pageWidth limitWidth paddedSection">
				<?php the_field('limitations'); ?>
			</div>
			<div class="pageWidth limitWidth">
				<?php the_field('flammability'); ?>
			</div>
		</section>
		<?php get_template_part('/inc/contact'); ?>
	</main>
</div>
<?php
get_footer();
