<?php /* Template Name: Services */ ?>

<?php get_header(); ?>
<div class="full-width text-center featured-image-banner" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)) ?>')">
 <h1 class="blog-post-title"><?php the_title(); ?></h1>
</div>
 
<div class="container main-content">
    <div class="row">
		<div class="col-md-6 col-sm-12 blog-main">
			<?php 
				if ( have_posts() ) { 
				while ( have_posts() ) : the_post();
			?>
				<div class="page-content">
					<?php the_content(); ?>
				</div>
			<?php
			endwhile;
			} 
			?>
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
<?php
 $query = new WP_Query( array('post_type' => 'services','posts_per_page' => -1 ) );
 while ( $query->have_posts() ) : $query->the_post(); ?>
	<div class="services-box col-md-6 col-lg-6 animated fadeInUp">
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