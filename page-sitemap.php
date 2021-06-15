<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main-content" class="site-main" role="main">
		<section class="paddedSection">
			<div class="pageWidth limitWidth">
			<h3>Pages</h3>
				<?php wp_list_pages(array('sort_column' => 'post_title', 'exclude' => '1057,1030,2183', 'title_li' => ' ', 'depth' => 0)); ?>
			</div>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
