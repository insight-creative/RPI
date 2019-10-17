<?php
/**
 * @package InsightCustom
 */
get_header();

?>
<div id="primary" class="content-area">
	<main class="site-main">
		<section id="profilesHero">
			<div class="hero" style="background-image: url('<?php echo the_field('hero_shot'); ?>')"></div>
		</section>
		<section class="centerText whiteText heroTitle" style="background-image: url('<?php echo the_field('background_image'); ?>')">
			<h1 class="whiteText"><?php the_field('intro_copy'); ?></h1>
		</section>
		<section id="profiles">
			<div class="pageWidth limitWidth paddedSection">
				<?php the_field('profiles_description'); ?>
			</div>
			<div class="pageWidth limitWidth">
				<h2>Standard Profiles</h2>
			</div>
			<div class="pageWidth limitWidth paddedSection">
				<h2>Limited Production Profiles</h2>
			</div>
			<div class="pageWidth limitWidth">
				<?php the_field('closing_copy'); ?>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
