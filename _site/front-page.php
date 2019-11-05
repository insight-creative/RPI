<?php
/**
 * @package InsightCustom
 */
get_header();

?>
<div id="gg-screen" hidden></div>
<div id="primary" class="content-area">
	<main id="home" class="site-main">
		<section id="homeHero">
			<div class="hero" style="background-image: url('<?php echo the_field('hero_shot'); ?>')"></div>
		</section>
		<section id="intro" class="centerText whiteText heroTitle" style="background-image: url('<?php echo the_field('background_image'); ?>')">
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
			<div class="pageWidth wrappedFlexContainerCenter smallPaddedSection">
				<div class="benefitItem">
					<?php
					$imageID = get_field('benefit_icon_1')['ID'];
					echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
					?>
					<p><?php the_field('benefit_description_1'); ?></p>
				</div>
				<div class="benefitItem">
					<?php
					$imageID = get_field('benefit_icon_2')['ID'];
					echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
					?>
					<p><?php the_field('benefit_description_2'); ?></p>
				</div>
				<div class="benefitItem">
					<?php
					$imageID = get_field('benefit_icon_3')['ID'];
					echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
					?>
					<p><?php the_field('benefit_description_3'); ?></p>
				</div>
				<div class="benefitItem">
					<?php
					$imageID = get_field('benefit_icon_4')['ID'];
					echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
					?>
					<p><?php the_field('benefit_description_4'); ?></p>
				</div>
				<div class="benefitItem">
					<?php
					$imageID = get_field('benefit_icon_5')['ID'];
					echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
					?>
					<p><?php the_field('benefit_description_5'); ?></p>
				</div>
				<div class="benefitItem">
					<?php
					$imageID = get_field('benefit_icon_6')['ID'];
					echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
					?>
					<p><?php the_field('benefit_description_6'); ?></p>
				</div>
				<div class="benefitItem">
					<?php
					$imageID = get_field('benefit_icon_7')['ID'];
					echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
					?>
					<p><?php the_field('benefit_description_7'); ?></p>
				</div>
			</div>
		</section>
		<section id="colors">
			<div id="customColors" style="background: url('<?php echo the_field('colors_background'); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
				<h4 class="largeHeading whiteText centerText"><?php the_field('colors_heading'); ?></h4>
			</div>
			<div class="pageWidth limitWidth paddedSection">
				<p class="centerText"><?php the_field('colors_description'); ?></p>
			</div>
			<?php get_template_part('/inc/lightbox/homepage-colors'); ?>
			<div class="centerBtn smallPaddedSection">
				<a href="/colors/" class="primaryBtn">Browse our full color gallery</a>
			</div>
		</section>
		<section id="business-to-business" class="paddedSection">
			<div class="flex-container pageWidth centerAlignedContainer">
				<div class="col50">
					<div class="blockText">
						<p><?php the_field('business_copy'); ?></p>
					</div>
				</div>
				<div class="col50">
					<?php
					$imageID = get_field('business_image')['ID'];
					echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
					?>
				</div>
			</div>
		</section>
		<?php get_template_part('/inc/contact'); ?>
	</main>
</div>
<?php
get_footer();