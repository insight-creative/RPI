<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */
get_header();

?>
<div id="primary" class="content-area">
	<main id="contact" class="site-main">
		<section id ="contactContent">
			<div id="contactWrap">
				<div class="pageWidth flex-container">
					<div id="formWrap" class="col60">
						<div id="formWrapInner">
							<h1 class="noMargin">Let’s get Started</h1>
							<div class="underline"></div>
							<img src="http://q0o.1b4.myftpupload.com/wp-content/uploads/2019/10/final-product-on-forklift-low.jpg" class="image" alt="Group photo of the Fox Structures Team on Owners">
							<h2 class="noMargin">RPI, Inc.</h2>
							<div class="underline"></div>
							<p>
								3110 Market Street<br>
								Green Bay, WI 54304<br>
								Phone: <a class="plainLink" href="tel:920-330-9050">920-330-9050</a>
							</p>
							<hr>
							<p>
								High quality plastic lumber may be our main specialty, but our personalized customer service comes in close second. When you work with RPI, you’ll enjoy the rare experience of dealing directly with company owners and experts with decades of industry experience. Reach out to RPI today to get started!
							</p>
							<p>
								Please keep these ordering guidelines in mind when you contact us…
							</p>
							<ul>
								<li>Less than full skid items are sold in 12' lengths only and subject to availability.</li>
								<li>Custom length items are sold in full foot increments and full skids only.
								<li>Embossed Woodgrain surfaces are available at an additional charge.
								<li>Change Order or Repacking Fee Charges will apply to any changes made after original date of order.  Each change prior to shipping will be assessed separately.
								<li>Orders containing non-stock or limited production items require payment in full at time of order.
								<li>Non-stock and limited production items are non-returnable and non-refundable.
								<li>All shipments are F.O.B. Green Bay WI.
							</ul>
						</div>
					</div>
					<div class="col40 blockText">
						<div class="smallMapWrapper">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2847.451366228876!2d-88.08733868447571!3d44.4649199791019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8802fbfb8a12b047%3A0xa20843e8d5ac74bd!2sRecycled%20Plastics%20Industries!5e0!3m2!1sen!2sus!4v1570452574563!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div>
						<div class="formWrapper">
							<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
