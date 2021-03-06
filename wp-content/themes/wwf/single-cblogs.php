<?php
/**
 * The template for displaying all pages, single posts and attachments
 *
 * This is a new template file that WordPress introduced in
 * version 4.3.
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	
			
			<!-- main post content -->
			<div class="header-main-cont">
			<div id="cblogs-content" class="container-fluid clr">
				  <div class="row" id="cblogs-header">
					<div class="col-sm-6 cblogs-header-right" style="padding: 0;">
					  <div class="cont-image">
					  <?php if( get_field('post_header_image') ): ?>
						<img src="<?php echo the_field('post_header_image'); ?>" />
					<?php endif; ?>
							
						</div>
					</div>
					<div class="col-sm-6 cblogs-header-left" style="padding: 0 0 0 3em;">
					  <div class="flex-display">
							<div class="cont-text">
								<div class="breadcrumbs">
									<?php echo do_shortcode('[oceanwp_breadcrumb]'); ?>
								</div>
								<div class="cont-heading">
										<?php $header_text = get_field('header_heading')?>
										<h1><?php echo $header_text; ?></h1>
										
								<p class="date"><?php echo the_date('F j, Y'); ?></p>
								
								<div class="keywords"><p>KEYWORDS	</p>
								<ul>
									<li><a href="#">threatened species</a></li>
									<li><a href="#">snow leopards</a></li>
								</ul>
								</div>
								</div>
							</div>
						</div>
					</div>

				  </div>
			</div>
					
				
			</div>
			
		</div><!-- #primary -->
		<div class="cblog-main-cont">
			<div class="container">
				<div class="row">
				<?php
				$hero = get_field('blog-post-content');
				print_r($hero);
				
				if( $hero ): ?>
					<div class="post-main-content">
						<div class="sub-main-title">
							<p><?php echo get_field('sub-heading'); ?></p>
						</div>
						<div class="post-heading-01">
							<p><?php echo get_field('main-heading'); ?></p>
						</div>
						<div class="cblog-content">
							<p><?php echo get_field('main-content'); ?></p>
						</div>
					</div>
				</div>
				<div class="relatedPostHeading">
					<h3 class="text-center">Recommended reading</h3>
				
				<?php example_cats_related_post() ?>
				
				</div>
			</div>
		</div>
		<?php endif; ?>
<?php get_footer(); ?>
