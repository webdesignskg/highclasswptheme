<?php /* Template Name: Contact-Us */ ?>

<?php get_header(); ?>

<div class="full-width text-center featured-image-banner" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)) ?>')">
 <h1 class="blog-post-title"><?php the_title(); ?></h1>
</div>

    <?php if ( is_active_sidebar( 'full-width-above-content' ) ) : ?>
		<div id="page-full-width">
			<div class="container">
				<?php dynamic_sidebar( 'full-width-above-content' ); ?>
			</div>
		</div>
	<?php endif; ?>

    <?php if ( is_active_sidebar( 'row-box' ) ) : ?>
		<div id="row-boxes">
			<div class="container">
				<?php dynamic_sidebar( 'row-box' ); ?>
			</div>
		</div>
	<?php endif; ?>

 
<div class="container main-content">
    <div class="row">
	
<div class="col-sm-12 blog-main contact-main">
 
<?php 
 if ( have_posts() ) { 
 while ( have_posts() ) : the_post();
 ?>
 <div class="contact-page">
 <?php the_content(); ?>
 </div>
 <?php
 endwhile;
 } 
 ?>
 
</div><!-- /.blog-main -->


    <?php if ( is_active_sidebar( 'contact-sidebar' ) ) { dynamic_sidebar( 'contact-sidebar' ); } ?>
	
</div><!-- /.row -->

</div><!-- /.container -->

<div class="full-width text-center contact-banner">
    <?php if ( is_active_sidebar( 'contact-map-code' ) ) : ?>
				<?php dynamic_sidebar( 'contact-map-code' ); ?>
	<?php endif; ?>
</div>

    <?php if ( is_active_sidebar( 'below-content-full-width' ) ) : ?>
		<div id="below-content-full-width">
			<div class="full-width container">
				<?php dynamic_sidebar( 'below-content-full-width' ); ?>
			</div>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>