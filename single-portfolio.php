<?php get_header(); ?>
<div class="full-width text-center featured-image-banner" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)) ?>')">
 <h1 class="blog-post-title"><?php the_title(); ?></h1>
</div>
 
<div class="single-post container main-content">
    <div class="row">
<div class="portfolio-main col-lg-8">
	<div class="container">
 <?php 
 if ( have_posts() ) { 
 while ( have_posts() ) : the_post();
 ?>
 <h2>Project Description</h2>
 <?php the_content(); ?>
 <?php
 endwhile;
 } 
 ?>
	</div>
</div><!-- /.blog-main -->
		
    <?php if ( is_active_sidebar( 'portfolio-sidebar' ) ) : ?>
		<div class="col-lg-3 col-sm-offset-1 blog-sidebar portfolio-sidebar col-md-12">
 			<!--  <div class="widget sidebar-module">
					<?php echo esc_attr( get_post_meta( get_the_ID(), 'location', true ) ); ?>
			</div> -->
			<?php dynamic_sidebar( 'portfolio-sidebar' ); ?>
			</div><!-- /.blog-sidebar -->
	<?php endif; ?>

</div><!-- /.row -->

</div><!-- /.container -->

    <?php if ( is_active_sidebar( 'below-content-full-width' ) ) : ?>
		<div id="below-content-full-width">
			<div class="full-width">
				<?php dynamic_sidebar( 'below-content-full-width' ); ?>
			</div>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>