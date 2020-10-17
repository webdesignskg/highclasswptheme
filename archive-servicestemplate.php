<?php /* Template Name: Services */ ?>

<?php get_header(); ?>
<div class="full-width text-center featured-image-banner" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)) ?>')">
 <h1 class="blog-post-title">Services</h1>
</div>
 
<div class="container main-content service-intro">
    <div class="row">
		<div class="col-md-6 col-sm-12 blog-main">

				<div class="page-content">
					<h2>About Our Process</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis. </p>
				</div>

		</div><!-- /.blog-main -->
		<div class="col-md-5 col-sm-12 services-image-right col-lg-offset-1">
			<?php if ( is_active_sidebar( 'services-content-image' ) ) : ?>
					<?php dynamic_sidebar( 'services-content-image' ); ?>
			<?php endif; ?>
		</div>
	</div><!-- /.row -->
</div><!-- /.container -->


<div class="services-container row">
	<div class="container">
   			<div class="services-heading">
  				<h2>Included with High Class</h2>
				<p>
					Consectetur adipisicing elit, ut labo reet dolore magna aliqua.
Praesent dapibus distigular paterns.
				</p>
			</div>
	<div class="service-boxes-div">
<?php
 $query = new WP_Query( array('post_type' => 'services','posts_per_page' => -1 ) );
 while ( $query->have_posts() ) : $query->the_post(); ?>
	<div class="services-box col-sm-12 col-md-6 col-lg-4 animated fadeInUp">
		<div class="services-image">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="service-info-container">
			<div class="services-box-title">
				<a href="<?php the_permalink();?>">
					<?php the_title(); ?>
				</a>
			</div>
			<div class="services-content">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>
</div>
</div>
</div>
			
			
    <?php if ( is_active_sidebar( 'service-widget-one' ) ) : ?>
		<div class="row service-widget-one-row">
			<div class="container">
				<?php dynamic_sidebar( 'service-widget-one' ); ?>
			</div>
		</div>
	<?php endif; ?>
	
    <?php if ( is_active_sidebar( 'service-widget-two' ) ) : ?>
		<div class="row service-widget-two-row">
			<div class="container">
				<?php dynamic_sidebar( 'service-widget-two' ); ?>
			</div>
		</div>
	<?php endif; ?>


    <?php if ( is_active_sidebar( 'service-full-width' ) ) : ?>
		<div id="page-full-width">
			<div class="container">
				<?php dynamic_sidebar( 'service-full-width' ); ?>
			</div>
		</div>
	<?php endif; ?>
	
<?php get_footer(); ?>