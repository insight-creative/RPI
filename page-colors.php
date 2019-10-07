<?php
/**
 * @package InsightCustom
 */
get_header();

?>
<div id="gg-screen" hidden></div>
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
			<div class="pageWidth centerText">
				<h2>Naturals</h2>
			</div>
			<div class="gg-box pageWidth wrappedFlexContainer paddedSection colorGrid">
				<?php if( have_rows('natural_colors') ): ?>
							<?php while( have_rows('natural_colors') ): the_row();
							$imageID = get_sub_field('natural_color_option')['ID'];
							echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
							endwhile;
						endif;
				?>
			</div>
			<div class="pageWidth centerText">
				<h2>Vivids</h2>
			</div>
			<div class="gg-box pageWidth wrappedFlexContainer paddedSection colorGrid">
				<?php if( have_rows('vivid_colors') ): ?>
							<?php while( have_rows('vivid_colors') ): the_row();
							$imageID = get_sub_field('vivid_color_option')['ID'];
							$imageClass = get_sub_field('image_class');
							echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'last', 'data-sizes' => 'auto' ) );
							endwhile;
						endif;
				?>
			</div>
			<div class="pageWidth centerText">
				<h2>Pastels</h2>
			</div>
			<div class="gg-box pageWidth wrappedFlexContainer paddedSection colorGrid">
				<?php if( have_rows('pastel_colors') ): ?>
							<?php while( have_rows('pastel_colors') ): the_row();
							$imageID = get_sub_field('pastel_color_option')['ID'];
							echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
							endwhile;
						endif;
				?>
			</div>
			<div class="pageWidth centerText">
				<h2>Neutrals</h2>
			</div>
			<div class="gg-box pageWidth wrappedFlexContainer paddedSection colorGrid">
				<?php if( have_rows('neutral_colors') ): ?>
							<?php while( have_rows('neutral_colors') ): the_row();
							$imageID = get_sub_field('neutral_color_option')['ID'];
							echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
							endwhile;
						endif;
				?>
			</div>
			<div class="pageWidth centerText">
				<h2>Surface Options</h2>
			</div>
			<div class="gg-box pageWidth wrappedFlexContainer paddedSection colorGrid">
				<?php if( have_rows('surface_options') ): ?>
							<?php while( have_rows('surface_options') ): the_row();
							$imageID = get_sub_field('surface_options_textures')['ID'];
							echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
							endwhile;
						endif;
				?>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
