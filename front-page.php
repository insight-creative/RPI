<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="home" class="site-main">
		<section id="homeHero">
			<div class="hero" style="background: url('<?php echo the_field('hero_shot'); ?>')"></div>
		</section>
		<section id="intro" class="centerText whiteText" style="background: url('<?php echo the_field('background_image'); ?>')">
			<h1 class="whiteText"><?php the_field('intro_copy'); ?></h1>
		</section>
		<section id="ourPlant" class="paddedSection">
			<div class="pageWidth flex-container centerAlignedContainer">
				<div class="col50">
					<?php
					$plantImage = get_field('plant_image');
					$imageID = $plantImage['ID'];
					echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
					?>
				</div>
				<div class="col50">
					<div class="blockText">
						<h2><?php the_field('plant_heading'); ?></h2>
						<?php the_field('plant_description'); ?>
						<div class="btnContainer">
							<a href="/contact/" class="primaryBtn">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="plastic-benefits">
			<div class="pageWidth">
				<h3 class="largeHeading centerText"><?php the_field('benefits_heading'); ?></h3>
				<p><?php the_field('benefits_copy'); ?></p>
			</div>
			<div class="wrappedFlexContainer">
				<div class="benefitItem">
					<?php the_field('benefits_icon_1'); ?>
					<p><?php the_field('benefits_description_1'); ?></p>
				</div>
				<div class="benefitItem">
					<?php the_field('benefits_icon_2'); ?>
					<p><?php the_field('benefits_description_2'); ?></p>
				</div>
				<div class="benefitItem">
					<?php the_field('benefits_icon_3'); ?>
					<p><?php the_field('benefits_description_3'); ?></p>
				</div>
				<div class="benefitItem">
					<?php the_field('benefits_icon_4'); ?>
					<p><?php the_field('benefits_description_4'); ?></p>
				</div>
				<div class="benefitItem">
					<?php the_field('benefits_icon_5'); ?>
					<p><?php the_field('benefits_description_5'); ?></p>
				</div>
				<div class="benefitItem">
					<?php the_field('benefits_icon_6'); ?>
					<p><?php the_field('benefits_description_6'); ?></p>
				</div>
				<div class="benefitItem">
					<?php the_field('benefits_icon_7'); ?>
					<p><?php the_field('benefits_description_7'); ?></p>
				</div>
			</div>
		</section>
		<section id="colors">
			<div id="customColors" style="background: url('<?php echo the_field('colors_background'); ?>')">
				<h4 class="largeHeading whiteText centerText"><?php the_field('colors_heading'); ?></h4>
			</div>
			<div class="pageWidth">
				<p class="centerText"><?php the_field('colors_description'); ?></p>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
