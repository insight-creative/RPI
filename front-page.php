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
			<div class="pageWidth wrappedFlexContainer smallPaddedSection">
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
			<div class="row pageWidth colorGrid">
				<div class="perfundo">
			  <a class="perfundo__link" href="#perfundo-img1">
			    <img src="http://q0o.1b4.myftpupload.com/wp-content/uploads/2019/10/CEDAR-LOW.jpg" alt="Demo image">
			  </a>
			  <div id="perfundo-img1" class="perfundo__overlay fadeIn">
			    <figure class="perfundo__content perfundo__figure">
			      <img src="http://q0o.1b4.myftpupload.com/wp-content/uploads/2019/10/CEDAR-LOW.jpg" alt="Demo image">
			      <div class="perfundo__image" style="width: 800px; padding-top: 66.25%; background-image: url(http://q0o.1b4.myftpupload.com/wp-content/uploads/2019/10/CEDAR-LOW.jpg);"></div>
			    </figure>
			    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
						<?php get_template_part('/inc/lightbox/close'); ?>
					</a>
			    <a class="perfundo__next perfundo__control" href="#perfundo-img2">
						<?php get_template_part('/inc/lightbox/next'); ?>
					</a>
			  </div>
			</div>

			<div class="perfundo">
			  <a class="perfundo__link" href="#perfundo-img2">
			    <img src="http://q0o.1b4.myftpupload.com/wp-content/uploads/2019/10/CANDY-CANE-LOW.jpg" alt="Demo image">
			  </a>
			  <div id="perfundo-img2" class="perfundo__overlay fadeIn">
			    <figure class="perfundo__content perfundo__figure">
			      <img src="http://q0o.1b4.myftpupload.com/wp-content/uploads/2019/10/CANDY-CANE-LOW.jpg" alt="Demo image">
			      <div class="perfundo__image" style="width: 800px; padding-top: 66.25%; background-image: url(http://q0o.1b4.myftpupload.com/wp-content/uploads/2019/10/CANDY-CANE-LOW.jpg);"></div>
			    </figure>
			    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
						<?php get_template_part('/inc/lightbox/close'); ?>
					</a>
			    <a class="perfundo__next perfundo__control" href="#perfundo-img3">
						<?php get_template_part('/inc/lightbox/next'); ?>
					</a>
			    <a class="perfundo__prev perfundo__control" href="#perfundo-img1">
						<?php get_template_part('/inc/lightbox/prev'); ?>
					</a>
			  </div>
			</div>

			<div class="perfundo">
			  <a class="perfundo__link" href="#perfundo-img3">
			    <img src="http://q0o.1b4.myftpupload.com/wp-content/uploads/2019/10/RUDY-RED-LOW.jpg" alt="Demo image">
			  </a>
			  <div id="perfundo-img3" class="perfundo__overlay fadeIn">
			    <figure class="perfundo__content perfundo__figure">
			      <img src="http://q0o.1b4.myftpupload.com/wp-content/uploads/2019/10/RUDY-RED-LOW.jpg" alt="Demo image">
			      <div class="perfundo__image" style="width: 800px; padding-top: 66.25%; background-image: url(http://q0o.1b4.myftpupload.com/wp-content/uploads/2019/10/RUDY-RED-LOW.jpg);"></div>
			    </figure>
			    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
						<?php get_template_part('/inc/lightbox/close'); ?>
					</a>
			    <a class="perfundo__prev perfundo__control" href="#perfundo-img2">
						<?php get_template_part('/inc/lightbox/prev'); ?>
					</a>
			  </div>
			</div>
			</div>
			<div class="centerBtn pageWidth">
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
		<section id="contact" class="smallPaddedSection">
			<div class="pageWidth centerText">
				<h5 class="largeHeading">
					Contact Our Experts
				</h5>
			</div>
			<div class="flex-container pageWidth">
				<div class="col50">
					<div class="blockText">
						<p><?php the_field('contact_info'); ?></p>
					</div>
				</div>
				<div class="col50">
					<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]'); ?>
				</div>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
