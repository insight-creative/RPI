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
			<div class="pageWidth limitWidth">
				<p class="centerText"><?php the_field('colors_description'); ?></p>
			</div>
			<div class="row pageWidth colorGrid">
		  <div class="column">
		    <img src="<?php the_field('color_swatch_1'); ?>" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
		  </div>
		  <div class="column">
		    <img src="<?php the_field('color_swatch_2'); ?>" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
		  </div>
		  <div class="column">
		    <img src="<?php the_field('color_swatch_3'); ?>" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
		  </div>
		  <div class="column">
		    <img src="<?php the_field('color_swatch_4'); ?>" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
		  </div>
			<div class="column">
			 <img src="<?php the_field('color_swatch_5'); ?>" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
		 </div>
		 <div class="column">
			 <img src="<?php the_field('color_swatch_6'); ?>" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
		 </div>
		 <div class="column">
			 <img src="<?php the_field('color_swatch_7'); ?>" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
		 </div>
		 <div class="column">
			 <img src="<?php the_field('color_swatch_8'); ?>" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
		 </div>
		 <div class="column">
			 <img src="<?php the_field('color_swatch_9'); ?>" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
		 </div>
		 <div class="column">
			 <img src="<?php the_field('color_swatch_10'); ?>" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
		 </div>
		 <div class="column">
			 <img src="<?php the_field('color_swatch_11'); ?>" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
		 </div>
		 <div class="column">
			 <img src="<?php the_field('color_swatch_12'); ?>" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
		 </div>
		</div>
		<div id="myModal" class="modal">
		  <span class="close cursor" onclick="closeModal()">&times;</span>
		  <div class="modal-content">
		    <div class="mySlides">
		      <div class="numbertext">1 / 12</div>
		      <img src="<?php the_field('color_swatch_1'); ?>" style="width:100%">
		    </div>
		    <div class="mySlides">
		      <div class="numbertext">2 / 12</div>
		      <img src="<?php the_field('color_swatch_2'); ?>" style="width:100%">
		    </div>
		    <div class="mySlides">
		      <div class="numbertext">3 / 12</div>
		      <img src="<?php the_field('color_swatch_3'); ?>" style="width:100%">
		    </div>
		    <div class="mySlides">
		      <div class="numbertext">4 / 12</div>
		      <img src="<?php the_field('color_swatch_4'); ?>" style="width:100%">
		    </div>
				<div class="mySlides">
		      <div class="numbertext">5 / 12</div>
		      <img src="<?php the_field('color_swatch_5'); ?>" style="width:100%">
		    </div>
				<div class="mySlides">
		      <div class="numbertext">6 / 12</div>
		      <img src="<?php the_field('color_swatch_6'); ?>" style="width:100%">
		    </div>
				<div class="mySlides">
		      <div class="numbertext">7 / 12</div>
		      <img src="<?php the_field('color_swatch_7'); ?>" style="width:100%">
		    </div>
				<div class="mySlides">
		      <div class="numbertext">8 / 12</div>
		      <img src="<?php the_field('color_swatch_8'); ?>" style="width:100%">
		    </div>
				<div class="mySlides">
		      <div class="numbertext">9 / 12</div>
		      <img src="<?php the_field('color_swatch_9'); ?>" style="width:100%">
		    </div>
				<div class="mySlides">
		      <div class="numbertext">10 / 12</div>
		      <img src="<?php the_field('color_swatch_10'); ?>" style="width:100%">
		    </div>
				<div class="mySlides">
		      <div class="numbertext">11 / 12</div>
		      <img src="<?php the_field('color_swatch_11'); ?>" style="width:100%">
		    </div>
				<div class="mySlides">
		      <div class="numbertext">12 / 12</div>
		      <img src="<?php the_field('color_swatch_12'); ?>" style="width:100%">
		    </div>
		    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		    <a class="next" onclick="plusSlides(1)">&#10095;</a>
		    <div class="caption-container">
		      <p id="caption"></p>
		    </div>
				<div class="thumbnail">
			    <div class="column">
			      <img class="demo cursor" src="<?php the_field('color_swatch_1'); ?>" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
			    </div>
			    <div class="column">
			      <img class="demo cursor" src="<?php the_field('color_swatch_2'); ?>" style="width:100%" onclick="currentSlide(2)" alt="Snow">
			    </div>
			    <div class="column">
			      <img class="demo cursor" src="<?php the_field('color_swatch_3'); ?>" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
			    </div>
			    <div class="column">
			      <img class="demo cursor" src="<?php the_field('color_swatch_4'); ?>" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
			    </div>
					<div class="column">
			      <img class="demo cursor" src="<?php the_field('color_swatch_5'); ?>" style="width:100%" onclick="currentSlide(5)" alt="Northern Lights">
			    </div>
					<div class="column">
			      <img class="demo cursor" src="<?php the_field('color_swatch_6'); ?>" style="width:100%" onclick="currentSlide(6)" alt="Northern Lights">
			    </div>
					<div class="column">
			      <img class="demo cursor" src="<?php the_field('color_swatch_7'); ?>" style="width:100%" onclick="currentSlide(7)" alt="Northern Lights">
			    </div>
					<div class="column">
			      <img class="demo cursor" src="<?php the_field('color_swatch_8'); ?>" style="width:100%" onclick="currentSlide(8)" alt="Northern Lights">
			    </div>
					<div class="column">
			      <img class="demo cursor" src="<?php the_field('color_swatch_9'); ?>" style="width:100%" onclick="currentSlide(9)" alt="Northern Lights">
			    </div>
					<div class="column">
			      <img class="demo cursor" src="<?php the_field('color_swatch_10'); ?>" style="width:100%" onclick="currentSlide(10)" alt="Northern Lights">
			    </div>
					<div class="column">
			      <img class="demo cursor" src="<?php the_field('color_swatch_11'); ?>" style="width:100%" onclick="currentSlide(11)" alt="Northern Lights">
			    </div>
					<div class="column">
			      <img class="demo cursor" src="<?php the_field('color_swatch_12'); ?>" style="width:100%" onclick="currentSlide(12)" alt="Northern Lights">
			    </div>
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
