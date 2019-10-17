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
				<div class="table-wrapper">
			    <table class="table">
		        <thead>
		        <tr>
	            <th>Profile</th>
	            <th>Actual Dimensions</th>
	            <th>Pounds per Foot</th>
		        </tr>
		        </thead>
		        <tbody>
						<tr>
	            <td>1 in. x 3 1/2 in.</td>
	            <td>1 in. x 3 1/2 in.</td>
	            <td>1.01 lbs</td>
		        </tr>
		        <tr>
	            <td>1 in. x 4 in.</td>
	            <td>3/4 in. x 3 1/2 in.</td>
	            <td>0.76 lbs</td>
		        </tr>
						<tr>
	            <td>1 in. x 5 1/2 in.</td>
	            <td>1 in. x 5 1/2 in.</td>
	            <td>1.6 lbs</td>
		        </tr>
						<tr>
	            <td>1 in. x 6 in.</td>
	            <td>3/4 in. x 5 1/2 in.</td>
	            <td>1.24 lbs</td>
		        </tr>
		        <tr>
	            <td>2 in. x 4 in.</td>
	            <td>1 1/2 in. x 3 1/2 in.</td>
	            <td>1.53 lbs</td>
		        </tr>
		        <tr>
	            <td>2 in. x 6 in.</td>
	            <td>1 1/2 in. x 5 1/2 in.</td>
	            <td>2.48 lbs</td>
		        </tr>
						<tr>
	            <td>2 in. x 10 in.</td>
	            <td>1 1/2 in. x 9 1/2 in.</td>
	            <td>4.14 lbs</td>
		        </tr>
		        <tr>
	            <td>4 in. x 4 in.</td>
	            <td>3 1/2 in. x 3 1/2 in.</td>
	            <td>3.56 lbs</td>
		        </tr>
		        <tbody>
			    </table>
				</div>
			</div>
			<div class="pageWidth limitWidth paddedSection">
				<h2>Limited Production Profiles</h2>
				<div class="table-wrapper">
			    <table class="table">
		        <thead>
		        <tr>
	            <th>Profile</th>
	            <th>Actual Dimensions</th>
	            <th>Pounds per Foot</th>
		        </tr>
		        </thead>
		        <tbody>
						<tr>
	            <td>1/2 in. x 1 1/2 in.</td>
	            <td>1/2 in. x 1 1/2 in.</td>
	            <td>0.24 lbs</td>
		        </tr>
		        <tr>
	            <td>1/2 in. x 2 1/2 in.</td>
	            <td>1/2 in. x 2 1/2 in.</td>
	            <td>0.36 lbs</td>
		        </tr>
						<tr>
	            <td>1/2 in. x 8 in.</td>
	            <td>1/2 in. x 8 in.</td>
	            <td>1.16 lbs</td>
		        </tr>
						<tr>
	            <td>1/2 in. x 9 1/2 in.</td>
	            <td>1/2 in. x 9 1/2 in.</td>
	            <td>1.38 lbs</td>
		        </tr>
		        <tr>
	            <td>3/4 in. x 2 1/4 in. Radius Top</td>
	            <td>3/4 in. x 2 1/4 in.</td>
	            <td>0.49 lbs</td>
		        </tr>
		        <tr>
	            <td>3/4 in. x 2 5/8 in.</td>
	            <td>3/4 in. x 2 5/8 in.</td>
	            <td>0.57 lbs</td>
		        </tr>
						<tr>
	            <td>1 in. x 4 in.</td>
	            <td>3/4 in. x 3 1/2 in.</td>
	            <td>0.76 lbs</td>
		        </tr>
		        <tr>
	            <td>1 in. x 10 in.</td>
	            <td>3/4 in. x 9 1/2 in.</td>
	            <td>2.07 lbs</td>
		        </tr>
						<tr>
	            <td>7/8 in. x 2 1/8 in.</td>
	            <td>7/8 in. x 2 1/8 in.</td>
	            <td>0.59 lbs</td>
		        </tr>
						<tr>
	            <td>7/8 in. x 2 7/8 in.</td>
	            <td>7/8 in. x 2 7/8 in.</td>
	            <td>0.73 lbs</td>
		        </tr>
						<tr>
	            <td>1 1/8 in. x 1 1/8 in.</td>
	            <td>1 1/8 in. x 1 1/8 in.</td>
	            <td>0.40 lbs</td>
		        </tr>
						<tr>
	            <td>1 1/8 in. x 2 1/8 in.</td>
	            <td>1 1/8 in. x 2 1/8 in.</td>
	            <td>0.76 lbs</td>
		        </tr>
						<tr>
	            <td>1 1/8 in. x 2 7/8 in.</td>
	            <td>1 1/8 in. x 2 7/8 in.</td>
	            <td>1.03 lbs</td>
		        </tr>
						<tr>
	            <td>1 in. x 6 in. T&G</td>
	            <td>3/4 in. x 6 in.</td>
	            <td>1.31 lbs</td>
		        </tr>
						<tr>
	            <td>Full 1 in. x 6 in. T&G</td>
	            <td>1 in. x 6 in.</td>
	            <td>1.75 lbs</td>
		        </tr>
						<tr>
	            <td>2 in. x 2 in.</td>
	            <td>1 1/2 in. x 1 1/2 in.</td>
	            <td>0.65 lbs</td>
		        </tr>
						<tr>
	            <td>2 in. x 3 in.</td>
	            <td>1 1/2 in. x 2 1/2 in.</td>
	            <td>1.10 lbs</td>
		        </tr>
						<tr>
	            <td>2 in. x 8 in.</td>
	            <td>1 1/2 in. x 7 1/2 in.</td>
	            <td>3.27 lbs</td>
		        </tr>
						<tr>
	            <td>2 in. x 12 in.</td>
	            <td>1 1/2 in. x 11 1/2 in.</td>
	            <td>5.02 lbs</td>
		        </tr>
						<tr>
	            <td>3 in. x 4 in.</td>
	            <td>2 1/2 in. x 3 1/2 in.</td>
	            <td>2.54 lbs</td>
		        </tr>
						<tr>
	            <td>3 in. x 4 in. Bull Nose</td>
	            <td>2 1/2 in. x 3 1/2 in.</td>
	            <td>2.30 lbs</td>
		        </tr>
						<tr>
	            <td>4 in. x 4 in.</td>
	            <td>3 1/2 in. x 3 1/2 in.</td>
	            <td>3.56 lbs</td>
		        </tr>
						<tr>
	            <td>6 in. x 6 in.</td>
	            <td>5 1/2 in. x 5 1/2 in.</td>
	            <td>8.80 lbs</td>
		        </tr>
		        <tbody>
			    </table>
				</div>
			</div>
			<div class="pageWidth limitWidth">
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
