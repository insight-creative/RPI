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
				<h2>Available in Full Skid Quantities</h2>
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
	            <td>1  x 3 1/2</td>
	            <td>1  x 3 1/2</td>
	            <td>1.01 lbs</td>
		        </tr>
		        <tr>
	            <td>1  x 4</td>
	            <td>3/4  x 3 1/2</td>
	            <td>0.76 lbs</td>
		        </tr>
						<tr>
	            <td>1  x 5 1/2</td>
	            <td>1  x 5 1/2</td>
	            <td>1.6 lbs</td>
		        </tr>
						<tr>
	            <td>1  x 6</td>
	            <td>3/4  x 5 1/2</td>
	            <td>1.24 lbs</td>
		        </tr>
		        <tr>
	            <td>2  x 4</td>
	            <td>1 1/2  x 3 1/2</td>
	            <td>1.53 lbs</td>
		        </tr>
		        <tr>
	            <td>2  x 6</td>
	            <td>1 1/2  x 5 1/2</td>
	            <td>2.48 lbs</td>
		        </tr>
						<tr>
	            <td>2  x 10</td>
	            <td>1 1/2  x 9 1/2</td>
	            <td>4.14 lbs</td>
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
	            <td>1/2  x 1 1/2</td>
	            <td>1/2  x 1 1/2</td>
	            <td>0.24 lbs</td>
		        </tr>
		        <tr>
	            <td>1/2  x 2 1/2</td>
	            <td>1/2  x 2 1/2</td>
	            <td>0.36 lbs</td>
		        </tr>
						<tr>
	            <td>1/2  x 8</td>
	            <td>1/2  x 8</td>
	            <td>1.16 lbs</td>
		        </tr>
						<tr>
	            <td>1/2  x 9 1/2</td>
	            <td>1/2  x 9 1/2</td>
	            <td>1.38 lbs</td>
		        </tr>
						<tr>
							<td>1/2  x 12 1/8</td>
							<td>1/2  x 12 1/8</td>
							<td></td>
						</tr>
		        <tr>
	            <td>3/4  x 2 1/4 Radius Top</td>
	            <td>3/4  x 2 1/4</td>
	            <td>0.49 lbs</td>
		        </tr>
		        <tr>
	            <td>3/4  x 2 5/8</td>
	            <td>3/4  x 2 5/8</td>
	            <td>0.57 lbs</td>
		        </tr>
		        <tr>
	            <td>1  x 10</td>
	            <td>3/4  x 9 1/2</td>
	            <td>2.07 lbs</td>
		        </tr>
						<tr>
	            <td>7/8  x 2 1/8</td>
	            <td>7/8  x 2 1/8</td>
	            <td>0.59 lbs</td>
		        </tr>
						<tr>
	            <td>7/8  x 2 7/8</td>
	            <td>7/8  x 2 7/8</td>
	            <td>0.73 lbs</td>
		        </tr>
						<tr>
	            <td>1 1/8  x 1 1/8</td>
	            <td>1 1/8  x 1 1/8</td>
	            <td>0.40 lbs</td>
		        </tr>
						<tr>
	            <td>1 1/8  x 2 1/8</td>
	            <td>1 1/8  x 2 1/8</td>
	            <td>0.76 lbs</td>
		        </tr>
						<tr>
	            <td>1 1/8  x 2 7/8</td>
	            <td>1 1/8  x 2 7/8</td>
	            <td>1.03 lbs</td>
		        </tr>
						<tr>
	            <td>1  x 6 T&G</td>
	            <td>3/4  x 6</td>
	            <td>1.31 lbs</td>
		        </tr>
						<tr>
	            <td>Full 1  x 6 T&G</td>
	            <td>1  x 6</td>
	            <td>1.75 lbs</td>
		        </tr>
						<tr>
	            <td>2  x 2</td>
	            <td>1 1/2  x 1 1/2</td>
	            <td>0.65 lbs</td>
		        </tr>
						<tr>
	            <td>2  x 3</td>
	            <td>1 1/2  x 2 1/2</td>
	            <td>1.10 lbs</td>
		        </tr>
						<tr>
	            <td>2  x 8</td>
	            <td>1 1/2  x 7 1/2</td>
	            <td>3.27 lbs</td>
		        </tr>
						<tr>
	            <td>2  x 12</td>
	            <td>1 1/2  x 11 1/2</td>
	            <td>5.02 lbs</td>
		        </tr>
						<tr>
	            <td>3  x 4</td>
	            <td>2 1/2  x 3 1/2</td>
	            <td>2.54 lbs</td>
		        </tr>
						<tr>
	            <td>3  x 4 Bull Nose</td>
	            <td>2 1/2  x 3 1/2</td>
	            <td>2.30 lbs</td>
		        </tr>
						<tr>
	            <td>4  x 4</td>
	            <td>3 1/2  x 3 1/2</td>
	            <td>3.56 lbs</td>
		        </tr>
						<tr>
	            <td>6  x 6</td>
	            <td>5 1/2  x 5 1/2</td>
	            <td>8.80 lbs</td>
		        </tr>
		        <tbody>
			    </table>
				</div>
			</div>
			<div class="pageWidth limitWidth">
				<?php the_field('closing_copy'); ?>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
