<?php
/**
 * @package InsightCustom
 */
get_header();

?>
<div id="primary" class="content-area">
	<main id="home" class="site-main">
		<section id="colorHero">
			<div class="hero" style="background-image: url('<?php echo the_field('hero_shot'); ?>')"></div>
		</section>
		<section class="centerText whiteText heroTitle" style="background-image: url('<?php echo the_field('background_image'); ?>')">
			<h1 class="whiteText"><?php the_field('colors_page_title'); ?></h1>
		</section>
		<section id="colors">
			<div class="pageWidth limitWidth paddedSection">
				<?php the_field('color_description'); ?>
			</div>
			<?php get_template_part('/inc/lightbox/naturals'); ?>
			<?php get_template_part('/inc/lightbox/vivids'); ?>
			<?php get_template_part('/inc/lightbox/pastels'); ?>
			<?php get_template_part('/inc/lightbox/neutrals'); ?>
			<div class="pageWidth limitWidth paddedSection">
				<?php the_field('closing_copy'); ?>
				<div class="centerText">
					<a href="http://q0o.1b4.myftpupload.com/wp-content/uploads/2019/10/RPI_SalesFlyer_8_5x11.pdf" target="_blank">
						<img src="http://q0o.1b4.myftpupload.com/wp-content/uploads/2019/10/RPI-Sales-Flyer-Preview.jpg" class="image" id="flyerPreview">
					</a>
				</div>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
